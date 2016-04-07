// Important line
"use strict";
window.isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var _navigator    = navigator.userAgent.toLowerCase()
    , widgetSteps = {
    stepOne:   {
        airport_from:   null,
        airport_to:     null,
        passengers:     null,
        departure_date: null,
        departure_time: null
    },
    stepTwo:   {},
    stepThree: {
        classes: [],
        makers:  [],
        tails:   {},
        page:    1
    }
}
    , xhr;
window.is_safari = ( _navigator.indexOf('safari') != -1 && _navigator.indexOf('chrome') == -1 );
window.is_firefox = _navigator.indexOf('firefox') > -1;
window.is_ie = _navigator.indexOf('msie') > -1;
// SETTINGS
window.parallax_enabled = true; // Turn on/off "Parallax Effect"
window.preloader_enabled = true; // Turn on/off "Preloader"
window.scrollTo(0, 0);
$.views.helpers(
    {
        currency: function(value) { return (value) ? value.toLowerCase() : null},
        btnState: function(jet_tail_number) {
            if(typeof(widgetSteps.stepThree.tails[jet_tail_number]) != 'undefined') {
                return 'active';
            }
            return null;
        }
    }
);
(function($) {

    // All jQuery scripts must be here
    var $window = $(window);
    window.windowWidth = 0;
    window.windowHeight = 0;
    window.addEventListener('DOMContentLoaded', function() {
        // TOUCH-DEVICES ON READY TOO
        $('body').queryLoader2({onLoadComplete: on_load});
    });
    $(document).ready(function() {
        // ON DOM READY
        $.ajaxSetup({
            error: function(response) {
                var responseJSON = response.responseJSON;
                if(typeof responseJSON != 'undefined') {
                    showGrowl('danger', responseJSON.message);
                }
                $('.saveBtn').button('reset');
                $('#loadingModal').modal('hide')
            }
        });
        init(['countdown', 'twitter']);
        window.exist_header = $('body > header').length > 0;
        window.exist_newsletter = $('#newsletter').length > 0;
        window.first_page_height = $('body > .page:first').height();
        window.lastScreen = $(document).height() - $(window).height();
        if(true == isMobile) {
            // Disable parallax for touch devices
            window.parallax_enabled = false;
        }
        // Init patterns
        $('.pattern').each(function() {
            var $this = $(this);
            if(true == $this.hasClass('color-layout')) {
                var color = $this.data('color');
                $this.css({backgroundColor: color});
            }
        });
        // Init Parallax
        if(true == window.parallax_enabled) {
            $.stellar({
                responsive:          true,
                horizontalScrolling: false,
                hideDistantElements: false,
                positionProperty:    'transform'
            });
        }
        // Fonts fix
        if(true == is_safari) {
            $('body').addClass('fontfix');
        }
        // Enable Video
        if(true == $('#home').data('video')) {
            var video_params = $('#home').data();
            $('#home > .content').okvideo({
                video:  video_params.url,
                volume: video_params.volume,
                loop:   video_params.loop
            });
        }
        // Placeholder fix
        $('input, textarea').placeholder();
        $('div.modal').on('loaded.bs.modal', function(e) {
            if($(this).data('form')) {
                saveAjaxForm($(this), true);
            }
        });
        extraDataInit();
        $('#departure_date').on('change', function(e) {
            widgetStepsValidation('stepOne', 'departure_date', $(this).val());
        });
        $('#departure_time').on('change', function() {
            widgetStepsValidation('stepOne', 'departure_time', $(this).val());
        });
        $('#setOrder').on('click', function(e) {
            e.preventDefault();
            var url           = $(this).data('url')
                , requestData = {
                    airport_from:     widgetSteps.stepOne.airport_from
                    , airport_to:     widgetSteps.stepOne.airport_to
                    , departure_date: widgetSteps.stepOne.departure_date
                    , departure_time: widgetSteps.stepOne.departure_time
                    , passengers:     widgetSteps.stepOne.passengers
                }
                ;
            //console.log(requestData)
            $.ajax({
                url:        url,
                data:       requestData,
                dataType:   'json',
                type:       'POST',
                beforeSend: function() {$('#loadingModal').modal('show')},
                success:    function(response) {
                    if(response.data.url) {
                        $('#contactsModal').modal({
                            remote: response.data.url
                        });
                    }
                    $('#loadingModal').modal('hide');
                    var orderForm = $('#orderForm');
                    orderForm.find("input[type=text]").val("");
                    orderForm.find("select").select2("val", "");
                    orderForm.find("input[type=text]").select2("val", "");
                }
            })
        });
        if($('#orderSendUpdate').length) {
            saveAjaxForm($('#orderSendUpdate'), false, true);
        }
        if($('#orderDelete').length) {
            saveAjaxForm($('#orderDelete'), false, true);
        }
        //		$('.datepicker').datepicker();
        $('#partners').scrollbox();
    });
    $(window).on({
        resize: on_resize,
        scroll: on_scroll
    }).scrollStopped(on_scroll_end);
    function init(objs) {
        $.each(objs, function(index, obj_name) {
            if('object' == typeof window[obj_name]) {
                window[obj_name].init();
            }
        });
    }

    function on_load() {
        $('#preloader .wrapper').animate({opacity: 0}, function() {
            if(false == isMobile) {

                // Show homepage
                $('#home')
                    .css({opacity: 0, scale: 0.7})
                    .transition({opacity: 1, scale: 1}, 1000, 'easeOutQuint');
                // Show countdown
                $('#countdown > div').each(function(k) {
                    $(this)
                        .css({top: -100, opacity: 0})
                        .transition({top: 0, opacity: 1, delay: k * 100}, 1300, 'easeOutQuint');
                });
                // Show header
                $('body > header')
                    .css({top: -$('body > header').height(), opacity: 0})
                    .transition({top: 0, opacity: 1}, 1000, 'easeOutQuint');
            }
            // Hide preloader
            $('#preloader .half').transition({width: 0}, 800, 'easeOutQuint', function() {
                $('#preloader').hide();
                // Fix footer
                $('body > footer').css({zIndex: 2});
            });
        });
        // FOOTER
        var $footer_sections = $('body > footer section');
        var footer_align = function() {
            if($footer_sections.length > 0 && windowWidth > 480) {
                $footer_sections
                    .css({left: '100%', opacity: 0})
                    .first().removeAttr('style');
                if($('#last-section').length > 0) {
                    $('#last-section nav li:first-child a').trigger('click');
                }
            } else {
                $footer_sections.removeAttr('style');
            }
        }
        $(window).resize(function() {
            window.lastScreen = $(document).height() - $(window).height();
            footer_align();
        }).resize();
    }

    function on_resize() {
        var windowWidth  = $(window).width(),
            windowHeight = $(window).height();
        window.lastScreen = $(document).height() - $(window).height();
        align_triangle();
    }

    function on_scroll() {
        window.scroll_now = $window.scrollTop();
        // Show dark header
        if(true == exist_header) {
            var $header      = $('body > header'),
                headerHeight = $header.height();
            if(scroll_now >= first_page_height - headerHeight - 70) {
                if(false == $header.hasClass('done')) {
                    $header
                        .css({marginTop: -headerHeight})
                        .addClass('dark done')
                        .stop(true, true)
                        .transition({marginTop: 0});
                }
            } else {
                if(true == $header.hasClass('done')) {
                    $header
                        .removeClass('done')
                        .stop(true, true)
                        .transition({marginTop: -headerHeight}, function() {
                            $(this)
                                .removeClass('done')
                                .stop(true, true)
                                .transition({marginTop: 0})
                                .removeClass('dark');
                        });
                }
            }
        }
        // Horizontal Parallax
        if(true == exist_newsletter && true == parallax_enabled) {
            $('#newsletter').css({backgroundPosition: scroll_now * 0.15 + 'px 0'});
        }
    }

    function on_scroll_end() {
        $('.page').each(function() {
            var $this = $(this);
            if(scroll_now > $this.offset().top - 175) {
                var id = $this.attr('id'),
                    $a = $('header nav > ul > li a[href="#' + id + '"]');
                if($a.length > 0) {
                    $a.parents('ul').find('a').removeClass('current');
                    $a.addClass('current');
                }
            }
        });
        if(scroll_now > lastScreen - 30) {
            $('body > header nav ul > li a')
                .removeClass('current')
                .parent()
                .last()
                .find('a')
                .addClass('current');
        }
    }

    // GO TO
    function goto_about(e) {
        e.preventDefault();
        if($('#about').length > 0) {
            var header_height = 0;
            if(true == exist_header && windowWidth > 480) {
                header_height = $('body > header').height() * 1.5;
            }
            var about_top = $('#about').offset().top - header_height;
            $('html, body').animate({scrollTop: about_top}, 1000, 'easeInOutQuint');
        }
    }

    function goto_subscribe(e) {
        e.preventDefault();
        if($('#subscribe').length > 0) {
            if($('#last-section nav').length > 0) {
                $('#last-section nav a[data-page="subscribe"]').trigger('click');
            }
            var page_height = ( windowWidth <= 480) ? $('#subscribe').offset().top : $(document).height();
            $('html, body').animate({scrollTop: page_height}, 1500, 'easeInOutCubic', function() {
                $('#subscribe input[name="email"]').focus();
            });
        }
    }

    //  HEADER NAVIGATION (ON CLICK)
    function page_nav(e) {
        e.preventDefault();
        var $this     = $(this),
            id        = $this.attr('href'),
            offsetTop = $(id).offset().top;
        if(true == exist_header) {
            offsetTop -= $('body > header').height() * 1.5;
        }
        $('html, body').animate({scrollTop: offsetTop}, 700);
        $this.parents('ul').find('a').removeClass('current');
        $this.addClass('current');
    }

    // LAST SECTION NAVIGATION (ON CLICK)
    function last_section_nav(e) {
        e.preventDefault();
        var $this   = $(this),
            prev_id = '#' + $this.parents('ul').find('.current').data('page');
        if($this.hasClass('current')) {
            return false;
        }
        $this.parents('ul').find('a').removeClass('current');
        $this.addClass('current');
        // Move triangle
        align_triangle();
        // Move block
        var id = '#' + $this.data('page');
        if($(id).index() > $(prev_id).index()) {
            // Forward
            $(prev_id).transition({left: -$(prev_id).width(), opacity: 0});
            $(id).css({left: '100%'}).transition({left: 0, opacity: 1});
        } else {
            // Back
            $(prev_id).transition({left: '100%', opacity: 0});
            $(id).css({left: -$(id).width()}).transition({left: 0, opacity: 1});
        }
    }

    // TRIANGLE ALIGNMENT
    function align_triangle() {
        var $triangle            = $('#last-section .triangle'),
            last_section_display = $('#last-section').css('display');
        if($triangle.length > 0 && last_section_display != 'none') {
            var $li_first = $('#last-section nav a.current').parent();
            if($li_first.length < 1) {
                $li_first = $('#last-section nav a:first-child').parent();
            }
            var triangle_left = $li_first.offset().left + $li_first.width() / 2 - 30;
            $triangle.stop(true, true).transition({left: triangle_left});
        }
    }

    // Send subscribe
    function send_subscribe(e) {
        e.preventDefault();
        var $form = $(this);
        if($form.hasClass('sent')) {
            return false;
        }
        $form.addClass('sent').transition({opacity: 0.5})
            .find('button').css({cursor: 'default'});
        $.ajax({
            url:      $form.attr('action'),
            type:     $form.attr('method'),
            data:     $form.serialize(),
            dataType: 'json',
            success:  function(response) {
                var $status = $form.find('.status'),
                    text    = $status.data('error'),
                    inputH  = $form.height();
                if(200 == response.status) {
                    text = response.message[0].text;
                    $form.find('input[type=email]').val("");
                } else {
                    text = response.message[0].text.email;
                }
                $form.removeClass('sent').transition({opacity: 1})
                    .find('button').css({cursor: 'pointer'});
                $status.height(inputH).text(text);
                $form.find('input, button').transition({marginTop: -inputH});
                setTimeout(function() {
                    $form.find('input, button').transition({marginTop: 0});
                }, 2000);
            }
            , error:  function(request, status, error) {
                var response = $.parseJSON(request.responseText),
                    $status  = $form.find('.status'),
                    text     = $status.data('error'),
                    inputH   = $form.height()
                    ;
                text = response.message[0].text;
                $form.removeClass('sent').transition({opacity: 1})
                    .find('button').css({cursor: 'pointer'});
                $status.height(inputH).text(text);
                $form.find('input, button').transition({marginTop: -inputH});
                setTimeout(function() {
                    $form.find('input, button').transition({marginTop: 0});
                }, 2000);
            }
        })
    }

    // Send feedback
    function send_feedback(e) {
        e.preventDefault();
        var $form = $(this);
        if($form.hasClass('sent')) {
            return false;
        }
        $form.addClass('sent').transition({opacity: 0.5})
            .find('input[type="submit"]').css({cursor: 'default'});
        $.ajax({
            url:     $form.attr('action'),
            type:    $form.attr('method'),
            data:    $form.serialize(),
            success: function(response) {
                var $status = $form.find('.status'),
                    text    = $status.data('error');
                if(1 == response) {
                    text = $status.data('success');
                    $form.find('input[type=text], input[type=email], textarea').val("");
                }
                $status.css({opacity: 0}).text(text)
                    .transition({opacity: 1});
                $form.removeClass('sent').transition({opacity: 1})
                    .find('input[type="submit"]').css({cursor: 'pointer'});
                setTimeout(function() {
                    $status.transition({opacity: 0});
                }, 2000);
            }
        })
    }

    // BINDS
    $(document)
        .on('click', '#home .learn-more', goto_about)
        .on('click', '#newsletter a.btn', goto_subscribe)
        .on('click', 'body > header nav li > a', page_nav)
        .on('click', '#last-section nav a', last_section_nav)
        .on('submit', '#subscribe form', send_subscribe)
        .on('submit', '#feedback form', send_feedback)
    //		.on('click', '#last-section nav a[data-page="contacts"]', map_init)
    $('.scrollmenu, .to-order').find('a').on('click', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $.smoothScroll(
            {
                offset:         -50,
                // one of 'top' or 'left'
                direction:      'top',
                // only use if you want to override default behavior
                scrollTarget:   target,
                // fn(opts) function to be called before scrolling occurs.
                // `this` is the element(s) being scrolled
                //				beforeScroll: function() {},
                // fn(opts) function to be called after scrolling occurs.
                // `this` is the triggering element
                //				afterScroll: function() {},
                easing:         'easeInOutCubic',
                speed:          1000,
                // coefficient for "auto" speed
                autoCoefficent: 2,
                // $.fn.smoothScroll only: whether to prevent the default click action
                preventDefault: true
            });
    });
})(jQuery);
function prepareModal(modal, loaded_callback, hidden_callback) {
    loaded_callback = loaded_callback || false;
    hidden_callback = hidden_callback || false;
    extraDataInit(modal, loaded_callback);
    modal.on('hidden.bs.modal', function() {
        clearModalBody($(this));
        if(hidden_callback) {
            hidden_callback();
        }
    });
}
function saveAjaxForm(modalObject, isModal, growlMessages, callback, needModalPrepare) {
    var saveBtn = modalObject.find('.saveBtn');
    isModal = isModal || false;
    growlMessages = growlMessages || false;
    callback = callback || false;
    needModalPrepare = needModalPrepare || true;
    var formObject = (isModal) ? modalObject.find('form') : modalObject;
    if(isModal && needModalPrepare) {
        prepareModal(modalObject);
    }
    formObject.ajaxForm({
        dataType:   'json',
        beforeSend: function() {
            modalObject.find('.errors').remove();
            modalObject.find('.has-error').removeClass('has-error');
            saveBtn.button('loading');
        },
        success:    function(response, status) {
            if(response.status == 200) {
                if(response.redirect) {
                    window.location.href = response.redirect;
                }
                if(response.refresh) {
                    if(response.refresh.grid) {
                        if(typeof response.refresh.grid == 'string') {
                            $(response.refresh.grid).grid('reload')
                        }
                        else {
                            for(var i in response.refresh.grid) {
                                if(response.refresh.grid.hasOwnProperty(i)) {
                                    $(response.refresh.grid[i]).grid('reload')
                                }
                            }
                        }
                    }
                }
                //
                //	                if(response.refresh.block_name)
                //	                {
                //	                    if(typeof response.refresh.block_name == 'string')
                //	                    {
                //		                    $('[data-block-name='+response.refresh.block_name+']').block('reload');
                //	                    }
                //	                    else
                //	                    {
                //		                    for (var i in response.refresh.block_name)
                //		                    {
                //			                    if(response.refresh.block_name.hasOwnProperty(i))
                //			                    {
                //				                    $('[data-block-name='+response.refresh.block_name[i]+']').block('reload');
                //			                    }
                //		                    }
                //	                    }
                //	                }
                //	            }
                if(response.message) {
                    showGrowl('success', response.message);
                }
                if(callback) {
                    callback(response);
                }
                if(isModal) {
                    modalObject.modal('hide');
                }
            }
            else {
                if(growlMessages) {
                    showGrowl('danger', response.message);
                }
                else {
                    var alert_div = '<div class="errors alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    if(typeof response.errors == 'string') {
                        alert_div += response.errors;
                    }
                    else {
                        var errors       = ''
                            , formFields = []
                            ;
                        for(var i in response.errors) {
                            if(response.errors.hasOwnProperty(i)) {
                                alert_div += response.errors[i] + '<br/>';
                                formFields.push('#form' + i.charAt(0).toUpperCase() + i.slice(1));
                            }
                        }
                        $(formFields.join(', ')).each(
                            function() {$(this).closest('.form-group').addClass('has-error');});
                    }
                    alert_div += '</div>';
                    if(isModal) {
                        modalObject.find('.modal-body').prepend(alert_div);
                    }
                    else {
                        formObject.prepend(alert_div);
                    }
                }
            }
            saveBtn.button('reset');
        }
    });
}
/**
 * Отображение growl сообщения
 * @param type    Формат сообщения: null, 'info', 'error', 'success'
 * @param message Содержание сообщения
 */
