<script id="jetsTemplate" type="text/x-jsrender">
{{if data}}
{{for data}}
<tr class="jet_item" id="jet_{{:jet_tail_number}}_main">
	<td class="jet_image "><img src="{{:jet_picture}}" /></td>
	<td class="jet_description">
		<h3>{{:jet_type}} <small class="hidden-xs">{{:jet_maker}} ({{:jet_class}})</small></h3>
	</td>
	<td class="price text-center">
		<h3><i class="fa fa-{{:~currency(fly_price_currency)}}"></i> {{:fly_price}}</h3>
	</td>
	<td class="text-center select_btn {{if !select && !delete}}padding-top-2{{/if}}">
		{{if select}}
			<div class="col-sm-12 check-button-block" data-toggle="buttons">

			<label class="btn btn-default btn-block {{:~btnState(jet_tail_number)}}">
				<input type="checkbox"
				       class="jet_checkbox"
				       data-tail-number="{{:jet_tail_number}}"
				       data-fly-price="{{:fly_price}}"
				       data-jet-maker="{{:jet_maker}}"
				       data-jet-type="{{:jet_type}}"
				       data-jet-operator="{{:jet_operator}}"
					> <?php echo trans('forms.buttons.select')?>
			</label>
			</div>
		{{/if}}
		{{if delete}}
			<div class="col-sm-12 check-button-block">
				<a href="#"
				   class="btn btn-sm btn-default btn-block"
				   data-toggle="modal"
				   data-target="#deleteJetModal"
				   data-remote="<?php echo I18n::localizeURL('/api/modal-body/delete-jet/{{:order}}/{{:jet_tail_number}}')?>">
				   <i class='fa fa-trash-o'></i> <?php echo trans('forms.buttons.delete_tail')?>
				</a>
			</div>
		{{/if}}
		<div class="col-sm-12 check-button-block">
			<?php echo Form::button(
				'<i class="fa fa-angle-down"></i> '.trans('forms.buttons.more'),
				[
					'class' => 'btn btn-default btn-sm btn-block extraBtn',
					'data-toggle' => '#jet_{{:jet_tail_number}}_extra'
				])?>
		</div>
	</td>
</tr>
<tr class="jet_extra_data" id="jet_{{:jet_tail_number}}_extra">
	<td colspan="4">
		<div class="row">
			<div class="col-xs-4">
				<dl class="dl-horizontal">
				  <dt><?php echo trans('chunks.lists.jet_type')?></dt>
				  <dd>{{:jet_type}}</dd>

				  <dt><?php echo trans('chunks.lists.jet_maker')?></dt>
				  <dd>{{:jet_maker}}</dd>

				  <dt><?php echo trans('chunks.lists.jet_class')?></dt>
				  <dd>{{:jet_class}}</dd>

				  <dt><?php echo trans('chunks.lists.jet_tail_number')?></dt>
				  <dd>{{:jet_tail_number}}</dd>

				  <dt><?php echo trans('chunks.lists.jet_operator')?></dt>
				  <dd>{{:jet_operator}}</dd>

				  <dt><?php echo trans('chunks.lists.jet_capacity')?></dt>
				  <dd>{{:jet_capacity}}</dd>
				</dl>
			</div>
			<div class="col-xs-8">
				<ul class="list-inline text-right">
					{{for images tmpl="#jetImagesTemplate"/}}
				</ul>
			</div>
		</div>
	</td>
</tr>
{{/for}}
{{else}}
<div class="jet_item col-sm-12 text-center">
	<div class="no-data"><?php echo trans('chunks.words.no_data')?></div>
</div>
{{/if}}
</script>
<script id="jetImagesTemplate" type="text/x-jsrender">
	<li><img src="{{:thmb}}" /></li>
</script>