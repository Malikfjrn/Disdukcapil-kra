<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Total Data Masyarakat</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <?php if ($is_admin == true) : ?>

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner" style= "height: 481px">
              <h3><?php echo $total_kelahiran ?></h3>

              <p>Total Kelahiran</p>
              <?php foreach ($total_kelahiran_per_bulan as $row): ?>
                  <p>
                      Bulan: <?php echo $row['bulan']; ?>,
                      Total Kelahiran: <?php echo $row['total_kelahiran']; ?>
                  </p>
            <?php endforeach; ?>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="<?php echo base_url('grafik/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner" style= "height: 481px">
              <h3><?php echo $total_kematian ?></h3>

              <p>Total Kematian</p>
              <?php foreach ($total_kematian_per_bulan as $row): ?>
                  <p>
                      Bulan: <?php echo $row['bulan']; ?>,
                      Total Kematian: <?php echo $row['total_kematian']; ?>
                  </p>
            <?php endforeach; ?>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="<?php echo base_url('grafik/grafik1') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
          <div class="inner" style= "height: 481px">
                <h3><?php echo $total_nikah ?></h3>
                <p>Total Nikah</p>
                
                <?php foreach ($total_nikah_per_month as $row): ?>
                    <p>
                        Bulan: <?php echo $row->month; ?>,
                        Total Nikah: <?php echo $row->totalNikah; ?>
                    </p>
                <?php endforeach; ?>
            </ul>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="<?php echo base_url('grafik/grafik2') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" >
            <div class="inner" style= "height: 481px">
              <h3><?php echo $total_pensiun ?></h3>

              <p>Total Pensiun</p>
              <?php foreach ($total_pensiun_per_month as $row): ?>
                <p>
                  Bulan: <?php echo $row->month; ?>,
                  Total Pensiun: <?php echo $row->totalPensiun; ?>
                </p>
              <?php endforeach; ?>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="<?php echo base_url('grafik/grafik5') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner"style= "height: 481px">
              <h3><?php echo $total_perceraian ?></h3>

              <p>Total Perceraian Pengadilan Negeri</p>
              <?php foreach ($total_perceraian_per_month as $row): ?>
                <p>
                  Bulan: <?php echo $row->month; ?>,
                  Total Perceraian: <?php echo $row->totalPerceraian; ?>
                </p>
              <?php endforeach; ?>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="<?php echo base_url('grafik/grafik3') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner" style= "height: 481px">
              <h3><?php echo $total_perceraianislam ?></h3>

              <p>Total Perceraian Pengadilan Agama</p>
              <?php foreach ($total_perceraianislam_per_month as $row): ?>
                <p>
                  Bulan: <?php echo $row->month; ?>,
                  Total Perceraian Islam: <?php echo $row->totalPerceraianislam; ?>
                </p>
              <?php endforeach; ?>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="<?php echo base_url('grafik/grafik4') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>



        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $total_users; ?></h3>

              <p>Total Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="<?php echo base_url('users/') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
      <!-- /.row -->
    <?php endif; ?>


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#dashboardMainMenu").addClass('active');
  });
</script>
