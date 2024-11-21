@extends('layouts.guest')

@section('content')

    <!-- Start Topbar -->
    @include('layouts.partials.guest.topbar')

    <div  class="h-auto relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5">
        <div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]">
            <div class="sm:p-[60px] p-9 border-2 border-gray/10 dark:border-gray/20 bg-white/10 dark:bg-white/[0.02] backdrop-blur-3xl max-w-[620px] mx-auto rounded-lg w-full">
                <p class="text-3xl font-semibold">Contact</p>
                <form class="mt-[60px] space-y-5" method="POST" action="{{ route('sendContactMail') }}">
                    @csrf
                    <div class="relative">
                        <input type="text" id="fullname"
                               class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14"
                               placeholder="Fullname" name="fullname" required autofocus>
                        <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                    </div>
                    <div class="relative">
                        <input type="email" id="email"
                               class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14"
                               placeholder="Email" name="email" required>
                    </div>

                    <div class="relative">
                        <textarea class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14" id="message" name="message" rows="3" required placeholder="Message..."></textarea>
                    </div>

                    <div class="!mt-[50px]">
                        <button type="submit"
                            class="btn bg-primary py-6 uppercase tracking-widest font-bold text-sm rounded-[10px] text-white w-full hover:bg-primary/90 duration-300">
                            {{ __('messages.sendemail_submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Start Topbar -->
    @include('layouts.partials.auth.footer')
    <!-- End Topbar -->


@endsection
