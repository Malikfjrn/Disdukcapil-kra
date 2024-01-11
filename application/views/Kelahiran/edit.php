<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit
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
            <h3 class="box-title">Edit Data Kelahiran</h3>
          </div>
          <form role="form" action="<?php base_url('kelahiran/edit') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">


              
              <div class="form-group">
                <label for="namaFaskes">Nama Fasilitas Kesehatan</label>
                <input type="text" class="form-control" id="namaFaskes" name="namaFaskes" value="<?php echo $klr_data['namaFaskes'] ?>" placeholder="Nama Fasilitas Kesehatan" autocomplete="off">
                <?= form_error('namaFaskes', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              
              <br>
              <div class="form-group">
                <label for="nikIbu">NIK Ibu</label>
                <input type="text" class="form-control" id="nikIbu" name="nikIbu" value="<?php echo $klr_data['nikIbu'] ?>" placeholder="NIK Ibu" autocomplete="off">
                <?= form_error('nikIbu', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaIbu">Nama Ibu</label>
                <input type="text" class="form-control" id="namaIbu" name="namaIbu" value="<?php echo $klr_data['namaIbu'] ?>" placeholder="Nama Ibu" autocomplete="off">
                <?= form_error('namaIbu', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nikAyah">NIK Ayah</label>
                <input type="text" class="form-control" id="nikAyah" name="nikAyah" value="<?php echo $klr_data['nikAyah'] ?>" placeholder="NIK Ayah" autocomplete="off">
                <?= form_error('nikAyah', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaAyah">Nama Ayah</label>
                <input type="text" class="form-control" id="namaAyah" name="namaAyah" value="<?php echo $klr_data['namaAyah'] ?>" placeholder="Nama Ayah" autocomplete="off">
                <?= form_error('namaAyah', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nikSaksiSatu">NIK Saksi 1</label>
                <input type="text" class="form-control" id="nikSaksiSatu" name="nikSaksiSatu" value="<?php echo $klr_data['nikSaksiSatu'] ?>" placeholder="NIK Saksi 1" autocomplete="off">
                <?= form_error('nikSaksiSatu', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaSaksiSatu">Nama Saksi 1</label>
                <input type="text" class="form-control" id="namaSaksiSatu" name="namaSaksiSatu" value="<?php echo $klr_data['namaSaksiSatu'] ?>" placeholder="Nama Saksi 1" autocomplete="off">
                <?= form_error('namaSaksiSatu', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nikSaksiSatu">NIK Saksi 2</label>
                <input type="text" class="form-control" id="nikSaksiDua" name="nikSaksiDua" value="<?php echo $klr_data['nikSaksiDua'] ?>" placeholder="NIK Saksi 2" autocomplete="off">
                <?= form_error('nikSaksiDua', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaSaksiDua">Nama Saksi 2</label>
                <input type="text" class="form-control" id="namaSaksiDua" name="namaSaksiDua" value="<?php echo $klr_data['namaSaksiDua'] ?>" placeholder="Nama Saksi 2" autocomplete="off">
                <?= form_error('namaSaksiDua', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="noKK">Nomor Kartu Keluarga</label>
                <input type="text" class="form-control" id="noKK" name="noKK" value="<?php echo $klr_data['noKK'] ?>" placeholder="Nomor Kartu Keluarga" autocomplete="off">
                <?= form_error('noKK', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaKepalaKeluarga">Nama Kepala Keluarga</label>
                <input type="text" class="form-control" id="namaKepalaKeluarga" name="namaKepalaKeluarga" value="<?php echo $klr_data['namaKepalaKeluarga'] ?>" placeholder="Nama Kepala Keluarga" autocomplete="off">
                <?= form_error('namaKepalaKeluarga', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaBayi">Nama Bayi</label>
                <input type="text" class="form-control" id="namaBayi" name="namaBayi" value="<?php echo $klr_data['namaBayi'] ?>" placeholder="Nama Bayi" autocomplete="off">
                <?= form_error('namaBayi', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="jenisKelamin" id="laki-laki" value="laki-laki" <?php if ($klr_data['jenisKelamin'] == "laki-laki") {
                                                                                                echo "checked";
                                                                                              } ?>>
                    Laki-laki
                  </label>
                  <label>
                    <input type="radio" name="jenisKelamin" id="perempuan" value="perempuan" <?php if ($klr_data['jenisKelamin'] == "perempuan") {
                                                                                                echo "checked";
                                                                                              } ?>>
                    Perempuan
                  </label>
                </div>
                <?= form_error('jenisKelamin', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tempatDilahirkan">Tempat Dilahirkan</label>
                <select class="form-control" id="tempatDilahirkan" name="tempatDilahirkan">
                  <option value="">Pilih</option>
                  <option <?php if ($klr_data['tempatDilahirkan'] == 'RUMAH SAKIT') echo 'selected'; ?> value="RUMAH SAKIT">RUMAH SAKIT</option>
                  <option <?php if ($klr_data['tempatDilahirkan'] == 'PUSKESMAS') echo 'selected'; ?> value="PUSKESMAS">PUSKESMAS</option>
                  <option <?php if ($klr_data['tempatDilahirkan'] == 'POLIDES') echo 'selected'; ?> value="POLIDES">POLIDES</option>
                  <option <?php if ($klr_data['tempatDilahirkan'] == 'RUMAH') echo 'selected'; ?> value="RUMAH">RUMAH</option>
                  <option <?php if ($klr_data['tempatDilahirkan'] == 'LAINNYA') echo 'selected'; ?> value="LAINNYA">LAINNYA</option>
                </select>
                <?= form_error('tempatDilahirkan', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tempatKelahiran">Tempat Kelahiran</label>
                <input type="text" class="form-control" id="tempatKelahiran" name="tempatKelahiran" value="<?php echo $klr_data['tempatKelahiran'] ?>" placeholder="Tempat Kelahiran" autocomplete="off">
                <?= form_error('tempatKelahiran', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Tanggal Lahir" autocomplete="off" value="<?php echo $klr_data['tanggalLahir'] ?>">
                <?= form_error('tanggalLahir', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="jam">Jam</label>
                <input type="text" class="form-control" id="jam" name="jam" value="<?php echo $klr_data['tempatKelahiran'] ?>" placeholder="Tempat Kelahiran" autocomplete="off">
                <?= form_error('jam', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="jenisKelahiran">Jenis Kelahiran</label>
                <select class="form-control" id="jenisKelahiran" name="jenisKelahiran">
                  <option value="">Pilih</option>
                  <option <?php if ($klr_data['jenisKelahiran'] == 'TUNGGAL') echo 'selected'; ?> value="TUNGGAL">TUNGGAL</option>
                  <option <?php if ($klr_data['jenisKelahiran'] == 'KEMBAR DUA') echo 'selected'; ?> value="KEMBAR DUA">KEMBAR DUA</option>
                  <option <?php if ($klr_data['jenisKelahiran'] == 'KEMBAR TIGA') echo 'selected'; ?> value="KEMBAR TIGA">KEMBAR TIGA</option>
                  <option <?php if ($klr_data['jenisKelahiran'] == 'KEMBAR EMPAT') echo 'selected'; ?> value="KEMBAR EMPAT">KEMBAR EMPAT</option>
                  <option <?php if ($klr_data['jenisKelahiran'] == 'LAINNYA') echo 'selected'; ?> value="LAINNYA">LAINNYA</option>
                </select>
                <?= form_error('jenisKelahiran', '<medium class="text-danger">', '</medium>'); ?>
              </div>

              <div class="form-group">
                <label for="kelahiranKe">Kelahiran Ke</label>
                <input type="text" class="form-control" id="kelahiranKe" name="kelahiranKe" value="<?php echo $klr_data['kelahiranKe'] ?>" placeholder="Kelahiran Ke" autocomplete="off">
                <?= form_error('kelahiranKe', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="penolongKelahiran">Penolong Kelahiran</label>
                <select class="form-control" id="penolongKelahiran" name="penolongKelahiran">
                  <option value="">Pilih</option>
                  <option <?php if ($klr_data['penolongKelahiran'] == 'DOKTER') echo 'selected'; ?> value="DOKTER">DOKTER</option>
                  <option <?php if ($klr_data['penolongKelahiran'] == 'BIDAN') echo 'selected'; ?> value="BIDAN">BIDAN</option>
                  <option <?php if ($klr_data['penolongKelahiran'] == 'DUKUN') echo 'selected'; ?> value="DUKUN">DUKUN</option>
                  <option <?php if ($klr_data['penolongKelahiran'] == 'LAINNYA') echo 'selected'; ?> value="LAINNYA">LAINNYA</option>
                </select>
                <?= form_error('penolongKelahiran', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="beratBayi">Berat Bayi</label>
                <input type="text" class="form-control" id="beratBayi" name="beratBayi" value="<?php echo $klr_data['beratBayi'] ?>" placeholder="Berat Bayi" autocomplete="off">
                <?= form_error('beratBayi', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="panjangBayi">Panjang Bayi</label>
                <input type="text" class="form-control" id="panjangBayi" name="panjangBayi" value="<?php echo $klr_data['panjangBayi'] ?>" placeholder="Panjang Bayi" autocomplete="off">
                <?= form_error('panjangBayi', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
              <br>
                <label for="formPelapor">Form</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="formPelapor" name="formPelapor" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="suratKelahiran">Surat Keterangan</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="suratKelahiran" name="suratKelahiran" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="kutipanAkta">Kutipan Akta</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="kutipanAkta" name="kutipanAkta" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="KKortu">Kartu Keluarga Orang Tua</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="KKortu" name="KKortu" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="KTPortu">KTP Orang Tua</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="KTPortu" name="KTPortu" type="file">
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
              <a href="<?php echo base_url('kelahiran/') ?>" class="btn btn-warning">Kembali</a>
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