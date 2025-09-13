const ctx = document.getElementById('attendanceChart').getContext('2d');
new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Hadir', 'Alpa', 'Sakit', 'Izin'],
        datasets: [{
            data: [91.43, 5.71, 2.86, 0],
            backgroundColor: ['#22c55e', '#ef4444', '#3b82f6', '#facc15']
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            },
            datalabels: {
                color: '#fff',
                font: {
                    weight: 'bold',
                    size: 14
                },
                formatter: (value) => value > 0 ? value + '%' : '',
                anchor: (ctx) => {
                  
                    return ctx.dataset.data[ctx.dataIndex] < 10 ? 'end' : 'center';
                },
                align: (ctx) => {
                    
                    return ctx.dataset.data[ctx.dataIndex] < 10 ? 'end' : 'center';
                },
                offset: (ctx) => {
                    
                    return ctx.dataset.data[ctx.dataIndex] < 10 ? 30 : 0;
                }
            }
        }
    },
    plugins: [ChartDataLabels]
});