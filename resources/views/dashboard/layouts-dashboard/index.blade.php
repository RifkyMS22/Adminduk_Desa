@extends('dashboard.layouts-dashboard.app')

@section('content')
<div class="h-screen bg-white p-4 rounded-xl overflow-x-auto"> 
<h1 class="text-3xl text-black pb-6">Dashboard</h1>
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 mt-4">
    <!-- Kartu Data - Total Penduduk -->
    <div class="p-2 bg-red-300 rounded-md shadow-md">
        <h2 class="text-base font-semibold mb-2">Total Penduduk</h2>
        <i class="fas fa-users text-red-500 text-3xl"></i>
        <p class="text-3xl font-bold">{{ $totalPenduduk }}</p>
    </div>

    <!-- Kartu Data - Jumlah Laki-Laki -->
    <div class="p-2 bg-gray-300 rounded-md shadow-md">
        <h2 class="text-base font-semibold mb-2">Jumlah Laki-Laki</h2>
        <i class="fas fa-male text-gray-500 text-3xl"></i>
        <p class="text-3xl font-bold">{{ $totalLakiLaki }}</p>
    </div>

    <!-- Kartu Data - Jumlah Perempuan -->
    <div class="p-2 bg-green-200 rounded-md shadow-md">
        <h2 class="text-base font-semibold mb-2">Jumlah Perempuan</h2>
        <i class="fas fa-female text-green-500 text-3xl"></i>
        <p class="text-3xl font-bold">{{ $totalPerempuan }}</p>
    </div>

    <!-- Kartu Data - Jumlah Kelahiran -->
    <div class="p-2 bg-blue-200 rounded-md shadow-md">
        <h2 class="text-base font-semibold mb-2">Jumlah Kelahiran</h2>
        <i class="fas fa-baby text-blue-500 text-3xl"></i>
        {{-- <p class="text-3xl font-bold">{{ $jumlahKelahiran }}</p> <!-- Sesuaikan dengan variabel yang berisi data jumlah kelahiran --> --}}
    </div>

    <!-- Kartu Data - Jumlah Kematian -->
    <div class="p-2 bg-purple-200 rounded-md shadow-md">
        <h2 class="text-base font-semibold mb-2">Jumlah Kematian</h2>
        <i class="fas fa-skull text-purple-500 text-3xl"></i>
        {{-- <p class="text-3xl font-bold">{{ $jumlahKematian }}</p> <!-- Sesuaikan dengan variabel yang berisi data jumlah kematian --> --}}
    </div>

    <!-- Kartu Data - Jumlah Kepala Keluarga -->
    <div class="p-2 bg-purple-200 rounded-md shadow-md">
        <h2 class="text-base font-semibold mb-2">Jumlah Kepala Keluarga</h2>
        <i class="fas fa-users text-purple-500 text-3xl"></i>
        <p class="text-3xl font-bold">{{ $totalKepalaKeluarga }}</p>
    </div>

</div>
{{-- <div class="col-span-2 p-2 bg-yellow-200 rounded-md shadow-md mt-4 max-w-screen-md mx-auto">
    <h2 class="text-base font-semibold mb-2">Grafik Penduduk</h2>
        <!-- Kartu Data - Info Leads -->
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 mt-4">
            <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                            <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                            <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                        </svg>
                    </div>
                    <div>
                        <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">{{ $totalPenduduk }}</h5>
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Total Penduduk</p>
                    </div>                    
                </div>
            </div>

            <div id="column-chart"></div>

            <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                <div class="flex items-center pt-5">
                    <!-- Button -->
                    <button id="dropdownDefaultButton"
                            data-dropdown-toggle="lastDaysdropdown"
                            data-dropdown-placement="bottom"
                            class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                            type="button">
                        Last 7 days
                        <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                            </li>
                        </ul>
                    </div>
                    <a
                        href="#"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                        Leads Report
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
</div> --}}
</div>
<script>
    window.addEventListener("load", function () {
        const options = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: [
                {
                    name: "Laki-Laki",
                    color: "#1A56DB",
                    data: [
                        { x: "Total", y: {!! json_encode($totalLakiLaki) !!} },
                    ],
                },
                {
                    name: "Perempuan",
                    color: "#FDBA8C",
                    data: [
                        { x: "Total", y: {!! json_encode($totalPerempuan) !!} },
                    ],
                },
            ],
            chart: {
                type: "bar",
                height: "320px",
                fontFamily: "Inter, sans-serif",
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "70%",
                    borderRadiusApplication: "end",
                    borderRadius: 8,
                },
            },
            tooltip: {
                shared: true,
                intersect: false,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
            },
            states: {
                hover: {
                    filter: {
                        type: "darken",
                        value: 1,
                    },
                },
            },
            stroke: {
                show: true,
                width: 0,
                colors: ["transparent"],
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -14
                },
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            xaxis: {
                floating: false,
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    }
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                show: false,
            },
            fill: {
                opacity: 1,
            },
        };

        if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options);
            chart.render();
        }
    });
</script>


@endsection
