@extends('layouts.guest')

@section('content')

    <!-- Start Topbar -->
    @include('layouts.partials.guest.topbar')
    <!-- End Topbar -->
    <div class="h-auto relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5">
        <div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]">
            <div class="grid grid-cols-1 gap-5 text-start" x-data="{ output: 1 }">


                @include('docs.shorten')
                @include('docs.login')
                @include('docs.user')
                @include('docs.getUserLinks')
                @include('docs.getUserLinkTracking')
                @include('docs.getUserLinkTrackingByCode')
                @include('docs.trackLink')

            </div>

        </div>
    </div>

    <!-- Start Footer -->
    @include('layouts.partials.auth.footer')
    <!-- End Footer -->




@endsection
