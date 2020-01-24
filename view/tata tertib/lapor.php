<?php
session_start();
include '../../config/database.php';
?>
<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>Aplikasi Tata Tertib</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/>

    <!-- Tanggal -->
    <script src="assets/js/fullcalendar/fullcalendar.js"></script>
    <script src="assets/js/fullcalendar/locale-all.js"></script>
    <!-- Selesai Tanggal -->

    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

    <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>

    <script src="assets/js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="../dist/js/standalone/selectize.js"></script>
    <script src="js/index.js"></script>




    <script src="../../admin/SweetAlert/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../admin/SweetAlert/sweetalert.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php

error_reporting(0);
ini_set('display_errors', 0);
                    //kode php ini kita gunakan untuk menampilkan pesan data salah
if ($_GET['alert'] == gagal) {
    echo '<script>

    swal({
        title: "Gagal",
        text: "Gagal Mengirim Laporan!",
        type: "error",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "lapor.php";
        }
    });
    </script>';
}

?>
<body class="page-header-fixed compact-menu page-horizontal-bar">
    <div class="overlay"></div>
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner container">
                <div class="logo-box">
                    <a href="index.html" class="logo-text"><span>Aplikasi Tata Tertib</span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <i class="fa fa-cogs"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Header
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Sidebar
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Toggle Sidebar
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Compact Menu
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right compact-menu-check" checked>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
        <div class="page-sidebar sidebar horizontal-bar">
            <div class="page-sidebar-inner">
                <ul class="menu accordion-menu">
                    <li class="nav-heading"><span>Navigation</span></li>
                    <li><a href="../index.php"><span class="menu-icon icon-speedometer"></span><p>Home</p></a></li>
                    <li class="droplink"><a href="index.php"><span class="menu-icon icon-grid"></span><p>Tata Tertib</p><span class="arrow"></span></a>
                    </li>
                    <li class="droplink active"><a href="lapor.php"><span class="menu-icon icon-note"></span><p>Lapor</p><span class="arrow"></span></a>
                    </li>
                    <li><a href="status_laporan.php"><span class="menu-icon icon-grid"></span><p>Status</p><span class="arrow"></span></a>
                    </li>
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="content-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="page-head-line" style="font-size: 35px;">Form Laporan</h2>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <form name="input" method="post" action="summary.php">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="form-group">
                            <label>Nis</label>
                            <select class="js-selectize" name="nis" id="nim" placeholder="Pilih Nis Pelanggar" onchange="changeValue(this.value)">
                                <option>
                                    <?php
                                    $result = mysqli_query($db, "select * from tbl_siswa");
                                    $jsArray = "var dtMhs = new Array();\n";

                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<option value="' . $row['nis'] . '">' . $row['nis'] . '</option>';

                                        $jsArray .= "dtMhs['" . $row['nis'] . "'] = {nama:'" . addslashes($row['nama']) . "',kelas:'".addslashes($row['kelas'])." ".addslashes($row['jurusan'])."'};\n";
                                    }
                                    ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama Pelanggar" readonly / >
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input name="kelas" id="kelas" type="text" class="form-control" placeholder="Kelas Pelanggar" readonly / >
                        </div>
                        <div class="jenis_pelanggaran">
                            <label>Jenis Pelanggaran</label>
                            <select class="form-control" name="jenis_pelanggaran" id="jenis_pelanggaran" placeholder="Jenis Pelanggaran" style="margin-bottom: 15px;">
                                <option>Jenis Pelanggaran</option>
                                <?php
                                $sqlt = mysqli_query($db,"SELECT * FROM jenis_pelanggaran");

                                while ($rowt = mysqli_fetch_array($sqlt)) {
                                  ?>
                                  <option><?php echo $rowt['nama_pelanggaran']; ?></option>
                                  <?php
                              }
                              ?>
                          </select>
                      </div>
                      <div class="isi_pelanggaran">
                        <label>Isi Pelanggaran</label>
                        <select class="form-control" name="isi_pelanggaran" id="isi_pelanggaran" placeholder="Isi Pelanggaran" style="margin-bottom: 15px;">
                            <option>Pilih Isi Pelanggaran</option>
                        </select>
                    </div>

                    <div id="tampilisi"></div>

                    <div class="form-group">
                        <label>Tanggal Kejadian</label>
                        <div class="input-group date" id="tgl4">
                            <input type="text" class="form-control" name="tanggal_kejadian" placeholder="Tanggal Kejadian"/>
                            <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tempat Kejadian</label>
                        <input name="tempat_kejadian" id="tempat_kejadian" type="text" class="form-control" placeholder="Tempat Kejadian" / >
                    </div>
                    <div class="form-group">
                        <label>Nama Saksi</label>
                        <select class="js-selectize" name="nama_saksi" placeholder="Nama Saksi">
                            <option>
                                <?php
                                $result = mysqli_query($db, "select * from tbl_siswa");

                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<option value="' . $row['nama'] . '">' . $row['nama'] . '</option>';
                                }
                                ?>
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nis Pelapor</label>
                        <select class="js-selectize" name="nis_pelapor" id="nispelapor" placeholder="Pilih Nis Pelapor" onchange="changeValuee(this.value)">
                            <option>
                                <?php
                                $resultpelapor = mysqli_query($db, "select * from tbl_siswa");
                                $jsArrayPelapor = "var dtNisPelapor = new Array();\n";

                                while ($rowpelapor = mysqli_fetch_array($resultpelapor)) {
                                    echo '<option value="' . $rowpelapor['nis'] . '">' . $rowpelapor['nis'] . '</option>';

                                    $jsArrayPelapor .= "dtNisPelapor['" . $rowpelapor['nis'] . "'] = {nama_pelapor:'" . addslashes($rowpelapor['nama']) . "', kelas_pelapor:'" . addslashes($rowpelapor['kelas']) . " " . addslashes($rowpelapor['jurusan']) . "'};\n";
                                }
                                ?>
                            </option>
                        </select>
                    </div>
                    <script>
                        $('.js-selectize').selectize();
                    </script>
                    <div class="form-group">
                        <label>Nama Pelapor</label>
                        <input name="nama_pelapor" id="nama_pelapor" type="text" class="form-control" placeholder="Nama Pelapor" readonly />
                    </div>
                    <div class="form-group">
                        <label>Kelas Pelapor</label>
                        <input name="kelas_pelapor" id="kelas_pelapor" type="text" class="form-control" placeholder="Kelas Pelapor" readonly />
                    </div>
                    <hr />
                    <center>
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary" />
                        <input type="reset" name="submit" value="RESET" class="btn btn-warning" />
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</form>
<div class="page-footer">
    <div class="container">
        <p class="no-s">2017 &copy; Aplikasi Tata Tertib by Millenia Saharani.</p>
    </div>
