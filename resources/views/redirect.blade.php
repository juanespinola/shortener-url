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

        #container {
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

        #first-container {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
        }
    </style>
    @if (env('APP_ENV') !== 'local')
        {{-- <script src="https://alwingulla.com/88/tag.min.js" data-zone="116835" async data-cfasync="false"></script> --}}
    @endif

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4892518104055099"
    crossorigin="anonymous"></script>
</head>

<body>

    <main>
        <div class="container col-xl-10 col-xxl-8 px-4 py-4">
            <div class="row align-items-center g-lg-5 py-5">
               
                </div>
                <div id="container">
                    <div>
                       
                    </div>
                    <div>
                        <h2>{{ __('messages.redirecting') }}</h2>
                        <p>{{ __('messages.text_redirecting') }}<span id="countdown">7</span>
                            {{ __('messages.text_redirecting_seg') }}.</p>
                        <button id="redirectBtn" disabled>{{ __('messages.btn_redirect') }}</button>

                        <!-- Espacio para el anuncio -->
                        <div id="first-container">
                            {{-- <p>Publicidad</p> --}}
                          
                        </div>
                    </div>
                    <div>
                       
                    </div>
                </div>
                <div>
                  
                </div>
            </div>

            
            
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
                    // window.location.href = targetUrl;
                };
            }
        }, 1000);

        // Redirigir automáticamente después de 5 segundos
        setTimeout(() => {
        // window.location.href = targetUrl;
        }, 7000);
    </script>


</body>


</html>
