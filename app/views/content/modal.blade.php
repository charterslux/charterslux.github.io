<?php
$save_btn              = (isset($save_btn)) ? $save_btn : TRUE;
$save_btn_text         = (isset($save_btn_text)) ? $save_btn_text : trans('forms.buttons.save');
$save_btn_type         = (isset($save_btn_type)) ? $save_btn_type : 'primary';
$save_btn_loading_text = (isset($save_btn_loading_text)) ? $save_btn_loading_text : trans('forms.buttons.saving');
$modal_size            = (isset($modal_size)) ? 'modal-' . $modal_size : NULL;
$is_form               = (isset($form_url)) ? 'true' : 'false';
$form_props            = (isset($form_props)) ? $form_props : [];
?>
<div id="{{  $modal_name }}Modal" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="{{  $modal_name}}Label" aria-hidden="true" data-form="{{  $is_form }}">
    <div class="modal-dialog {{ $modal_size }}">
        {{ ($is_form == 'true') ? Form::open([ 'url' => $form_url, 'role' => 'form'] + $form_props) : null }}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="{{  $modal_name }}Label">{{ $modal_title }}</h4>
            </div>
            <div class="modal-body">
                <div class="text-center"><i class="fa fa-refresh fa-spin"></i> {{ trans('forms.buttons.loading') }}
                </div>
            </div>
            <div class="modal-footer">
                {{  ($save_btn == true) ? Form::button($save_btn_text, ['type' => 'submit', 'class' => 'btn btn-'.$save_btn_type.' saveBtn', 'data-loading-text' => $save_btn_loading_text]) : null }}
                {{  HTML::link('#', trans('forms.buttons.cancel'), ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) }}
            </div>
        </div>
        {{ ($is_form) ? Form::close() : null }}
    </div>
</div>