<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php
$id        =   $_GET['id'];

$qry_cek_isi_tatib  =   "SELECT * FROM isi_tatib WHERE id = '$id'";
$exe_cek_isi_tatib  =   mysqli_query($db, $qry_cek_isi_tatib);

while($show = mysqli_fetch_array($exe_cek_isi_tatib))   {
?>

<?php
    error_reporting(0);
    ini_set('display_errors', 0);
    
    if ($_GET['alert'] == gagal_edit) {
    echo '<script> 

    swal({
        title: "Gagal",
        text: "Gagal mengedit data!",
        type: "error",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "edit_isi_tatib.php";
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
                    <i class="gi gi-book"></i><i class="gi gi-settings"></i>Edit Isi Tata Tertib<br><small>SMK TELEKOMUNIKASI TELESANDI BEKASI</small>
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
                        <h2><strong>Edit</strong> Isi Tata Tertib</h2>
                    </div>
                    <!-- END Horizontal Form Title -->

                    <!-- Horizontal Form Content -->
                    <form action="proses/edit_isi_tatib.php?id=<?php echo $id; ?>" method="post" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Isi Tata Tertib</label>
                            <div class="col-md-9">
                                <textarea name="isi_tatib" class="form-control"> <?php echo $show['isi']; ?> </textarea>
                                <span class="help-block">Silahkan Masukan Isi Tata Tertib</span>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-send" style="margin-right: 5px;"></i> Edit Data</button>
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