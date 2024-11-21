<nav class="sidebar fixed z-50 flex-none w-[226px] border-r-2 border-lightgray/[8%] dark:border-gray/20 transition-all duration-300">
    <div class="bg-white dark:bg-dark h-full">
{{--        <div class="p-3.5">--}}
{{--            <a href="" class="main-logo w-full">--}}
{{--                <img src="{{ asset('assets/images/logo-dark.svg') }}" class="mx-auto dark-logo h-8 logo dark:hidden" alt="logo" />--}}
{{--                <img src="{{ asset('assets/images/logo-light.svg') }}" class="mx-auto light-logo h-8 logo hidden dark:block" alt="logo" />--}}
{{--                <img src="{{ asset('assets/images/logo-icon.svg') }}" class="logo-icon h-8 mx-auto hidden" alt="">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div></div>--}}
        <div class="flex items-center gap-2.5 py-2.5 pe-2.5">
            <div class="h-[2px] bg-lightgray/10 dark:bg-gray/50 block flex-1"></div>
            <button type="button" class="shrink-0 btn-toggle hover:text-primary duration-300" @click="$store.app.toggleSidebar()">
                <svg class="w-3.5" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2" d="M5.46133 6.00002L11.1623 12L12.4613 10.633L8.05922 6.00002L12.4613 1.36702L11.1623 0L5.46133 6.00002Z" fill="currentColor" />
                    <path d="M0 6.00002L5.70101 12L7 10.633L2.59782 6.00002L7 1.36702L5.70101 0L0 6.00002Z" fill="currentColor" />
                </svg>
            </button>
        </div>
        @php

        // Get the current path
        $currentPath = request()->path();

        if($currentPath == '/') {
            $activemenu = 'dashboard';
            $activeitem = 'analysis';
        }else{
            // Split the path by '/'

            $pathSegments = explode('/', $currentPath);

            // Set the variables based on the segments
            $activemenu = isset($pathSegments[0]) ? $pathSegments[0] : 'dashboard';
            $activeitem = isset($pathSegments[1]) ? $pathSegments[1] : 'analysis';
        }
        @endphp

        <div class="h-[calc(100vh-93px)] overflow-y-auto overflow-x-hidden space-y-16 px-4 pt-2 pb-4">
            <ul class="relative flex flex-col gap-1 text-sm" x-data="{ activeMenu: '{{$activemenu}}', activeItem:'{{$activeitem}}' }">
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'dashboard'}" @click="activeMenu === 'dashboard' ? activeMenu = null : activeMenu = 'dashboard'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M10.8939 22H13.1061C16.5526 22 18.2759 22 19.451 20.9882C20.626 19.9764 20.8697 18.2827 21.3572 14.8952L21.6359 12.9579C22.0154 10.3208 22.2051 9.00229 21.6646 7.87495C21.1242 6.7476 19.9738 6.06234 17.6731 4.69182L17.6731 4.69181L16.2882 3.86687C14.199 2.62229 13.1543 2 12 2C10.8457 2 9.80104 2.62229 7.71175 3.86687L6.32691 4.69181L6.32691 4.69181C4.02619 6.06234 2.87583 6.7476 2.33537 7.87495C1.79491 9.00229 1.98463 10.3208 2.36407 12.9579L2.64284 14.8952C3.13025 18.2827 3.37396 19.9764 4.54903 20.9882C5.72409 22 7.44737 22 10.8939 22Z" fill="currentColor" />
                                <path d="M9.44666 15.397C9.11389 15.1504 8.64418 15.2202 8.39752 15.5529C8.15086 15.8857 8.22067 16.3554 8.55343 16.6021C9.52585 17.3229 10.7151 17.7496 12 17.7496C13.285 17.7496 14.4742 17.3229 15.4467 16.6021C15.7794 16.3554 15.8492 15.8857 15.6026 15.5529C15.3559 15.2202 14.8862 15.1504 14.5534 15.397C13.8251 15.9369 12.9459 16.2496 12 16.2496C11.0541 16.2496 10.175 15.9369 9.44666 15.397Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Dashboard</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'dashboard'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'dashboard'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a :class="{'active': activeItem === 'analysis'}" href="" >Analysis</a></li>
                        <li><a :class="{'active': activeItem === 'ecommerce'}" href="">eCommerce</a></li>
                    </ul>
                </li> --}}
                <h2 class="pt-3.5 pb-2.5 text-gray text-xs">Apps</h2>
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'socialapps'}" @click="activeMenu === 'socialapps' ? activeMenu = null : activeMenu = 'socialapps'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 14C18 18.4183 14.4183 22 10 22C8.76449 22 7.5944 21.7199 6.54976 21.2198C6.19071 21.0479 5.78393 20.9876 5.39939 21.0904L4.17335 21.4185C3.20701 21.677 2.32295 20.793 2.58151 19.8267L2.90955 18.6006C3.01245 18.2161 2.95209 17.8093 2.7802 17.4502C2.28008 16.4056 2 15.2355 2 14C2 9.58172 5.58172 6 10 6C14.4183 6 18 9.58172 18 14ZM6.5 15C7.05228 15 7.5 14.5523 7.5 14C7.5 13.4477 7.05228 13 6.5 13C5.94772 13 5.5 13.4477 5.5 14C5.5 14.5523 5.94772 15 6.5 15ZM10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15ZM13.5 15C14.0523 15 14.5 14.5523 14.5 14C14.5 13.4477 14.0523 13 13.5 13C12.9477 13 12.5 13.4477 12.5 14C12.5 14.5523 12.9477 15 13.5 15Z" fill="currentColor" />
                                <path opacity="0.3" d="M17.9841 14.5084C18.092 14.4638 18.1985 14.4163 18.3033 14.3661C18.5951 14.2264 18.9256 14.1774 19.238 14.261L20.2342 14.5275C21.0193 14.7376 21.7376 14.0193 21.5275 13.2342L21.261 12.238C21.1774 11.9256 21.2264 11.595 21.3661 11.3033C21.7725 10.4545 22 9.50385 22 8.5C22 4.91015 19.0899 2 15.5 2C12.79 2 10.4673 3.6585 9.49158 6.0159C9.6597 6.00535 9.82924 6 10 6C14.4183 6 18 9.58172 18 14C18 14.1708 17.9947 14.3403 17.9841 14.5084Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Social Apps</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'socialapps'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'socialapps'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a :class="{'active': activeItem === 'compose'}" href="">Compose</a></li>
                        <li><a :class="{'active': activeItem === 'inbox'}" href="">Inbox</a></li>
                        <li><a :class="{'active': activeItem === 'chat'}" href="">Chat</a></li>
                    </ul>
                </li> --}}
                <li class="menu nav-item">
                    <a href="{{ route('dashboard', ['locale' => app()->getLocale()]) }}" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'dashboard'}" @click="activeMenu === 'dashboard' ? activeMenu = null : activeMenu = 'dashboard'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M17.5001 2.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5001 17.5H2.50008C2.03985 17.5 1.66675 17.1269 1.66675 16.6667V3.33333C1.66675 2.8731 2.03985 2.5 2.50008 2.5H17.5001Z" fill="currentColor"></path>
                                <path d="M17.5001 2.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5001 17.5H2.50008C2.03985 17.5 1.66675 17.1269 1.66675 16.6667V3.33333C1.66675 2.8731 2.03985 2.5 2.50008 2.5H17.5001ZM16.6667 13.3333H3.33341V15.8333H16.6667V13.3333ZM6.66675 4.16667H3.33341V11.6667H6.66675V4.16667ZM11.6667 4.16667H8.33341V11.6667H11.6667V4.16667ZM16.6667 4.16667H13.3334V11.6667H16.6667V4.16667Z" fill="currentColor"></path>
                            </svg>
                            <span class="pl-1.5">Dashboard</span>
                        </div>
                    </a>
                </li>
{{--                <li class="menu nav-item">--}}
{{--                    <a href="{{ route('dashboard', ['locale' => app()->getLocale()]) }}" class="nav-link group" :class="{'active' : activeMenu === 'my_links'}">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path opacity="0.3" d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z" fill="currentColor"></path>--}}
{{--                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 12C7.25 11.5858 7.58579 11.25 8 11.25H16C16.4142 11.25 16.75 11.5858 16.75 12C16.75 12.4142 16.4142 12.75 16 12.75H8C7.58579 12.75 7.25 12.4142 7.25 12Z" fill="currentColor"></path>--}}
{{--                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 8C7.25 7.58579 7.58579 7.25 8 7.25H16C16.4142 7.25 16.75 7.58579 16.75 8C16.75 8.41421 16.4142 8.75 16 8.75H8C7.58579 8.75 7.25 8.41421 7.25 8Z" fill="currentColor"></path>--}}
{{--                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 16C7.25 15.5858 7.58579 15.25 8 15.25H13C13.4142 15.25 13.75 15.5858 13.75 16C13.75 16.4142 13.4142 16.75 13 16.75H8C7.58579 16.75 7.25 16.4142 7.25 16Z" fill="currentColor"></path>--}}
{{--                            </svg>--}}
{{--                            <span class="pl-1.5">Mis Links</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}

                {{-- <h2 class="pt-3.5 pb-2.5 text-gray text-xs">More</h2> --}}
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'components'}" @click="activeMenu === 'components' ? activeMenu = null : activeMenu = 'components'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.42229 20.618C10.1779 21.5393 11.0557 22 12 22V12L2.63802 7.07264C2.62423 7.09479 2.6107 7.11716 2.5974 7.13974C2 8.15425 2 9.41667 2 11.9415V12.0585C2 14.5833 2 15.8458 2.5974 16.8603C3.19479 17.8748 4.27063 18.4393 6.42229 19.5685L8.42229 20.618Z" fill="currentColor" />
                                <path opacity="0.5" d="M17.5774 4.43152L15.5774 3.38197C13.8218 2.46066 12.944 2 11.9997 2C11.0554 2 10.1776 2.46066 8.42197 3.38197L6.42197 4.43152C4.31821 5.53552 3.24291 6.09982 2.6377 7.07264L11.9997 12L21.3617 7.07264C20.7564 6.09982 19.6811 5.53552 17.5774 4.43152Z" fill="currentColor" />
                                <path opacity="0.3" d="M21.4026 7.13986C21.3893 7.11727 21.3758 7.09491 21.362 7.07275L12 12.0001V22.0001C12.9443 22.0001 13.8221 21.5395 15.5777 20.6181L17.5777 19.5686C19.7294 18.4395 20.8052 17.8749 21.4026 16.8604C22 15.8459 22 14.5834 22 12.0586V11.9416C22 9.41678 22 8.15436 21.4026 7.13986Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Components</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'components'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'components'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a :class="{'active': activeItem === 'accordions'}" href="">Accordions</a></li>
                        <li><a :class="{'active': activeItem === 'tabs'}" href="">Tabs</a></li>
                        <li><a :class="{'active': activeItem === 'modal'}" href="">Modal</a></li>
                        <li><a :class="{'active': activeItem === 'notification'}" href="">Notification</a></li>
                        <li><a :class="{'active': activeItem === 'lightbox'}" href="">Lightbox</a></li>
                        <li><a :class="{'active': activeItem === 'swiper'}" href="">Swiper</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'element'}" @click="activeMenu === 'element' ? activeMenu = null : activeMenu = 'element'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.73167 5.77133L5.66953 9.91436C4.3848 11.6526 3.74244 12.5217 4.09639 13.205C4.10225 13.2164 4.10829 13.2276 4.1145 13.2387C4.48945 13.9117 5.59888 13.9117 7.81775 13.9117C9.05079 13.9117 9.6673 13.9117 10.054 14.2754L10.074 14.2946L13.946 9.72466L13.926 9.70541C13.5474 9.33386 13.5474 8.74151 13.5474 7.55682V7.24712C13.5474 3.96249 13.5474 2.32018 12.6241 2.03721C11.7007 1.75425 10.711 3.09327 8.73167 5.77133Z" fill="currentColor" />
                                <path opacity="0.3" d="M10.4527 16.4432L10.4527 16.7528C10.4527 20.0374 10.4527 21.6798 11.376 21.9627C12.2994 22.2457 13.2891 20.9067 15.2685 18.2286L18.3306 14.0856C19.6154 12.3474 20.2577 11.4783 19.9038 10.7949C19.8979 10.7836 19.8919 10.7724 19.8857 10.7613C19.5107 10.0883 18.4013 10.0883 16.1824 10.0883C14.9494 10.0883 14.3329 10.0883 13.9462 9.72461L10.0742 14.2946C10.4528 14.6661 10.4527 15.2585 10.4527 16.4432Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">UI Elements</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'element'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'element'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a :class="{'active': activeItem === 'alert'}" href="{{ route('alert') }}">Alert</a></li>
                        <li><a :class="{'active': activeItem === 'avatar'}" href="{{ route('avatar') }}">Avatar</a></li>
                        <li><a :class="{'active': activeItem === 'buttons'}" href="{{ route('buttons') }}">Buttons</a></li>
                        <li><a :class="{'active': activeItem === 'badges'}" href="{{ route('badges') }}">Badges</a></li>
                        <li><a :class="{'active': activeItem === 'breadcrumb'}" href="{{ route('breadcrumb') }}">Breadcrumb</a></li>
                        <li><a :class="{'active': activeItem === 'dropdowns'}" href="{{ route('dropdowns') }}">Dropdowns</a></li>
                        <li><a :class="{'active': activeItem === 'loader'}" href="{{ route('loader') }}">Loader</a></li>
                        <li><a :class="{'active': activeItem === 'pagination'}" href="{{ route('pagination') }}">Pagination</a></li>
                        <li><a :class="{'active': activeItem === 'progressbar'}" href="{{ route('progressbar') }}">Progress Bar</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="{{ route('chart') }}" class="nav-link group" :class="{'active' : activeMenu === 'chart'}">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M6.22209 4.60104C6.66665 4.30399 7.13344 4.04635 7.6171 3.82975C8.98898 3.21538 9.67491 2.90819 10.5875 3.4994C11.5 4.0906 11.5 5.0604 11.5 7V8.5C11.5 10.3856 11.5 11.3284 12.0858 11.9142C12.6716 12.5 13.6144 12.5 15.5 12.5H17C18.9396 12.5 19.9094 12.5 20.5006 13.4125C21.0918 14.3251 20.7846 15.011 20.1702 16.3829C19.9536 16.8666 19.696 17.3333 19.399 17.7779C18.3551 19.3402 16.8714 20.5578 15.1355 21.2769C13.3996 21.9959 11.4895 22.184 9.64665 21.8175C7.80383 21.4509 6.11109 20.5461 4.78249 19.2175C3.45389 17.8889 2.5491 16.1962 2.18254 14.3534C1.81598 12.5105 2.00412 10.6004 2.72315 8.8645C3.44218 7.12861 4.65982 5.64491 6.22209 4.60104Z" fill="currentColor" />
                                <path d="M21.446 7.06899C20.6342 5.0083 18.9917 3.36577 16.931 2.55397C15.3895 1.94668 14 3.34315 14 5V9C14 9.55229 14.4477 10 15 10H19C20.6569 10 22.0533 8.61054 21.446 7.06899Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Chart</span>
                        </div>
                    </a>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="{{ route('fonticons') }}" class="nav-link group" :class="{'active' : activeMenu === 'fonticons'}">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25 9C8.25 8.58579 8.58579 8.25 9 8.25H15C15.4142 8.25 15.75 8.58579 15.75 9C15.75 9.41421 15.4142 9.75 15 9.75H12.75V15C12.75 15.4142 12.4142 15.75 12 15.75C11.5858 15.75 11.25 15.4142 11.25 15V9.75H9C8.58579 9.75 8.25 9.41421 8.25 9Z" fill="currentColor" />
                                <path d="M4 6C5.10457 6 6 5.10457 6 4C6 2.89543 5.10457 2 4 2C2.89543 2 2 2.89543 2 4C2 5.10457 2.89543 6 4 6Z" fill="currentColor" />
                                <path d="M4 22C5.10457 22 6 21.1046 6 20C6 18.8954 5.10457 18 4 18C2.89543 18 2 18.8954 2 20C2 21.1046 2.89543 22 4 22Z" fill="currentColor" />
                                <path d="M22 4C22 5.10457 21.1046 6 20 6C18.8954 6 18 5.10457 18 4C18 2.89543 18.8954 2 20 2C21.1046 2 22 2.89543 22 4Z" fill="currentColor" />
                                <path d="M20 22C21.1046 22 22 21.1046 22 20C22 18.8954 21.1046 18 20 18C18.8954 18 18 18.8954 18 20C18 21.1046 18.8954 22 20 22Z" fill="currentColor" />
                                <g opacity="0.3">
                                    <path d="M4.75 5.85462C4.51839 5.94837 4.26523 6 4 6C3.73477 6 3.48161 5.94837 3.25 5.85462V18.1454C3.48161 18.0516 3.73477 18 4 18C4.26523 18 4.51839 18.0516 4.75 18.1454V5.85462Z" fill="currentColor" />
                                    <path d="M5.85462 4.75H18.1454C18.0516 4.51839 18 4.26523 18 4C18 3.73477 18.0516 3.48161 18.1454 3.25H5.85462C5.94837 3.48161 6 3.73477 6 4C6 4.26523 5.94837 4.51839 5.85462 4.75Z" fill="currentColor" />
                                    <path d="M19.25 5.85462C19.4816 5.94837 19.7348 6 20 6C20.2652 6 20.5184 5.94837 20.75 5.85462V18.1454C20.5184 18.0516 20.2652 18 20 18C19.7348 18 19.4816 18.0516 19.25 18.1454V5.85462Z" fill="currentColor" />
                                    <path d="M18.1454 19.25H5.85462C5.94837 19.4816 6 19.7348 6 20C6 20.2652 5.94837 20.5184 5.85462 20.75H18.1454C18.0516 20.5184 18 20.2652 18 20C18 19.7348 18.0516 19.4816 18.1454 19.25Z" fill="currentColor" />
                                </g>
                            </svg>
                            <span class="pl-1.5">Font Icons</span>
                        </div>
                    </a>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="{{ route('dragdrop') }}" class="nav-link group" :class="{'active' : activeMenu === 'dragdrop'}">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99951 1.25049C10.4137 1.25049 10.7495 1.58628 10.7495 2.00049V2.0569C10.7495 3.89466 10.7495 5.3503 10.5964 6.48951C10.4387 7.66193 10.1066 8.61088 9.35827 9.35925C8.60991 10.1076 7.66096 10.4397 6.48853 10.5974C5.34932 10.7505 3.89368 10.7505 2.05592 10.7505H1.99951C1.5853 10.7505 1.24951 10.4147 1.24951 10.0005C1.24951 9.58628 1.5853 9.25049 1.99951 9.25049C3.90633 9.25049 5.261 9.2489 6.28866 9.11073C7.29475 8.97546 7.8744 8.7218 8.29761 8.29859C8.72082 7.87538 8.97449 7.29573 9.10975 6.28964C9.24792 5.26198 9.24951 3.90731 9.24951 2.00049C9.24951 1.58628 9.5853 1.25049 9.99951 1.25049ZM21.9431 13.2505H21.9995C22.4137 13.2505 22.7495 13.5863 22.7495 14.0005C22.7495 14.4147 22.4137 14.7505 21.9995 14.7505C20.0927 14.7505 18.738 14.7521 17.7104 14.8902C16.7043 15.0255 16.1246 15.2792 15.7014 15.7024C15.2782 16.1256 15.0245 16.7052 14.8893 17.7113C14.7511 18.739 14.7495 20.0937 14.7495 22.0005C14.7495 22.4147 14.4137 22.7505 13.9995 22.7505C13.5853 22.7505 13.2495 22.4147 13.2495 22.0005V21.9441C13.2495 20.1063 13.2495 18.6507 13.4026 17.5115C13.5603 16.339 13.8924 15.3901 14.6408 14.6417C15.3891 13.8934 16.3381 13.5613 17.5105 13.4036C18.6497 13.2505 20.1053 13.2505 21.9431 13.2505Z" fill="currentColor" />
                                <g opacity="0.3">
                                    <path d="M13.9995 1.25049C14.4137 1.25049 14.7495 1.58627 14.7495 2.00049C14.7495 3.90731 14.7511 5.26198 14.8893 6.28964C15.0245 7.29573 15.2782 7.87538 15.7014 8.29859C16.1246 8.7218 16.7043 8.97546 17.7104 9.11073C18.738 9.2489 20.0927 9.25049 21.9995 9.25049C22.4137 9.25049 22.7495 9.58628 22.7495 10.0005C22.7495 10.4147 22.4137 10.7505 21.9995 10.7505H21.9431C20.1053 10.7505 18.6497 10.7505 17.5105 10.5974C16.3381 10.4397 15.3891 10.1076 14.6408 9.35925C13.8924 8.61088 13.5603 7.66193 13.4026 6.48951C13.2495 5.3503 13.2495 3.89466 13.2495 2.0569V2.00049C13.2495 1.58627 13.5853 1.25049 13.9995 1.25049Z" fill="currentColor" />
                                    <path d="M1.24951 14.0005C1.24951 13.5863 1.5853 13.2505 1.99951 13.2505H2.05592C3.89368 13.2505 5.34932 13.2505 6.48853 13.4036C7.66096 13.5613 8.60991 13.8934 9.35827 14.6417C10.1066 15.3901 10.4387 16.339 10.5964 17.5115C10.7495 18.6507 10.7495 20.1063 10.7495 21.9441V22.0005C10.7495 22.4147 10.4137 22.7505 9.99951 22.7505C9.5853 22.7505 9.24951 22.4147 9.24951 22.0005C9.24951 20.0937 9.24792 18.739 9.10975 17.7113C8.97449 16.7052 8.72082 16.1256 8.29761 15.7024C7.8744 15.2792 7.29475 15.0255 6.28866 14.8902C5.261 14.7521 3.90633 14.7505 1.99951 14.7505C1.5853 14.7505 1.24951 14.4147 1.24951 14.0005Z" fill="currentColor" />
                                </g>
                            </svg>
                            <span class="pl-1.5">Drag & Drop</span>
                        </div>
                    </a>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'tables'}" @click="activeMenu === 'tables' ? activeMenu = null : activeMenu = 'tables'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M17.5001 2.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5001 17.5H2.50008C2.03985 17.5 1.66675 17.1269 1.66675 16.6667V3.33333C1.66675 2.8731 2.03985 2.5 2.50008 2.5H17.5001Z" fill="currentColor" />
                                <path d="M17.5001 2.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5001 17.5H2.50008C2.03985 17.5 1.66675 17.1269 1.66675 16.6667V3.33333C1.66675 2.8731 2.03985 2.5 2.50008 2.5H17.5001ZM16.6667 13.3333H3.33341V15.8333H16.6667V13.3333ZM6.66675 4.16667H3.33341V11.6667H6.66675V4.16667ZM11.6667 4.16667H8.33341V11.6667H11.6667V4.16667ZM16.6667 4.16667H13.3334V11.6667H16.6667V4.16667Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Tables</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'tables'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'tables'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a :class="{'active': activeItem === 'basictable'}" href="{{ route('basicTable') }}">Basic Table</a></li>
                        <li><a :class="{'active': activeItem === 'datatable'}" href="{{ route('dataTable') }}">Data Table</a></li>
                        <li><a :class="{'active': activeItem === 'eidtabletable'}" href="{{ route('eidtableTable') }}">Editable Table</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'forms'}" @click="activeMenu === 'forms' ? activeMenu = null : activeMenu = 'forms'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M16.25 3.75V16.875C16.25 17.0408 16.1842 17.1997 16.0669 17.3169C15.9497 17.4342 15.7908 17.5 15.625 17.5H4.375C4.20924 17.5 4.05027 17.4342 3.93306 17.3169C3.81585 17.1997 3.75 17.0408 3.75 16.875V3.75C3.75 3.58424 3.81585 3.42527 3.93306 3.30806C4.05027 3.19085 4.20924 3.125 4.375 3.125H7.5C7.09344 3.66547 6.87404 4.32369 6.875 5V5.625H13.125V5C13.126 4.32369 12.9066 3.66547 12.5 3.125H15.625C15.7908 3.125 15.9497 3.19085 16.0669 3.30806C16.1842 3.42527 16.25 3.58424 16.25 3.75Z" fill="currentColor" />
                                <path d="M13.125 11.875C13.125 12.0408 13.0592 12.1997 12.9419 12.317C12.8247 12.4342 12.6658 12.5 12.5 12.5H7.5C7.33424 12.5 7.17527 12.4342 7.05806 12.317C6.94085 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.94085 11.5503 7.05806 11.4331C7.17527 11.3159 7.33424 11.25 7.5 11.25H12.5C12.6658 11.25 12.8247 11.3159 12.9419 11.4331C13.0592 11.5503 13.125 11.7092 13.125 11.875ZM12.5 8.75001H7.5C7.33424 8.75001 7.17527 8.81586 7.05806 8.93307C6.94085 9.05028 6.875 9.20925 6.875 9.37501C6.875 9.54077 6.94085 9.69974 7.05806 9.81695C7.17527 9.93416 7.33424 10 7.5 10H12.5C12.6658 10 12.8247 9.93416 12.9419 9.81695C13.0592 9.69974 13.125 9.54077 13.125 9.37501C13.125 9.20925 13.0592 9.05028 12.9419 8.93307C12.8247 8.81586 12.6658 8.75001 12.5 8.75001ZM16.875 3.75001V16.875C16.875 17.2065 16.7433 17.5245 16.5089 17.7589C16.2745 17.9933 15.9565 18.125 15.625 18.125H4.375C4.04348 18.125 3.72554 17.9933 3.49112 17.7589C3.2567 17.5245 3.125 17.2065 3.125 16.875V3.75001C3.125 3.41849 3.2567 3.10055 3.49112 2.86613C3.72554 2.63171 4.04348 2.50001 4.375 2.50001H7.20781C7.55899 2.10682 7.98924 1.79224 8.47041 1.57685C8.95158 1.36146 9.47282 1.25012 10 1.25012C10.5272 1.25012 11.0484 1.36146 11.5296 1.57685C12.0108 1.79224 12.441 2.10682 12.7922 2.50001H15.625C15.9565 2.50001 16.2745 2.63171 16.5089 2.86613C16.7433 3.10055 16.875 3.41849 16.875 3.75001ZM7.5 5.00001H12.5C12.5 4.33697 12.2366 3.70108 11.7678 3.23224C11.2989 2.7634 10.663 2.50001 10 2.50001C9.33696 2.50001 8.70107 2.7634 8.23223 3.23224C7.76339 3.70108 7.5 4.33697 7.5 5.00001ZM15.625 3.75001H13.5352C13.6773 4.15143 13.75 4.57416 13.75 5.00001V5.62501C13.75 5.79077 13.6842 5.94974 13.5669 6.06695C13.4497 6.18416 13.2908 6.25001 13.125 6.25001H6.875C6.70924 6.25001 6.55027 6.18416 6.43306 6.06695C6.31585 5.94974 6.25 5.79077 6.25 5.62501V5.00001C6.25001 4.57416 6.32267 4.15143 6.46484 3.75001H4.375V16.875H15.625V3.75001Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Forms</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'forms'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'forms'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a :class="{'active': activeItem === 'basic'}" href="{{ route('basic') }}">Basic</a></li>
                        <li><a :class="{'active': activeItem === 'inputgroup'}" href="{{ route('inputGroup') }}">Input Group</a></li>
                        <li><a :class="{'active': activeItem === 'validation'}" href="{{ route('validation') }}">Validation</a></li>
                        <li><a :class="{'active': activeItem === 'checkbox'}" href="{{ route('checkbox') }}">Checkbox</a></li>
                        <li><a :class="{'active': activeItem === 'radio'}" href="{{ route('radio') }}">Radio</a></li>
                        <li><a :class="{'active': activeItem === 'switches'}" href="{{ route('switches') }}">Switches</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'invoice'}" @click="activeMenu === 'invoice' ? activeMenu = null : activeMenu = 'invoice'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M21 18C21 18.5967 20.7629 19.169 20.341 19.591C19.919 20.0129 19.3467 20.25 18.75 20.25H8.25C8.84674 20.25 9.41903 20.0129 9.84099 19.591C10.2629 19.169 10.5 18.5967 10.5 18C10.5 17.0625 9.75 16.5 9.75 16.5H20.25C20.25 16.5 21 17.0625 21 18Z" fill="currentColor" />
                                <path d="M9 9.75C9 9.55109 9.07902 9.36032 9.21967 9.21967C9.36032 9.07902 9.55109 9 9.75 9H15.75C15.9489 9 16.1397 9.07902 16.2803 9.21967C16.421 9.36032 16.5 9.55109 16.5 9.75C16.5 9.94891 16.421 10.1397 16.2803 10.2803C16.1397 10.421 15.9489 10.5 15.75 10.5H9.75C9.55109 10.5 9.36032 10.421 9.21967 10.2803C9.07902 10.1397 9 9.94891 9 9.75ZM9.75 13.5H15.75C15.9489 13.5 16.1397 13.421 16.2803 13.2803C16.421 13.1397 16.5 12.9489 16.5 12.75C16.5 12.5511 16.421 12.3603 16.2803 12.2197C16.1397 12.079 15.9489 12 15.75 12H9.75C9.55109 12 9.36032 12.079 9.21967 12.2197C9.07902 12.3603 9 12.5511 9 12.75C9 12.9489 9.07902 13.1397 9.21967 13.2803C9.36032 13.421 9.55109 13.5 9.75 13.5ZM21.75 18C21.75 18.7956 21.4339 19.5587 20.8713 20.1213C20.3087 20.6839 19.5456 21 18.75 21H8.25C7.45435 21 6.69129 20.6839 6.12868 20.1213C5.56607 19.5587 5.25 18.7956 5.25 18V6C5.25 5.60218 5.09196 5.22064 4.81066 4.93934C4.52936 4.65804 4.14782 4.5 3.75 4.5C3.35218 4.5 2.97064 4.65804 2.68934 4.93934C2.40804 5.22064 2.25 5.60218 2.25 6C2.25 6.53812 2.70281 6.90188 2.7075 6.90563C2.83163 7.00115 2.92273 7.13313 2.96804 7.28306C3.01334 7.43299 3.01057 7.59335 2.96011 7.74162C2.90965 7.8899 2.81404 8.01866 2.68668 8.10983C2.55933 8.201 2.40663 8.25002 2.25 8.25C2.08781 8.25028 1.93003 8.19725 1.80094 8.09906C1.69219 8.01937 0.75 7.27594 0.75 6C0.75 5.20435 1.06607 4.44129 1.62868 3.87868C2.19129 3.31607 2.95435 3 3.75 3H16.5C17.2956 3 18.0587 3.31607 18.6213 3.87868C19.1839 4.44129 19.5 5.20435 19.5 6V15.75H20.25C20.4123 15.75 20.5702 15.8026 20.7 15.9C20.8125 15.9806 21.75 16.7241 21.75 18ZM9.02438 16.2637C9.07562 16.1125 9.17342 15.9813 9.30376 15.889C9.4341 15.7968 9.59031 15.7481 9.75 15.75H18V6C18 5.60218 17.842 5.22064 17.5607 4.93934C17.2794 4.65804 16.8978 4.5 16.5 4.5H6.34594C6.61119 4.95535 6.75064 5.47302 6.75 6V18C6.75 18.3978 6.90804 18.7794 7.18934 19.0607C7.47064 19.342 7.85218 19.5 8.25 19.5C8.64782 19.5 9.02936 19.342 9.31066 19.0607C9.59196 18.7794 9.75 18.3978 9.75 18C9.75 17.4619 9.29719 17.0981 9.2925 17.0944C9.16469 17.0029 9.06963 16.8729 9.02136 16.7233C8.97308 16.5738 8.97414 16.4127 9.02438 16.2637ZM20.25 18C20.2406 17.7221 20.1334 17.4565 19.9472 17.25H11.1347C11.2101 17.4929 11.2483 17.7457 11.2481 18C11.2488 18.5267 11.1101 19.0443 10.8459 19.5H18.75C19.1478 19.5 19.5294 19.342 19.8107 19.0607C20.092 18.7794 20.25 18.3978 20.25 18Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Invoice</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'invoice'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'invoice'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a :class="{'active': activeItem === 'invoice'}" href="{{ route('invoice') }}">Invoice</a></li>
                        <li><a :class="{'active': activeItem === 'invoiceadd'}" href="{{ route('invoiceAdd') }}">Invoice Add</a></li>
                        <li><a :class="{'active': activeItem === 'invoicelist'}" href="{{ route('invoiceList') }}">Invoice List</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'profilesetting'}" @click="activeMenu === 'profilesetting' ? activeMenu = null : activeMenu = 'profilesetting'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.3" cx="12" cy="6" r="4" fill="currentColor" />
                                <ellipse cx="12" cy="17" rx="7" ry="4" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">User Profile</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'profilesetting'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'profilesetting'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a :class="{'active': activeMenu === 'profilesetting'}" href="{{ route('profileSetting') }}">Profile Setting</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'pages'}" @click="activeMenu === 'pages' ? activeMenu = null : activeMenu = 'pages'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z" fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 12C7.25 11.5858 7.58579 11.25 8 11.25H16C16.4142 11.25 16.75 11.5858 16.75 12C16.75 12.4142 16.4142 12.75 16 12.75H8C7.58579 12.75 7.25 12.4142 7.25 12Z" fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 8C7.25 7.58579 7.58579 7.25 8 7.25H16C16.4142 7.25 16.75 7.58579 16.75 8C16.75 8.41421 16.4142 8.75 16 8.75H8C7.58579 8.75 7.25 8.41421 7.25 8Z" fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 16C7.25 15.5858 7.58579 15.25 8 15.25H13C13.4142 15.25 13.75 15.5858 13.75 16C13.75 16.4142 13.4142 16.75 13 16.75H8C7.58579 16.75 7.25 16.4142 7.25 16Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Pages</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'pages'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'pages'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a :class="{'active': activeItem === 'starterpage'}" href="{{ route('starterPage') }}">Starter Page</a></li>
                        <li><a :class="{'active': activeItem === 'pricing'}" href="{{ route('pricing') }}">Pricing</a></li>
                        <li><a :class="{'active': activeItem === 'comingsoon'}" href="{{ route('comingsoon') }}">Coming Soon</a></li>
                        <li><a  href="{{ route('maintenance') }}">Maintenance</a></li>
                        <li><a  href="{{ route('error404') }}">404 Error</a></li>
                        <li><a  href="{{ route('error500') }}">500 Error</a></li>
                        <li><a  href="{{ route('error503') }}">503 Error</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="javaScript:;" class="nav-link group items-center justify-between" :class="{'active' : activeMenu === 'authentication'}" @click="activeMenu === 'authentication' ? activeMenu = null : activeMenu = 'authentication'">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M21 12C21 13.78 20.4722 15.5201 19.4832 17.0001C18.4943 18.4802 17.0887 19.6337 15.4442 20.3149C13.7996 20.9961 11.99 21.1743 10.2442 20.8271C8.49836 20.4798 6.89472 19.6226 5.63604 18.364C4.37737 17.1053 3.5202 15.5016 3.17294 13.7558C2.82567 12.01 3.0039 10.2004 3.68509 8.55585C4.36628 6.91131 5.51983 5.50571 6.99987 4.51677C8.47991 3.52784 10.22 3 12 3C14.387 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z" fill="currentColor" />
                                <path d="M17.25 12C17.2552 15.0305 16.6646 18.0324 15.5119 20.835C15.456 20.9733 15.3601 21.0917 15.2365 21.1752C15.1129 21.2587 14.9673 21.3035 14.8181 21.3038C14.7217 21.3028 14.6263 21.2838 14.5369 21.2475C14.4457 21.2101 14.3627 21.155 14.2928 21.0855C14.2229 21.016 14.1673 20.9334 14.1294 20.8424C14.0914 20.7514 14.0718 20.6538 14.0715 20.5552C14.0713 20.4566 14.0906 20.359 14.1281 20.2678C15.2056 17.6449 15.7567 14.8356 15.75 12C15.75 11.8011 15.829 11.6103 15.9697 11.4697C16.1103 11.329 16.3011 11.25 16.5 11.25C16.6989 11.25 16.8897 11.329 17.0303 11.4697C17.171 11.6103 17.25 11.8011 17.25 12ZM12 8.25001C12.5275 8.25038 13.0489 8.36185 13.5305 8.57717C14.012 8.79249 14.4427 9.10682 14.7947 9.49969C14.8599 9.57487 14.9393 9.63633 15.0285 9.6805C15.1177 9.72466 15.2147 9.75064 15.314 9.75692C15.4133 9.76321 15.5129 9.74968 15.6069 9.71711C15.7009 9.68455 15.7875 9.6336 15.8616 9.56724C15.9357 9.50088 15.9959 9.42044 16.0387 9.33059C16.0814 9.24074 16.1058 9.14329 16.1106 9.04391C16.1153 8.94452 16.1001 8.8452 16.0661 8.75171C16.032 8.65823 15.9797 8.57245 15.9122 8.49938C15.2032 7.70718 14.2705 7.14887 13.2373 6.89832C12.2042 6.64776 11.1193 6.71676 10.1262 7.09619C9.13315 7.47562 8.27865 8.1476 7.67579 9.02324C7.07292 9.89888 6.75009 10.9369 6.75001 12C6.74991 14.1596 6.20153 16.2837 5.15626 18.1734C5.10849 18.2596 5.07816 18.3544 5.06701 18.4523C5.05586 18.5502 5.0641 18.6493 5.09126 18.744C5.11842 18.8387 5.16397 18.9272 5.22531 19.0043C5.28665 19.0814 5.36258 19.1457 5.44876 19.1934C5.53494 19.2412 5.62968 19.2715 5.72758 19.2827C5.82548 19.2938 5.92462 19.2856 6.01933 19.2584C6.11405 19.2313 6.20249 19.1857 6.2796 19.1244C6.35671 19.0631 6.42099 18.9871 6.46876 18.9009C7.63692 16.7884 8.2498 14.414 8.25001 12C8.25001 11.0054 8.64509 10.0516 9.34836 9.34836C10.0516 8.6451 11.0054 8.25001 12 8.25001ZM12 2.25001C10.8929 2.24867 9.79365 2.43637 8.74969 2.80501C8.5655 2.87387 8.41572 3.01232 8.33262 3.19055C8.24951 3.36877 8.23972 3.5725 8.30536 3.75786C8.371 3.94323 8.50682 4.0954 8.68356 4.18161C8.86031 4.26781 9.06383 4.28115 9.25032 4.21876C10.4949 3.77991 11.8266 3.64586 13.1337 3.82785C14.4407 4.00983 15.6851 4.50256 16.7625 5.2647C17.8399 6.02684 18.7188 7.03618 19.3256 8.20809C19.9324 9.38 20.2494 10.6803 20.25 12C20.2509 13.9628 20.0327 15.9197 19.5994 17.8341C19.5553 18.0276 19.5898 18.2307 19.6952 18.3989C19.8007 18.5671 19.9685 18.6866 20.1619 18.7313C20.2166 18.7439 20.2726 18.7502 20.3288 18.75C20.4988 18.75 20.6638 18.6921 20.7967 18.586C20.9295 18.4799 21.0224 18.3318 21.06 18.1659C21.5181 16.1426 21.7496 14.0746 21.75 12C21.7473 9.41498 20.7192 6.93662 18.8913 5.10873C17.0634 3.28084 14.585 2.25274 12 2.25001ZM6.49782 5.85188C6.57126 5.7862 6.63104 5.7067 6.67375 5.61791C6.71646 5.52913 6.74127 5.4328 6.74675 5.33443C6.75224 5.23605 6.73829 5.13757 6.70571 5.04458C6.67314 4.9516 6.62256 4.86594 6.55688 4.79251C6.4912 4.71907 6.4117 4.65929 6.32291 4.61658C6.23413 4.57386 6.1378 4.54906 6.03943 4.54357C5.94105 4.53809 5.84256 4.55203 5.74958 4.58461C5.6566 4.61719 5.57094 4.66776 5.49751 4.73344C4.47631 5.64873 3.65934 6.76884 3.09981 8.02084C2.54028 9.27285 2.25073 10.6287 2.25001 12C2.2521 13.1865 1.99619 14.3592 1.50001 15.4369C1.45889 15.5264 1.4358 15.6231 1.43206 15.7215C1.42832 15.82 1.44401 15.9182 1.47822 16.0105C1.54731 16.1971 1.68768 16.3485 1.86844 16.4316C2.04921 16.5146 2.25555 16.5225 2.44209 16.4534C2.62863 16.3843 2.78009 16.2439 2.86313 16.0631C3.44988 14.7891 3.7525 13.4027 3.75001 12C3.75064 10.8397 3.99566 9.69258 4.4691 8.63329C4.94254 7.57399 5.63378 6.62628 6.49782 5.85188ZM10.6772 18.8194C10.4965 18.7366 10.2904 18.7289 10.1041 18.798C9.91777 18.8671 9.76648 19.0073 9.68344 19.1878C9.50251 19.5816 9.30376 19.9744 9.09282 20.3541C9.04486 20.4403 9.01438 20.5351 9.00313 20.6331C8.99188 20.7311 9.00007 20.8304 9.02724 20.9252C9.05441 21.0201 9.10003 21.1086 9.16147 21.1858C9.22292 21.263 9.29899 21.3273 9.38532 21.375C9.49619 21.4369 9.62115 21.4692 9.74813 21.4688C9.88204 21.4688 10.0135 21.433 10.1289 21.3651C10.2443 21.2972 10.3394 21.1996 10.4044 21.0825C10.6331 20.6691 10.8488 20.2388 11.0456 19.815C11.0869 19.7255 11.1101 19.6286 11.1139 19.5301C11.1177 19.4316 11.1021 19.3333 11.0679 19.2408C11.0337 19.1483 10.9815 19.0635 10.9145 18.9912C10.8475 18.9189 10.7668 18.8605 10.6772 18.8194ZM12 11.25C11.8011 11.25 11.6103 11.329 11.4697 11.4697C11.329 11.6103 11.25 11.8011 11.25 12C11.2506 13.4546 11.0682 14.9034 10.7072 16.3125C10.6576 16.5051 10.6866 16.7094 10.7877 16.8807C10.8888 17.0519 11.0537 17.176 11.2463 17.2256C11.3075 17.2412 11.3705 17.2491 11.4338 17.2491C11.5999 17.2489 11.7614 17.1936 11.8927 17.0918C12.024 16.99 12.1178 16.8475 12.1594 16.6866C12.5524 15.1551 12.7509 13.5802 12.75 11.9991C12.7498 11.8003 12.6706 11.6098 12.53 11.4693C12.3894 11.3289 12.1988 11.25 12 11.25Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Authentication</span>
                        </div>
                        <div class="w-4 h-4 flex items-center justify-center dropdown-icon" :class="{'!rotate-180' : activeMenu === 'authentication'}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <ul x-cloak x-show="activeMenu === 'authentication'" x-collapse class="sub-menu flex flex-col gap-1">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('loginCover') }}">Login Cover</a></li>
                        <li><a href="{{ route('signin') }}">Register</a></li>
                        <li><a href="{{ route('signinCover') }}">Register Cover</a></li>
                        <li><a href="{{ route('resetPassword') }}">Reset Id</a></li>
                        <li><a href="{{ route('resetPasswordCover') }}">Reset Id Cover</a></li>
                        <li><a href="{{ route('verification') }}">Verification</a></li>
                        <li><a href="{{ route('verificationCover') }}">Verification Cover</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="{{ route('changeLog') }}" class="nav-link group" :class="{'active' : activeMenu === 'changelog'}">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M20.25 12C20.25 13.6317 19.7661 15.2268 18.8596 16.5835C17.9531 17.9402 16.6646 18.9976 15.1571 19.622C13.6497 20.2464 11.9909 20.4098 10.3905 20.0915C8.79017 19.7732 7.32016 18.9874 6.16637 17.8336C5.01259 16.6798 4.22685 15.2098 3.90853 13.6095C3.5902 12.0092 3.75357 10.3504 4.378 8.84286C5.00242 7.33537 6.05984 6.0469 7.41655 5.14038C8.77325 4.23385 10.3683 3.75 12 3.75C14.188 3.75 16.2865 4.61919 17.8336 6.16637C19.3808 7.71354 20.25 9.81196 20.25 12Z" fill="currentColor" />
                                <path d="M12.75 7.50003V11.5753L16.1363 13.6069C16.3068 13.7093 16.4297 13.8753 16.4779 14.0684C16.5261 14.2614 16.4956 14.4657 16.3931 14.6363C16.2907 14.8068 16.1247 14.9297 15.9316 14.9779C15.7386 15.0261 15.5343 14.9956 15.3638 14.8932L11.6138 12.6432C11.5028 12.5765 11.4109 12.4822 11.3472 12.3695C11.2834 12.2568 11.25 12.1295 11.25 12V7.50003C11.25 7.30112 11.329 7.11035 11.4697 6.9697C11.6103 6.82905 11.8011 6.75003 12 6.75003C12.1989 6.75003 12.3897 6.82905 12.5303 6.9697C12.671 7.11035 12.75 7.30112 12.75 7.50003ZM12 3.00003C10.8169 2.99708 9.64491 3.22881 8.55193 3.6818C7.45895 4.1348 6.46667 4.80006 5.6325 5.63909C4.95094 6.32909 4.34531 6.99284 3.75 7.68753V6.00003C3.75 5.80112 3.67098 5.61035 3.53033 5.4697C3.38968 5.32905 3.19891 5.25003 3 5.25003C2.80109 5.25003 2.61032 5.32905 2.46967 5.4697C2.32902 5.61035 2.25 5.80112 2.25 6.00003V9.75003C2.25 9.94894 2.32902 10.1397 2.46967 10.2804C2.61032 10.421 2.80109 10.5 3 10.5H6.75C6.94891 10.5 7.13968 10.421 7.28033 10.2804C7.42098 10.1397 7.5 9.94894 7.5 9.75003C7.5 9.55112 7.42098 9.36035 7.28033 9.2197C7.13968 9.07905 6.94891 9.00003 6.75 9.00003H4.59375C5.26406 8.21065 5.93156 7.46722 6.69281 6.69659C7.73518 5.65423 9.0616 4.94216 10.5063 4.64935C11.9511 4.35654 13.4501 4.49598 14.816 5.05023C16.182 5.60449 17.3543 6.54899 18.1866 7.76572C19.0188 8.98245 19.474 10.4175 19.4953 11.8914C19.5166 13.3654 19.1031 14.813 18.3064 16.0532C17.5098 17.2935 16.3652 18.2716 15.0159 18.8651C13.6665 19.4586 12.1722 19.6414 10.7196 19.3905C9.26698 19.1396 7.92052 18.4662 6.84844 17.4544C6.77679 17.3867 6.6925 17.3338 6.60039 17.2986C6.50828 17.2635 6.41015 17.2468 6.3116 17.2496C6.21305 17.2524 6.11602 17.2746 6.02604 17.3149C5.93606 17.3551 5.8549 17.4128 5.78719 17.4844C5.71947 17.5561 5.66654 17.6403 5.6314 17.7325C5.59626 17.8246 5.57961 17.9227 5.5824 18.0212C5.58518 18.1198 5.60735 18.2168 5.64764 18.3068C5.68792 18.3968 5.74554 18.4779 5.81719 18.5457C6.88542 19.5537 8.18414 20.285 9.6 20.6757C11.0159 21.0665 12.5058 21.1047 13.9399 20.7872C15.3739 20.4696 16.7085 19.806 17.827 18.854C18.9456 17.9021 19.8142 16.6909 20.357 15.3261C20.8998 13.9613 21.1003 12.4844 20.9411 11.0243C20.7818 9.56414 20.2677 8.16517 19.4434 6.94947C18.6192 5.73376 17.5099 4.73825 16.2125 4.04982C14.915 3.3614 13.4688 3.00098 12 3.00003Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Changelog</span>
                        </div>
                    </a>
                </li> --}}
                {{-- <li class="menu nav-item">
                    <a href="javascript:;" class="nav-link group" :class="{'active' : activeMenu === 'docs'}">
                        <div class="flex items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8293 10.7154L20.3116 12.6473C19.7074 14.9024 19.4052 16.0299 18.7203 16.7612C18.1795 17.3386 17.4796 17.7427 16.7092 17.9223C16.6129 17.9448 16.5152 17.9621 16.415 17.9744C15.4999 18.0873 14.3834 17.7881 12.3508 17.2435C10.0957 16.6392 8.96815 16.3371 8.23687 15.6522C7.65945 15.1114 7.25537 14.4115 7.07573 13.641C6.84821 12.6652 7.15033 11.5377 7.75458 9.28263L8.27222 7.35077C8.3591 7.02654 8.43979 6.7254 8.51621 6.44561C8.97128 4.77957 9.27709 3.86298 9.86351 3.23687C10.4043 2.65945 11.1042 2.25537 11.8747 2.07573C12.8504 1.84821 13.978 2.15033 16.2331 2.75458C18.4881 3.35883 19.6157 3.66095 20.347 4.34587C20.9244 4.88668 21.3285 5.58657 21.5081 6.35703C21.7356 7.3328 21.4335 8.46034 20.8293 10.7154ZM11.0524 9.80589C11.1596 9.40579 11.5709 9.16835 11.971 9.27556L16.8006 10.5697C17.2007 10.6769 17.4381 11.0881 17.3309 11.4882C17.2237 11.8883 16.8125 12.1257 16.4124 12.0185L11.5827 10.7244C11.1826 10.6172 10.9452 10.206 11.0524 9.80589ZM10.2756 12.7033C10.3828 12.3032 10.794 12.0658 11.1941 12.173L14.0919 12.9495C14.492 13.0567 14.7294 13.4679 14.6222 13.868C14.515 14.2681 14.1038 14.5056 13.7037 14.3984L10.8059 13.6219C10.4058 13.5147 10.1683 13.1034 10.2756 12.7033Z" fill="currentColor" />
                                <path opacity="0.3" d="M16.4149 17.9745C16.2064 18.6128 15.8398 19.1903 15.347 19.6519C14.6157 20.3368 13.4881 20.6389 11.2331 21.2432C8.97798 21.8474 7.85044 22.1496 6.87466 21.922C6.10421 21.7424 5.40432 21.3383 4.86351 20.7609C4.17859 20.0296 3.87647 18.9021 3.27222 16.647L2.75458 14.7152C2.15033 12.4601 1.84821 11.3325 2.07573 10.3568C2.25537 9.5863 2.65945 8.88641 3.23687 8.3456C3.96815 7.66068 5.09569 7.35856 7.35077 6.75431C7.7774 6.64 8.16369 6.53649 8.51621 6.44534C8.51624 6.44524 8.51618 6.44545 8.51621 6.44534C8.43979 6.72513 8.3591 7.02657 8.27222 7.35081L7.75458 9.28266C7.15033 11.5377 6.84821 12.6653 7.07573 13.6411C7.25537 14.4115 7.65945 15.1114 8.23687 15.6522C8.96815 16.3371 10.0957 16.6393 12.3508 17.2435C14.3833 17.7881 15.4999 18.0873 16.4149 17.9745Z" fill="currentColor" />
                            </svg>
                            <span class="pl-1.5">Documentation</span>
                        </div>
                    </a>
                </li> --}}
            </ul>
            {{-- <div class="bg-primary p-[18px] relative sidebar-upgrade rounded-md">
                <div class="relative z-10">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/upgrade.png') }}" alt="" class="rounded-full">
                        <div class="text-white">
                            <h5 class="font-bold text-base">Upgrade Plan</h5>
                            <p class="text-xs opacity-50">Get Best offer</p>
                        </div>
                    </div>
                    <div class="mt-[30px]">
                        <a href="javascript:;" class="btn bg-success text-white">Upgrade Plan</a>
                    </div>
                </div>
                <div class="z-0">
                    <img src="{{ asset('assets/images/upgrade-illustrator.png') }}" class="absolute right-0 bottom-0" alt="">
                </div>
            </div> --}}
        </div>
    </div>
</nav>
