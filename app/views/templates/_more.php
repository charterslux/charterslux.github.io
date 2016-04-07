{{if more}}
<tr><td colspan="<?php echo $colspan?>" class="more-td"><a href="#" class="more_data btn btn-default" data-offset="{{>offset_next}}" data-table="<?php echo $table_name?>"><i class="fa fa-refresh"></i> {{:more_data_btn_text}}</a></td></tr>
{{/if}}
{{else}}
<tr>
	<td colspan="<?php echo $colspan?>" class="more-td">
		<div class="alert alert-info">
			<strong><?php echo trans('chunks.words.no_data')?></strong>
		</div>
	</td>
</tr>
{{/if}}