@extends('layouts.guest')

@section('content')

    <!-- Start Topbar -->
    @include('layouts.partials.guest.topbar')

    <div x-data="contactFunctions">
        <div class="h-auto relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5" >
            <div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]">
                <div class="sm:p-[60px] p-9 border-2 border-gray/10 dark:border-gray/20 bg-white/10 dark:bg-white/[0.02] backdrop-blur-3xl max-w-[620px] mx-auto rounded-lg w-full">
                    <p class="text-3xl font-semibold">Contact</p>
                    <form class="mt-[60px] space-y-5" method="POST" x-on:submit.prevent="sendContactMail()" id="send_contact_email_form">
                        @csrf
                        <div class="relative">
                            <input type="text" id="fullname"
                                   x-model="fullname"
                                   class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14"
                                   placeholder="Fullname" name="fullname" required autofocus>
    {{--                        <x-input-error :messages="$errors->get('fullname')" class="mt-2" />--}}
                        </div>
                        <div class="relative">
                            <input type="email" id="email"
                                   x-model="email"
                                   class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14"
                                   placeholder="Email" name="email" required>
                        </div>

                        <div class="relative">
                            <textarea
                                x-model="message"
                                class="form-input h-[66px] bg-transparent dark:bg-transparent text-base rounded-[10px] ps-5 pe-14" id="message" name="message" rows="3" required placeholder="Message..."></textarea>
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

        <div>
            <div x-show="notificationOpen" class="bg-dark dark:text-dark dark:bg-white flex items-start gap-3 text-white py-3 px-4 rounded-md max-w-[250px] fixed bottom-5 right-5 z-[99999]" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <span>{{ __('messages.alert_title_sendemail') }}</span>
                <button type="button" x-on:click="notificationOpen = false" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                        <path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    @section('script')
    <script>
        window.contactFunctions = function () {
            return {
                fullname: null,
                email: null,
                message:null,
                notificationOpen: false,
                notificationTimer: null,
                showNotification() {
                    this.notificationOpen = true;

                    if(this.notificationOpen){
                        clearTimeout(this.notificationTimer)
                        this.notificationTimer = setTimeout(() => this.notificationOpen = false, 3000);
                    } else {
                        this.notificationOpen = true;
                        this.notificationTimer = setTimeout(() => this.notificationOpen = false, 3000);
                    }
                },
                async sendContactMail() {
                    try {
                        await fetch('{{ route("sendContactMail") }}', {
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-Token": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            },
                            method: "POST",
                            body: JSON.stringify({
                                fullname: this.fullname,
                                email: this.email,
                                message: this.message
                            })
                        })
                            .then((response) => response.json())
                            .then((res) => {
                                console.log(res)
                                if(res){
                                    this.showNotification()
                                    document.getElementById('send_contact_email_form').reset()
                                }
                            })
                            .catch((error) => {
                               console.log(error)
                            })
                    } catch (e) {
                        console.log(e)
                    }
                }
            }
        }

    </script>
    @endsection
    <!-- Start Topbar -->
    @include('layouts.partials.auth.footer')
    <!-- End Topbar -->


@endsection
