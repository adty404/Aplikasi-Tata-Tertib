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
            window.location = "pilih_isi_pelanggaran.php";
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
            window.location = "pilih_isi_pelanggaran.php";
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
                <i class="gi gi-book"></i>Pilih Jenis Pelanggaran<br><small>SMK TELEKOMUNIKASI TELESANDI BEKASI</small>
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
                    <h2><strong>Pilih</strong> Jenis Pelanggaran</h2>
                </div>
                <!-- END Select Components Title -->

                <!-- Select Components Content -->
                <form action="isi_pelanggaran.php" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="example-chosen">Jenis Pelanggaran</label>
                        <div class="col-md-6">
                            <select id="example-chosen" name="jenis_tatib" class="select-chosen" data-placeholder="Silahkan Pilih" style="width: 250px;">
                                <option>
                                    <?php 
                                    $result = mysqli_query($db, "select * from jenis_tatib");

                                    while ($row = mysqli_fetch_array($result)) {    
                                        echo '<option value="' . $row['nama_tatib'] . '">' . $row['nama_tatib'] . '</option>';
                                    }      
                                    ?>
                                </option>
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