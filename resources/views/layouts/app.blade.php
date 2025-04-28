<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.auth.head')


<body x-data="main" class="font-inter text-base antialiased font-medium relative vertical"
      :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.fullscreen ? 'full' : '',$store.app.mode]">

      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LSNLDJ7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<!-- Start Layout -->
<div class="bg-white dark:bg-dark text-dark dark:text-white">

    <!-- Start Menu Sidebar Olverlay -->
    <div x-cloak class="fixed inset-0 bg-dark/90 dark:bg-white/5 backdrop-blur-sm z-40 lg:hidden"
         :class="{'hidden' : !$store.app.sidebar}" @click="$store.app.toggleSidebar()"></div>
    <!-- End Menu Sidebar Olverlay -->

    <!-- Start Main Content -->
    <div class="main-container flex mx-auto">
        <!-- Start Sidebar -->
        @include('layouts.partials.auth.sidebar')
        <!-- End sidebar -->

        <!-- Start Content Area -->
        <div class="main-content flex-1">
            <!-- Start Topbar -->
            @include('layouts.partials.auth.topbar')
            <!-- End Topbar -->

            <!-- Start Content -->
            <div class="h-[calc(100vh-60px)] relative overflow-y-auto overflow-x-hidden p-5 sm:p-7 space-y-5">
                <main>
                <!-- Main Contenet -->
                @yield('content')
                
                </main>
                
                <!-- Start Footer -->
                @include('layouts.partials.auth.footer')
                <!-- End Footer -->

            </div>
            <!-- End Content -->
        </div>
        <!-- End Content Area -->
    </div>
</div>
<!-- End Layout -->

<!-- All javascirpt -->
@include('layouts.partials.auth.scripts')
</body>

</html>
