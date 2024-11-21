<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{ __('messages.title_description') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

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

    {{-- google adsense --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4892518104055099"
            crossorigin="anonymous"></script>
  <!-- Fonts -->
  {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
  {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
    <!-- Site Tiltle -->
    <title>JustAnotherLinkCut - {{ __('messages.title_description') }}</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    @yield('css')

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link async rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
