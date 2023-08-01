// JavaScript for Chart Data in dashboard.php

    // Pie Chart
    // var pieChartData = <?php echo json_encode($data_for_pie_chart); ?>;
    var pieLabels = pieChartData.map(item => item.category);
    var pieAmounts = pieChartData.map(item => item.amount);

    var ctxPie = document.getElementById('pieChart').getContext('2d');
    var myPieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: pieLabels,
            datasets: [{
                data: pieAmounts,
                backgroundColor: [
                    'rgba(228, 16, 129, 1)',
                    'rgba(255, 209, 220, 1)',
                    'rgba(255, 105, 180, 1)',
                    'rgba(255, 193, 204, 1)',
                    'rgba(255, 188, 217, 1)',
                    'rgba(255, 0, 255, 1)',
                    'rgba(255, 0, 128, 1)',
                ],

                borderColor: [
                    'rgba(228, 16, 129, 1)',
                    'rgba(255, 209, 220, 1)',
                    'rgba(255, 105, 180, 1)',
                    'rgba(255, 193, 204, 1)',
                    'rgba(255, 188, 217, 1)',
                    'rgba(255, 0, 255, 1)',
                    'rgba(255, 0, 128, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: 'Expense Distribution by Category'
            }
        }
    });

    // Line Chart Data
    // var lineChartData = <?php echo json_encode($data_for_line_chart); ?>;

    // Sort the data by month (using custom sorting function)
    lineChartData.sort((a, b) => {
        var monthA = new Date('2000 ' + a.month).getMonth(); // Using a fixed year to avoid date parsing errors
        var monthB = new Date('2000 ' + b.month).getMonth();
        return monthA - monthB;
    });

    var months = lineChartData.map(item => item.month);
    var amounts = lineChartData.map(item => item.amount);

    var ctxLine = document.getElementById('lineChart').getContext('2d');
    var myLineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: months,
            datasets: [{
                label: 'Expense Amount',
                data: amounts,
                borderColor: 'rgba(255, 0, 128, 1)',
                backgroundColor: 'rgba(255, 0, 128,0.2)',
                borderWidth: 2,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Month'
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Amount'
                    }
                }
            },
            title: {
                display: true,
                text: 'Monthly Expense Amount'
            }
        }
    });
        
    // Bar Chart Data
    // var barChartData = <?php echo json_encode($data_for_bar_chart); ?>;
    var categories = barChartData.map(item => item.category);
    var amounts = barChartData.map(item => item.amount);

    var ctxBar = document.getElementById('barChart').getContext('2d');
    var myBarChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: categories,
            datasets: [{
                label: 'Amount',
                data: amounts,
                backgroundColor: 'rgba(255, 193, 204, 1)',
                borderColor: 'rgba(255, 193, 204, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Category'
                    }
                },
                y: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Amount'
                    }
                }
            },
            title: {
                display: true,
                text: 'Expense Amount by Category'
            }
        }
    });