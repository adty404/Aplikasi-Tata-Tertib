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
        text: "Berhasil Update data!",
        type: "success",
        confirmButtonColor: "#8CD4F5",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "konfirmasi_pelanggaran2.php";
        }
    });
    </script>';
} else if ($_GET['alert'] == gagal_edit) {
    echo '<script> 

    swal({
        title: "Gagal",
        text: "Gagal Update data!",
        type: "error",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "konfirmasi_pelanggaran.php";
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
                <i class="fa fa-book"></i>Status Pelanggaran<br><small>SMK TELEKOMUNIKASI TELESANDI BEKASI</small>
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Konfirmasi</strong> Pelanggaran</h2>
        </div>
        <h2 style="text-align: center; font-family: Arial; margin-bottom: 30px;">Belum Ditindaklanjuti</h2>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" width="20px">No</th>
                        <th style="text-align: center;"> Nama </th>
                        <th>Kelas</th>
                        <th>Jenis Pelanggaran</th>
                        <th>Isi Pelanggaran</th>
                        <th>Tanggal, Tempat Kejadian</th>
                        <th>Nama Saksi</th>
                        <th>Nama Pelapor</th>
                        <th>Kelas Pelapor</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
                 $no = 0;
                 while ($show = mysqli_fetch_array($exe_laporan_pelanggaran)){
                    $no++;
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no; ?></td>
                        <td style="text-align: center;"><?php echo $show['nama']; ?></td>
                        <td style="text-align: center;"><?php echo $show['kelas']; ?></td>
                        <td style="text-align: center;"><?php echo $show['jenis']; ?></td>
                        <td style="text-align: center;"><?php echo $show['isi']; ?></td>
                        <td style="text-align: center;"><?php echo $show['tanggal_kejadian']; echo ", "; echo $show['tempat_kejadian']; ?></td>
                        <td style="text-align: center;"><?php echo $show['nama_saksi']; ?></td>
                        <td style="text-align: center;"><?php echo $show['nama_pelapor']; ?></td>
                        <td style="text-align: center;"><?php echo $show['kelas_pelapor']; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="proses/sudah_konfirmasi.php?no_pelanggaran=<?php echo $show['no_pelanggaran']; ?>" data-toggle="tooltip" title="Sudah dikonfirmasi" class="btn btn-xs btn-default"><i class="fa fa-check"></i></a>
                                <a href="proses/belum_konfirmasi.php?no_pelanggaran=<?php echo $show['no_pelanggaran']; ?>" data-toggle="tooltip" title="Belum dikonfirmasi" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a><br />
                            </div>
                        </td>
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