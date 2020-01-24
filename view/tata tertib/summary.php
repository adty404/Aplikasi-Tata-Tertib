<?php
include '../../config/database.php';

error_reporting(0);
ini_set('display_errors', 0);

$nis                    =   $_POST['nis'];
$nama                   =   $_POST['nama'];
$kelas                  =   $_POST['kelas'];
$isi_pelanggaran        =   $_POST['isi_pelanggaran'];
$jenis_pelanggaran      =   $_POST['jenis_pelanggaran'];
$tanggal_kejadian       =   $_POST['tanggal_kejadian'];
$tempat_kejadian        =   $_POST['tempat_kejadian'];
$nama_saksi             =   $_POST['nama_saksi'];
$nis_pelapor            =   $_POST['nis_pelapor'];
$nama_pelapor           =   $_POST['nama_pelapor'];
$kelas_pelapor          =   $_POST['kelas_pelapor'];
$waktu                  =   date('d-m-Y H:i:s');
$status                 =   'N';

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

    <!-- Theme Styles -->
    <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

    <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
                    <li class="droplink"><a href="lapor.php"><span class="menu-icon icon-note"></span><p>Lapor</p><span class="arrow"></span></a>
                    </li>
                    <li><a href="status_laporan.php"><span class="menu-icon icon-grid"></span><p>Status</p><span class="arrow"></span></a>
                    </li>
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <div class="container">
                    <h3>Konfirmasi Laporan Pelanggaran</h3>
                </div>
            </div>
            <div id="main-wrapper" class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4>Konfirmasi Laporan Pelanggaran</h4>
                            </div>
                            <form action="proses/proses_lapor.php" method="POST" enctype="multipart/form-data" id="example4">
                                <div class="panel-body">
                                    <div class="well">
                                        <table>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Nis Pelanggar :</h3></td>
                                                <td><h3><?php echo $nis; ?></h3></td>
                                                <td><input type="text" name="nis" value="<?php echo $nis; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Nama Pelanggar :</h3></td>
                                                <td><h3><?php echo $nama; ?></h3></td>
                                                <td><input type="text" name="nama" value="<?php echo $nama; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Kelas Pelanggar :</h3></td>
                                                <td><h3><?php echo $kelas; ?></h3></td>
                                                <td><input type="text" name="kelas" value="<?php echo $kelas; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Jenis Pelanggaran :</h3></td>
                                                <td><h3><?php echo $jenis_pelanggaran; ?></h3></td>
                                                <td><input type="text" name="jenis_pelanggaran" value="<?php echo $jenis_pelanggaran; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Isi Pelanggaran :</h3></td>
                                                <td><h3><?php echo $isi_pelanggaran; ?></h3></td>
                                                <td><input type="text" name="isi_pelanggaran" value="<?php echo $isi_pelanggaran; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Tanggal Kejadian :</h3></td>
                                                <td><h3><?php echo $tanggal_kejadian; ?></h3></td>
                                                <td><input type="text" name="tanggal_kejadian" value="<?php echo $tanggal_kejadian; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Tempat Kejadian :</h3></td>
                                                <td><h3><?php echo $tempat_kejadian; ?></h3></td>
                                                <td><input type="text" name="tempat_kejadian" value="<?php echo $tempat_kejadian; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Nama Saksi :</h3></td>
                                                <td><h3><?php echo $nama_saksi; ?></h3></td>
                                                <td><input type="text" name="nama_saksi" value="<?php echo $nama_saksi; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Nis Pelapor :</h3></td>
                                                <td><h3><?php echo $nis_pelapor; ?></h3></td>
                                                <td><input type="text" name="nis_pelapor" value="<?php echo $nis_pelapor; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Nama Pelapor :</h3></td>
                                                <td><h3><?php echo $nama_pelapor; ?></h3></td>
                                                <td><input type="text" name="nama_pelapor" value="<?php echo $nama_pelapor; ?>" hidden></td>
                                            </tr>
                                            <tr>
                                                <td><h3 style="margin-right: 20px;">Kelas Pelapor :</h3></td>
                                                <td><h3><?php echo $kelas_pelapor; ?></h3></td>
                                                <td><input type="text" name="kelas_pelapor" value="<?php echo $kelas_pelapor; ?>" hidden></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="checkbox">
                                        <input onchange="this.setCustomValidity(validity.valueMissing ? 'Dimohon untuk meninggalkan indikasi bahwa Anda bertanggung jawab atas pelaporan data ini' : '');" id="field_terms" type="checkbox" required name="terms"> Saya bertanggung jawab. Bahwa, <u> data yang saya laporkan benar adanya</u>
                                        <center>
                                            <input type="submit" value="SUBMIT" class="btn btn-primary">
                                            <a href="lapor.php"><input type="button" value="CANCEL" class="btn btn-warning"></a>
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <div class="container">
                        <p class="no-s">2017 &copy; Aplikasi Tata Tertib by Millenia Saharani.</p>
                    </div>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <div class="cd-overlay"></div>


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
        <script src="assets/js/modern.min.js"></script>

        <script type="text/javascript">
            document.getElementById("field_terms").setCustomValidity("Pleaseee indicate that you accept the Terms and Conditions");
        </script>
    </body>
    </html>
