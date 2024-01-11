

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
              <h3 class="box-title">Edit User</h3>
            </div>
            <form role="form" action="<?php base_url('users/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="groups">Group</label>
                  <select class="form-control" id="groups" name="groups">
                    <option value="">Select Group</option>
                    <?php foreach ($group_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>" <?php if($user_group['id'] == $v['id']) { echo 'selected'; } ?> ><?php echo $v['group_name'] ?></option> 
                    <?php endforeach ?>
                  </select>
                </div>

              

                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $user_data['username'] ?>" autocomplete="off" readonly>
                </div>
                <br>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user_data['email'] ?>" autocomplete="off">
                </div>
                <br>                
                <div class="form-group">
                  <label for="fname">Nama Awal</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Nama Awal" value="<?php echo $user_data['firstname'] ?>" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                  <label for="lname">Nama Akhir</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Nama Akhir" value="<?php echo $user_data['lastname'] ?>" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                  <label for="phone">NO Hp</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="No Hp" value="<?php echo $user_data['phone'] ?>" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                  <label for="namaPelapor">Nama Pelapor</label>
                  <input type="text" class="form-control" id="namaPelapor" name="namaPelapor" placeholder="Nama Pelapor" value="<?php echo $user_data['namaPelapor'] ?>" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                  <label for="nikPelapor">NIK Pelapor</label>
                  <input type="text" class="form-control" id="nikPelapor" name="nikPelapor" placeholder="NIK Pelapor" value="<?php echo $user_data['nikPelapor'] ?>" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                  <label for="alamatPelapor">Alamat Pelapor</label>
                  <input type="text" class="form-control" id="alamatPelapor" name="alamatPelapor" placeholder="Alamat Pelapor" value="<?php echo $user_data['alamatPelapor'] ?>" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                  <label for="noPelapor">Nomor Pelapor</label>
                  <input type="text" class="form-control" id="noPelapor" name="noPelapor" placeholder="Nomor Pelapor" value="<?php echo $user_data['noPelapor'] ?>" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                  <label for="gender">Laki-laki</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="male" value="1" <?php if($user_data['gender'] == 1) {
                        echo "checked";
                      } ?>>
                      Laki-laki
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="2" <?php if($user_data['gender'] == 2) {
                        echo "checked";
                      } ?>>
                      Perempuan
                    </label>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Biarkan bidang kata sandi kosong jika Anda tidak ingin mengubah.
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                  <label for="cpassword">Konfirmasi password</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('users/') ?>" class="btn btn-warning">Kembali</a>
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
    $("#manageUserSubNav").addClass('active');
  });
</script>
