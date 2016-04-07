<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!--// TITLE //-->
    <title>Charters Luxury - The Art Of Business Aviation</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="chartersluxury">

    <style type="text/css">*, form.flat input, form.flat textarea { font-family: {{ trans('chunks.fonts.main') }}, sans-serif; }</style>

    <!--// STYLES //-->
    {{ Minify::stylesheet([
        '/css/bootstrap.css',
        '/css/font-awesome.css',
        '/css/select2.css',
        '/css/select2-bootstrap.css',
        '/css/datepicker.css',
        '/css/colors.css',
        '/css/style.css',
        '/css/fotorama.css',
        '/css/flag-icon.css',
    ]) }}
    <style type="text/css">h1, h2, h3, h4, h5, h6, .page.image h1, .page.image h2, .page.image h3, .page.image h4, .page.image h5, .page.image h6, .page header h1, .page header h2, .page header h3, .page header h4, .page header h5, .page header h6, .page header, body > header nav a, #countdown > div span, #countdown > div .num > div, #about .body .description > li h1, .btn, a.btn, input.btn, .navbar-default .navbar-nav > li > a { font-family: {{ trans('chunks.fonts.head') }}; }</style>

    <!--// FAVICON //-->
    <link rel="shortcut icon" href="/images/favicon.png?1">

    <!--[if lte IE 9]>
    <script type="text/javascript">
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
    </script>
    <![endif]-->
    <!--[if IE]>
    <style type="text/css">
        @media all and (max-width: 480px) {
            #logo img {
                width: 150px;
            }
        }
    </style>
    <![endif]-->
</head>

<body class="red"
      data-spy="scroll"
      data-target="#main_menu"
      data-offset="60">

@yield('preloader', null)

        <!-- // MAIN MENU -->
<nav id="main_menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        @include('menu.main.toggle')

                <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-menu-collapse">
            @section('main_menu_left_side')

            @show

            @include('menu.main.right-side')
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- // END MAIN MENU -->

@yield('content')

        <!-- // PAGE MODALS // -->
@section('modals')
@include('modals.loading')
@include('content.modal', [
    'form_url'      => I18n::localizeURL(route('api.order.contacts.save')),
    'modal_name'    => 'contacts',
    'modal_title'   => trans('chunks.headers.contacts'),
    'save_btn_text' => trans('forms.buttons.send_order'),
    'save_btn_loading_text' => trans('forms.buttons.sending_order'),
])
@include('content.modal', [
    'form_url'      => I18n::localizeURL('api/auth/login'),
    'modal_name'    => 'login',
    'modal_title'   => trans('chunks.headers.login'),
    'save_btn_text' => trans('forms.buttons.login'),
])
@include('content.modal', [
    'form_url'      => I18n::localizeURL('api/auth/register'),
    'modal_name'    => 'register',
    'modal_title'   => trans('chunks.headers.register'),
    'save_btn_text' => trans('forms.buttons.register'),
])
@include('content.modal', [
        'form_url'      => I18n::localizeURL('api/auth/password-remind'),
        'modal_name'    => 'passwordRemind',
        'modal_title'   => trans('chunks.headers.passwordRemind'),
        'save_btn_text' => trans('forms.buttons.passwordRemind'),
    ])
@show
        <!-- // END PAGE MODALS // -->

@if(isset($order_url))
@include('templates.orders', ['order_url' => $order_url])
@endif
        <!--// PLUGINS AND SCRIPTS //-->
@section('scripts')
    {{ Minify::javascript([
        '/js/plugins/jquery-2.1.1.min.js',
        '/js/plugins/jquery-ui.min.js',
        '/js/plugins/jquery.queryloader2.js',
        '/js/plugins/jquery.fotorama.js',
        '/js/plugins/jquery.stellar.js',
        '/js/plugins/jquery.transit.js',
        '/js/plugins/jquery.easing.1.3.js',
        '/js/plugins/jquery.scrollStopped.js',
        '/js/plugins/jquery.placeholder.js',
        '/js/plugins/jquery.countdown.sys.js',
        '/js/plugins/jquery.countdown.js',
        '/js/plugins/jquery.bootstrap-growl.min.js',
        '/js/plugins/jquery.form.min.js',
        '/js/plugins/jquery.smooth-scroll.min.js',
        '/js/plugins/bootstrap.min.js',
        '/js/plugins/moment.min.js',
        '/js/plugins/select2-3.5.4/select2.js',
        '/js/plugins/select2-3.5.4/select2_locale_'.App::getLocale().'.js',
        '/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js',
        '/js/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.ru.js',
        '/js/plugins/jsrender.min.js',
        '/js/plugins/jquery.scrollbox.js',
        '/js/plugins/crm-grid.js',
        '/js/auth.js',
        '/js/main.js',
    ])}}
    <script type="text/javascript">
        var i18n = {loading: '{{ trans('chunks.words.loading') }}', lang: '{{ App::getLocale() }}'}
    </script>
@show

<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-52381976-1', 'auto');
    ga('send', 'pageview');
</script>
<!--// END PLUGINS AND SCRIPTS //-->
</body>
</html>