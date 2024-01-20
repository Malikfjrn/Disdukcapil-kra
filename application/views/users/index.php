<head>
<style>
  mark {
    background-color: #3498db; /* Warna biru untuk highlight */
    color: white; /* Warna teks putih untuk kontras */
  }
</style>
</head>
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
              <h3 class="box-title">Manage User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Nama</th>
                  <th>No Hp</th>
                  <th>Group</th>
                  <th>Nama Pelapor</th>
                  <th>NIK Pelapor</th>
                  <th>Alamat pelapor</th>
                  <th>Nomor pelapor</th>

                  <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                  <th>Aksi</th>
                  <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                  <?php if($user_data): ?>                  
                    <?php foreach ($user_data as $k => $v): ?>
                      <tr>
                        <td><?php echo $v['user_info']['username']; ?></td>
                        <td><?php echo $v['user_info']['email']; ?></td>
                        <td><?php echo $v['user_info']['firstname'] .' '. $v['user_info']['lastname']; ?></td>
                        <td><?php echo $v['user_info']['phone']; ?></td>
                        <td><?php echo $v['user_group']['group_name']; ?></td>
                        <td><?php echo $v['user_info']['namaPelapor']; ?></td>
                        <td><?php echo $v['user_info']['nikPelapor']; ?></td>
                        <td><?php echo $v['user_info']['alamatPelapor']; ?></td>
                        <td><?php echo $v['user_info']['noPelapor']; ?></td>

                        <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>

                        <td>
                          <?php if(in_array('updateUser', $user_permission)): ?>
                            <a href="<?php echo base_url('users/edit/'.$v['user_info']['id']) ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                          <?php endif; ?>
                          <?php if (in_array('deleteUser', $user_permission)): ?>
                            <a href="javascript:void(0);" class="btn btn-default" onclick="confirmDelete(<?php echo $v['user_info']['id']; ?>)">
                                <i class="fa fa-trash"></i>
                            </a>
                        <?php endif; ?>
                        </td>
                      <?php endif; ?>
                      </tr>
                    <?php endforeach ?>
                  <?php endif; ?>
                </tbody>
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
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.24/features/searchHighlight/dataTables.searchHighlight.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#userTable').DataTable({
      'order': []
    });

    $("#userMainNav").addClass('active');
    $("#manageUserSubNav").addClass('active');

    // Event untuk memperbarui highlight saat pencarian berubah
    table.on('draw.dt', function() {
      updateHighlight();
    });

    // Event untuk memperbarui highlight saat pencarian berubah (di dalam kotak pencarian)
    $('.dataTables_filter input').on('input', function() {
      table.search(this.value).draw();
      updateHighlight();
    });

    function updateHighlight() {
      // Hapus tag <mark> dari seluruh sel
      table.cells().nodes().to$().find('mark').contents().unwrap();

      // Dapatkan kata kunci pencarian
      var searchTerm = table.search();

      // Jika pencarian tidak kosong, tambahkan tag <mark> ke teks yang mengandung kata kunci pencarian
      if (searchTerm !== '') {
        table.cells(':visible').every(function() {
          var cellText = $(this.node()).text();
          if (cellText.toLowerCase().includes(searchTerm.toLowerCase())) {
            var markedText = cellText.replace(new RegExp(searchTerm, 'gi'), function(match) {
              return '<mark>' + match + '</mark>';
            });
            $(this.node()).html(markedText);
          }
        });
      }
    }
  });
</script>
  <script>
  function confirmDelete(itemId) {
      var confirmDelete = confirm("Apakah Anda yakin ingin menghapus?");

      if (confirmDelete) {
          var xhr = new XMLHttpRequest();
          var url = "<?php echo base_url('users/delete/'); ?>" + itemId;

          xhr.open("POST", url, true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

          xhr.send("confirm=true");
          
          xhr.onreadystatechange = function () {
              if (xhr.readyState === 4) {
                  if (xhr.status === 200) {
                      
                      alert("Data berhasil dihapus!");

                      
                      window.location.reload();
                  } else {
                      l
                      alert("Error occurred!");
                  }
              }
          };
      } else {
       
      }
  }
  </script>