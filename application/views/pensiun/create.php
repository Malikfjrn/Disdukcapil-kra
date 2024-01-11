<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Pernsiun</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pensiun</li>
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
                <h3 class="box-title" style="margin-top: 10px;">Tambah Pensiun</h3>
              </div>
              <div class="col-md-4 col-4 my-auto">
                <a class="btn btn-success btn-sm" style="margin-top: 5px;" href="<?= base_url('assets/f201.pdf') ?>" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
              </div>
            </div>
          </div>
          <form role="form" action="<?php base_url('pensiun/create') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label for="tahun_pensiun">Tahun Pensiun</label>
                <input type="date" class="form-control" id="tahun_pensiun" name="tahun_pensiun" placeholder="Tahun Pensiun" autocomplete="off" value="<?= set_value('tahun_pensiun', isset($saved_data['tahun_pensiun']) ? $saved_data['tahun_pensiun'] : '')?>">
                <?= form_error('tahun_pensiun', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">

                <label for="upload_file">Upload File</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="upload_file" name="upload_file" type="file">
                    <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('pensiun/') ?>" class="btn btn-warning">Kembali</a>
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

    $("#PensiunMainNav").addClass('active');
    $("#createPensiunnSubNav").addClass('active');

  });

  var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="glyphicon glyphicon-tag"></i>' +
    '</button>';

  // $("#upload_file").fileinput({
  //   overwriteInitial: true,
  //   maxFileSize: 1500,
  //   showClose: false,
  //   showCaption: false,
  //   browseLabel: '',
  //   removeLabel: '',
  //   browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
  //   removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
  //   removeTitle: 'Cancel or reset changes',
  //   elErrorContainer: '#kv-avatar-errors-1',
  //   msgErrorClass: 'alert alert-block alert-danger',
  //   // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
  //   layoutTemplates: {
  //     main2: '{preview} ' + btnCust + ' {remove} {browse}'
  //   },
  //   allowedFileExtensions: ["jpg", "png", "gif"]
  // });
</script>