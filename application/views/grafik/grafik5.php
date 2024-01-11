<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik</title>
    <!-- Sertakan Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Grafik Pensiun</h1>
    <!-- ... your existing HTML code ... -->

<div id="chart-info">
    Tahun: <?php echo date('Y'); // or display the selected year ?>
</div>
<canvas id="myChartPensiun"></canvas>

<script>
var totalData = <?= json_encode($totalData) ?>;
console.log('Total Data:', totalData);

var ctx = document.getElementById("myChartPensiun").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: Object.keys(totalData),
        datasets: [{
            label: 'Total Pensiun',
            data: Object.values(totalData),
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                min: 0,
            }
        }
    }
});
</script>

<!-- ... your existing HTML code ... -->


    

</body>
</html>