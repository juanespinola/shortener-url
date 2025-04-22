<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.auth.head')

<body x-data="main" class="font-inter text-base antialiased font-medium relative vertical"
      :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.fullscreen ? 'full' : '',$store.app.mode]">
<!-- Start Layout -->
<div class="bg-white dark:bg-dark text-dark dark:text-white">

    @yield('content')

    <!-- Start Footer -->
{{--    @include('layouts.partials.auth.footer')--}}
    <!-- End Footer -->
</div>
<!-- All javascirpt -->
{{-- @include('layouts.partials.auth.scripts') --}}
<!-- End Layout -->
</body>
</html>
