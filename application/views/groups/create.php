

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        <small>Group</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">group</li>
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
              <h3 class="box-title">Tambah Group</h3>
            </div>
            <form role="form" action="<?php base_url('groups/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name">Group Nama</label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Masukan Nama Group" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="permission">Permission</label>

                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Create</th>
                        <th>Update</th>
                        <th>View</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Users</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser"></td>
                      </tr>
                      <tr>
                        <td>Groups</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteGroup"></td>
                      </tr>
                      
                      <tr>
                        <td>Kelahiran</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKelahiran"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKelahiran"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKelahiran"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKelahiran"></td>
                      </tr>

                      <tr>
                        <td>Kematian</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKematian"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKematian"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKematian"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKematian"></td>
                      </tr>
                      
                      <tr>
                        <td>Nikah</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createNikah"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateNikah"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewNikah"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteNikah"></td>
                      </tr>

                      <tr>
                        <td>Pensiun</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createPensiun"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePensiun"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPensiun"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePensiun"></td>
                      </tr>

                      <tr>
                        <td>Perceraian</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createPerceraian"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePerceraian"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPerceraian"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePerceraian"></td>
                      </tr>

                      <tr>
                        <td>Perceraian Islam</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createPerceraianislam"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePerceraianislam"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPerceraianislam"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePerceraianislam"></td>
                      </tr>
                      
                      <tr>
                        <td>Profile</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProfile"></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Grafik</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewGrafik"></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Setting</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                    
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('groups/') ?>" class="btn btn-warning">Kembali</a>
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
      $('#groupMainNav').addClass('active');
      $('#createGroupSubMenu').addClass('active');
    });
  </script>

