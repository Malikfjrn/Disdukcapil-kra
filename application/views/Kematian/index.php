<head>
<style>
  mark {
    background-color: #3498db; /* Warna biru untuk highlight */
    color: white; /* Warna teks putih untuk kontras */
  }
</style>
</head>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Kematian</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Kematian</li>
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

        <?php if (in_array('createKematian', $user_permission)) : ?>
          <a href="<?php echo base_url('kematian/create') ?>" class="btn btn-primary">Tambah Data Kematian</a>
          <br /> <br />
        <?php endif; ?>
        
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Manage Kematian</h3>
          </div>
          <!-- /.box-header -->
          <div class="responsive" style="overflow-y: auto; max-height: 440px;">
            <table id="kematianTable" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK Pelapor</th>
                    <th>Nama Pelapor</th>
                    <th>Alamat Pelapor</th>
                    <th>Nomor KK Pelapor</th>
                    <th>Nomor HP Pelapor</th>
                    <th>Email</th>
                    <th>NIK Ibu</th>
                    <th>Nama Ibu</th>
                    <th>NIK Ayah</th>
                    <th>Nama Ayah</th>
                    <th>NIK Saksi 1</th>
                    <th>Nama Saksi 1</th>
                    <th>NIK Saksi 2</th>
                    <th>Nama Saksi 2</th>
                    <th>NIK Jenazah</th>
                    <th>Nama Jenazah</th>
                    <th>Tempat Kematian</th>
                    <th>Tanggal Kematian</th>
                    <th>Waktu Kematian</th>
                    <th>Sebab</th>
                    <th>Yang Menerangkan</th>
                    <th>Nomor Kartu Keluarga</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>Form Pelaporan</th>
                    <th>Surat Keterangan</th>
                    <th>KK Jenazah</th>
                    <th>KTP Jenazah</th>
                    <th>KTP Pelapor</th>
                    <th>KTP Saksi</th>

                    <?php if (in_array('updateKematian', $user_permission) || in_array('deleteKematian', $user_permission)) : ?>
                      <th>Aksi</th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($kmt_data) : ?>
                    <?php $no = 1; ?>
                    <?php foreach ($kmt_data as $k => $v) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $v['kmt_info']['nikPelapor']; ?></td>
                        <td><?php echo $v['kmt_info']['namaPelapor']; ?></td>
                        <td><?php echo $v['kmt_info']['alamatPelapor']; ?></td>
                        <td><?php echo $v['kmt_info']['noKKpelapor']; ?></td>
                        <td><?php echo $v['kmt_info']['noPelapor']; ?></td>
                        <td><?php echo $v['kmt_info']['email']; ?></td>
                        <td><?php echo $v['kmt_info']['nikIbu']; ?></td>
                        <td><?php echo $v['kmt_info']['namaIbu']; ?></td>
                        <td><?php echo $v['kmt_info']['nikAyah']; ?></td>
                        <td><?php echo $v['kmt_info']['namaAyah']; ?></td>
                        <td><?php echo $v['kmt_info']['nikSaksiSatu']; ?></td>
                        <td><?php echo $v['kmt_info']['namaSaksiSatu']; ?></td>
                        <td><?php echo $v['kmt_info']['nikSaksiDua']; ?></td>
                        <td><?php echo $v['kmt_info']['namaSaksiDua']; ?></td>
                        <td><?php echo $v['kmt_info']['nikJenazah']; ?></td>
                        <td><?php echo $v['kmt_info']['namaJenazah']; ?></td>
                        <td><?php echo $v['kmt_info']['tempat']; ?></td>
                        <td><?php echo $v['kmt_info']['tanggalKematian']; ?></td>
                        <td><?php echo $v['kmt_info']['waktuKematian']; ?></td>
                        <td><?php echo $v['kmt_info']['sebab']; ?></td>
                        <td><?php echo $v['kmt_info']['yangMenerangkan']; ?></td>
                        <td><?php echo $v['kmt_info']['noKK']; ?></td>
                        <td><?php echo $v['kmt_info']['namaKepala']; ?></td>
                        <td><img style="width: 100px; max-height: auto;" src="<?php echo base_url() . $v['kmt_info']['formPelapor']; ?>" alt="">
                        <a href="<?php echo base_url().$v['kmt_info']['formPelapor']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px; max-height: auto;" src="<?php echo base_url() . $v['kmt_info']['suratKet']; ?>" alt="">
                        <a href="<?php echo base_url().$v['kmt_info']['suratKet']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a> </td>
                        <td><img style="width: 100px;" src="<?php echo base_url() . $v['kmt_info']['KKjenazah']; ?>" alt="">
                        <a href="<?php echo base_url().$v['kmt_info']['KKjenazah']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px;" src="<?php echo base_url() . $v['kmt_info']['KTPjenazah']; ?>" alt="">
                        <a href="<?php echo base_url().$v['kmt_info']['KTPjenazah']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px;" src="<?php echo base_url() . $v['kmt_info']['KTPpelapor']; ?>" alt="">
                        <a href="<?php echo base_url().$v['kmt_info']['KTPpelapor']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px;" src="<?php echo base_url() . $v['kmt_info']['KTPsaksi']; ?>" alt="">
                        <a href="<?php echo base_url().$v['kmt_info']['KTPpelapor']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>

                        <?php if (in_array('updateKematian', $user_permission) || in_array('deleteKematian', $user_permission)) : ?>

                          <td>
                            <?php if (in_array('updateKematian', $user_permission)) : ?>
                              <a href="<?php echo base_url('kematian/edit/' . $v['kmt_info']['id']) ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                            <?php endif; ?>
                            <?php if (in_array('deleteKematian', $user_permission)): ?>
                            <a href="javascript:void(0);" class="btn btn-default" onclick="confirmDelete(<?php echo $v['kmt_info']['id']; ?>)">
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
    var table = $('#kematianTable').DataTable({
      'order': []
    });

    $("#kematianMainNav").addClass('active');
    $("#manageKematianSubNav").addClass('active');

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
        var url = "<?php echo base_url('kematian/delete/'); ?>" + itemId;

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