</div>
</div><!-- Page Inner -->
</main><!-- Page Content -->


<!-- Javascripts -->
<script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/pace-master/pace.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/classie/classie.js"></script>
<script src="assets/plugins/waves/waves.min.js"></script>
<script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
<script src="assets/plugins/summernote-master/summernote.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/js/modern.min.js"></script>
<script src="assets/js/pages/form-elements.js"></script>

<script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValue(nim){
        document.getElementById('nama').value = dtMhs[nim].nama;
        document.getElementById('kelas').value = dtMhs[nim].kelas;
        document.getElementById('jurusan').value = dtMhs[nim].jurusan;
    };
</script>

<script type="text/javascript">
  <?php echo $jsArrayPelapor; ?>
  function changeValuee(nispelapor){
    document.getElementById('nama_pelapor').value = dtNisPelapor[nispelapor].nama_pelapor;
    document.getElementById('kelas_pelapor').value = dtNisPelapor[nispelapor].kelas_pelapor;
    document.getElementById('jurusan_pelapor').value = dtNisPelapor[nispelapor].jurusan_pelapor;
};
</script>

<script type="text/javascript">
  <?php echo $jsArrayPelanggaran; ?>
  function changeValueee(jenispelanggaran){
    document.getElementById('isi_pelanggaran').value = dtPelanggaran[jenispelanggaran].isi_pelanggaran;
};
</script>

<script>
    $(function() {
  // defualt script for datetimepicket
  $('#tgl4').datepicker({
     locale:'id',
     format:'DD, dd/mm/yyyy'
 });
});

</script>



  <script>
    $(document).ready(function(){
      // TAHUN
      $('#jenis_pelanggaran').change(function(){
        var jenis_pelanggaran = $('#jenis_pelanggaran').val();

        if (jenis_pelanggaran == '-- Pilih Jenis Pelanggaran --') {
          $('#tampilisi').fadeOut();
          $.ajax({
            type: 'POST',
            url: 'umpet_isi.php',
            data: 'jenis_pelanggaran=' + jenis_pelanggaran,
            success: function(response){
            $('#isi_pelanggaran').html(response);
            }
          });
        }else{
          $('#tampilisi').fadeOut();
          $.ajax({
            type: 'POST',
            url: 'user_jenis.php',
            data: 'jenis_pelanggaran=' + jenis_pelanggaran,
            success: function(response){
            $('#isi_pelanggaran').html(response);
            }
          });

        }
      });
    });
  </script>


</body>
</html>