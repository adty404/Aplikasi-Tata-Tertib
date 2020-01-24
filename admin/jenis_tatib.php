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
            window.location = "jenis_tatib.php";
        }
    });
    </script>';
} else if ($_GET['alert'] == gagal_edit) {
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
            window.location = "jenis_tatib.php";
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
            window.location = "jenis_tatib.php";
        }
    });
    </script>';
}
?>


<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-book"></i>Jenis-jenis Tata Tertib<br><small>SMK TELEKOMUNIKASI TELESANDI BEKASI</small>
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Jenis-jenis</strong> Tata Tertib</h2>
        </div>
        <h2 style="text-align: center; font-family: Arial; margin-bottom: 30px;">Jenis-jenis Tata Tertib</h2>

        <a href="add_jenis_tatib.php"><button class="btn btn-sm btn-info" title="Tambah Data" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i> Tambah Data</button></a>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" width="20px">No</th>
                        <th style="text-align: center;"> Nama </th>
                        <th style="text-align: center;"> Aksi </th>
                        <th hidden=""></th>
                        <th hidden=""></th>
                        <th hidden=""></th>
                    </tr>
                </thead>
                <tbody>

                   <?php
                   $no = 0;
                   while ($show = mysqli_fetch_array($exe_jenis_tatib)){
                    $no++;
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no; ?></td>
                        <td style="text-align: center;"><?php echo $show['nama_tatib']; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="edit_jenis_tatib.php?nama_tatib=<?php echo $show['nama_tatib']; ?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="proses/delete_jenis_tatib.php?nama_tatib=<?php echo $show['nama_tatib']; ?>" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                        <td hidden=""></td>
                        <td hidden=""></td>
                        <td hidden=""></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'inc/template_end.php'; ?>