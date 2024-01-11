

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        <small>Groups</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('groups/') ?>">Groups</a></li>
        <li class="active">Edit</li>
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
              <h3 class="box-title">Edit Group</h3>
            </div>
            <form role="form" action="<?php base_url('groups/update') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name">Group Nama</label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name" value="<?php echo $group_data['group_name']; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="permission">Permission</label>

                  <?php $serialize_permission = unserialize($group_data['permission']); ?>
                  
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
                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser" <?php if($serialize_permission) {
                          if(in_array('createUser', $serialize_permission)) { echo "checked"; } 
                        } ?> ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser" <?php 
                        if($serialize_permission) {
                          if(in_array('updateUser', $serialize_permission)) { echo "checked"; } 
                        }
                        ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser" <?php 
                        if($serialize_permission) {
                          if(in_array('viewUser', $serialize_permission)) { echo "checked"; }   
                        }
                        ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteUser', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>

                      <tr>
                        <td>Groups</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('createGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('updateGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('viewGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteGroup" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteGroup', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>
                      <tr>
                        <td>Kelahiran</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKelahiran" <?php 
                        if($serialize_permission) {
                          if(in_array('createKelahiran', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKelahiran" <?php 
                        if($serialize_permission) {
                          if(in_array('updateKelahiran', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKelahiran" <?php 
                        if($serialize_permission) {
                          if(in_array('viewKelahiran', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKelahiran" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteKelahiran', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>

                      <tr>
                        <td>Kematian</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKematian" <?php 
                        if($serialize_permission) {
                          if(in_array('createKematian', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKematian" <?php 
                        if($serialize_permission) {
                          if(in_array('updateKematian', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKematian" <?php 
                        if($serialize_permission) {
                          if(in_array('viewKematian', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKematian" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteKematian', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>

                      <tr>
                        <td>Nikah</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createNikah" <?php 
                        if($serialize_permission) {
                          if(in_array('createNikah', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateNikah" <?php 
                        if($serialize_permission) {
                          if(in_array('updateNikah', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewNikah" <?php 
                        if($serialize_permission) {
                          if(in_array('viewNikah', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteNikah" <?php 
                        if($serialize_permission) {
                          if(in_array('deleteNikah', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>

                      <tr>
                        <td>Pensiun</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createPensiun" <?php 
                        if($serialize_permission) {
                          if(in_array('createPensiun', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePensiun" <?php 
                        if($serialize_permission) {
                          if(in_array('updatePensiun', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPensiun" <?php 
                        if($serialize_permission) {
                          if(in_array('viewPensiun', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePensiun" <?php 
                        if($serialize_permission) {
                          if(in_array('deletePensiun', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>

                      <tr>
                        <td>Perceraian</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createPerceraian" <?php 
                        if($serialize_permission) {
                          if(in_array('createPerceraian', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePerceraian" <?php 
                        if($serialize_permission) {
                          if(in_array('updatePerceraian', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPerceraian" <?php 
                        if($serialize_permission) {
                          if(in_array('viewPerceraian', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePerceraian" <?php 
                        if($serialize_permission) {
                          if(in_array('deletePerceraian', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>

                      <tr>
                        <td>Perceraian Islam</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createPerceraianislam" <?php 
                        if($serialize_permission) {
                          if(in_array('createPerceraianislam', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePerceraianislam" <?php 
                        if($serialize_permission) {
                          if(in_array('updatePerceraianislam', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPerceraianislam" <?php 
                        if($serialize_permission) {
                          if(in_array('viewPerceraianislam', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePerceraianislam" <?php 
                        if($serialize_permission) {
                          if(in_array('deletePerceraianislam', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                      </tr>

                      <tr>
                        <td>Profile</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProfile" <?php 
                        if($serialize_permission) {
                          if(in_array('viewProfile', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Setting</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting" <?php 
                        if($serialize_permission) {
                          if(in_array('updateSetting', $serialize_permission)) { echo "checked"; }  
                        }
                         ?>></td>
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
      $('#manageGroupSubMenu').addClass('active');
    });
  </script>  

