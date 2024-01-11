

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Profile</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <a href="<?php echo base_url('users/setting') ?>" class="btn btn-primary">Edit profile</a>
            <br /> <br />
      <div class="row">
      <div class="col-md-12 col-xs-12">
          <?php
          
          if ($this->session->flashdata('success')) :
              echo '<div class="alert alert-success alert-dismissible" role="alert">';
              echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              echo $this->session->flashdata('success');
              echo '</div>';
          endif;

          
          if ($this->session->flashdata('error')) :
              echo '<div class="alert alert-error alert-dismissible" role="alert">';
              echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              echo $this->session->flashdata('error');
              echo '</div>';
          endif;?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-condensed table-hovered">
                <tr>
                  <th>Username</th>
                  <td><?php echo $user_data['username']; ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php echo $user_data['email']; ?></td>
                </tr>
                <tr>
                  <th>Nama Awal</th>
                  <td><?php echo $user_data['firstname']; ?></td>
                </tr>
                <tr>
                  <th>Nama Akhir</th>
                  <td><?php echo $user_data['lastname']; ?></td>
                </tr>
                <tr>
                  <th>Jenis Kelamin</th>
                  <td><?php echo ($user_data['gender'] == 1) ? 'Laki-laki' : 'Perempuan'; ?></td>
                </tr>
                <tr>
                  <th>No Hp</th>
                  <td><?php echo $user_data['phone']; ?></td>
                </tr>
                <tr>
                  <th>Group</th>
                  <td><span class="label label-info"><?php echo $user_group['group_name']; ?></span></td>
                </tr>
                <tr>
                  <th>Nama Pelapor</th>
                  <td><?php echo $user_data['namaPelapor']; ?></td>
                </tr>
                <tr>
                <tr>
                  <th>NIK Pelapor</th>
                  <td><?php echo $user_data['nikPelapor']; ?></td>
                </tr>
                <tr>
                  <th>Alamat Pelapor</th>
                  <td><?php echo $user_data['alamatPelapor']; ?></td>
                </tr>
                <tr>
                  <th>Nomor Pelapor</th>
                  <td><?php echo $user_data['noPelapor']; ?></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <?php
          $this->session->mark_as_temp('success', 1);
          $this->session->mark_as_temp('error', 1);
          ?>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#profileMainNav").addClass('active');
    });
  </script>
  