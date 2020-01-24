<?php

session_start();    
if (isset($_SESSION['username'])) {
    $username   = $_SESSION['username'];
    $nama       = $_SESSION['nama_lengkap'];
    echo "<script>window.location = 'index.php'</script>";
}

?>

<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<?php

error_reporting(0);
ini_set('display_errors', 0);
                    //kode php ini kita gunakan untuk menampilkan pesan data salah
if ($_GET['alert'] == gagal_ditemukan) {
    echo '<script>
    swal({
        title: "Gagal",
        text: "Username atau Password tidak ditemukan!",
        type: "error",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Okay",
        closeOnConfirm: false,
    },
    function(isConfirm){
        if (isConfirm) {
            window.location = "login.php";
        }
    });

    </script>';
}

?>
<style type="text/css">
#bg{
    width:100%;
    height: 100%;
    background-position: center;
    background-size: 100% 100%;
    background-repeat: no-repeat;
}
</style>
<!-- Login Alternative Row -->
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div id="login-alt-container">
                <!-- Title -->
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h2><i class="gi gi-flash"></i> <strong style="color:black;"><?php echo $template['name']; ?></strong></h2> Welcome to <?php echo $template['name']; ?>
                </div>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5>&copy <?php echo $template['name']; ?></a> by <?php echo $template['author']; ?>
                </div>
                <!-- END Title -->
            </div>
        </div>
        <img src="img/placeholders/backgrounds/bg.jpg" id="bg" alt="Login Full Background" class="full-bg animation-pulseSlow">
        <div class="col-md-5">
            <!-- Login Container -->
            <div id="login-container">
                <!-- Login Title -->
                <div class="login-title text-center">
                    <h1><strong>Login</strong> as <strong>Administrator</strong></h1>
                </div>
                <!-- END Login Title -->

                <!-- Login Block -->
                <div class="block push-bit">
                    <!-- Login Form -->
                    <form action="proses/proses_login.php" method="post" id="form-login" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                    <input type="text" name="username" class="form-control input-lg" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="gi gi-lock"></i></span>
                                    <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-xs-8 text-right">
                                <center><button type="submit" name="login_admin" class="btn btn-sm btn-primary" style="margin-left: 150px;">LOGIN</button></center>
                            </div>
                        </div>
                    </form>
                    <!-- END Login Form -->
                </div>
                <!-- END Login Block -->
            </div>
            <!-- END Login Container -->
        </div>
    </div>
</div>
<!-- END Login Alternative Row -->

<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/login.js"></script>
<script>$(function(){ Login.init(); });</script>

<?php include 'inc/template_end.php'; ?>