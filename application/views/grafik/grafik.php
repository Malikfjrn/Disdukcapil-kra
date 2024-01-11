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
    <h1>Grafik Kelahiran</h1>
    
    <div id="chart-info">
        
    <?php $years = array_unique(array_column($labels, 'tahun')); ?>
    Tahun: <?php echo implode(', ', $years); ?>
    </div>
    <canvas id="myChart"></canvas>
    
   
    <script>
    console.log('Labels:', <?= json_encode($labels) ?>);
    console.log('Datasets:', <?= json_encode($datasets) ?>);
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            // labels: <?= json_encode($labels) ?>,
            datasets: <?= json_encode($datasets) ?>
        },
        options: {
    scales: {
        y: {
            beginAtZero: true,
            min: 0,
        },
        x: {
            barThickness: 20,
        },
    },
}

        });
    </script>
    

</body>
</html>