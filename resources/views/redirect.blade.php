<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redireccionando...</title>
    <meta name="description" content="{{ __('messages.title_description') }}">

    @yield('css')

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/prism.css') }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L3MGXFZTH6"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-L3MGXFZTH6');
    </script>


    <!-- Scripts -->
    
    <link async rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4892518104055099"
        crossorigin="anonymous"></script>
</head>

<body class="min-h-screen flex flex-col items-center justify-center bg-gray-100 p-4">

    <!-- Banner superior -->
    <div class="w-full max-w-2xl mb-6">
        <ins class="adsbygoogle" 
            style="display:block" 
            data-ad-client="ca-pub-4892518104055099"
            data-ad-slot="4262079253" 
            data-ad-format="auto" 
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <!-- Contenido principal -->
    <div class="w-full max-w-md bg-white p-6 rounded-xl shadow-md text-center space-y-6">
        <h1 class="text-2xl font-bold text-gray-700">{{ __('messages.redirecting') }}</h1>

        <p class="text-gray-600">
            {{ __('messages.text_redirecting') }}
            <span id="countdown" class="font-bold">10</span>
            {{ __('messages.text_redirecting_seg') }}
        </p>

        <button id="redirectBtn"
            class="w-full py-2 px-4 bg-danger text-white font-semibold rounded-lg disabled:bg-gray-400 transition"
            disabled>
            {{ __('messages.btn_redirect') }}
        </button>
    </div>

    <!-- Banner inferior -->
    <div class="w-full max-w-2xl mt-6">
        <ins 
            class="adsbygoogle block" 
            style="display:block" 
            data-ad-client="ca-pub-4892518104055099"
            data-ad-slot="3475611191" 
            data-ad-format="auto" 
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <script>
        const countdownEl = document.getElementById('countdown');
        const redirectBtn = document.getElementById('redirectBtn');

        let secondsLeft = 10;
        const targetUrl = "{{ $originalUrl }}";

        const interval = setInterval(() => {
            secondsLeft--;
            countdownEl.textContent = secondsLeft;

            if (secondsLeft <= 0) {
                clearInterval(interval);
                redirectBtn.disabled = false;
                redirectBtn.classList.remove('disabled:bg-gray-400');
                redirectBtn.classList.add('bg-success');
                redirectBtn.textContent = "{{ __('messages.btn_redirect') }}";

                // Auto redirigir si no presiona en 3 segundos
                // setTimeout(() => {
                //     window.location.href = targetUrl;
                // }, 3000);
            }
        }, 1000);

        redirectBtn.addEventListener('click', () => {
            window.location.href = targetUrl;
        });
    </script>

    <!-- All javascirpt -->
    <!-- Alpine js -->
    <script src="{{ asset('assets/js/alpine-collaspe.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpine-persist.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpine.min.js') }}" defer></script>

    @yield('script')

    <!-- Custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/responsePage.js') }}"></script>
    <script src="{{ asset('assets/js/prism.js') }}"></script>

</body>

</html>
