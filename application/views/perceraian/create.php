<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Perceraian</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Perceraian</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif ($this->session->flashdata('error')) : ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>

        <div class="box">
          <div class="box-header">
            <div class="row">
              <div class="col-md-4 col-4 my-auto">
                <h3 class="box-title" style="margin-top: 10px;">Tambah Perceraian</h3>
              </div>
              <div class="col-md-4 col-4 my-auto">
                <a class="btn btn-success btn-sm" style="margin-top: 5px;" href="<?= base_url('assets/perceraian.pdf') ?>" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
              </div>
              <div class="col-md-4 col-4 my-auto">
                <a class="btn btn-primary btn-sm" style="margin-top: 5px;" href="#" data-toggle="modal" data-target="#keterangan"><i class="fa fa-info-circle"></i> Keterangan</a>
                <div class="modal fade" id="keterangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Keterangan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Persyaratan :
                        <ul>
                          <li>Formulir Permohonan dapat diunduh di https://tinyurl.com/form-perceraian
                          </li>
                          <li>Putusan Pengadilan
                          </li>
                          <li>Akta Perkawinan/Surat Pernyataan dalam sengketa
                          </li>
                          <li>Kartu Keluarga (KK)
                          </li>
                          <li>KTP-el pasangan
                          <li>
                            Formulir Pelaporan Pencatatan Sipil (F2.01), dapat diunduh di https://bit.ly/3qUwFYD
                          </li>
                        </ul>
                        <br>
                        Apabila ybs menghendaki untuk pindah dari alamat lama
                        <ul>
                          <li>Formulir Pindah (F1.03) dapat diunduh di https://bit.ly/3JYDh2k
                          </li>
                        </ul>
                        <p class="text-justify">Dokumen yang diupload adalah dokumen asli yang difoto dijadikan file gambar ukuran maksimal 1 MB
                          <br><br>
                          Dokumen jadi akan dikirimkan petugas Disdukcapil ke Pengadilan Negeri. Serahkan formulir dan berkas permohonan kepada petugas Disdukcapil.
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <form role="form" action="<?php base_url('mahasiswa/create') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label for="nik_petugas">NIK Petugas</label>
                <input type="text" class="form-control" id="nik_petugas" name="nik_petugas" placeholder="NIK Petugas" autocomplete="off" value="<?= set_value('nik_petugas', isset($saved_data['nik_petugas']) ? $saved_data['nik_petugas'] : '')?>">
                <?= form_error('nik_petugas', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nama_petugas">Nama Petugas</label>
                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Nama Petugas" autocomplete="off" value="<?= set_value('nama_petugas', isset($saved_data['nama_petugas']) ? $saved_data['nama_petugas'] : '')?>">
                <?= form_error('nama_petugas', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nik_suami">NIK Suami</label>
                <input type="text" class="form-control" id="nik_suami" name="nik_suami" placeholder="NIK Suami" autocomplete="off" value="<?= set_value('nik_suami', isset($saved_data['nik_suami']) ? $saved_data['nik_suami'] : '')?>">
                <?= form_error('nik_suami', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nama_suami">Nama Suami</label>
                <input type="text" class="form-control" id="nama_suami" name="nama_suami" placeholder="Nama Suami" autocomplete="off" value="<?= set_value('nama_suami', isset($saved_data['nama_suami']) ? $saved_data['nama_suami'] : '')?>">
                <?= form_error('nama_suami', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nik_Istri">NIK Istri</label>
                <input type="text" class="form-control" id="nik_istri" name="nik_istri" placeholder="NIK Istri" autocomplete="off" value="<?= set_value('nik_istri', isset($saved_data['nik_istri']) ? $saved_data['nik_istri'] : '')?>">
                <?= form_error('nik_istri', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nama_istri">Nama Istri</label>
                <input type="text" class="form-control" id="nama_istri" name="nama_istri" placeholder="Nama Istri" autocomplete="off" value="<?= set_value('nama_istri', isset($saved_data['nama_istri']) ? $saved_data['nama_istri'] : '')?>">
                <?= form_error('nama_istri', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="mengajukan">Mengajukan</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="mengajukan" id="Suami" value="Suami">
                    Suami
                  </label>
                  <label>
                    <input type="radio" name="mengajukan" id="Istri" value="Istri">
                    Istri
                  </label>
                </div>
                <?= form_error('mengajukan', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="no_akta">No Akta</label>
                <input type="text" class="form-control" id="no_akta" name="no_akta" placeholder="No Akta" autocomplete="off" value="<?= set_value('no_akta', isset($saved_data['no_akta']) ? $saved_data['no_akta'] : '')?>">
                <?= form_error('no_akta', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tanggal_akta">Tanggal Akta</label>
                <input type="date" class="form-control" id="tanggal_akta" name="tanggal_akta" placeholder="Tanggal Akta" autocomplete="off" value="<?= set_value('tanggal_akta', isset($saved_data['tanggal_akta']) ? $saved_data['tanggal_akta'] : '')?>">
                <?= form_error('tanggal_akta', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="no_putusan">No Putusan</label>
                <input type="text" class="form-control" id="no_putusan" name="no_putusan" placeholder="No Putusan" autocomplete="off" value="<?= set_value('no_putusan', isset($saved_data['no_putusan']) ? $saved_data['tanggalno_putusan_akta'] : '')?>">
                <?= form_error('no_putusan', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tanggal_putusan">Tanggal Putusan</label>
                <input type="date" class="form-control" id="tanggal_putusan" name="tanggal_putusan" placeholder="Tanggal Putusan" autocomplete="off" value="<?= set_value('tanggal_putusan', isset($saved_data['tanggal_putusan']) ? $saved_data['tanggal_putusan'] : '')?>">
                <?= form_error('tanggal_putusan', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="sebab">Sebab</label>
                <select class="form-control" id="sebab" name="sebab">
                  <option value="">Pilih Sebab</option>
                  <option value="PEMABUK/PEMADAT">PEMABUK/PEMADAT</option>
                  <option value="BERBUAT ZINA">BERBUAT ZINA</option>
                  <option value="MENINGGALKAN PASANGAN LEBIH DARI 2 THN TANPA ALASAN">MENINGGALKAN PASANGAN LEBIH DARI 2 THN TANPA ALASAN</option>
                  <option value="HUKUMAN PENJARA PENJARA DIATAS 5 THN/LEBIH BERAT">HUKUMAN PENJARA PENJARA DIATAS 5 THN/LEBIH BERAT</option>
                  <option value="MELAKUKAN KEKEJAMAN/KEKERASAN DALAM RUMAH TANGGA">MELAKUKAN KEKEJAMAN/KEKERASAN DALAM RUMAH TANGGA</option>
                  <option value="MENDAPAT CACAT BADAN/PENYAKIT">MENDAPAT CACAT BADAN/PENYAKIT</option>
                </select>
                <?= form_error('sebab', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">

                <label for="form_permohonan">Form Permohonan</label>
                <div class="kv-avatar">
                  <div class="file">
                  <input id="form_permohonan" name="form_permohonan" type="file"  required oninvalid="this.setCustomValidity('Upload file harus diisi')" oninput="this.setCustomValidity('')">
                    <?= form_error('form_permohonan', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>
              <div class="form-group">

                <label for="amar_putusan">Amar Putusan</label>
                <div class="kv-avatar">
                  <div class="file">
                  <input id="amar_putusan" name="amar_putusan" type="file"  required oninvalid="this.setCustomValidity('Upload file harus diisi')" oninput="this.setCustomValidity('')">
                    <?= form_error('amar_putusan', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>
              <div class="form-group">

                <label for="akta_kawin">Akta Kawin</label>
                <div class="kv-avatar">
                  <div class="file">
                  <input id="akta_kawin" name="akta_kawin" type="file"  required oninvalid="this.setCustomValidity('Upload file harus diisi')" oninput="this.setCustomValidity('')">
                    <?= form_error('akta_kawin', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>
              <div class="form-group">

                <label for="kk">Kartu Keluarga</label>
                <div class="kv-avatar">
                  <div class="file">
                  <input id="kk" name="kk" type="file"  required oninvalid="this.setCustomValidity('Upload file harus diisi')" oninput="this.setCustomValidity('')">
                    <?= form_error('kk', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>
              <div class="form-group">

                <label for="ktp">Foto KTP</label>
                <div class="kv-avatar">
                  <div class="file">
                  <input id="ktp" name="ktp" type="file"  required oninvalid="this.setCustomValidity('Upload file harus diisi')" oninput="this.setCustomValidity('')">
                    <?= form_error('ktp', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>
              <div class="form-group">

                <label for="form_pindah">Form Pindah</label>
                <div class="kv-avatar">
                  <div class="file">
                  <input id="form_pindah" name="form_pindah" type="file"  required oninvalid="this.setCustomValidity('Upload file harus diisi')" oninput="this.setCustomValidity('')">
                    <?= form_error('form_pindah', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('perceraian/') ?>" class="btn btn-warning">Kembali</a>
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
    // $("#fakultas").select2();
    // $("#jurusan").select2();
    // $("#").select2();

    $("#PerceraianMainNav").addClass('active');
    $("#createPerceraianSubNav").addClass('active');

  });

  var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="glyphicon glyphicon-tag"></i>' +
    '</button>';

  $("#foto").fileinput({
    overwriteInitial: true,
    maxFileSize: 1500,
    showClose: false,
    showCaption: false,
    browseLabel: '',
    removeLabel: '',
    browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-1',
    msgErrorClass: 'alert alert-block alert-danger',
    // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
    layoutTemplates: {
      main2: '{preview} ' + btnCust + ' {remove} {browse}'
    },
    allowedFileExtensions: ["jpg", "png", "gif"]
  });
</script>