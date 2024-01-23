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
      <small>Nikah</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Nikah</li>
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

        <?php if (in_array('createNikah', $user_permission)) : ?>
          <a href="<?php echo base_url('nikah/create') ?>" class="btn btn-primary">Tambah Data Nikah</a>
          <br /> <br />
        <?php endif; ?>


        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Nikah</h3>
          </div>
          <!-- /.box-header --> 
          <div class="box-body">
          <div class="responsive" style="overflow-y: auto; max-height: 440px;">
            <table id="nikahTable" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK Pria</th>
                    <th>Nama Lengkap Pria</th>
                    <th>Provinsi Pria</th>
                    <th>Kabupaten Pria</th>
                    <th>Kecamatan Pria</th>
                    <th>Desa Pria</th>
                    <th>NIK Wanita</th>
                    <th>Nama Lengkap Wanita</th>
                    <th>Provinsi Wanita</th>
                    <th>Kabupaten wanita</th>
                    <th>Kecamatan Wanita</th>
                    <th>Desa Wanita</th>
                    <th>No Nikah</th>
                    <th>Tanggal Nikah</th>
                    <th>Alamat Baru</th>

                    <?php if (in_array('updateNikah', $user_permission) || in_array('deleteNikah', $user_permission)) : ?>
                      <th>Aksi</th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($nkh_data) : ?>
                    <?php $no = 1; ?>
                    <?php foreach ($nkh_data as $k => $v) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $v['nkh_info']['nik_pria']; ?></td>
                        <td><?php echo $v['nkh_info']['nama_lengkap_pria']; ?></td>
                        <td><?php echo $v['nkh_info']['provinsi_pria']; ?></td>
                        <td><?php echo $v['nkh_info']['kabupaten_pria']; ?></td>
                        <td><?php echo $v['nkh_info']['kecamatan_pria']; ?></td>
                        <td><?php echo $v['nkh_info']['desa_pria']; ?></td>
                        <td><?php echo $v['nkh_info']['nik_wanita']; ?></td>
                        <td><?php echo $v['nkh_info']['nama_lengkap_wanita']; ?></td>
                        <td><?php echo $v['nkh_info']['provinsi_wanita']; ?></td>
                        <td><?php echo $v['nkh_info']['kabupaten_wanita']; ?></td>
                        <td><?php echo $v['nkh_info']['kecamatan_wanita']; ?></td>
                        <td><?php echo $v['nkh_info']['desa_wanita']; ?></td>
                        <td><?php echo $v['nkh_info']['no_nikah']; ?></td>
                        <td><?php echo $v['nkh_info']['tanggalNikah']; ?></td>
                        <td><?php echo $v['nkh_info']['alamat_baru']; ?></td>
                        <?php if (in_array('updateNikah', $user_permission) || in_array('deleteNikah', $user_permission)) : ?>

                          <td>
                            <?php if (in_array('updateNikah', $user_permission)) : ?>
                              <a href="<?php echo base_url('nikah/edit/' . $v['nkh_info']['id']) ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                            <?php endif; ?>
                            <?php if (in_array('deleteNikah', $user_permission)): ?>
                            <a href="javascript:void(0);" class="btn btn-default" onclick="confirmDelete(<?php echo $v['nkh_info']['id']; ?>)">
                                <i class="fa fa-trash"></i>
                            </a>
                        <?php endif; ?>
                          </td>
                        <?php endif; ?>
                      </tr>
                    <?php $no++;
                    endforeach ?>
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
    var table = $('#nikahTable').DataTable({
      'order': []
    });

    $("#nikahMainNav").addClass('active');
    $("#manageNikahSubNav").addClass('active');

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
              var url = "<?php echo base_url('nikah/delete/'); ?>" + itemId;

              xhr.open("POST", url, true);
              xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

              xhr.send("confirm=true");
              
              xhr.onreadystatechange = function () {
                  if (xhr.readyState === 4) {
                      if (xhr.status === 200) {
                        
                          alert("Data berhasil dihapus!");

                          
                          window.location.reload();
                      } else {
                          
                          alert("Error occurred!");
                      }
                  }
              };
          } else {
            
          }
      }
    </script>