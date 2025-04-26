@extends('layouts.guest')

@section('content')
    <!-- Start Topbar -->
    @include('layouts.partials.guest.topbar')
    <!-- End Topbar -->
    <main>
        <div class="h-auto relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5 bg-gray/[8%]">
            <div class="flex items-center gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]">

                <section class="container space-y-5">

                    <div class="grid grid-cols-1 gap-5">
                        <div class="rounded p-5 m-4">
                            <div class="text-center">
                                <p class="font-bold text-3xl">
                                    JustAnotherLinkCut
                                </p>
                                {{-- <p class="text-gray mt-5">{{ __('messages.description') }}</p> --}}
                                <p class="text-gray mt-5">{{ __('messages.meta_description') }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="grid grid-cols-1 gap-5">
                        <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                            <form class="space-y-4" action="{{ route('cut', ['locale' => app()->getLocale()]) }}"
                                method="POST">
                                @csrf
                                <input type="url" id="url" name="original_url" class="form-input"
                                    placeholder="https://..." required="">
                                <button
                                    class="btn border text-primary border-transparent rounded-md transition-all duration-300 hover:text-white hover:bg-primary bg-primary/10 w-full">
                                    {{ __('messages.button_submit') }}
                                </button>

                                <div class="h-[2px] bg-gray/10 dark:bg-gray/20 block my-[30px]"></div>
                                <div class="flex items-center gap-2 justify-start border-lightgray/10 dark:border-gray/20">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" id="chk_noexpiration" class="form-checkbox peer text-primary"
                                            name="no_expire" value="no_expire">
                                        <span class="text-sm peer-checked:text-primary">
                                            {{ __('messages.chk_noexpiration_label') }}</span>
                                    </label>

                                    <label class="inline-flex items-center">
                                        <input type="checkbox" id="chk_qrcode" class="form-checkbox peer text-primary"
                                            name="qr_code" value="no_expire">
                                        <span class="text-sm peer-checked:text-primary">
                                            {{ __('messages.chk_qrcode_label') }}</span>
                                    </label>

                                    <label class="inline-flex items-center">
                                        <input type="checkbox" id="chk_email" class="form-checkbox peer text-primary"
                                            name="send_email" value="no_expire">
                                        <span class="text-sm peer-checked:text-primary">
                                            {{ __('messages.chk_email_label') }}</span>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- <div class="grid grid-cols-1 gap-5">
                    <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
                        @include('description')
                    </div>
                </div> --}}

                </section>

            </div>
        </div>
    </main>
    <!-- Start Footer -->
    @include('layouts.partials.auth.footer')
    <!-- End Footer -->
@endsection
