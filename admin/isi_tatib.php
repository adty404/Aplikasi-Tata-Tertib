<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php 

$jenis_tatib    =   $_POST['jenis_tatib'];

$qry_isi_tatib    =     "SELECT * FROM isi_tatib WHERE nama_tatib = '$jenis_tatib'";
$exe_isi_tatib    =     mysqli_query($db, $qry_isi_tatib);


?>


<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-book"></i>Isi Tata Tertib ( <?php echo $jenis_tatib; ?> )<br><small>SMK TELEKOMUNIKASI TELESANDI BEKASI</small>
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Isi</strong> Tata Tertib ( <?php echo $jenis_tatib; ?> )</h2>
        </div>
        <h2 style="text-align: center; font-family: Arial; margin-bottom: 30px;"> <?php echo $jenis_tatib; ?> </h2>

        <a href="add_isi_tatib.php?jenis_tatib=<?php echo $jenis_tatib; ?>"><button class="btn btn-sm btn-info" title="Tambah Data" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i> Tambah Data</button></a>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" width="20px">No</th>
                        <th style="text-align: center;"> Isi </th>
                        <th style="text-align: center;">Aksi</th>
                        <th hidden=""></th>
                        <th hidden=""></th>
                        <th hidden=""></th>
                    </tr>
                </thead>
                <tbody>

                 <?php
                 $no = 0;
                 while ($show = mysqli_fetch_array($exe_isi_tatib)){
                    $no++;
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no; ?></td>
                        <td hidden=""></td>
                        <td style="text-align: center;"><?php echo $show['isi']; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="edit_isi_tatib.php?id=<?php echo $show['id']; ?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="proses/delete_isi_tatib.php?id=<?php echo $show['id']; ?>" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
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