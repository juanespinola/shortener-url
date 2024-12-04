
<div class="notification h-6" x-data="dropdown" @click.outside="open = false">
    <button type="button" class="flex items-center gap-2.5 text-lightgray hover:text-primary duration-300 text-sm font-semibold" @click="toggle()">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18 14C18 18.4183 14.4183 22 10 22C8.76449 22 7.5944 21.7199 6.54976 21.2198C6.19071 21.0479 5.78393 20.9876 5.39939 21.0904L4.17335 21.4185C3.20701 21.677 2.32295 20.793 2.58151 19.8267L2.90955 18.6006C3.01245 18.2161 2.95209 17.8093 2.7802 17.4502C2.28008 16.4056 2 15.2355 2 14C2 9.58172 5.58172 6 10 6C14.4183 6 18 9.58172 18 14ZM6.5 15C7.05228 15 7.5 14.5523 7.5 14C7.5 13.4477 7.05228 13 6.5 13C5.94772 13 5.5 13.4477 5.5 14C5.5 14.5523 5.94772 15 6.5 15ZM10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15ZM13.5 15C14.0523 15 14.5 14.5523 14.5 14C14.5 13.4477 14.0523 13 13.5 13C12.9477 13 12.5 13.4477 12.5 14C12.5 14.5523 12.9477 15 13.5 15Z" fill="currentColor"></path>
            <path opacity="0.3" d="M17.9841 14.5084C18.092 14.4638 18.1985 14.4163 18.3033 14.3661C18.5951 14.2264 18.9256 14.1774 19.238 14.261L20.2342 14.5275C21.0193 14.7376 21.7376 14.0193 21.5275 13.2342L21.261 12.238C21.1774 11.9256 21.2264 11.595 21.3661 11.3033C21.7725 10.4545 22 9.50385 22 8.5C22 4.91015 19.0899 2 15.5 2C12.79 2 10.4673 3.6585 9.49158 6.0159C9.6597 6.00535 9.82924 6 10 6C14.4183 6 18 9.58172 18 14C18 14.1708 17.9947 14.3403 17.9841 14.5084Z" fill="currentColor"></path>
        </svg>
        <span class="lg:block hidden">Lenguage</span>
    </button>
    <div class="noti-area space-y-[22px]" x-show="open" x-transition="" x-transition.duration.300ms="" style="display: none;">
        <ul class="space-y-[22px]">
            <li>
                <a href="{{ route(Route::currentRouteName(), ['locale' => 'en'] )  }}" class="flex items-center gap-2.5">
                    <div>
                        <p class="text-sm text-dark dark:text-white">English</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route(Route::currentRouteName(), ['locale' => 'es'] ) }}" class="flex items-center gap-2.5">
                    <div>
                        <p class="text-sm text-dark dark:text-white">Español</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route(Route::currentRouteName(), ['locale' => 'fr'] ) }}" class="flex items-center gap-2.5">
                    <div>
                        <p class="text-sm text-dark dark:text-white">Français</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route(Route::currentRouteName(), ['locale' => 'it'] ) }}" class="flex items-center gap-2.5">
                    <div>
                        <p class="text-sm text-dark dark:text-white">Italiano</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
