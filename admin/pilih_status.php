<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>


<?php

error_reporting(0);
ini_set('display_errors', 0);
                    //kode php ini kita gunakan untuk menampilkan pesan data salah
if ($_GET['alert'] == berhasil_edit) {
    echo '<script> 

    swal({
        title: "Berhasil",
        text: "Berhasil mengedit data!",
        type: "success",
        confirmButtonColor: "#8CD4F5",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "pilih_isi_tatib.php";
        }
    });
    </script>';
}else if ($_GET['alert'] == berhasil_hapus) {
    echo '<script> 

    swal({
        title: "Berhasil",
        text: "Data berhasil dihapus!",
        type: "success",
        confirmButtonColor: "#8CD4F5",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "pilih_isi_tatib.php";
        }
    });
    </script>';
}

?>
<!-- Page content -->
<div id="page-content">
    <!-- Components Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-book"></i>Pilih Status Pelanggaran<br><small>SMK TELEKOMUNIKASI TELESANDI BEKASI</small>
            </h1>
        </div>
    </div>
    <!-- END Components Header -->

    <!-- Form Components Row -->
    <div class="row">
        <div class="col-md-12">
            <!-- Select Components Block -->
            <div class="block">
                <!-- Select Components Title -->
                <div class="block-title">
                    <h2><strong>Pilih</strong> Status Pelanggaran</h2>
                </div>
                <!-- END Select Components Title -->

                <!-- Select Components Content -->
                <form action="proses/isi_status_pelanggaran.php" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="example-chosen">Status Pelanggaran</label>
                        <div class="col-md-6">
                            <select id="example-chosen" name="status" class="select-chosen" style="width: 250px;">
                                <option value="N"> Belum Ditindaklanjuti </option>
                                <option value="P"> Sedang Ditindaklanjuti </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-send" style="margin-right: 10px;"></i> Submit</button>
                        </div>
                    </div>
                </form>
                <!-- END Select Components Content -->
            </div>
        </div>
    </div>
    <!-- END Form Components Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/ckeditor/ckeditor.js"></script>

<?php include 'inc/template_end.php'; ?>