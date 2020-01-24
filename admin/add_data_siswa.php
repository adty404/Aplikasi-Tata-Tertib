<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>


<?php 

error_reporting(0);
ini_set('display_errors', 0);
                    //kode php ini kita gunakan untuk menampilkan pesan data salah
if ($_GET['alert'] == berhasil) {
    echo '<script> 

    swal({
        title: "Berhasil",
        text: "Berhasil menambahkan data siswa baru",
        type: "success",
        confirmButtonColor: "#8CD4F5",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "data_siswa.php";
        }
    });
    </script>';
}
else if ($_GET['alert'] == gagal) {
    echo '<script> 

    swal({
        title: "Gagal",
        text: "Gagal menambahkan data!",
        type: "error",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "add_data_siswa.php";
        }
    });
    </script>';
}else if ($_GET['alert'] == berhasil_edit) {
    echo '<script> 

    swal({
        title: "Berhasil",
        text: "Berhasil memperbarui data",
        type: "success",
        confirmButtonColor: "#8CD4F5",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "data_siswa.php";
        }
    });
    </script>';
}else if ($_GET['alert'] == berhasil_hapus) {
    echo '<script> 

    swal({
        title: "Berhasil",
        text: "Data berhasil dihapus",
        type: "success",
        confirmButtonColor: "#8CD4F5",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "data_siswa.php";
        }
    });
    </script>';
}
else if ($_GET['alert'] == gagal_edit) {
    echo '<script> 

    swal({
        title: "Gagal",
        text: "Gagal memperbarui data!",
        type: "error",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "data_siswa.php";
        }
    });
    </script>';
}
?>


<!-- Page content -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-group"></i><i class="gi gi-plus"></i>Tambah Data Siswa<br><small>SMK TELEKOMUNIKASI TELESANDI BEKASI</small>
            </h1>
        </div>
    </div>
    <!-- END Forms General Header -->

    <!-- Form Example with Blocks in the Grid -->
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form Block -->
            <div class="block">
                <!-- Horizontal Form Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                    </div>
                    <h2><strong>Tambah</strong>Data Siswa</h2>
                </div>
                <!-- END Horizontal Form Title -->

                <!-- Horizontal Form Content -->
                <form action="proses/add_data_siswa.php" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">NIS</label>
                        <div class="col-md-9">
                            <input type="number" name="nis" class="form-control" placeholder="NIS" required="">
                            <span class="help-block">Silahkan Masukan NIS Anda</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">Nama</label>
                        <div class="col-md-9">
                            <input type="text" name="nama" class="form-control" placeholder="NAMA" required="">
                            <span class="help-block">Silahkan Masukan Nama Anda</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Kelas</label>
                        <div class="col-md-9">
                            <select name="kelas" class="form-control" size="1" required="">
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Jurusan</label>
                        <div class="col-md-9">
                            <select name="jurusan" class="form-control" size="1" required="">
                                <option value="MM">MM</option>
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                                <option value="TRANS">TRANS</option>
                                <option value="SUITSING">SUITSING</option>
                                <option value="TJA">TJA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-send" style="margin-right: 5px;"></i>Tambah Data</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-refresh" style="margin-right: 5px;"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Horizontal Form Content -->
            </div>
            <!-- END Example Form Block -->
        </div>
    </div>
    <!-- END Form Example with Blocks in the Grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsGeneral.js"></script>
<script>$(function(){ FormsGeneral.init(); });</script>

<?php include 'inc/template_end.php'; ?>