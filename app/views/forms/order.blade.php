{{ Form::open(['url' => I18n::localizeURL('api/order/set'), 'method' => 'post', 'id' => 'orderForm']) }}

<div class="col-sm-4">
    <!-- Airport_from Form Input -->
    <div class="form-group">
        {{ Form::label('airport_from', trans('forms.labels.airport_from')) }}
        <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-plane fa-2x"></i></span>
            {{ Form::text(
            'airport_from',
            null,
            [
                'id' => 'airport_from',
                'class' => 'form-control input-lg select-remote',
                'placeholder' => trans('forms.placeholders.airport_from'),
                'data-minimum-input-length' => 2,
                'data-url' => I18n::localizeURL('api/catalog/airport'),
                'data-focus-next' => '#airport_to',
                'data-step' => 'stepOne',
                'data-element' => 'airport_from',
            ]) }}
        </div>
    </div>
    <!-- Airport_to Form Input -->
    <div class="form-group">
        {{ Form::label('airport_to',  trans('forms.labels.airport_to')) }}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-plane fa-2x fa-flip-vertical"></i></span>

            {{ Form::text(
            'airport_to',
            null,
            [
            'id' => 'airport_to',
            'class' => 'form-control input-lg select-remote',
            'placeholder' =>  trans('forms.placeholders.airport_to'),
            'data-minimum-input-length' => 2,
            'data-url' => I18n::localizeURL('api/catalog/airport'),
            'data-focus-next' => '#departure_date',
            'data-step' => 'stepOne',
            'data-element' => 'airport_to',
            ]) }}
        </div>
    </div>


</div>
<div class="col-sm-4">
    <div class="form-group">
        {{Form::label('departure_date', trans('forms.labels.departure_date'))}}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar fa-2x"></i></span>
            {{ Form::text(
            'departure_date',
            null,
            [
                'id' => 'departure_date',
                'class' => 'form-control input-lg',
                'placeholder' => trans('forms.placeholders.departure_date'),
                'data-provide'=>"datepicker",
                'data-date-format'=>"dd.mm.yyyy",
                'data-date-start-date'=>"today",
                'data-date-language'=>App::getLocale(),
                'data-date-week-start'=>"1",
                'data-date-today-highlight'=>"1",
                'data-date-autoclose'=>"1",
                'data-step' => 'stepOne',
                'data-element' => 'departure_date',
                'data-focus-next' => '#departure_time',
            ]) }}
        </div>
    </div>
    <div class="form-group">
        {{Form::label('departure_time', trans('forms.labels.departure_time'))}}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clock-o fa-2x"></i></span>

            {{ Form::select(
                'departure_time',
                $departureTimeIntervals,
                null,
                [
                    'id' => 'departure_time',
                    'class' => 'form-control input-lg select2',
                    'placeholder' => trans('forms.placeholders.departure_time'),
                    'data-step' => 'stepOne',
                    'data-element' => 'departure_time',
                    'data-focus-next' => '#passengers',
            ]) }}
        </div>
    </div>
</div>

<div class="col-sm-4">
    <!-- Passengers Form Input -->
    <div class="form-group">
        {{ Form::label('passengers', trans('forms.labels.passengers')) }}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-male"></i> <i class="fa fa-female"></i></span>

            {{ Form::select(
                'passengers',
                $passengers,
                null,
                [
                    'id' => 'passengers',
                    'class' => 'form-control input-lg select2',
                    'placeholder' => trans('forms.placeholders.passengers'),
                    'data-step' => 'stepOne',
                    'data-element' => 'passengers',
                    'data-focus-next' => '#departure_date',
            ]) }}
        </div>
    </div>
    <div class="form-group orderBtn">
        {{ HTML::link('#', trans('forms.buttons.create_order').'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>', [
                'id' => 'setOrder',
                'class' => 'btn btn-lg btn-block',
                'data-url' => I18n::localizeURL('api/order/set')

                ]) }}
    </div>
</div>
{{ Form::close() }}