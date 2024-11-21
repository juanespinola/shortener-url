@extends('layouts.app')

@section('content')

<!-- Start All Card -->
<div class="flex flex-col gap-5 min-h-[calc(100vh-188px)] sm:min-h-[calc(100vh-204px)]" x-data="userLinkTable()">
    <div class="grid grid-cols-1 gap-5">
        <div class="bg-white dark:bg-dark dark:border-gray/20 border-2 border-lightgray/10 p-5 rounded-lg">
            <h2 class="text-base font-semibold mb-4">My Links</h2>
            <div x-cloak class="overflow-auto space-y-4" x-init="
                    initData()
                    $watch('searchInput', value => {
                    search(value)
                    })">
                <div class="flex justify-between items-center gap-3">
                    <div class="flex space-x-2 items-center">
                        <p>Show</p>
                        <select id="filter" class="form-select !w-20" x-model="view" @change="changeView()">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div>
                        <input id="search" x-model="searchInput" type="text" class="form-input" placeholder="Search...">
                    </div>
                </div>
                <div class="overflow-auto">
                    <h1 x-show="isLoading">Loading...</h1>
                    <table class="min-w-[640px] w-full table-hover" x-show="!isLoading">
                        <thead>
                        <th width="5%">
                            <div class="flex items-center justify-between gap-2">
                                <p>#</p>
                            </div>
                        </th>
                        <th width="20%">
                            <div class="flex items-center justify-between gap-2">
                                <p>URL</p>
                                <div class="flex flex-col">
                                    <svg @click="sort('original_url	', 'asc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-muted fill-current" x-bind:class="{'!text-black': sorted.field === 'name' && sorted.rule === 'asc'}">
                                        <path d="M5 15l7-7 7 7"></path>
                                    </svg>
                                    <svg @click="sort('original_url	', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="h-3 w-3 cursor-pointer text-muted fill-current" x-bind:class="{'!text-black': sorted.field === 'name' && sorted.rule === 'desc'}">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </th>
                        <th width="20%">
                            <div class="flex items-center justify-between gap-2">
                                <p class="">Code</p>
                                <div class="flex flex-col">
                                    <svg @click="sort('short_code', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-muted h-3 w-3 cursor-pointer fill-current" x-bind:class="{'!text-black': sorted.field === 'job' && sorted.rule === 'asc'}">
                                        <path d="M5 15l7-7 7 7"></path>
                                    </svg>
                                    <svg @click="sort('short_code', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-muted h-3 w-3 cursor-pointer fill-current" x-bind:class="{'!text-black': sorted.field === 'job' && sorted.rule === 'desc'}">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </th>
                        <th width="10%">
                            <div class="flex items-center justify-between gap-2">
                            <span>
                                Expired At
                            </span>
                                <div class="flex flex-col">
                                    <svg @click="sort('expires_at', 'asc')" fill="none" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-muted h-3 w-3 cursor-pointer fill-current" x-bind:class="{'!text-black': sorted.field === 'year' && sorted.rule === 'asc'}">
                                        <path d="M5 15l7-7 7 7"></path>
                                    </svg>
                                    <svg @click="sort('expires_at', 'desc')" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 0 24 24" stroke="currentColor" class="text-muted h-3 w-3 cursor-pointer fill-current" x-bind:class="{'!text-black': sorted.field === 'year' && sorted.rule === 'desc'}">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </th>
                        </thead>
                        <tbody>
                        <template x-for="(item, index) in items" :key="index">
                            <tr x-show="checkView(index + 1)" @click="getUserLinkTrackingByCode(item.short_code)">
                                <td x-text="index+1"></td>
                                <td>
                                    <span x-text="item.original_url"></span>
                                </td>
                                <td>
                                    <span x-text="item.short_code"></span>
                                </td>
                                <td>
                                    <span x-text="item.expires_at ? item.expires_at : 'No Expiration' "></span>
                                </td>
                            </tr>
                        </template>
                        <tr x-show="isEmpty()">
                            <td colspan="5" class="text-center py-3 text-black dark:text-white">No matching records found.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <ul class="inline-flex items-center gap-1">
                    <li><button type="button" @click.prevent="changePage(1)" class="flex justify-center px-2 h-9 items-center rounded transition border border-gray/20 hover:border-gray/60">First</button></li>
                    <li><button type="button" @click="changePage(currentPage - 1)" class="flex justify-center px-2 h-9 items-center rounded transition border border-gray/20 hover:border-gray/60">Prev</button></li>
                    <template x-for="item in pages">
                        <li><button @click="changePage(item)" type="button" class="flex justify-center h-9 w-9 items-center rounded transition border border-gray/20 hover:border-gray/60" x-bind:class="{ 'border-primary text-primary': currentPage === item }"><span x-text="item"></span></button></li>
                    </template>
                    <li><button @click="changePage(currentPage + 1)" type="button" class="flex justify-center px-2 h-9 items-center rounded transition border border-gray/20 hover:border-gray/60">Next</button></li>
                    <li><button @click.prevent="changePage(pagination.lastPage)" type="button" class="flex justify-center px-2 h-9 items-center rounded transition border border-gray/20 hover:border-gray/60">Last</button></li>
                </ul>
            </div>
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

                            <button type="button" class="btn flex items-center text-center gap-1.5 bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85] w-full lg:w-1/2" @click="getUserLinkTracking()">
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
                links: [],
                items: [],
                view: 5,
                searchInput: "",
                pages: [],
                offset: 5,
                pagination: {
                    total: null,
                    lastPage: null,
                    perPage: 3,
                    currentPage: 1,
                    from: 1,
                    to: 1 * 5,
                },
                currentPage: 1,
                sorted: {
                    field: "original_url",
                    rule: "asc",
                },
                isLoading: false,
                totalClicksPorDia: 0,
                selectDays: 7,
                selectedCode: null,
                async initData() {
                    await this.getUserLinks()
                    this.links.sort(this.compareOnKey("original_url", "asc"))
                    this.showPages();
                    this.getUserLinkTracking() // inicia el tracking de los link
                },
                compareOnKey(key, rule) {
                    return function (a, b) {
                        if (key === "original_url" || key === "short_code" || key === "expires_at") {
                            let comparison = 0;
                            const fieldA = a[key].toUpperCase();
                            const fieldB = b[key].toUpperCase();
                            if (rule === "asc") {
                                if (fieldA > fieldB) {
                                    comparison = 1;
                                } else if (fieldA < fieldB) {
                                    comparison = -1;
                                }
                            } else {
                                if (fieldA < fieldB) {
                                    comparison = 1;
                                } else if (fieldA > fieldB) {
                                    comparison = -1;
                                }
                            }
                            return comparison;
                        } else {
                            if (rule === "asc") {
                                return a.expires_at - b.expires_at;
                            } else {
                                return b.expires_at - a.expires_at;
                            }
                        }
                    };
                },
                checkView(index) {
                    // return index > this.pagination.to || index < this.pagination.from
                    //     ? false
                    //     : true;
                    return !(index > this.pagination.to || index < this.pagination.from);
                },
                checkPage(item) {
                    if (item <= this.currentPage + 3) {
                        return true;
                    }
                    return false;
                },
                search(value) {
                    if (value.length > 1) {
                        const options = {
                            shouldSort: true,
                            keys: ["original_url", "short_code"],
                            threshold: 0,
                        };
                        const fuse = new Fuse(this.items, options);
                        this.items = fuse.search(value).map((elem) => elem.item);
                    } else {
                        this.items = this.links;
                    }
                    this.changePage(1);
                    this.showPages();
                },
                sort(field, rule) {
                    this.items = this.items.sort(this.compareOnKey(field, rule));
                    this.sorted.field = field;
                    this.sorted.rule = rule;
                },
                changePage(page) {
                    if (page >= 1 && page <= this.pagination.lastPage) {
                        this.currentPage = page;
                        const total = this.items.length;
                        const lastPage = Math.ceil(total / this.view) || 1;
                        const from = (page - 1) * this.view + 1;
                        let to = page * this.view;
                        if (page === lastPage) {
                            to = total;
                        }
                        this.pagination.total = total;
                        this.pagination.lastPage = lastPage;
                        this.pagination.perPage = this.view;
                        this.pagination.currentPage = page;
                        this.pagination.from = from;
                        this.pagination.to = to;
                        this.showPages();
                    }
                },
                showPages() {
                    const pages = [];
                    let from = this.pagination.currentPage - Math.ceil(this.offset / 2);
                    if (from < 1) {
                        from = 1;
                    }
                    let to = from + this.offset - 1;
                    if (to > this.pagination.lastPage) {
                        to = this.pagination.lastPage;
                    }
                    while (from <= to) {
                        pages.push(from);
                        from++;
                    }
                    this.pages = pages;
                },
                changeView() {
                    this.changePage(1);
                    this.showPages();
                },
                isEmpty() {
                    return this.pagination.total ? false : true;
                },
                async getUserLinks(){
                    try {
                        await fetch('{{ route("getUserLinks") }}', {
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-Token": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            },
                            method: "GET",
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            this.links = data.links;
                            this.items = data.links;
                            this.isLoading = false;
                            this.pagination.total = data.links.length;
                            this.pagination.lastPage = Math.ceil(data.links.length / this.view)
                        })
                    } catch (e) {
                        console.log(e)
                    }
                },
                async getUserLinkTrackingByCode(code){
                    try {
                        this.selectedCode = code;
                        this.isLoading = true;
                        await fetch('{{ route("getUserLinkTrackingByCode") }}', {
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
                                // series: data.objClicksPorPais.data
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
                async getUserLinkTracking(){
                    try {
                        this.isLoading = true;
                        await fetch('{{ route("getUserLinkTracking") }}', {
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-Token": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            },
                            method: "POST",
                            body: JSON.stringify({
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
                                })

                                chart.updateSeries([{
                                    data: data.objClicksPorDia.data
                                }])

                                chart_country.updateOptions({
                                    labels: data.objClicksPorPais.labels,
                                    series: data.objClicksPorPais.data
                                })

                                chart_devices.updateOptions({
                                    labels: data.objClicksPorDispositivo.labels,
                                });

                                chart_devices.updateSeries([{
                                    data: data.objClicksPorDispositivo.data
                                }])

                            })
                            .catch((error) => console.log(error))
                    } catch (e) {
                        console.log(e)
                    }
                },
                changeSelectDay(data){
                    this.selectDays = data
                    if(!this.selectedCode) {
                        this.getUserLinkTracking()
                    } else {
                        this.getUserLinkTrackingByCode(this.selectedCode)
                    }

                }
            };
        };
    </script>

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>

@endsection
