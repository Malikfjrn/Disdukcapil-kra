Content Wrapper. Contains page content
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hapus
            <small>Pensiun</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url('pensiun/') ?>">Pensiun</a></li>
            <li class="active">Delete</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php elseif($this->session->flashdata('error')): ?>
                    <div class="alert alert-error alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <h1>Yakin Ingin Menghapus Data Ini?</h1>

                <button class="btn btn-primary" onclick="confirmDelete()">Konfirmasi</button>
                <a href="<?php echo base_url('pensiun') ?>" class="btn btn-warning">Batal</a>

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
        $("#pensiunMainNav").addClass('active');
        $("#managePensiunSubNav").addClass('active');
    });

    function confirmDelete() {
        var confirmDelete = confirm("Apakah Anda yakin ingin menghapus data?");

        if (confirmDelete) {
            // Kirim permintaan penghapusan ke server menggunakan JavaScript
            // Sesuaikan URL dengan kebutuhan Anda
            var xhr = new XMLHttpRequest();
            var url = "<?php echo base_url('pensiun/delete/') ?>" + <?php echo $id; ?>;

            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Tindakan yang akan diambil setelah penghapusan berhasil
                        alert("Data berhasil dihapus!");
                        
                        // Perbarui tampilan jika diperlukan tanpa perlu me-refresh halaman
                        // Misalnya, hilangkan baris yang dihapus dari tabel
                        // atau perbarui sumber data tanpa perlu me-refresh halaman
                        window.location.href = "<?php echo base_url('pensiun') ?>";
                    } else {
                        // Tindakan yang akan diambil jika penghapusan gagal
                        alert("Error occurred!");
                    }
                }
            };

            // Kirim permintaan tanpa data, karena informasi penghapusan sudah ada di URL
            xhr.send();
        } else {
            // Tindakan jika pengguna membatalkan penghapusan
            // ...
        }
    }
</script>
