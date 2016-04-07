<!-- // ORDER BLOCK // -->
<section id="order" class="page container-fluid">
    <header>
        <h1>{{ trans('chunks.headers.create_order') }}</h1>
        <hr>
    </header>
    <div class="body">

        <div class="row">
            @include('forms.order')
        </div>

        <div class="row visible-md-block visible-lg-block" id="orderSteps">
            <div class="col-sm-offset-2 col-sm-2 step stepOne">
                <div class="circle">1</div>
                <h3>{{Lang::get('chunks.words.step', array('step' => 1))}}</h3>
                <hr/>
                <div class="description">{{trans('chunks.words.airports_and_passengers')}}</div>
            </div>
            <div class="col-sm-1"><img class="arrow" src="/images/arrow.png" alt=""/></div>
            <div class="col-sm-2 step stepTwo">
                <div class="circle">2</div>
                <h3>{{Lang::get('chunks.words.step', array('step' => 2))}}</h3>
                <hr/>
                <div class="description">{{trans('chunks.words.departure_date_and_time')}}</div>
            </div>
            <div class="col-sm-1"><img class="arrow" src="/images/arrow.png" alt=""/></div>
            <div class="col-sm-2 step stepThree">
                <div class="circle">3</div>
                <h3>{{Lang::get('chunks.words.step', array('step' => 3))}}</h3>
                <hr/>
                <div class="description">{{trans('chunks.words.aircraft')}}</div>
            </div>
        </div>
    </div>
</section>
<!-- // END ORDER BLOCK // -->