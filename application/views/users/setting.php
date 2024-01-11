  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Setting</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Setting</li>
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
              <h3 class="box-title">Update Information</h3>
            </div>
            <!-- /.box-header -->
            <form role="form" action="<?php base_url('users/setting') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>


                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $user_data['username'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user_data['email'] ?>" autocomplete="off">
                </div>                

                <div class="form-group">
                  <label for="fname">Nama Awal</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Nama Awal" value="<?php echo $user_data['firstname'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="lname">Nama Akhir</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Nama Akhir" value="<?php echo $user_data['lastname'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="phone">No Hp</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="No Hp" value="<?php echo $user_data['phone'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="namaPelapor">Nama Pelapor</label>
                  <input type="text" class="form-control" id="namaPelapor" name="namaPelapor" placeholder="NIK Pelapor" value="<?php echo $user_data['namaPelapor'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="nikPelapor">NIK Pelapor</label>
                  <input type="text" class="form-control" id="nikPelapor" name="nikPelapor" placeholder="NIK Pelapor" value="<?php echo $user_data['nikPelapor'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="alamatPelapor">Alamat Pelapor</label>
                  <input type="text" class="form-control" id="alamatPelapor" name="alamatPelapor" placeholder="Alamat Pelapor" value="<?php echo $user_data['alamatPelapor'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="noPelapor">Nomor Pelapor</label>
                  <input type="text" class="form-control" id="noPelapor" name="noPelapor" placeholder="Nomor Pelapor" value="<?php echo $user_data['noPelapor'] ?>" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="gender">Jenis Kelmain</label>
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

                <div class="form-group">
                  <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Biarkan bidang kata sandi kosong jika Anda tidak ingin mengubah.
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="cpassword">Confirm password</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('users/profile') ?>" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
       
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#settingMainNav").addClass('active');
    });
  </script>
 
