@extends('layouts.master')

@section('main_menu_left_side')
@include('menu.main.left.main')
@stop

@section('modals')

@include('content.modal', [
    'form_url' => I18n::localizeURL('api/auth/login'),
    'modal_name' => 'login',
    'modal_title' => trans('chunks.headers.login'),
    'save_btn_text' => trans('forms.buttons.login'),
])

@parent
@stop

@section('preloader')
        <!-- // PRELOADER // -->
<div id="preloader" class="clearfix">
    <div class="wrapper align-center">
        <div class="logo">
            <img src="/images/logo-black.png" alt="">
        </div>
    </div>

    <div class="half left"></div>
    <div class="half right"></div>
</div>
<!-- // END PRELOADER // -->
@stop

@section('content')
@include('layouts.chunks.mainslide')

        <!-- // CONTENT // -->
<section id="content">
    @include('layouts.chunks.orderSection')
    @include('layouts.chunks.aboutSection')
    @include('layouts.chunks.featuresSection')
    @include('layouts.chunks.partners')
    @include('layouts.chunks.subscribeSection')
    @include('layouts.chunks.contactsSection')
    @include('layouts.chunks.footerSection')
</section>
@include('templates.jets')
@stop