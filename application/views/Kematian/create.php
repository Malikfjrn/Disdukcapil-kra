  <!-- Content Wrapper. Contains page content -->
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
                  <h3 class="box-title" style="margin-top: 10px;">Tambah Kematian</h3>
                </div>
                <div class="col-md-4 col-4 my-auto">
                  <a class="btn btn-success btn-sm" style="margin-top: 5px;" href="<?= base_url('assets/kematian.pdf') ?>" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
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
                          Penyusunan Buku Pokok Pemakaman
                          <br>
                          Khusus bagi jenazah yang baru meninggal
                          <br>
                          <br>
                          Persyaratan :
                          <ul>
                            <li>
                              Formulir Pelaporan Pencatatan Sipil (F2.01), dapat diunduh di https://bit.ly/3qUwFYD
                            </li>
                            <li>
                              Surat Keterangan Kematian dari Rumah Sakit dan/atau Kepala Desa/Lurah Setempat
                            </li>
                            <li>
                              KTP dan/atau Kartu Keluarga Jenazah
                            </li>
                          </ul>
                          <p class="text-justify">Dokumen yang diupload adalah dokumen asli yang difoto dijadikan file gambar
                            <br><br>
                            Setelah disetujui dokumen Akta Kematian agar dicetak mandiri melalui QR Code yang dikirim ke email admin Paklay Komplit Desa/Kelurahan dan selanjutnya diserahkan kepada ahli waris almarhun, lebih diutamakan penyerahan sebelum pemakaman dilaksanakan.
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
            <form role="form" action="<?php base_url('kematian/create') ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">

              <input type="hidden" name="nikPelapor" value="<?= $this->session->userdata('nikPelapor');?>">
              <input type="hidden" name="namaPelapor" value="<?= $this->session->userdata('namaPelapor');?>">
              <?= form_error('namaPelapor', '<medium class="text-danger">', '</medium>'); ?>
              <input type="hidden" name="alamatPelapor" value="<?= $this->session->userdata('alamatPelapor');?>">
              <?= form_error('alamatPelapor', '<medium class="text-danger">', '</medium>'); ?>
              <input type="hidden" name="noPelapor" value="<?= $this->session->userdata('noPelapor');?>">
              <?= form_error('noPelapor', '<medium class="text-danger">', '</medium>'); ?>
              <input type="hidden" name="email" value="<?= $this->session->userdata('email');?>">
              <?= form_error('email', '<medium class="text-danger">', '</medium>'); ?>
                <div class="form-group">
                  <label for="noKKpelapor">Nomor KK Pelapor</label>
                  <input type="text" class="form-control" id="noKKpelapor" name="noKKpelapor" placeholder="Nomor KK Pelapor" autocomplete="off" value="<?= set_value('noKKpelapor', isset($saved_data['noKKpelapor']) ? $saved_data['noKKpelapor'] : '')?>">
                  <?= form_error('noKKpelapor', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                
                <div class="form-group">
                  <label for="nikIbu">NIK Ibu</label>
                  <input type="text" class="form-control" id="nikIbu" name="nikIbu" placeholder="NIK Ibu" autocomplete="off"  value="<?= set_value('nikIbu', isset($saved_data['nikIbu']) ? $saved_data['nikIbu'] : '')?>">
                  <?= form_error('nikIbu', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="namaIbu">Nama Ibu</label>
                  <input type="text" class="form-control" id="namaIbu" name="namaIbu" placeholder="Nama Ibu" autocomplete="off"  value="<?= set_value('namaIbu', isset($saved_data['namaIbu']) ? $saved_data['namaIbu'] : '')?>">
                  <?= form_error('namaIbu', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="nikAyah">NIK Ayah</label>
                  <input type="text" class="form-control" id="nikAyah" name="nikAyah" placeholder="NIK Ayah" autocomplete="off" value="<?= set_value('nikAyah', isset($saved_data['nikAyah']) ? $saved_data['nikAyah'] : '')?>">
                  <?= form_error('nikAyah', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="namaAyah">Nama Ayah</label>
                  <input type="text" class="form-control" id="namaAyah" name="namaAyah" placeholder="Nama Ayah" autocomplete="off" value="<?= set_value('namaAyah', isset($saved_data['namaAyah']) ? $saved_data['namaAyah'] : '')?>">
                  <?= form_error('namaAyah', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="nikSaksiSatu">NIK Saksi 1</label>
                  <input type="text" class="form-control" id="nikSaksiSatu" name="nikSaksiSatu" placeholder="NIK Saksi 1" autocomplete="off" value="<?= set_value('nikSaksiSatu', isset($saved_data['nikSaksiSatu']) ? $saved_data['nikSaksiSatu'] : '')?>">
                  <?= form_error('nikSaksiSatu', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="namaSaksiSatu">Nama Saksi 1</label>
                  <input type="text" class="form-control" id="namaSaksiSatu" name="namaSaksiSatu" placeholder="Nama Saksi 1" autocomplete="off" value="<?= set_value('namaSaksiSatu', isset($saved_data['namaSaksiSatu']) ? $saved_data['namaSaksiSatu'] : '')?>">
                  <?= form_error('namaSaksiSatu', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="nikSaksiDua">NIK Saksi 2</label>
                  <input type="text" class="form-control" id="nikSaksiDua" name="nikSaksiDua" placeholder="NIK Saksi 2" autocomplete="off" value="<?= set_value('nikSaksiDua', isset($saved_data['nikSaksiDua']) ? $saved_data['nikSaksiDua'] : '')?>">
                  <?= form_error('nikSaksiDua', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="namaSaksiDua">Nama Saksi 2</label>
                  <input type="text" class="form-control" id="namaSaksiDua" name="namaSaksiDua" placeholder="Nama Saksi 2" autocomplete="off" value="<?= set_value('namaSaksiDua', isset($saved_data['namaSaksiDua']) ? $saved_data['namaSaksiDua'] : '')?>">
                  <?= form_error('namaSaksiDua', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="nikJenazah">NIK Jenazah</label>
                  <input type="text" class="form-control" id="nikJenazah" name="nikJenazah" placeholder="NIK Jenazah" autocomplete="off" value="<?= set_value('nikJenazah', isset($saved_data['nikJenazah']) ? $saved_data['nikJenazah'] : '')?>">
                  <?= form_error('nikJenazah', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="namaJenazah">Nama Jenazah</label>
                  <input type="text" class="form-control" id="namaJenazah" name="namaJenazah" placeholder="Nama Jenazah" autocomplete="off" value="<?= set_value('namaJenazah', isset($saved_data['namaJenazah']) ? $saved_data['namaJenazah'] : '')?>">
                  <?= form_error('namaJenazah', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="tanggalKematian">Tanggal Kematian</label>
                  <input type="date" class="form-control" id="tanggalKematian" name="tanggalKematian" placeholder="Tanggal Kematian" autocomplete="off" value="<?= set_value('tanggalKematian', isset($saved_data['tanggalKematian']) ? $saved_data['tanggalKematian'] : '')?>">
                  <?= form_error('tanggaKematian', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="waktuKematian">Waktu Kematian</label>
                  <input type="text" class="form-control" id="waktuKematian" name="waktuKematian" placeholder="Waktu Kematian" autocomplete="off" value="<?= set_value('waktuKematian', isset($saved_data['waktuKematian']) ? $saved_data['waktuKematian'] : '')?>">
                  <?= form_error('waktuKematian', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="tempat">Tempat Kematian</label>
                  <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat Kematian" autocomplete="off" value="<?= set_value('tempat', isset($saved_data['tempat']) ? $saved_data['tempat'] : '')?>">
                  <?= form_error('tempat', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="sebab">Sebab Kematian</label>
                  <select class="form-control" id="sebab" name="sebab">
                    <option value="">Pilih</option>
                    <option value="SAKIT BIASA/TUA">SAKIT BIASA/TUA</option>
                    <option value="PANDEMI/WABAH PENYAKIT">PANDEMI/WABAH PENYAKIT</option>
                    <option value="KECELAKAAN">KECELAKAAN</option>
                    <option value="KRIMINALITAS">KRIMINALITAS</option>
                    <option value="BUNUH DIRI">BUNUH DIRI</option>
                    <option value="LAINNYA">LAINNYA</option>
                  </select>
                  <?= form_error('sebab', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="yangMenerangkan">Yang Menerangkan</label>
                  <select class="form-control" id="yangMenerangkan" name="yangMenerangkan">
                    <option value="">Pilih</option>
                    <option value="DOKTER">DOKTER</option>
                    <option value="TENAGA KESEHATAN">TENAGA KESEHATAN</option>
                    <option value="KEPOLISIAN">KEPOLISIAN</option>
                    <option value="LAINNYA">LAINNYA</option>
                  </select>
                  <?= form_error('yangMenerangkan', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="noKK">Nomor KK</label>
                  <input type="text" class="form-control" id="noKK" name="noKK" placeholder="Nomor KK" autocomplete="off"  value="<?= set_value('noKK', isset($saved_data['noKK']) ? $saved_data['noKK'] : '')?>">
                  <?= form_error('noKK', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">
                  <label for="namaKepala">Nama Kepala Keluarga</label>
                  <input type="text" class="form-control" id="namaKepala" name="namaKepala" placeholder="Nama Kepala" autocomplete="off" value="<?= set_value('namaKepala', isset($saved_data['namaKepala']) ? $saved_data['namaKepala'] : '')?>">
                  <?= form_error('namaKepala', '<medium class="text-danger">', '</medium>'); ?>
                </div>
                <br>
                <div class="form-group">

                  <label for="formPelapor">Form</label>
                  <div class="kv-avatar">
                    <div class="file">
                      <input id="formPelapor" name="formPelapor" type="file">
                      <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">

                  <label for="suratKet">Surat Keterangan</label>
                  <div class="kv-avatar">
                    <div class="file">
                      <input id="suratKet" name="suratKet" type="file">
                      <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">

                  <label for="KKjenazah">KK Jenazah</label>
                  <div class="kv-avatar">
                    <div class="file">
                      <input id="KKjenazah" name="KKjenazah" type="file">
                      <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                    </div>
                  </div>
                  </div>

                  <div class="form-group">

                  <label for="KTPjenazah">KTP Jenazah</label>
                  <div class="kv-avatar">
                    <div class="file">
                      <input id="KTPjenazah" name="KTPjenazah" type="file">
                      <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                    </div>
                  </div>
                  </div>

                  <div class="form-group">

                  <label for="KTPpelapor">KTP Pelapor</label>
                  <div class="kv-avatar">
                    <div class="file">
                      <input id="KTPpelapor" name="KTPpelapor" type="file">
                      <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                    </div>
                  </div>
                  </div>

                  <div class="form-group">

                  <label for="KTPsaksi">KTP Saksi</label>
                  <div class="kv-avatar">
                    <div class="file">
                      <input id="KTPsaksi" name="KTPsaksi" type="file">
                      <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
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
      $("#fakultas").select2();
      $("#jurusan").select2();
      $("#").select2();

      $("#kematianMainNav").addClass('active');
      $("#createKematianSubNav").addClass('active');

    });

    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
      'onclick="alert(\'Call your custom code here.\')">' +
      '<i class="glyphicon glyphicon-tag"></i>' +
      '</button>';
  </script>