<table class="table"
       data-ride="grid"
       data-grid-name="jets"
       id="jets"
       data-remote="{{ $remote }}"
       data-grid-template="#jetsTemplate">
	<tbody><tr class="loading-tr"><td colspan="6" class="loading-td"><i class="fa fa-circle-o-notch fa-spin"></i> {{ trans('chunks.words.loading') }}...</td></tr></tbody>
</table>
@include('templates.jets')