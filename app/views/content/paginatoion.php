<script id="paginationTemplate" type="text/x-jsrender">
	{{if count_data>0}}
	<div class="count">{{:count_text}}</div>
	<div class="resultsNum">
		<?php echo Form::select('pagination_limit', $pagination_limits, $pagination_limit, array('class' => 'input-small pagination_limit form-control'))?>
	</div>
	{{/if}}
	{{if links!==null}}
		<ul class="pagination">
			{{if previous_page===null}}
				<li class="disabled"><a href="#">«</a></li>
			{{else}}
				<li><a href="#" data-page="{{>previous_page}}" rel="first">«</a></li>
			{{/if}}

			{{for links}}
				{{if number===current_page}}
						<li class="active"><a href="#" data-page="{{>number}}">{{:content}}</a></li>
				{{else}}
						<li><a href="#" data-page="{{>number}}">{{:content}}</a></li>
				{{/if}}
			{{/for}}

			{{if next_page===false}}
				<li>
					<li class="disabled"><a href="#">»</a></li>
				</li>
			{{else}}
				<li><a href="#" data-page="{{>next_page}}" rel="last">»</a></li>
			{{/if}}
		</ul>
	{{/if}}
</script>