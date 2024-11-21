@extends('layouts.guest')

@section('content')

<!-- Start Topbar -->
@include('layouts.partials.guest.topbar')
<!-- End Topbar -->

<!-- Start All Card -->
<div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]" x-data="userLinkTable()">
    <div class="pt-0">
        <div class="dark:border-gray/20 border-2 border-lightgray/10 rounded-lg p-3 lg:p-5 flex items-center gap-3 md:gap-5">
            <form class="w-full" x-on:submit.prevent="getUserLinkTrackingByCode(selectedCode)"  method="POST">
                <div class="relative">
                    <input type="text" class="form-input border-0 pe-10 h-14 dark:text-white dark:bg-lightgray/10 bg-dark/[4%] rounded-lg text-sm text-dark placeholder:text-lightgray/80 focus:ring-0 focus:border-primary/80 focus:outline-0" placeholder="Type link here..." required="" x-model="selectedCode">
                    <button type="submit" class="absolute inset-y-0 right-3 flex items-center text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.1422 15.9626C14.2696 16.2173 14.1588 16.5269 13.8987 16.6429L4.49698 20.8355C3.00114 21.5026 1.44958 20.0213 2.19051 18.6336L5.34254 12.7299C5.58769 12.2707 5.58769 11.7303 5.34254 11.2711L2.19051 5.36738C1.44958 3.97963 3.00114 2.49838 4.49698 3.16545L8.02129 4.73711C8.44416 4.92569 8.7885 5.25515 8.99557 5.66929L14.1422 15.9626Z" fill="currentColor" />
                            <path opacity="0.3" d="M15.5331 15.391C15.6528 15.6303 15.9396 15.733 16.184 15.6241L21.0066 13.4735C22.3303 12.8831 22.3303 11.1187 21.0066 10.5284L12.1088 6.56044C11.6801 6.36925 11.2481 6.82084 11.458 7.24069L15.5331 15.391Z" fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

<div class="grid grid-cols-1 gap-5">
    <div class="grid grid-cols-1 gap-5">
        <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
            <h2 class="mb-[30px]">Clicks</h2>
            <div class="grid grid-cols-2 gap-5 items-center">

                <div class="space-y-5">
                    <div class="bg-primary/10 flex items-stretch py-4 px-2.5 gap-5 rounded-lg">
                        <div class="bg-primary w-1 shrink-0"></div>
                        <div class="flex items-center gap-3.5">
                            <p class="text-2xl font-bold" x-text="totalClicksPorDia"></p>
                            <div class="text-sm space-y-3">
                                <p class="text-lightgray">Total de Clicks</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-5">
                    <div class="bg-primary/10 flex items-stretch py-4 px-2.5 gap-5 rounded-lg w-full">

                        <button type="button" class="btn flex items-center text-center gap-1.5 bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85] w-full lg:w-1/2" @click="reset()">
                            <span x-show="isLoading" class="animate-spin border-2 border-white border-l-transparent rounded-full w-5 h-5 inline-block align-middle"></span>
                            Reset
                        </button>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-2 gap-5">

    <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
        <div class="mb-[30px] flex items-center flex-wrap">
            <h2 class="flex-1 font-semibold">Devices</h2>
            <div>
                <select id="selectDays" class="form-select h-8 rounded-full border-none font-semibold text-xs" x-on:change="changeSelectDay($event.target.value)">
                    <option value="7">Last 7 days</option>
                    <option value="30">Last 30 days</option>
                    <option value="90">Last 90 days</option>
                </select>
            </div>
        </div>
        <div id="countriesChart"></div>
    </div>

    <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
        <div class="grid grid-cols-1 gap-5">
            <div id="linechart" class="xl:col-span-3"></div>
        </div>
    </div>

    <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
        <div class="grid grid-cols-1 gap-5 items-center">
            <div id="devicesChart" class="xl:col-span-3"></div>
        </div>
    </div>
</div>
</div>
<!-- End All Card -->

@endsection

@section('script')

    <!-- ApexCharts js -->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
    {{--    <script src="{{ asset('assets/js/apex-analytics.js') }}"></script>--}}
    <script src="{{ asset('assets/js/data-search.js') }}"></script>
    <script>

        window.userLinkTable = function () {
            return {
                isLoading: false,
                totalClicksPorDia: 0,
                selectDays: 7,
                selectedCode: null,
                reset(){
                    this.selectedCode = null;
                    this.totalClicksPorDia = 0;

                    chart.updateOptions({
                        labels: []
                    });

                    chart.updateSeries([{
                        data: []
                    }]);

                    chart_country.updateOptions({
                        labels: [],
                        series: []
                    });

                    chart_devices.updateOptions({
                        labels: [],
                    });

                    chart_devices.updateSeries([{
                        data: []
                    }])
                },
                async getUserLinkTrackingByCode(code){
                    try {
                        this.selectedCode = code;
                        this.isLoading = true;
                        await fetch('{{ route("searchcode") }}', {
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-Token": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            },
                            method: "POST",
                            body: JSON.stringify({
                                search_code: code,
                                selectDays: this.selectDays
                            })
                        })
                            .then((response) => response.json())
                            .then((data) => {
                                this.isLoading = false;
                                this.totalClicksPorDia = data.totalClicksPorDia.total_clicks;

                                // inicio de charts

                                chart.updateOptions({
                                    labels: data.objClicksPorDia.labels
                                });

                                chart.updateSeries([{
                                    data: data.objClicksPorDia.data
                                }]);

                                chart_country.updateOptions({
                                    labels: data.objClicksPorDispositivo.labels,
                                    series: data.objClicksPorDispositivo.data
                                });

                                chart_devices.updateOptions({
                                    labels: data.objClicksPorPais.labels,
                                });

                                chart_devices.updateSeries([{
                                    data: data.objClicksPorPais.data
                                }])
                            })
                            .catch((error) => console.log(error))
                    } catch (e) {
                        console.log(e)
                    }
                },
                changeSelectDay(data){
                    this.selectDays = data
                    // if(!this.selectedCode) {
                    //     this.getUserLinkTracking()
                    // } else {
                        this.getUserLinkTrackingByCode(this.selectedCode)
                    // }

                }
            };
        };
    </script>

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>

@endsection
