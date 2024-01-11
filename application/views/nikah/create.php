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
                <h3 class="box-title" style="margin-top: 10px;">Tambah Nikah</h3>
              </div>
              <div class="col-md-4 col-4 my-auto">
                <a class="btn btn-success btn-sm" style="margin-top: 5px;" href="<?= base_url('assets/f201.pdf') ?>" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
              </div>
            </div>
          </div>
          <form role="form" action="<?php base_url('mahasiswa/create') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label for="nik_pria">NIK Pria</label>
                <input type="text" class="form-control" id="nik_pria" name="nik_pria" placeholder="NIK Pria" autocomplete="off" value="<?= set_value('nik_pria', isset($saved_data['nik_pria']) ? $saved_data['nik_pria'] : '')?>">
                <?= form_error('nik_pria', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nama_lengkap_pria">Nama Lengkap Pria</label>
                <input type="text" class="form-control" id="nama_lengkap_pria" name="nama_lengkap_pria" placeholder="Nama Lengkap Pria" autocomplete="off" value="<?= set_value('nama_lengkap_pria', isset($saved_data['nama_lengkap_pria']) ? $saved_data['nama_lengkap_pria'] : '')?>">
                <?= form_error('nama_lengkap_pria', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="provinsi_pria">Provinsi Pria</label>
                <input type="text" class="form-control" id="provinsi_pria" name="provinsi_pria" placeholder="Provinsi Pria" autocomplete="off" value="<?= set_value('provinsi_pria', isset($saved_data['provinsi_pria']) ? $saved_data['provinsi_pria'] : '')?>">
                <?= form_error('provinsi_pria', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="kabupaten_pria">Kabupaten Pria</label>
                <input type="text" class="form-control" id="kabupaten_pria" name="kabupaten_pria" placeholder="Kabupaten Pria" autocomplete="off" value="<?= set_value('kabupaten_pria', isset($saved_data['kabupaten_pria']) ? $saved_data['kabupaten_pria'] : '')?>">
                <?= form_error('kabupaten_pria', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="kecamatan_pria">Kecamatan Pria</label>
                <input type="text" class="form-control" id="kecamatan_pria" name="kecamatan_pria" placeholder="Kecamatan Pria" autocomplete="off" value="<?= set_value('kecamatan_pria', isset($saved_data['kecamatan_pria']) ? $saved_data['kecamatan_pria'] : '')?>">
                <?= form_error('kecamatan_pria', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="desa_pria">Desa Pria</label>
                <input type="text" class="form-control" id="desa_pria" name="desa_pria" placeholder="Desa Pria" autocomplete="off" value="<?= set_value('desa_pria', isset($saved_data['desa_pria']) ? $saved_data['desa_pria'] : '')?>">
                <?= form_error('desa_pria', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nik_wanita">NIK Wanita</label>
                <input type="text" class="form-control" id="nik_wanita" name="nik_wanita" placeholder="NIK Wanita" autocomplete="off" value="<?= set_value('nik_wanita', isset($saved_data['nik_wanita']) ? $saved_data['nik_wanita'] : '')?>">
                <?= form_error('nik_wanita', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="nama_lengkap_wanita">Nama Lengkap Wanita</label>
                <input type="text" class="form-control" id="nama_lengkap_wanita" name="nama_lengkap_wanita" placeholder="Nama Lengkap Wanita" autocomplete="off" value="<?= set_value('nama_lengkap_wanita', isset($saved_data['nama_lengkap_wanita']) ? $saved_data['nama_lengkap_wanita'] : '')?>">
                <?= form_error('nama_lengkap_wanita', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="provinsi_wanita">Provinsi Wanita</label>
                <input type="text" class="form-control" id="provinsi_wanita" name="provinsi_wanita" placeholder="Provinsi Wanita" autocomplete="off" value="<?= set_value('provinsi_wanita', isset($saved_data['provinsi_wanita']) ? $saved_data['provinsi_wanita'] : '')?>">
                <?= form_error('provinsi_wanita', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="kabupaten_wanita">Kabupaten Wanita</label>
                <input type="text" class="form-control" id="kabupaten_wanita" name="kabupaten_wanita" placeholder="Kabupaten Wanita" autocomplete="off" value="<?= set_value('kabupaten_wanita', isset($saved_data['kabupaten_wanita']) ? $saved_data['kabupaten_wanita'] : '')?>">
                <?= form_error('kabupaten_wanita', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="kecamatan_wanita">Kecamatan Wanita</label>
                <input type="text" class="form-control" id="kecamatan_wanita" name="kecamatan_wanita" placeholder="Kecamatan Wanita" autocomplete="off" value="<?= set_value('kecamatan_wanita', isset($saved_data['kecamatan_wanita']) ? $saved_data['kecamatan_wanita'] : '')?>">
                <?= form_error('kecamatan_wanita', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="desa_wanita">Desa Wanita</label>
                <input type="text" class="form-control" id="desa_wanita" name="desa_wanita" placeholder="Desa Wanita" autocomplete="off" value="<?= set_value('desa_wanita', isset($saved_data['desa_wanita']) ? $saved_data['desa_wanita'] : '')?>">
                <?= form_error('desa_wanita', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="no_nikah">No Nikah</label>
                <input type="text" class="form-control" id="no_nikah" name="no_nikah" placeholder="No Nikah" autocomplete="off" value="<?= set_value('no_nikah', isset($saved_data['no_nikah']) ? $saved_data['no_nikah'] : '')?>">
                <?= form_error('no_nikah', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tanggalNikah">Tanggal Nikah</label>
                <input type="date" class="form-control" id="tanggalNikah" name="tanggalNikah" placeholder="Tanggal Nikah" autocomplete="off" value="<?= set_value('tanggalNikah', isset($saved_data['tanggalNikah']) ? $saved_data['tanggalNikah'] : '')?>">
                <?= form_error('tanggalNikah', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="alamat_baru">Alamat Baru</label>
                <input type="text" class="form-control" id="alamat_baru" name="alamat_baru" placeholder="Alamat Baru" autocomplete="off" value="<?= set_value('alamat_baru', isset($saved_data['alamat_baru']) ? $saved_data['alamat_baru'] : '')?>">
                <?= form_error('alamat_baru', '<medium class="text-danger">', '</medium>'); ?>
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