function showGrowl(type, message) {
    var delay;
    switch(type) {
        case 'info':
        case 'danger':
        case 'warning':
            delay = 15000;
            break;
        default:
            delay = 4000;
            break;
    }
    //console.log(typeof message);
    if(typeof message == 'string') {
        $.bootstrapGrowl(message,
            {
                ele:               'body'                    // which element to append to
                , type:            type                      // (null, 'info', 'error', 'success')
                , offset:          {from: 'top', amount: 80} // 'top', or 'bottom'
                , align:           'center'                  // ('left', 'right', or 'center')
                , width:           'auto'                    // (integer, or 'auto')
                , delay:           delay
                , allow_dismiss:   true
                , stackup_spacing: 5               // spacing between consecutively stacked growls.
            });
    }
    else {
        if(typeof message == 'object' && typeof message[0] != 'undefined') {
            var errors       = ''
                , formFields = []
                ;
            for(var i in message) {
                if(message.hasOwnProperty(i)) {
                    errors += message[i].text + '<br/>';
                    if(message[i].section) {
                        formFields.push(
                            '#form' + message[i].section.charAt(0).toUpperCase() + message[i].section.slice(1));
                    }
                }
            }
            $.bootstrapGrowl(errors,
                {
                    ele:               'body'                    // which element to append to
                    , type:            type                      // (null, 'info', 'error', 'success')
                    , offset:          {from: 'top', amount: 80} // 'top', or 'bottom'
                    , align:           'center'                  // ('left', 'right', or 'center')
                    , width:           'auto'                    // (integer, or 'auto')
                    , delay:           delay
                    , allow_dismiss:   true
                    , stackup_spacing: 5               // spacing between consecutively stacked growls.
                });
            if(formFields) {
                $(formFields.join(', ')).each(function() {$(this).closest('.form-group').addClass('has-error');});
            }
        }
        else {
            if(typeof  message == 'object') {
                //console.log(message);
                $.bootstrapGrowl(message.text,
                    {
                        ele:               'body'                    // which element to append to
                        , type:            type                      // (null, 'info', 'error', 'success')
                        , offset:          {from: 'top', amount: 80} // 'top', or 'bottom'
                        , align:           'center'                  // ('left', 'right', or 'center')
                        , width:           'auto'                    // (integer, or 'auto')
                        , delay:           delay
                        , allow_dismiss:   true
                        , stackup_spacing: 5               // spacing between consecutively stacked growls.
                    });
            }
        }
    }
}
function classes_makers_select(block) {

    // не иницилизируем заново контролы, которые уже были обработаны плагином
    // иначе они сбрасываются в первоначальное состояние
    var chainRemoteSelects = $("input.select-makers, input.select-classes", block).not('.select2-offscreen');
    if(!window.classes_makers_data) {
        window.classes_makers_data = {};
    }
    if(chainRemoteSelects.length) {
        var select2data;
        $.each(chainRemoteSelects, function() {
            var object               = $(this)
                , minimumInputLength = object.attr('data-minimum-input-length')
                , chainRemote_opts   = {
                placeholder:          object.attr('placeholder')
                , minimumInputLength: minimumInputLength
                , multiple:           true
                , ajax:               {
                    url:         object.attr('data-url'),
                    dataType:    'json',
                    type:        'GET',
                    quietMillis: 10,
                    data:        function() {
                        var legsData = {};
                        if(widgetSteps.stepOne.airport_from) {
                            legsData = {
                                legs: [
                                    {
                                        airport_from_id: widgetSteps.stepOne.airport_from,
                                        airport_to_id:   widgetSteps.stepOne.airport_to
                                    }
                                ]
                            }
                        }
                        return legsData;
                    }
                    , results:   function(response, page) {
                        var data = response.data;
                        return {results: data};
                    }
                }
                , formatResult:       function(result) {
                    return '<div>' + result.name + '</div>';
                }
                , formatSelection:    function(data) {
                    return data.name;
                }
                , escapeMarkup:       function(m) { return m; } // we do not want to escape markup since we are displaying html in results
            };
            object.select2(chainRemote_opts);
            object.on('change', function() {
                var focusNext = $(this).data('focusNext')
                    , value   = $(this).val()
                    ;
                if(value == '') {
                    value = null;
                }
                if(focusNext && typeof focusNext != 'undefined' && value) {
                    $(focusNext).select2('open');
                }
                if(value != null) {
                    value = value.split(',');
                }
                widgetStepsValidation($(this).data('step'), $(this).data('element'), value);
                getJets();
            });
        });
    }
}
function getJets(hideModal) {
    hideModal = hideModal || false;
    if(!widgetSteps.stepOne.airport_from) {
        return null;
    }
    var requestData       = {
            legs:      [
                {
                    airport_from_id:  widgetSteps.stepOne.airport_from
                    , airport_to_id:  widgetSteps.stepOne.airport_to
                    , departure_time: widgetSteps.stepTwo.departure_date
                    , time_interval:  widgetSteps.stepTwo.departure_time_range
                    , passengers:     widgetSteps.stepOne.passengers
                }
            ],
            refueling: 0,
            class_ids: widgetSteps.stepThree.classes,
            maker_ids: widgetSteps.stepThree.makers,
            page:      widgetSteps.stepThree.page
        }
        , jetsContainer   = $('#jets_to_select')
        , pagingContainer = jetsContainer.next('.paging')
        , loadingLine     = jetsContainer.find('.loading-line')
        , loadingModal    = $('#loadingModal')
        , template        = jetsContainer.data('template')
        , emptyTemplate   = jetsContainer.data('emptyTemplate')
        ;
    //console.log(requestData);
    xhr = $.ajax({
        url:        jetsContainer.data('url'),
        data:       requestData,
        dataType:   'json',
        type:       'GET',
        beforeSend: function() {
            if(!hideModal) {
                loadingModal.modal('show');
            }
        },
        success:    function(respond) {
            jetsContainer.find('.jet_item,.jet_extra_data').remove();
            pagingContainer.empty();
            var data         = respond.data
                , pagination = respond.pagination
                ;
            if(typeof data != 'undefined') {
                $.templates({
                    jetsTpl:   {
                        markup: template
                    },
                    emptyJets: {
                        markup: emptyTemplate
                    }
                });
                loadingLine.addClass('sr-only');
                if(data.length) {
                    jetsContainer.find('tbody').append(
                        $.render.jetsTpl(respond)
                    );
                }
                else {
                    jetsContainer.find('tbody').append(
                        $.render.emptyJets()
                    );
                }
                pagingContainer.append(
                    pagination
                );
                pagingContainer.find('a').on('click', function(e) {
                    e.preventDefault();
                    widgetSteps.stepThree.page = $(this).data('page');
                    getJets()
                });
                jetsContainer.find('.jet_checkbox').on('change', function() {
                    var dataArr = {
                        jet_tail_number: $(this).data('tailNumber'),
                        jet_maker:       $(this).data('jetMaker'),
                        jet_type:        $(this).data('jetType'),
                        jet_operator:    $(this).data('jetOperator'),
                        fly_price:       $(this).data('flyPrice')
                    };
                    //					console.log(this.checked, dataArr);
                    if(this.checked) {
                        widgetSteps.stepThree.tails[dataArr.jet_tail_number] = dataArr;
                        $('#jet_' + dataArr.jet_tail_number + '_extra, #jet_' + dataArr.jet_tail_number + '_main').addClass(
                            'active');
                    }
                    else {
                        delete widgetSteps.stepThree.tails[$(this).data('tailNumber')];
                        $('#jet_' + dataArr.jet_tail_number + '_extra, #jet_' + dataArr.jet_tail_number + '_main').removeClass(
                            'active');
                    }
                    widgetNextBntActivation()
                });
                extraDataInit();
            }
            loadingModal.modal('hide');
        }
    });
}
/**
 * Инициация дополнительных функций загружаемого контента
 */
