<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{ __('messages.title_description') }}">
    <meta name="keywords" content="acortar link, acortar url, acortador de enlaces, acortar enlace, acortar enlaces gratis, encurtador de link, acortador url google, como acortar un link, link shortener, url short">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- politica de cookies --}}
    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {"siteId":4009176,"cookiePolicyId":19224601,"lang":"en","storage":{"useSiteId":true}};
        </script>
        <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/4009176.js"></script>
        <script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
        <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

        
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D97ZKCW55T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-D97ZKCW55T');
    </script>
    <!-- Event snippet for Vista de una página conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-475120202/SiSSCPu40soZEMqEx-IB',
                'event_callback': callback
            });
            return false;
        }
    </script>

   
    <!-- Site Tiltle -->
    <title>JustAnotherLinkCut - {{ __('messages.title_description') }}</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    @yield('css')

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/prism.css') }}">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link async rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @if(Route::is('home') && env('APP_ENV') !== 'local')
    {{-- @include('layouts.partials.auth.ads') --}}
     {{-- google adsense --}}
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4892518104055099"
     crossorigin="anonymous"></script>
    @endif
</head>
