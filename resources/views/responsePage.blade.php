@extends('layouts.guest')

@section('content')

    <!-- Start Topbar -->
    @include('layouts.partials.guest.topbar')
    <!-- End Topbar -->
    <div x-data="responsePageFunctions">
        <div  class="h-auto relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5">
            <div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]">
                <div class="grid gap-5 justify-items-center">
                    <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg w-full">
                        <div class="space-y-3.5 w-full lg:w-1/2">
                            <div class="relative budget-input">
                                <label class="flex cursor-pointer rounded-lg justify-between bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 items-start gap-4 p-5">
                                    <div class="relative z-10 text-sm font-semibold w-full">
                                        <div class="flex">
                                            <input id="short-code-input-alltext" class="form-input rounded-r-none" value="{{ url('') }}/{{ $shortCode }}">
                                            <button class="rounded-l-none btn bg-primary border border-primary rounded-md text-white transition-all duration-300 hover:bg-primary/[0.85] hover:border-primary/[0.85]" id="copyOnClipboard_alltext" @click="copyOnClipboard">
                                                <i class="bi bi-clipboard"></i>
                                            </button>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                @if (!$no_expire)
                    <div class="grid grid-cols-1 gap-5">
                        <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                            <div class="text-center">
                                <h2 class="font-semibold">{{ __('messages.expired_title') }}</h2>
                                <p class="text-lightgray">
                                    {{ __('messages.expired_text') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="grid md:grid-cols-3 gap-5">
                    @if ($no_expire)
                        <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                            <div class="text-center">
                                <h2 class="font-semibold">{{ __('messages.noexpired_title') }}</h2>
                                <p class="text-lightgray">
                                    {{ __('messages.noexpired_text') }}
                                </p>
                            </div>
                        </div>
                    @endif

                    @if ($qr_code)
                    <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                        <div class="text-center">
                            <h2 class="font-semibold">Qr Code {{ __('messages.qrcode_for') }}</h2>
                           <div class="flex items-center justify-center" id="qrcode_content">
                               {{ $qr_code_image }}
                           </div>
                        </div>
                    </div>
                    @endif

                    @if ($send_email)
                    <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                        <div class="text-center">
                            <form class="space-y-5" method="POST" id="send_email_form" action="{{ route('sendQrCodeInMail', ['locale' => app()->getLocale()]) }}">
                                <h2 class="font-semibold">{{ __('messages.sendemail_title') }}</h2>
                               <div>
                                   <input class="form-input" type="email" id="user_name_input" name="user_mail" placeholder="Email@email.com">
                               </div>
                                <div>
                                    <button class="btn border text-primary border-transparent rounded-md transition-all duration-300 hover:text-white hover:bg-primary bg-primary/10 w-full" type="submit" @click.prevent="sendQrCodeInMail">{{ __('messages.sendemail_submit') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div>
            <div x-show="notificationOpen" class="bg-dark dark:text-dark dark:bg-white flex items-start gap-3 text-white py-3 px-4 rounded-md max-w-[250px] fixed bottom-5 right-5 z-[99999]" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <span>Mensaje Enviado Correctamente!</span>
                <button type="button" x-on:click="notificationOpen = false" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                        <path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div>

    <!-- Start Topbar -->
    @include('layouts.partials.auth.footer')
    <!-- End Topbar -->


@endsection