function extraDataInit(block, callback) {
    block = block || false;
    callback = callback || false;
    if($('[rel=tooltip]', block).length) {
        $('[rel=tooltip]', block).tooltip({container: 'body'});
    }
    if($('[rel=popover]', block).length) {
        $('[rel=popover]', block).popover({placement: 'left', html: true});
    }
    if($('.remote_call', block).length) {
        $('.remote_call', block).off('click').on('click', function(e) {
            e.preventDefault();
            var remote_url = $(this).data('remote');
            $.ajax({
                url:       remote_url
                , type:    'POST'
                , success: function(response) {
                    if(response.status) {
                        showGrowl('success', response.message);
                        if(response.redirect) {
                            window.location.href = response.redirect;
                        }
                    }
                    else {
                        if(typeof response.errors == 'string') {
                            showGrowl('danger', response.errors);
                        }
                        else {
                            var errors = '';
                            for(var i in response.errors) {
                                errors += response.errors[i] + '<br/>';
                            }
                            showGrowl('danger', errors);
                        }
                    }
                }
                , error:   function() {
                    showGrowl('danger', '<b>Внимание!</b> Произошла непредвиденная ошибка!');
                }
            });
        });
    }
    $('.clickable', block).off('click').on('click', function() {
        //		console.log(this);
        var url = $(this).data('url');
        window.document.location = url;
    });
    if($('.loading-state', block).length) {
        $('.loading-state', block).on('click', function() {$(this).button('loading')});
    }
    var selectControls = $('select.chosen-select, select.select2', block);
    if(selectControls.length) {
        selectControls.select2({
            placeholder: $(this).attr('placeholder'),
            allowClear:  true
        });
    }
    // не иницилизируем заново контролы, которые уже были обработаны плагином
    // иначе они сбрасываются в первоначальное состояние
    var selectRemote = $("input.select-remote", block).not('.select2-offscreen');
    if(!window.select2_data) {
        window.select2_data = {};
    }
    if(selectRemote.length) {
        var select2data;
        $.each(selectRemote, function() {
            var object               = $(this)
                , parent             = object.attr('data-parent')
                , minimumInputLength = object.attr('data-minimum-input-length')
                , select2_opts       = {
                placeholder:          object.attr('placeholder')
                , minimumInputLength: minimumInputLength
                , allowClear:         true
                , ajax:               { // instead of writing the function to execute the request we use Select2's convenient helper
                    url:         object.attr('data-url'),
                    dataType:    'json',
                    type:        'GET',
                    quietMillis: 250,
                    data:        function(term, page) {
                        var data = {
                            term: term, // search term
                            page: page // page number
                        };
                        if(parent) {
                            data.parent = parent == 0 ? 0 : $('#' + parent).val();
                        }
                        return data;
                    }
                    , results:   function(response, page) {
                        var data   = response.data
                            , more = (page * data.limit) < data.count; // whether or not there are more results available
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data, more: more};
                    }
                }
                , formatResult:       function(result) {
                    return '<div>' + result.city + ', ' + result.country + ' - ' + result.airport_name + ' (' + result.iata_code + ')' + '</div>';
                }
                , formatSelection:    function(data) {
                    return data.airport_name + ' (' + data.iata_code + ')';
                }  // omitted for brevity, see the source of this page
                , initSelection:      function(element, callback) {
                    var item = null
                        , id = $(element).attr('id');
                    if(typeof(select2data[id]) == 'undefined') {
                        item = element.val().split(':');
                        select2data[id] = item;
                    }
                    else {
                        item = select2data[id];
                    }
                    var data = {
                        id:    item[0],
                        title: item[1]
                    };
                    $(element).val(item[0]);
                    callback(data);
                }
                //		dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
                , escapeMarkup:       function(m) { return m; } // we do not want to escape markup since we are displaying html in results
            };
            if(parent && object.attr('data-url')) {

                // это зависимый объект, он будет заполняться по изменению родителя
                var obj_id = object.attr('id');
                if(window.select2_data[obj_id]) {
                    delete select2_opts.ajax;
                    window.select2_data[obj_id] = {};
                    select2_opts.data = function() {
                        return {
                            results: window.select2_data[obj_id][$('#' + parent).val()]
                        }
                    };
                }
            }
            if(object.attr('data-editable') == 1) {
                var editable_title = object.attr('data-editable-title');
                select2_opts.createSearchChoice = function(term, data) {
                    if(term.length > select2_opts.minimumInputLength) {
                        if($(data).filter(function() {
                                return this.title.localeCompare(term) === 0;
                            }).length === 0) {
                            return {
                                id:    term,
                                title: (term + (editable_title
                                    ? (' (' + editable_title + ')' )
                                    : ' (создать)'))
                            };
                        }
                    }
                };
            }
            object.select2(select2_opts);
            object.on('change', function(e, is_init) {
                selectRemote.filter('[data-parent="' + $(this).attr('id') + '"]').each(function() {
                    var $select = $(this);
                    // если что-то выбрано, то зависимый контрол разрешаем, иначе - дизейблим
                    if(e.val.length > 0) {
                        if(!is_init) {
                            $select.select2('val', '');        // сбрасываем подчиненные значения
                        }
                        if(window.select2_data[$select.attr('id')] && window.select2_data[$select.attr('id')][e.val]) {
                            // данные уже есть в кеше
                            $select.select2('enable', true);
                        }
                        else {
                            if($select.attr('data-url')) {
                                // предварительно загружаем данные
                                $.ajax({
                                    url:  $select.attr('data-url'),
                                    data: {
                                        parent: e.val
                                    },
                                    type: "POST"
                                }).success(function(response) {
                                    // сохраняем данные в контрол
                                    $.each(response.data.results, function(index) {
                                        // приходится перекладывать свойства под другим ключом
                                        response.data.results[index].text = response.data.results[index].title;
                                    });
                                    if(!window.select2_data[$select.attr('id')]) {
                                        window.select2_data[$select.attr('id')] = {};
                                    }
                                    // кешируем данные
                                    window.select2_data[$select.attr('id')][e.val] = response.data.results;
                                    // открываем зависимый дропдаун
                                    $select.select2('enable', true);
                                });
                            }
                        }
                    }
                    else {
                        $select.select2('enable', false);
                        $select.select2('val', ''); // сбрасываем подчиненные значения
                    }
                });
            });
            $('li.disabled a').on('click', function(e) {
                return false;
            });
        });
        selectRemote.on('change', function() {
            var focusNext = $(this).data('focusNext')
                , value   = $(this).val()
                ;
            if(value == '') {
                value = null;
            }
            if(focusNext && typeof focusNext != 'undefined' && value) {
                $(focusNext).select2('open');
            }
            widgetStepsValidation($(this).data('step'), $(this).data('element'), value)
        });
        // @TODO а если несколько уровней вложенности?
        selectRemote.each(function() {
            var event = $.Event('change');
            event.val = $(this).val();
            $(this).trigger(event, [true]);
        });
    }
    $('#passengers').on('change', function() {
        widgetStepsValidation($(this).data('step'), $(this).data('element'), $(this).val())
    });
    classes_makers_select(block);
    //	$('#classes, #makers').on('change', function(){
    //		getJets();
    //	});
    $('.stepBtn').on('click', function(e) {
        e.preventDefault();
        var nextBlock      = $('#orderWidget').find($(this).data('target'))
            , wizardBlock  = $('#orderSteps').find($(this).data('target'))
            , otherBlocks  = nextBlock.siblings('.active')
            , currentBlock = $(this).parent('li.step')
            , direction    = $(this).data('slideDirection')
            , target       = $(this).data('target')
            ;
        if(!nextBlock.hasClass('active')) {
            otherBlocks.each(function(index, self) {
                var $this = $(this);
                $this.removeClass('active');
                if(direction == 'right') {
                    nextBlock.addClass('active').show().css({right: -(nextBlock.width())}).animate({right: 0}, 500);
                }
                else {
                    nextBlock.addClass('active').show().css({left: -(nextBlock.width())}).animate({left: 0}, 500);
                }
            });
            $('#orderSteps').find('.step.active').removeClass('active');
            wizardBlock.addClass('active');
            switch(target) {
                case '.stepTwo':
                    showOnlyOrderWidget(true);
                    if(direction == 'left') {
                        $('#home').slideDown(600);
                    }
                    break;
                case '.stepOne':
                    showOnlyOrderWidget(false);
                    break;
                case '.stepThree':
                    $('#home').slideUp();
                    break;
            }
        }
    });
    $('.extraBtn').on('click', function(e) {
        e.preventDefault();
        var jet_item = $(this).closest('.jet_item');
        jet_item.find('td').toggleClass('bordered');
        $($(this).data('toggle')).find('div.row').slideToggle(300, 'easeInOutCubic');
    });
    $('.deleteBtn').on('click', function(e) {
        e.preventDefault();
        var url = $(this).data('url')
        $.ajax({
            url:        url,
            dataType:   'json',
            type:       'POST',
            beforeSend: function() {$('#loadingModal').modal('show')},
            success:    function(response) {
                $('#loadingModal').modal('hide');
                showGrowl('success', response.message);
                $('#jets').grid('reload');
            }
        });
    });
    if(callback) {
        callback();
    }
    setTimeout(function() {
        $('input[autofocus=autofocus]', block).focus();
    }, 200);
}
/**
 * Очистка тела модального окна
 * @param modal Наименование модального окна
 */
