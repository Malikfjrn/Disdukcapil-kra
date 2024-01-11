

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah User</h3>
            </div>
            <form role="form" action="<?php base_url('users/create') ?>" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="groups">Groups</label>
                  <select class="form-control" id="groups" name="groups">
                    <option value="">Select Groups</option>
                    <?php foreach ($group_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['group_name'] ?></option>
                    <?php endforeach ?>
                  </select>
                   <?= form_error('groups', '<medium class="text-danger">', '</medium>'); ?>
                </div>

               

                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" value="<?= set_value('username', isset($saved_data['username']) ? $saved_data['username'] : '')?>">
                  <?= form_error('username', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" value="<?= set_value('email', isset($saved_data['email']) ? $saved_data['email'] : '')?>">
                  <?= form_error('email', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" value="<?= set_value('password', isset($saved_data['password']) ? $saved_data['password'] : '')?>">
                  <?= form_error('password', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="cpassword">Konfirmasi password</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off" value="<?= set_value('cpassword', isset($saved_data['cpassword']) ? $saved_data['cpassword'] : '')?>">
                  <?= form_error('cpassword', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="fname">Nama Awal</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Nama Awal" autocomplete="off" value="<?= set_value('fname', isset($saved_data['fname']) ? $saved_data['fname'] : '')?>">
                  <?= form_error('fname', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="lname">Nama Akhir</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Nama Akhir" autocomplete="off" value="<?= set_value('lname', isset($saved_data['lname']) ? $saved_data['lname'] : '')?>">
                  <?= form_error('lname', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="phone">No Hp</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="No Hp" autocomplete="off" value="<?= set_value('phone', isset($saved_data['phone']) ? $saved_data['phone'] : '')?>">
                  <?= form_error('phone', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="nikPelapor">NIK Pelapor</label>
                  <input type="text" class="form-control" id="nikPelapor" name="nikPelapor" placeholder="NIK Pelapor" autocomplete="off" value="<?= set_value('nikPelapor', isset($saved_data['nikPelapor']) ? $saved_data['nikPelapor'] : '')?>">
                  <?= form_error('nikPelapor', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="alamatPelapor">Alamat Pelapor</label>
                  <input type="text" class="form-control" id="alamatPelapor" name="alamatPelapor" placeholder="Alamat Pelapor" autocomplete="off" value="<?= set_value('alamatPelapor', isset($saved_data['alamatPelapor']) ? $saved_data['alamatPelapor'] : '')?>">
                  <?= form_error('alamatPelapor', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="noPelapor">Nomor Pelapor</label>
                  <input type="text" class="form-control" id="noPelapor" name="noPelapor" placeholder="Nomor Pelapor" autocomplete="off" value="<?= set_value('noPelapor', isset($saved_data['noPelapor']) ? $saved_data['noPelapor'] : '')?>">
                  <?= form_error('noPelapor', '<medium class="text-danger">', '</medium>'); ?>
                </div>

                <div class="form-group">
                  <label for="gender">Jenis Kelamin</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="male" value="1">
                      Laki-laki
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="2">
                      Perempuan
                    </label>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a hsref="<?php echo base_url('users/') ?>" class="btn btn-warning">Kembali</a>
              </div>
            </form>
          </div>
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
    $("#groups").select2();

    $("#userMainNav").addClass('active');
    $("#createUserSubNav").addClass('active');
    
  });
</script>
