var loadingData = {};
if (typeof jQuery === 'undefined') { throw new Error('CRM\'s JavaScript requires jQuery') }

!function ($) {
	'use strict';

	// CRM GRID CLASS DEFINITION
	// ==============================

	var Grid = function (element, options) {
		this.$element     = $(element)
		this.tableBody    = this.$element.find('tbody')
		this.loadingLine  = this.$element.find('.loading-tr')
		this.loadingModal = $('#loadingModal')
		this.options      = $.extend({}, Grid.DEFAULTS, options)

		if(this.options.filter) {
			this.filter = $('#filter')
		}

	}

	Grid.DEFAULTS = {
		  gridName:     null
		, gridTemplate: null
		, clear:        true
		, is_report:    false
		, paging:       false
		, filter:       false
		, debug:        false
		, load:         true
	}

	Grid.prototype.load = function (_relatedTarget) {
		var that = this
		var e    = $.Event('load.crm.grid', { relatedTarget: _relatedTarget })

		that.$element.trigger(e)

		if (that.isShown || e.isDefaultPrevented()) return

		that.isShown = true

		if(that.debug)
			console.log('gridTemplate', that.options.gridTemplate);

		var $gridTemplate = $(that.options.gridTemplate)
		var gridName = that.options.gridName

		if(that.tableBody != 'undefined')
		{
			$.ajax({
				type: 'GET',
				dataType: 'json',
				url: that.options.remote,
				data: loadingData,
				beforeSend: function() {
					if(that.options.paging && ! that.options.clear)
					{
						that.loadingModal.modal('show');
					}
					else
					{
						that.loadingLine.removeClass('sr-only');
					}

					if(that.options.clear)
						$.each(that.tableBody.find('tr'), function(){
							if(!$(this).hasClass('loading-tr'))
								$(this).remove();
						});
				},
				success: function(response) {
					if(response.redirect)
						window.location.href = response.redirect;

					if(that.options.paging)
					{
						$.each(that.tableBody.find('tr'), function(){
							if(!$(this).hasClass('loading-tr'))
								$(this).remove();
						});
					}

					var templateData = {};

					if(that.debug)
						console.log('response.data', response.data);

					if(typeof response.data != 'undefined')
					{
						that.loadingLine.before($gridTemplate.render(response));
						that.loadingLine.addClass('sr-only');

						extraDataInit();
					}

					if(that.options.paging)
					{
						that.loadingModal.modal('hide');
						that.pagination(_relatedTarget, response.pagination);
					}

					if(that.options.filter)
						that.filterInit(_relatedTarget);

					that.scrollAndHighlight();

					var e = $.Event('loaded.crm.grid', { relatedTarget: _relatedTarget })

					that.$element.trigger(e, response);
				},
				error: function(){
					that.loadingLine.addClass('sr-only');
					showGrowl('danger', 'Ошибка загрузки <strong>'+gridName+'</strong>! Обратитесь, пожалуйста, к администратору.');
				}
			});
		}
	}

	/**
	 * Скролл до объекта и подсвечивание строки его нахождения
	 *
	 * @param timeout
	 * @param closeModals
	 */
	Grid.prototype.scrollAndHighlight = function(timeout, closeModals) {

		var hash              = window.location.hash
		  , hashArr         = hash.match(/\#(\D*)_(\d*)_(\d*)(\w*)/)
		  , highlightObject = (hashArr == null || hashArr[4] != '_success') ? $(hash) : $('#'+hashArr[1]+'_'+hashArr[2]+'_'+hashArr[3])
		  , className       = 'info'
		  , objectType      = (hashArr == null) ? null : hashArr[1]
		;

		closeModals = closeModals || false;

		if(closeModals)
			$('.modal').modal('hide');

		if(!hash || !$(highlightObject).length)
		{
			return;
		}

		$.smoothScroll({
			               offset: -80,
			               scrollTarget: hash
		               });

		if($(hash).is("input"))
		{
			$(hash).focus();
			highlightObject = $(hash).parent().parent();
			className       = 'error';
		}

		if(objectType == 'event' && hashArr[4] == '_success')
		{
			var clientId = hashArr[2]
				, eventId  = hashArr[3]
				;
			$('#eventCloseModal').modal({remote:'/ajax/event/close_body/client/'+clientId+'/'+eventId+'?result=done'});
		}

		highlightObject.addClass(className);

		// если таймаут не указан, то просто очищаем сообщения
		timeout = timeout || 3000;
		window.setTimeout(function() {
			highlightObject.removeClass(className);
		}, timeout);
	}

	Grid.prototype.filterInit = function(_relatedTarget) {
		var that = this

		if (that.filterIsShown) return

		if(that.options.filter)
		{
			that.filterIsShown = true

			var filterInputs  = that.filter.find('input')
			  , filterSelects = that.filter.find('select');

			filterSelects.on('change', function(){
				that.filterChange(_relatedTarget, this);
			});

			filterInputs.on('change', function(){
				if($(this).hasClass('datepicker'))
				{
					that.filterChange(_relatedTarget, this);
					return false;
				}
			});

			filterInputs.keydown(function(e){
				if(e.keyCode == 13)
				{
					e.preventDefault();
					that.filterChange(_relatedTarget, this);
					return false;
				}
			});

			filterForm.on('submit', function(e){
				e.preventDefault();
				that.filterChange(_relatedTarget, this);
				return false;
			});
		}

		if(that.options.paging)
		{
			$('.resultsNum').find('select').on('change', function(){
				var input_name        = $(this).attr('name')
				  , input_value       = $(this).val()
				  , table_name        = $('#filter').parent().find('table').attr('id')
				  , table_name_single = table_name.substring(0, table_name.length - 1)
				;

				loadingData['page']     = 1;
				loadingData[input_name] = input_value;

				if(that.options.is_report)
					that.callback = function(data) {update_itogo(table_name_single, data)};

				that.reload(_relatedTarget);
			});
		}
	}
	/**
	 * @todo вытащить отсюда штуки с обновлением сумм
	 * @param filterElement
	 */
	Grid.prototype.filterChange = function(_relatedTarget, filterElement) {
		var input_name            = $(filterElement).attr('name')
		  , input_value           = $(filterElement).val()
		  , table_name            = $('#filter').parent().find('table').attr('id')
		;

		loadingData['page']     = 1;
		loadingData[input_name] = input_value;

		this.reload(_relatedTarget, true)
	}

	Grid.prototype.pagination = function(_relatedTarget, paginationData) {
		var that   = this
		var pagination = that.$element.parent().parent().find('.paging')

		pagination.empty();
//		pagination.append($('#paginationTemplate').render(paginationData));
		pagination.append(paginationData);

		pagination.find('.pagination_limit').val(paginationData.pagination_limit);

		pagination.find('a').on('click', function(e){
			e.preventDefault();
			loadingData['page'] = $(this).data('page');
			that.reload(_relatedTarget)
		});

		pagination.find('.pagination_limit').on('change', function(){
			loadingData['pagination_limit'] = $(this).val();
			that.reload(_relatedTarget)
		})
	}

	Grid.prototype.reload = function (_relatedTarget, clear) {
		clear = clear || false;
		this.options.clear = clear;
		this.isShown = false
		this.load(_relatedTarget)
	}


	// CRM GRID PLUGIN DEFINITION
	// ========================

	var old = $.fn.grid

	$.fn.grid = function (option, _relatedTarget) {
		return this.each(function () {
			var $this   = $(this)
			var data    = $this.data('crm.grid')
			var options = $.extend({}, Grid.DEFAULTS, $this.data(), typeof option == 'object' && option)

			if (!data) $this.data('crm.grid', (data = new Grid(this, options)))

			if (typeof option == 'string') data[option](_relatedTarget, true)
			else if (options.load) data.load(_relatedTarget)
		})
	}

	$.fn.grid.Constructor = Grid


	// CRM GRID NO CONFLICT
	// ==================

	$.fn.grid.noConflict = function () {
		$.fn.grid = old
		return this
	}


	// CRM GRID DATA-API
	// ===============

	$(window).on('load', function () {
		$('[data-ride="grid"]').each(function () {
			var $grid = $(this)
			$grid.grid($grid.data())
		})
	})

}(jQuery);