@extends('layouts.guest')

@section('content')
    <div
        class="bg-white dark:bg-dark text-dark dark:text-white bg-[url('../images/autho-light-bg.png')] dark:bg-[url('../images/autho-dark-bg.png')] bg-fixed bg-cover bg-center min-h-screen">
        <!-- Start Content -->
        <div class="relative">
            <div class="md:p-10 p-6 flex items-center justify-center sm:justify-between w-full flex-wrap gap-5">
                <div></div>
                <div class="flex items-center gap-5">
                    <div class="text-lightgray hover:text-primary duration-300 md:block hidden">
                        <a href="javascript:;" x-show="$store.app.mode === 'light'" @click="$store.app.toggleMode('dark')"
                            style="display: none;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22 11.9999C22 17.5228 17.5228 21.9999 12 21.9999C10.8358 21.9999 9.71801 21.801 8.67887 21.4352C8.24138 20.3767 8 19.2165 8 17.9999C8 15.7787 8.80467 13.7454 10.1384 12.1757C11.31 13.8813 13.2744 14.9999 15.5 14.9999C17.8615 14.9999 19.9289 13.7405 21.0672 11.8568C21.3065 11.4607 22 11.5372 22 11.9999Z"
                                    fill="currentColor" />
                                <path
                                    d="M2 12C2 16.3586 4.78852 20.0659 8.67887 21.4353C8.24138 20.3768 8 19.2166 8 18C8 15.7788 8.80467 13.7455 10.1384 12.1758C9.42027 11.1303 9 9.86422 9 8.5C9 6.13845 10.2594 4.07105 12.1432 2.93276C12.5392 2.69347 12.4627 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <a href="javascript:;" x-show="$store.app.mode === 'dark'" @click="$store.app.toggleMode('light')">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 12C18 15.3137 15.3137 18 12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 1.25C12.4142 1.25 12.75 1.58579 12.75 2V3C12.75 3.41421 12.4142 3.75 12 3.75C11.5858 3.75 11.25 3.41421 11.25 3V2C11.25 1.58579 11.5858 1.25 12 1.25ZM1.25 12C1.25 11.5858 1.58579 11.25 2 11.25H3C3.41421 11.25 3.75 11.5858 3.75 12C3.75 12.4142 3.41421 12.75 3 12.75H2C1.58579 12.75 1.25 12.4142 1.25 12ZM20.25 12C20.25 11.5858 20.5858 11.25 21 11.25H22C22.4142 11.25 22.75 11.5858 22.75 12C22.75 12.4142 22.4142 12.75 22 12.75H21C20.5858 12.75 20.25 12.4142 20.25 12ZM12 20.25C12.4142 20.25 12.75 20.5858 12.75 21V22C12.75 22.4142 12.4142 22.75 12 22.75C11.5858 22.75 11.25 22.4142 11.25 22V21C11.25 20.5858 11.5858 20.25 12 20.25Z"
                                    fill="currentColor" />
                                <g opacity="0.3">
                                    <path
                                        d="M4.39838 4.39838C4.69127 4.10549 5.16615 4.10549 5.45904 4.39838L5.85188 4.79122C6.14477 5.08411 6.14477 5.55898 5.85188 5.85188C5.55898 6.14477 5.08411 6.14477 4.79122 5.85188L4.39838 5.45904C4.10549 5.16615 4.10549 4.69127 4.39838 4.39838Z"
                                        fill="currentColor" />
                                    <path
                                        d="M19.6009 4.39864C19.8938 4.69153 19.8938 5.16641 19.6009 5.4593L19.2081 5.85214C18.9152 6.14503 18.4403 6.14503 18.1474 5.85214C17.8545 5.55924 17.8545 5.08437 18.1474 4.79148L18.5402 4.39864C18.8331 4.10575 19.308 4.10575 19.6009 4.39864Z"
                                        fill="currentColor" />
                                    <path
                                        d="M18.1474 18.1474C18.4403 17.8545 18.9152 17.8545 19.2081 18.1474L19.6009 18.5402C19.8938 18.8331 19.8938 19.308 19.6009 19.6009C19.308 19.8938 18.8331 19.8938 18.5402 19.6009L18.1474 19.2081C17.8545 18.9152 17.8545 18.4403 18.1474 18.1474Z"
                                        fill="currentColor" />
                                    <path
                                        d="M5.85188 18.1477C6.14477 18.4406 6.14477 18.9154 5.85188 19.2083L5.45904 19.6012C5.16615 19.8941 4.69127 19.8941 4.39838 19.6012C4.10549 19.3083 4.10549 18.8334 4.39838 18.5405L4.79122 18.1477C5.08411 17.8548 5.55898 17.8548 5.85188 18.1477Z"
                                        fill="currentColor" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <p>Already have an account? <a href="{{ route('login') }}"
                            class="font-semibold underline underline-offset-4 text-success">Login</a></p>
                </div>
            </div>
            <div class="min-h-[calc(100vh-192px)] p-7 flex justify-center items-center">
                <div
                    class="sm:p-[60px] p-9 border-2 border-gray/10 dark:border-gray/20 bg-white/10 dark:bg-white/[0.02] backdrop-blur-3xl max-w-[620px] mx-auto rounded-lg w-full">
                    <p class="text-3xl font-semibold">Create Account!</p>
                    <p class="text-gray mt-5">Register to your account and join us</p>
                    <form class="mt-[60px] space-y-5" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="relative">
                            <input type="text" id="name" name="name"
                                class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14"
                                placeholder="Full Name">
                            <div class="text-primary absolute right-5 top-1/2 -translate-y-1/2">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="6" r="4" fill="currentColor"></circle>
                                        <ellipse opacity="0.3" cx="12" cy="17" rx="7" ry="4"
                                            fill="currentColor"></ellipse>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('name')" />
                        <div class="relative">
                            <input type="email" id="email" name="email"
                                class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14"
                                placeholder="Email">
                            <span class="text-primary absolute right-5 top-1/2 -translate-y-1/2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M14.2 3H9.8C5.65164 3 3.57746 3 2.28873 4.31802C1 5.63604 1 7.75736 1 12C1 16.2426 1 18.364 2.28873 19.682C3.57746 21 5.65164 21 9.8 21H14.2C18.3484 21 20.4225 21 21.7113 19.682C23 18.364 23 16.2426 23 12C23 7.75736 23 5.63604 21.7113 4.31802C20.4225 3 18.3484 3 14.2 3Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M19.1284 8.034C19.4784 7.74231 19.5257 7.22209 19.234 6.87206C18.9423 6.52204 18.4221 6.47474 18.0721 6.76643L15.6973 8.74542C14.671 9.60063 13.9585 10.1925 13.357 10.5794C12.7747 10.9539 12.3798 11.0796 12.0002 11.0796C11.6206 11.0796 11.2258 10.9539 10.6435 10.5794C10.0419 10.1925 9.32941 9.60063 8.30315 8.74542L5.92837 6.76643C5.57834 6.47474 5.05812 6.52204 4.76643 6.87206C4.47474 7.22209 4.52204 7.74231 4.87206 8.034L7.28821 10.0475C8.2632 10.86 9.05344 11.5185 9.75091 11.9671C10.4775 12.4344 11.185 12.7296 12.0002 12.7296C12.8154 12.7296 13.523 12.4344 14.2495 11.9671C14.947 11.5185 15.7372 10.86 16.7122 10.0474L19.1284 8.034Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </div>
                        <x-input-error :messages="$errors->get('email')" />
                        <div class="relative">
                            <input type="password" id="password" name="password"
                                class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14"
                                placeholder="Password">
                            <span class="text-primary absolute right-5 top-1/2 -translate-y-1/2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M2 12C2 13.6394 2.42496 14.1915 3.27489 15.2957C4.97196 17.5004 7.81811 20 12 20C16.1819 20 19.028 17.5004 20.7251 15.2957C21.575 14.1915 22 13.6394 22 12C22 10.3606 21.575 9.80853 20.7251 8.70433C19.028 6.49956 16.1819 4 12 4C7.81811 4 4.97196 6.49956 3.27489 8.70433C2.42496 9.80853 2 10.3606 2 12Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.25 12C8.25 9.92893 9.92893 8.25 12 8.25C14.0711 8.25 15.75 9.92893 15.75 12C15.75 14.0711 14.0711 15.75 12 15.75C9.92893 15.75 8.25 14.0711 8.25 12ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </div>
                        <x-input-error :messages="$errors->get('password')" />
                        <div class="relative">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14"
                                placeholder="Confirm Password">
                            <span class="text-primary absolute right-5 top-1/2 -translate-y-1/2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M2 12C2 13.6394 2.42496 14.1915 3.27489 15.2957C4.97196 17.5004 7.81811 20 12 20C16.1819 20 19.028 17.5004 20.7251 15.2957C21.575 14.1915 22 13.6394 22 12C22 10.3606 21.575 9.80853 20.7251 8.70433C19.028 6.49956 16.1819 4 12 4C7.81811 4 4.97196 6.49956 3.27489 8.70433C2.42496 9.80853 2 10.3606 2 12Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.25 12C8.25 9.92893 9.92893 8.25 12 8.25C14.0711 8.25 15.75 9.92893 15.75 12C15.75 14.0711 14.0711 15.75 12 15.75C9.92893 15.75 8.25 14.0711 8.25 12ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" />

                        <div class="!mt-[50px]">
                            <button
                                class="btn bg-primary py-6 uppercase tracking-widest font-bold text-sm rounded-[10px] text-white w-full hover:bg-primary/90 duration-300">
                                Create account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- Start Topbar -->
    @include('layouts.partials.auth.footer')
    <!-- End Topbar -->
@endsection
