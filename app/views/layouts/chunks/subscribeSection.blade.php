<!-- // NEWSLETTER // -->
<section id="newsletter2" class="page image" style="background-image: url(/images/subcribe-background-new.jpg)">
    <div class="wrapper align-center pattern color-layout" data-color="rgba(85, 85, 92, 0.3)">

        <h3>{{ trans('chunks.headers.subscribe') }}</h3>
        <hr style="width: 170px;margin:10px auto;">
        <h5>{{ trans('chunks.headers.subscribe-desc') }}</h5>
        <section id="subscribe" style="background:none!important;">
            {{ Form::open(array('url' => I18n::localizeURL('api/subscribe'), 'method' => 'post', 'class' => 'flat')) }}
            <div class="input-group">
                {{ Form::email('email', null, $attributes = ['placeholder' => trans('forms.placeholders.your_email'), 'class' => 'form-control input-lg']) }}
                <span class="input-group-btn">
                    {{ Form::button(trans('forms.buttons.subscribe'), array('class' => 'btn btn-lg btn-red', 'type' => 'submit')) }}
                </span>
            </div>
            <span class="status" data-success="Thank you, you have been subscribed."
                  data-error="Something went wrong."></span>
            {{ Form::close() }}
        </section>

    </div>
</section>
<!-- // END NEWSLETTER // -->