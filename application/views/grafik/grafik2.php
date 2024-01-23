<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Grafik
            <small>Nikah</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Grafik Nikah</li>
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
                        <h1>Grafik Nikah</h1>
                    </div>
                    <!-- /.box-header -->
                    <div id="chart-info">
                        Tahun: <?php echo date('Y'); // or display the selected year ?>
                    </div>
                        <canvas id="myChart"></canvas>
                        <div>
                        <h3>Total Nikah = <?php echo $total_nikah ?></h3>
                        <?php foreach ($total_nikah_per_month as $row): ?>
                            <p>
                                Bulan: <?php echo $row->month; ?>,
                                Total Nikah: <?php echo $row->totalNikah; ?>
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
    var totalData = <?= json_encode($totalData) ?>;
    console.log('Total Data:', totalData);
    
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: Object.keys(totalData),
            datasets: [{
                label: 'Total Nikah',
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
    <script type="text/javascript">
    $(document).ready(function() {
      

      $("#grafikMainNav").addClass('active');
      $("#view2GrafikSubNav").addClass('active');
    });
  </script>