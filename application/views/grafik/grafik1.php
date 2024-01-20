<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Grafik
            <small>Kematian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Grafik Kematian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Grafik akan ditempatkan di sini -->
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="box">
                <div style="max-width:90%; max-height:70%;padding-right:5%;padding-left:15%">
                    <div class="box-header">
                        <h1>Grafik Kematian</h1>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">    
                        <div id="chart-info">
                            <?php $years = array_unique(array_column($labels, 'tahun')); ?>
                            Tahun: <?php echo implode(', ', $years); ?>
                            </div>
                        <canvas id="myChart"></canvas>
                        <div>
                        <h3>Total Kematian = <?php echo $total_kematian ?></h3>

                        <?php foreach ($total_kematian_per_bulan as $row): ?>
                            <p>
                                Bulan: <?php echo $row['bulan']; ?>,
                                Total Kematian: <?php echo $row['total_kematian']; ?>
                            </p>
                        <?php endforeach; ?>
                        
                        </div>
                    </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- col-md-12 -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
    <script type="text/javascript">
    $(document).ready(function() {
      

      $("#grafikMainNav").addClass('active');
      $("#viewGrafikSubNav").addClass('active');
    });
  </script>