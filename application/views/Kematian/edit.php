<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit
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
            <h3 class="box-title">Edit Data Kematian</h3>
          </div>
          <form role="form" action="<?php base_url('kematian/edit') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">

              
              <div class="form-group">
                <label for="noKKpelapor">Nomor KK Pelapor</label>
                <input type="text" class="form-control" id="noKKpelapor" name="noKKpelapor" value="<?php echo $kmt_data['noKKpelapor'] ?>" placeholder="Nomor KK Pelapor" autocomplete="off">
                <?= form_error('noKKpelapor', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nikIbu">NIK Ibu</label>
                <input type="text" class="form-control" id="nikIbu" name="nikIbu" value="<?php echo $kmt_data['nikIbu'] ?>" placeholder="NIK Ibu" autocomplete="off">
                <?= form_error('nikIbu', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaIbu">Nama Ibu</label>
                <input type="text" class="form-control" id="namaIbu" name="namaIbu" value="<?php echo $kmt_data['namaIbu'] ?>" placeholder="Nama Ibu" autocomplete="off">
                <?= form_error('namaIbu', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nikAyah">NIK Ayah</label>
                <input type="text" class="form-control" id="nikAyah" name="nikAyah" value="<?php echo $kmt_data['nikAyah'] ?>" placeholder="NIK Ayah" autocomplete="off">
                <?= form_error('nikAyah', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaAyah">Nama Ayah</label>
                <input type="text" class="form-control" id="namaAyah" name="namaAyah" value="<?php echo $kmt_data['namaAyah'] ?>" placeholder="Nama Ayah" autocomplete="off">
                <?= form_error('namaAyah', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nikSaksiSatu">NIK Saksi 1</label>
                <input type="text" class="form-control" id="nikSaksiSatu" name="nikSaksiSatu" value="<?php echo $kmt_data['nikSaksiSatu'] ?>" placeholder="NIK Saksi 1" autocomplete="off">
                <?= form_error('nikSaksiSatu', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaSaksiSatu">Nama Saksi 1</label>
                <input type="text" class="form-control" id="namaSaksiSatu" name="namaSaksiSatu" value="<?php echo $kmt_data['namaSaksiSatu'] ?>" placeholder="Nama Saksi 1" autocomplete="off">
                <?= form_error('namaSaksiSatu', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nikSaksiDua">NIK Saksi 2</label>
                <input type="text" class="form-control" id="nikSaksiDua" name="nikSaksiDua" value="<?php echo $kmt_data['nikSaksiDua'] ?>" placeholder="NIK Saksi 2" autocomplete="off">
                <?= form_error('nikSaksiDua', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaSaksiDua">Nama Saksi 2</label>
                <input type="text" class="form-control" id="namaSaksiDua" name="namaSaksiDua" value="<?php echo $kmt_data['namaSaksiDua'] ?>" placeholder="Nama Saksi 2" autocomplete="off">
                <?= form_error('namaSaksiDua', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nikJenazah">NIK Jenazah</label>
                <input type="text" class="form-control" id="nikJenazah" name="nikJenazah" value="<?php echo $kmt_data['nikJenazah'] ?>" placeholder="NIK Jenazah" autocomplete="off">
                <?= form_error('nikJenazah', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaJenazah">Nama Jenazah</label>
                <input type="text" class="form-control" id="namaJenazah" name="namaJenazah" value="<?php echo $kmt_data['namaJenazah'] ?>" placeholder="Nama Jenazah" autocomplete="off">
                <?= form_error('namaJenazah', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tempat">Tempat Kematian</label>
                <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $kmt_data['tempat'] ?>" placeholder="Tempat Kematian" autocomplete="off">
                <?= form_error('tempat', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tanggalKematian">Tanggal Kematian</label>
                <input type="date" class="form-control" id="tanggalKematian" name="tanggalKematian" value="<?php echo $kmt_data['tanggalKematian'] ?>" placeholder="Tanggal Kematian" autocomplete="off">
                <?= form_error('tanggaKematian', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="waktuKematian">Waktu Kematian</label>
                <input type="text" class="form-control" id="waktuKematian" name="waktuKematian" value="<?php echo $kmt_data['waktuKematian'] ?>" placeholder="Waktu Kematian" autocomplete="off">
                <?= form_error('waktuKematian', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="sebab">Sebab Kematian</label>
                <select class="form-control" id="sebab" name="sebab">
                  <option value="">Pilih</option>
                  <option <?php if ($kmt_data['sebab'] == 'SAKIT BIASA/TUA') echo 'selected'; ?> value="SAKIT BIASA/TUA">SAKIT BIASA/TUA</option>
                  <option <?php if ($kmt_data['sebab'] == 'PANDEMI/WABAH PENYAKIT') echo 'selected'; ?> value="PANDEMI/WABAH PENYAKIT">PANDEMI/WABAH PENYAKIT</option>
                  <option <?php if ($kmt_data['sebab'] == 'KECELAKAAN') echo 'selected'; ?> value="KECELAKAAN">KECELAKAAN</option>
                  <option <?php if ($kmt_data['sebab'] == 'KRIMINALITAS') echo 'selected'; ?> value="KRIMINALITAS">KRIMINALITAS</option>
                  <option <?php if ($kmt_data['sebab'] == 'BUNUH DIRI') echo 'selected'; ?> value="BUNUH DIRI">BUNUH DIRI</option>
                  <option <?php if ($kmt_data['sebab'] == 'LAINNYA') echo 'selected'; ?> value="LAINNYA">LAINNYA</option>
                </select>
                <?= form_error('sebab', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="yangMenerangkan">Yang Menerangkan</label>
                <select class="form-control" id="yangMenerangkan" name="yangMenerangkan">
                  <option value="">Pilih</option>
                  <option <?php if ($kmt_data['yangMenerangkan'] == 'DOKTER') echo 'selected'; ?> value="DOKTER">DOKTER</option>
                  <option <?php if ($kmt_data['yangMenerangkan'] == 'TENAGA KESEHATAN') echo 'selected'; ?> value="TENAGA KESEHATAN">TENAGA KESEHATAN</option>
                  <option <?php if ($kmt_data['yangMenerangkan'] == 'KEPOLISIAN') echo 'selected'; ?> value="KEPOLISIAN">KEPOLISIAN</option>
                  <option <?php if ($kmt_data['yangMenerangkan'] == 'LAINNYA') echo 'selected'; ?> value="LAINNYA">LAINNYA</option>
                </select>
                <?= form_error('yangMenerangkan', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="noKK">Nomor KK</label>
                <input type="text" class="form-control" id="noKK" name="noKK" value="<?php echo $kmt_data['noKK'] ?>" placeholder="Nomor KK" autocomplete="off">
                <?= form_error('noKK', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaKepala">Nama Kepala Keluarga</label>
                <input type="text" class="form-control" id="namaKepala" name="namaKepala" value="<?php echo $kmt_data['namaKepala'] ?>" placeholder="Nama Kepala" autocomplete="off">
                <?= form_error('namaKepala', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">

                <label for="formPelapor">Form</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="formPelapor" name="formPelapor" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="suratKet">Surat Keterangan</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="suratKet" name="suratKet" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="KKjenazah">KK Jenazah</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="KKjenazah" name="KKjenazah" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="KTPjenazah">KTP Jenazah</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="KTPjenazah" name="KTPjenazah" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="KTPpelapor">KTP Pelapor</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="KTPpelapor" name="KTPpelapor" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="KTPsaksi">KTP Saksi</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="KTPsaksi" name="KTPsaksi" type="file">
                  </div>
                </div>
              </div>
            </div>

            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="<?php echo base_url('kematian/') ?>" class="btn btn-warning">Kembali</a>
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

  });
</script>