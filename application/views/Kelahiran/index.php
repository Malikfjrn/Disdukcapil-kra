
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
        <small>Kelahiran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelahiran</li>
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
          
          <?php if(in_array('createKelahiran', $user_permission)): ?>
            <a href="<?php echo base_url('kelahiran/create') ?>" class="btn btn-primary">Tambah Data Kelahiran</a>
            <br /> <br />
          <?php endif; ?>


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Kelahiran</h3>
            </div>
            <!-- /.box-header -->
            <div class="responsive" style="overflow-y: auto; max-height: 440px;">
            <table id="kelahiranTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIK Pelapor</th>
                  <th>Nama Pelapor</th>
                  <th>Alamat Pelapor</th>
                  <th>Nama Fasilitas Kesehatan</th>
                  <th>Nomor Pelapor</th>
                  <th>Email Pelapor</th>
                  <th>NIK Ibu</th>
                  <th>Nama Ibu</th>
                  <th>NIK Ayah</th>
                  <th>Nama Ayah</th>
                  <th>NIK Saksi 1</th>
                  <th>Nama Saksi 1</th>
                  <th>NIK Saksi 2</th>
                  <th>Nama Saksi 1</th>
                  <th>Nomor Kartu Keluarga</th>
                  <th>Nama Kepala Keluarga</th>
                  <th>Nama Bayi</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Dilahirkan</th>
                  <th>Tempat Kelahiran</th>
                  <th>Tanggal Lahir</th>
                  <th>Jam</th>
                  <th>Jenis Kelahiran</th>
                  <th>Kelahiran Ke</th>
                  <th>Penolong Kelahiran</th>
                  <th>Berat Bayi</th>
                  <th>Panjang Bayi</th>
                  <th>Form Pelapor</th>
                  <th>Surat Keterangan</th>
                  <th>Kutipan Akta</th>
                  <th>Kartu Keluarga Orang Tua</th>
                  <th>KTP Orang Tua</th>
                  <th>KTP Pelapor</th>
                  <th>KTP Saksi</th>

                  <?php if(in_array('updateKelahiran', $user_permission) || in_array('deleteKelahiran', $user_permission)): ?>
                    <th>Aksi</th>
                  <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                  <?php if($klr_data): ?>  
                   <?php $no = 1; ?>                
                    <?php foreach ($klr_data as $k => $v): ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $v['klr_info']['nikPelapor']; ?></td>
                        <td><?php echo $v['klr_info']['namaPelapor']; ?></td>
                        <td><?php echo $v['klr_info']['alamatPelapor']; ?></td>
                        <td><?php echo $v['klr_info']['namaFaskes']; ?></td>
                        <td><?php echo $v['klr_info']['noPelapor']; ?></td>
                        <td><?php echo $v['klr_info']['email']; ?></td>
                        <td><?php echo $v['klr_info']['nikIbu']; ?></td>
                        <td><?php echo $v['klr_info']['namaIbu']; ?></td>
                        <td><?php echo $v['klr_info']['nikAyah']; ?></td>
                        <td><?php echo $v['klr_info']['namaAyah']; ?></td>
                        <td><?php echo $v['klr_info']['nikSaksiSatu']; ?></td>
                        <td><?php echo $v['klr_info']['namaSaksiSatu']; ?></td>
                        <td><?php echo $v['klr_info']['nikSaksiDua']; ?></td>
                        <td><?php echo $v['klr_info']['namaSaksiDua']; ?></td>
                        <td><?php echo $v['klr_info']['noKK']; ?></td>
                        <td><?php echo $v['klr_info']['namaKepalaKeluarga']; ?></td>
                        <td><?php echo $v['klr_info']['namaBayi']; ?></td>
                        <td><?php echo $v['klr_info']['jenisKelamin']; ?></td>
                        <td><?php echo $v['klr_info']['tempatDilahirkan']; ?></td>
                        <td><?php echo $v['klr_info']['tempatKelahiran']; ?></td>
                        <td><?php echo $v['klr_info']['tanggalLahir']; ?></td>
                        <td><?php echo $v['klr_info']['jam']; ?></td>
                        <td><?php echo $v['klr_info']['jenisKelahiran']; ?></td>
                        <td><?php echo $v['klr_info']['kelahiranKe']; ?></td>
                        <td><?php echo $v['klr_info']['penolongKelahiran']; ?></td>
                        <td><?php echo $v['klr_info']['beratBayi']; ?></td>
                        <td><?php echo $v['klr_info']['panjangBayi']; ?></td>
                        <td><img style="width: 100px; max-height: auto;" src="<?php echo base_url().$v['klr_info']['formPelapor']; ?>" alt="">
                        <a href="<?php echo base_url().$v['klr_info']['formPelapor']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px; max-height: auto;" src="<?php echo base_url().$v['klr_info']['suratKelahiran']; ?>" alt="">
                        <a href="<?php echo base_url().$v['klr_info']['suratKelahiran']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px; max-height: auto;" src="<?php echo base_url().$v['klr_info']['kutipanAkta']; ?>" alt="">
                        <a href="<?php echo base_url().$v['klr_info']['kutipanAkta']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px; max-height: auto;" src="<?php echo base_url().$v['klr_info']['KKortu']; ?>" alt="">
                        <a href="<?php echo base_url().$v['klr_info']['KKortu']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px; max-height: auto;" src="<?php echo base_url().$v['klr_info']['KTPortu']; ?>" alt="">
                        <a href="<?php echo base_url().$v['klr_info']['KTPortu']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px; max-height: auto;" src="<?php echo base_url().$v['klr_info']['KTPpelapor']; ?>" alt="">
                        <a href="<?php echo base_url().$v['klr_info']['KTPpelapor']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                        <td><img style="width: 100px; max-height: auto;" src="<?php echo base_url().$v['klr_info']['KTPsaksi']; ?>" alt="">
                        <a href="<?php echo base_url().$v['klr_info']['KTPsaksi']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-image"></i></a></td>
                      
                        <?php if(in_array('updateKelahiran', $user_permission) || in_array('deleteKelahiran', $user_permission)): ?>
                          <td>
                          <?php if(in_array('updateKelahiran', $user_permission)): ?>
                            <a href="<?php echo base_url('kelahiran/edit/'.$v['klr_info']['id']) ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                          <?php endif; ?>
                          <?php if (in_array('deleteKelahiran', $user_permission)): ?>
                              <a href="javascript:void(0);" class="btn btn-default" onclick="confirmDelete(<?php echo $v['klr_info']['id']; ?>)">
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
    var table = $('#kelahiranTable').DataTable({
      'order': []
    });

    $("#kelahiranMainNav").addClass('active');
    $("#manageKelahiranSubNav").addClass('active');

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
        var url = "<?php echo base_url('kelahiran/delete/'); ?>" + itemId;

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