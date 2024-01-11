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
                <h3 class="box-title" style="margin-top: 10px;">Tambah Kelahiran</h3>
              </div>
              <div class="col-md-4 col-4 my-auto">
                <a class="btn btn-success btn-sm" style="margin-top: 5px;" href="<?= base_url('assets/f201.pdf') ?>" target="_blank"><i class="fa fa-download"></i> Download PDF</a>
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
                        Persyaratan Akta Kelahiran Baru :
                        <ol>
                          <li>
                            Formulir Pelaporan Pencatatan Sipil (F2.01) ditandatangani dan distempel Desa/Kelurahan
                          </li>
                          <li>
                            Surat Kelahiran dari Dokter/Bidan/Penolong
                            Jika tidak ada diganti dengan SPTJM Kebenaran Data Kelahiran
                          </li>
                          <li>
                            Kutipan Akta Nikah/Akta Perkawinan Orang Tua
                            Jika tidak ada diganti dengan SPTJM Kebenaran Sebagai Pasangan Suami-Istri
                          </li>
                          <li>
                            KK Orang Tua
                          </li>
                          <li>
                            KTP-el Orang Tua
                          </li>
                          <li>
                            KTP-el Pelapor dan 2 Orang Saksi
                          </li>
                        </ol>
                        <p class="text-justify">Formulir Pelaporan Pencatatan Sipil (F2.01) dapat diunduh di https://tinyurl.com/f201-kelahiran
                          <br>
                          SPTJM Kebenaran Data Kelahiran dan SPTJM Kebenaran Sebagai Pasangan Suami-Istri dapat diunduh di https://tinyurl.com/sptjm-kelahiran
                          <br><br>
                          Dokumen yang diupload adalah dokumen asli yang difoto dijadikan file gambar ukuran maksimal 1 MB
                          <br>
                          Dokumen jadi akan dikirimkan lewat Pos, dengan biaya Rp. 10.000,- Serahkan formulir dan berkas pendaftaran kepada petugas Pos.
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
          <form role="form" action="<?php base_url('kelahiran/create') ?>" method="post" enctype="multipart/form-data">
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
                <label for="namaFaskes">Nama Fasilitas Kesehatan</label>
                <input type="text" class="form-control" id="namaFaskes" name="namaFaskes" placeholder="Nama Fasilitas Kesehatan" autocomplete="off" value="<?= set_value('namaFaskes', isset($saved_data['namaFaskes']) ? $saved_data['namaFaskes'] : '')?>">
                <?= form_error('namaFaskes', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              
              <div class="form-group">
                <label for="nikIbu">NIK Ibu</label>
                <input type="text" class="form-control" id="nikIbu" name="nikIbu" placeholder="NIK Ibu" autocomplete="off" value="<?= set_value('nikIbu', isset($saved_data['nikIbu']) ? $saved_data['nikIbu'] : '')?>">
                <?= form_error('nikIbu', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaIbu">Nama Ibu</label>
                <input type="text" class="form-control" id="namaIbu" name="namaIbu" placeholder="Nama Ibu" autocomplete="off" value="<?= set_value('namaIbu', isset($saved_data['namaIbu']) ? $saved_data['namaIbu'] : '')?>">
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
                <label for="nikSaksiSatu">NIK Saksi 2</label>
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
                <label for="noKK">Nomor Kartu Keluarga</label>
                <input type="text" class="form-control" id="noKK" name="noKK" placeholder="Nomor Kartu Keluarga" autocomplete="off" value="<?= set_value('noKK', isset($saved_data['noKK']) ? $saved_data['noKK'] : '')?>">
                <?= form_error('noKK', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaKepalaKeluarga">Nama Kepala Keluarga</label>
                <input type="text" class="form-control" id="namaKepalaKeluarga" name="namaKepalaKeluarga" placeholder="Nama Kepala Keluarga" autocomplete="off" value="<?= set_value('namaKepalaKeluarga', isset($saved_data['namaKepalaKeluarga']) ? $saved_data['namaKepalaKeluarga'] : '')?>">
                <?= form_error('namaKepalaKeluarga', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="namaBayi">Nama Bayi</label>
                <input type="text" class="form-control" id="namaBayi" name="namaBayi" placeholder="Nama Bayi" autocomplete="off" value="<?= set_value('namaBayi', isset($saved_data['namaBayi']) ? $saved_data['namaBayi'] : '')?>">
                <?= form_error('namaBayi', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="jenisKelamin" id="laki-laki" value="laki-laki">
                    Laki-laki
                  </label>
                  <label>
                    <input type="radio" name="jenisKelamin" id="perempuan" value="laki-laki">
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
                  <option value="RUMAH SAKIT">RUMAH SAKIT</option>
                  <option value="PUSKESMAS">PUSKESMAS</option>
                  <option value="POLIDES">POLIDES</option>
                  <option value="RUMAH">RUMAH</option>
                  <option value="LAINNYA">LAINNYA</option>
                </select>
                <?= form_error('tempatDilahirkan', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tempatKelahiran">Tempat Kelahiran</label>
                <input type="text" class="form-control" id="tempatKelahiran" name="tempatKelahiran" placeholder="Tempat Kelahiran" autocomplete="off" value="<?= set_value('tempatKelahiran', isset($saved_data['tempatKelahiran']) ? $saved_data['tempatKelahiran'] : '')?>">
                <?= form_error('tempatKelahiran', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Tanggal Lahir" autocomplete="off" value="<?= set_value('tanggalLahir', isset($saved_data['tanggalLahir']) ? $saved_data['tanggalLahir'] : '')?>">
                <?= form_error('tanggalLahir', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="jam">Jam</label>
                <input type="text" class="form-control" id="jam" name="jam" placeholder="Jam" autocomplete="off" value="<?= set_value('jam', isset($saved_data['jam']) ? $saved_data['jam'] : '')?>">
                <?= form_error('jam', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="jenisKelahiran">Jenis Kelahiran</label>
                <select class="form-control" id="jenisKelahiran" name="jenisKelahiran">
                  <option value="">Pilih</option>
                  <option value="TUNGGAL">TUNGGAL</option>
                  <option value="KEMBAR DUA">KEMBAR DUA</option>
                  <option value="KEMBAR TIGA">KEMBAR TIGA</option>
                  <option value="KEMBAR EMPAT">KEMBAR EMPAT</option>
                  <option value="LAINNYA">LAINNYA</option>
                </select>
                <?= form_error('jenisKelahiran', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="kelahiranKe">Kelahiran Ke</label>
                <input type="text" class="form-control" id="kelahiranKe" name="kelahiranKe" placeholder="Kelahiran Ke" autocomplete="off" value="<?= set_value('kelahiranKe', isset($saved_data['kelahiranKe']) ? $saved_data['kelahiranKe'] : '')?>">
                <?= form_error('kelahiranKe', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="penolongKelahiran">Penolong Kelahiran</label>
                <select class="form-control" id="penolongKelahiran" name="penolongKelahiran">
                  <option value="">Pilih</option>
                  <option value="DOKTER">DOKTER</option>
                  <option value="BIDAN">BIDAN</option>
                  <option value="DUKUN">DUKUN</option>
                  <option value="LAINNYA">LAINNYA</option>
                </select>
                <?= form_error('penolongKelahiran', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="beratBayi">Berat Bayi</label>
                <input type="text" class="form-control" id="beratBayi" name="beratBayi" placeholder="Berat Bayi" autocomplete="off" value="<?= set_value('beratBayi', isset($saved_data['beratBayi']) ? $saved_data['beratBayi'] : '')?>">
                <?= form_error('beratBayi', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="panjangBayi">Panjang Bayi</label>
                <input type="text" class="form-control" id="panjangBayi" name="panjangBayi" placeholder="Panjang Bayi" autocomplete="off" value="<?= set_value('panjangBayi', isset($saved_data['panjangBayi']) ? $saved_data['panjangBayi'] : '')?>">
                <?= form_error('panjangBayi', '<medium class="text-danger">', '</medium>'); ?>
              </div>
              <br>
              <div class="form-group">
                <label for="formPelapor">Form Pelapor</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="formPelapor" name="formPelapor" type="file">
                    <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="suratKelahiran">Surat Keterangan</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="suratKelahiran" name="suratKelahiran" type="file">
                    <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="kutipanAkta">Kutipan Akta</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="kutipanAkta" name="kutipanAkta" type="file">
                    <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="KKortu">Kartu Keluarga Orang Tua</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="KKortu" name="KKortu" type="file">
                    <?= form_error('upload_file', '<span class="text-danger">', '</span>'); ?>
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="KTPortu">KTP Orang Tua</label>
                <div class="kv-avatar">
                  <div class="file">
                    <input id="KTPortu" name="KTPortu" type="file">
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
    $("#fakultas").select2();
    $("#jurusan").select2();
    $("#").select2();

    $("#kelahiranMainNav").addClass('active');
    $("#createKelahiranSubNav").addClass('active');

  });

  var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="glyphicon glyphicon-tag"></i>' +
    '</button>';

  
</script>