<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <style>
        html,
        body {
            height: 100%;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            text-align: center;
            /*padding-top: 100px;*/
            background-color: #f9f9f9;
            color: #333;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
            /* 100% del viewport height */
        }

        #container {
            width: 80%;
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #container_ads {
            display: flex;
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

        #ads-container {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
        }
    </style>
    @if (env('APP_ENV') !== 'local')
        {{-- <script src="https://alwingulla.com/88/tag.min.js" data-zone="116835" async data-cfasync="false"></script> --}}
    @endif

</head>

<body>

    <main>
        <div class="container col-xl-10 col-xxl-8 px-4 py-4">
            <div class="row align-items-center g-lg-5 py-5">
                <div>
                    <script type="text/javascript">
                        atOptions = {
                            'key': 'cf422841cc28852722bc078c74af3ce3',
                            'format': 'iframe',
                            'height': 90,
                            'width': 728,
                            'params': {}
                        };
                    </script>
                    <script type="text/javascript" src="//www.highperformanceformat.com/cf422841cc28852722bc078c74af3ce3/invoke.js">
                    </script>
                </div>
                <div id="container_ads">
                    <div>
                        <script type="text/javascript">
                            atOptions = {
                                'key': '6617aa5df045852676fe879746e8a061',
                                'format': 'iframe',
                                'height': 300,
                                'width': 160,
                                'params': {}
                            };
                        </script>
                        <script type="text/javascript" src="//www.highperformanceformat.com/6617aa5df045852676fe879746e8a061/invoke.js">
                        </script>
                    </div>
                    <div>
                        <h2>{{ __('messages.redirecting') }}</h2>
                        <p>{{ __('messages.text_redirecting') }}<span id="countdown">7</span>
                            {{ __('messages.text_redirecting_seg') }}.</p>
                        <button id="redirectBtn" disabled>{{ __('messages.btn_redirect') }}</button>

                        <!-- Espacio para el anuncio -->
                        <div id="ads-container">
                            {{-- <p>Publicidad</p> --}}
                            <script type="text/javascript">
                                atOptions = {
                                    'key': '40b5feb67a54e54675c5dfc464c8aed3',
                                    'format': 'iframe',
                                    'height': 50,
                                    'width': 320,
                                    'params': {}
                                };
                            </script>
                            <script type="text/javascript" src="//www.highperformanceformat.com/40b5feb67a54e54675c5dfc464c8aed3/invoke.js">
                            </script>
                        </div>
                    </div>
                    <div>
                        <script type="text/javascript">
                            atOptions = {
                                'key': '6617aa5df045852676fe879746e8a061',
                                'format': 'iframe',
                                'height': 300,
                                'width': 160,
                                'params': {}
                            };
                        </script>
                        <script type="text/javascript" src="//www.highperformanceformat.com/6617aa5df045852676fe879746e8a061/invoke.js">
                        </script>
                    </div>
                </div>
                <div>
                  
                </div>
            </div>

            
            <script async="async" data-cfasync="false" src="//pl24051434.profitablecpmrate.com/1f82266a332d64673f597077664f4b5a/invoke.js"></script>
            <div id="container-1f82266a332d64673f597077664f4b5a"></div>

        </div>
    </main>
    <script>
        let countdownElement = document.getElementById('countdown');
        let redirectButton = document.getElementById('redirectBtn');
        let secondsLeft = 7;
        let targetUrl = "{{ $originalUrl }}"; // La URL a la que se redirigirá

        // Temporizador
        let countdownInterval = setInterval(() => {
            secondsLeft--;
            countdownElement.textContent = secondsLeft;

            if (secondsLeft <= 0) {
                clearInterval(countdownInterval);
                redirectButton.textContent = "Redirigir";
                redirectButton.disabled = false;
                redirectButton.onclick = function() {
                    window.location.href = targetUrl;
                };
            }
        }, 1000);

        // Redirigir automáticamente después de 5 segundos
        setTimeout(() => {
        window.location.href = targetUrl;
        }, 7000);
    </script>


</body>


</html>
