@extends('layouts.guest')

@section('content')

    <!-- Start Topbar -->
    @include('layouts.partials.guest.topbar')
    <!-- End Topbar -->
    <div class="h-auto relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5">
        <div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]">

            <div class="mt-5">
                <p class="font-semibold text-3xl">Resources</p>
                <p class="text-gray mt-3 text-sm">You can access in all information of one or multiple links with the API. Learn how use all Endpoints.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                <a class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-5 space-y-2 w-full" href="{{ url('docs') }}">
                    <div class="flex justify-between gap-3">
                        <p class="text-3xl font-semibold">TrackList</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9"/></svg>
                    </div>
                    <p class="text-gray text-sm">Track your information of you URL, searching by the Short URL</p>
                </a>

                <a class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-5 space-y-2 w-full" href="{{ url('docs') }}">
                    <div class="flex justify-between gap-3">
                        <p class="text-3xl font-semibold">Auth</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9"/></svg>
                    </div>
                    <p class="text-gray text-sm">Login and see your list of Shorts URL</p>
                </a>

                <a class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-5 space-y-2 w-full" href="{{ url('docs') }}">
                    <div class="flex justify-between gap-3">
                        <p class="text-3xl font-semibold">Track My Short URL</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9"/></svg>
                    </div>
                    <p class="text-gray text-sm">Login, Track your URL Information </p>
                </a>

                <a class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-5 space-y-2 w-full" href="{{ url('docs') }}">
                    <div class="flex justify-between gap-3">
                        <p class="text-3xl font-semibold">Tracking All My Shorts URL's</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9"/></svg>
                    </div>
                    <p class="text-gray text-sm">Login and Track all your URL's Information.</p>
                </a>




            </div>

        </div>
    </div>

    <!-- Start Footer -->
    @include('layouts.partials.auth.footer')
    <!-- End Footer -->


@endsection