function clearModalBody(modal) {
    modal.find('.modal-body').empty().append(
        '<div class="text-center"><i class="fa fa-refresh fa-spin"></i> ' + i18n.loading + '...</div>');
    modal.removeData('bs.modal');
    modal.find('button').button('reset');
}
function showOnlyOrderWidget(hideAll) {
    if(hideAll) {
        $('#about, #newsletter2,#team,#contact').slideUp();
        $('.dont-show-when-widget').slideUp(600);
    }
    else {
        $('#home, #about, #newsletter2,#team,#contact').slideDown();
        $('.dont-show-when-widget').slideDown(500);
    }
}
function widgetNextBntActivation() {
    for(var step in widgetSteps) {
        var btnIsActive = false
            , stepBtn   = $('.step.' + step).find('.stepBtn.forward');
        for(var element in widgetSteps[step]) {
            if(element == 'page') {
                continue;
            }
            btnIsActive =
                (widgetSteps[step][element] != null && typeof widgetSteps[step][element] !== 'undefined' && widgetSteps[step][element].length > 0);
            if(element == 'tails') {
                btnIsActive = (!$.isEmptyObject(widgetSteps[step][element]));
            }
            //console.log(step, element, widgetSteps[step][element], btnIsActive);
            if(step != 'stepThree') {
                if(!btnIsActive) {
                    break;
                }
            }
            else {
                if(btnIsActive) {
                    break;
                }
            }
        }
        stepBtn.prop('disabled', !btnIsActive);
        if(btnIsActive) {
            stepBtn.removeAttr('disabled')
        }
        else {
            stepBtn.attr('disabled', 'disabled')
        }
    }
}
function widgetStepsValidation(step, element, value) {
    widgetSteps[step][element] = value;
    widgetNextBntActivation();
    widgetSteps.stepThree.page = 1;
    if(step == 'stepTwo' && element == 'departure_time_range') {
        getJets(true)
    }
}