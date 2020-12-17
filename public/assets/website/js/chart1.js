var ChartData = {
    labels: ["السبت", "الجمعة", "الخميس", "الأربعاء", "الثلاثاء", "الإثنين", "الأحد"],
    datasets: [{
            data: [15, 15, 12, 7, 14, 22, 20],
            backgroundColor: '#FFA34B',
            borderColor: '#FFA34B',
            label: "تقييم جديد"
        },

        {
            data: [5, 5, 7, 9, 4, 14, 24],
            backgroundColor: '#55D98E',
            borderColor: '#55D98E',
            label: "تحديد درس"
        },

        {
            data: [10, 9, 8, 14, 14, 30, 12],
            backgroundColor: '#FF6B6B',
            borderColor: '#FF6B6B',
            label: "عرض رقم الجوال"
        },

        {
            data: [23, 23, 12, 17, 8, 34, 27],
            backgroundColor: '#3E92FF',
            borderColor: '#3E92FF',
            label: "زائر البروفايل"
        },

    ]
};

ChartOptions = {
    responsive: false,
    layout: {
        padding: {
            top: 12,
            left: 12,
            bottom: 12,
        },
    },
    scales: {
        xAxes: [{
            stacked: true,
            categoryPercentage: 0.5,
            gridLines: {
                display: false
            },
        }],

        yAxes: [{
            stacked: true,
            position: "right",
            gridLines: {
                borderDash: [],
                zeroLineWidth: 1,
            },
        }],
    },
    plugins: {
        datalabels: {
            display: true,
            font: {
                style: ' bold',
                // defaultFontFamily: "Open Sans"
            },
        },
    },
    legend: {
        position: 'bottom',
        reverse: true,
        rtl: true,
        labels: {
            boxWidth: 40,
            usePointStyle: true,
            fullWidth: true,
            padding: 10,
            textDirection: 'rtl',
            generateLabels: function (chart) {
                return chart.data.datasets.map(function (dataset, i) {
                    return {
                        text: dataset.label,
                        lineCap: dataset.borderCapStyle,
                        lineDash: [],
                        lineDashOffset: 0,
                        lineJoin: dataset.borderJoinStyle,
                        pointStyle: 'circle',
                        fillStyle: dataset.backgroundColor,
                        strokeStyle: dataset.borderColor,
                        lineWidth: 0,
                        lineDash: dataset.borderDash,
                    }
                })
            },

        },
    },
    elements: {
        arc: {},
        line: {},
        rectangle: {
            borderWidth: 0.01,
        },
    },
    tooltips: {
        mode: 'index',
        titleMarginBottom: 7,
        bodySpacing: 6,
        xPadding: 13,
        yPadding: 11,
        cornerRadius: 5,
        caretSize: 9,
        rtl: 'true',
        pointStyle: 'circle',
        bodyAlign: 'right'
    },
    hover: {
        mode: 'nearest',
        animationDuration: 400,
    },
};


var chart1 = document.getElementById("chart1");

Chart.defaults.global.defaultFontFamily = "Roboto";
Chart.defaults.global.defaultFontSize = 11;

var pieChart = new Chart(chart1, {
    type: 'bar',
    data: ChartData,
    options: ChartOptions
});

Chart.defaults.global.defaultFontFamily = "arabicBook";