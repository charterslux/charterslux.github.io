{{ Form::hidden('orderId', $orderId) }}
<div class="row">
    <div class="col-sm-6">
        <!--  Form Input -->
        <div class="form-group">
            {{ Form::label('formName', trans('forms.labels.contact.name')) }}
            {{ Form::text(
            'contactName',
            null,
            [
            'id'          => 'form',
            'class'       => 'form-control input-lg',
            'placeholder' => trans('forms.placeholders.contact.name'),
            ]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <!-- Contact Phone Input Form Input -->
        <div class="form-group">
            {{ Form::label('formContactPhone', trans('forms.labels.contact.phone')) }}
            {{ Form::text(
            'contactPhone',
            null,
            [
            'id'          => 'formContactPhone',
            'class'       => 'form-control input-lg',
            'placeholder' => trans('forms.placeholders.contact.phone')
            ]) }}
            <p class="help-block">{{ trans('forms.help-blocks.contact.phone') }}</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <!-- Contact Email Input Form Input -->
        <div class="form-group">
            {{ Form::label('formContactEmail', trans('forms.labels.contact.email')) }}
            {{ Form::text(
            'contactEmail',
            null,
            [
            'id'          => 'formContactEmail',
            'class'       => 'form-control input-lg',
            'placeholder' => trans('forms.placeholders.contact.email')
            ]) }}
            <p class="help-block">{{ trans('forms.help-blocks.contact.email') }}</p>
        </div>
    </div>
</div>