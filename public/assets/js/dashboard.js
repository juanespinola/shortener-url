var options = {
    series: [
        {
            name: "N. Click",
            data: [],
        },
    ],
    chart: {
        // height: 270,
        type: "line",
        dropShadow: {
            enabled: true,
            blur: 5,
            color: "#000",
            opacity: 0.25,
        },
        fontFamily: "Inter, sans-serif",
        zoom: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
    },

    stroke: {
        width: 5,
        curve: "smooth",
    },
    dataLabels: {
        enabled: false,
    },
    fill: {
        type: "gradient",
        gradient: {
            shade: "dark",
            gradientToColors: ["#FF51A4"],
            shadeIntensity: 1,
            type: "horizontal",
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 48, 54, 122],
        },
    },
    labels: [],
    xaxis: {
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        crosshairs: {
            show: true,
        },
        labels: {
            offsetX: 0,
            offsetY: 5,
            style: {
                fontSize: "16px",
                fontWeight: "600",
                colors: "#7780A1",
                cssClass: "apexcharts-xaxis-title",
            },
        },
    },
    yaxis: {
        show: false,
        labels: {
            formatter: function (val) {
                return val.toFixed(0);
            }
        }
    },
    grid: {
        borderColor: "#e0e6ed",
        strokeDashArray: 2,
        xaxis: {
            lines: {
                show: true,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
        padding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 25,
        },
    },
    legend: {
        show: false,
    },
    tooltip: {
        marker: {
            show: false,
        },
        x: {
            show: false,
        },
    },
    noData: {
        text: 'No Data'
    }
}

var options_country = {
    plotOptions: {
        pie: {
            donut: {
                size: '65%'
            }
        }
    },
    series: [],
    labels: [],
    chart: {
        // height: 300,
        type: "donut",
        dropShadow: {
            enabled: true,
            blur: 5,
            color: "#000",
            opacity: 0.25,
        },
        fontFamily: "Inter, sans-serif",
        zoom: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
    },
    xaxis: {
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        crosshairs: {
            show: true,
        },
        labels: {
            offsetX: 0,
            offsetY: 5,
            style: {
                fontSize: "16px",
                fontWeight: "600",
                colors: "#7780A1",
                cssClass: "apexcharts-xaxis-title",
            },
        },
    },
    yaxis: {
        show: false,
        labels: {
            // formatter: function (val) {
            //     return val.toFixed(0);
            // }
        }
    },
    legend: {
        show: false,
    },
    tooltip: {
        marker: {
            show: false,
        },
        x: {
            show: false,
        },
    },
    noData: {
        text: 'No Data'
    }
}

var options_devices = {
    chart: {
        height: 300,
        type: "area",
        fontFamily: "Inter, sans-serif",
        zoom: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
    },
    series: [
        {
            name: "Devices",
            data: [],
        },
    ],
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        curve: "smooth",
        width: 3,
        lineCap: "square",
    },
    dropShadow: {
        enabled: false,
    },
    colors: ["#267DFF"],
    markers: {
        discrete: [
            {
                seriesIndex: 0,
                dataPointIndex: 4,
                fillColor: "#267DFF",
                strokeColor: "#fff",
                size: 6,
            },
        ],
    },
    labels: [],
    xaxis: {
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        crosshairs: {
            show: true,
        },
        labels: {
            offsetX: 0,
            offsetY: 5,
            style: {
                fontSize: "16px",
                fontWeight: "600",
                colors: "#7780A1",
                cssClass: "apexcharts-xaxis-title",
            },
        },
    },
    yaxis: {
        tickAmount: 7,
        labels: {
            formatter: function (val) {
                return val.toFixed(0);
            },
            offsetX: -10,
            offsetY: 0,
            style: {
                fontSize: "16px",
                fontWeight: "600",
                colors: "#7780A1",
                cssClass: "apexcharts-yaxis-title",
            },
        },
        opposite: false,
    },
    grid: {
        borderColor: "#e0e6ed",
        strokeDashArray: 7,
        xaxis: {
            lines: {
                show: true,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
        padding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 25,
        },
    },
    legend: {
        position: "top",
        horizontalAlign: "center",
    },
    tooltip: {
        marker: {
            show: true,
        },
        x: {
            show: false,
        },
    },
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: 0,
            opacityTo: 0,
            stops: [100, 100],
        },
    },
}

var chart = new ApexCharts(document.querySelector("#linechart"), options);
chart.render()

var chart_country = new ApexCharts(document.querySelector("#countriesChart"), options_country);
chart_country.render()

var chart_devices = new ApexCharts(document.querySelector("#devicesChart"), options_devices);
chart_devices.render()
