<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <style>
        /* html,
        body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        } */

        #fullscreen-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #banner-container {
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        #container {
            width: 80%;
            max-width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        #countdown {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #redirectBtn {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #redirectBtn:disabled {
            background-color: #aaa;
            cursor: not-allowed;
        }

        #first-container {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
        }
    </style>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4892518104055099"
        crossorigin="anonymous"></script>
</head>

<body>

    <div id="fullscreen-container">

        <!-- Banner de anuncio centrado -->
       

        <!-- Contenido centrado -->
        <div id="container">

            <div id="first-container">
                <!-- banner_1 -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4892518104055099"
                    data-ad-slot="4262079253" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            
            <h2>{{ __('messages.redirecting') }}</h2>
            <p>{{ __('messages.text_redirecting') }} <span id="countdown">10</span>
                {{ __('messages.text_redirecting_seg') }}.</p>
            <button id="redirectBtn" disabled>{{ __('messages.btn_redirect') }}</button>

            <div id="first-container">
                <!-- banner_2 -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4892518104055099"
                    data-ad-slot="3475611191" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>

    <script>
        let countdownElement = document.getElementById('countdown');
        let redirectButton = document.getElementById('redirectBtn');
        let secondsLeft = 10;
        let targetUrl = "{{ $originalUrl }}";

        let countdownInterval = setInterval(() => {
            secondsLeft--;
            countdownElement.textContent = secondsLeft;

            if (secondsLeft <= 0) {
                clearInterval(countdownInterval);
                redirectButton.textContent = "Redirigir";
                redirectButton.disabled = false;
                redirectButton.onclick = () => window.location.href = targetUrl;
            }
        }, 1000);

        // setTimeout(() => {
        // window.location.href = targetUrl;
        // }, 10000);
    </script>

</body>

</html>
