<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php
$nis        =   $_GET['nis'];

$qry_cek_siswa  =   "SELECT * FROM tbl_siswa WHERE nis = '$nis'";
$exe_cek_siswa  =   mysqli_query($db, $qry_cek_siswa);
while($show = mysqli_fetch_array($exe_cek_siswa))   {

    ?>


    <!-- Page content -->
    <div id="page-content">
        <!-- Forms General Header -->
        <div class="content-header">
            <div class="header-section">
                <h1>
                    <i class="gi gi-group"></i><i class="gi gi-settings"></i>Edit Data Siswa<br><small>SMK TELEKOMUNIKASI TELESANDI BEKASI</small>
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
                        <h2><strong>Edit</strong> Data Siswa</h2>
                    </div>
                    <!-- END Horizontal Form Title -->

                    <!-- Horizontal Form Content -->
                    <form action="proses/edit_data_siswa.php" method="post" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Nis</label>
                            <div class="col-md-9">
                                <input type="number" name="nis" class="form-control" value="<?php echo $show['nis']; ?>" placeholder="Masukan NIS" required="" readonly>
                                <span class="help-block">Silahkan Masukan NIS anda</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-hf-email">Nama</label>
                            <div class="col-md-9">
                                <input type="text" name="nama" class="form-control" value="<?php echo $show['nama']; ?>" placeholder="Masukan NAMA" required="">
                                <span class="help-block">Silahkan Masukan NAMA anda</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-select">Kelas</label>
                            <div class="col-md-9">
                                <select name="kelas" class="form-control" size="1" required="">
                                    <option value="10" <?php if($show['kelas'] == '10'){ echo 'selected'; } ?>>10</option>
                                    <option value="11" <?php if($show['kelas'] == '11'){ echo 'selected'; } ?>>11</option>
                                    <option value="12" <?php if($show['kelas'] == '12'){ echo 'selected'; } ?>>12</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="example-select">Jurusan</label>
                            <div class="col-md-9">
                                <select name="jurusan" class="form-control" size="1" required="">
                                    <option value="MM" <?php if($show['jurusan'] == 'MM'){ echo 'selected'; } ?>>MM</option>
                                    <option value="RPL" <?php if($show['jurusan'] == 'RPL'){ echo 'selected'; } ?>>RPL</option>
                                    <option value="TKJ" <?php if($show['jurusan'] == 'TKJ'){ echo 'selected'; } ?>>TKJ</option>
                                    <option value="TRANS" <?php if($show['jurusan'] == 'TRANS'){ echo 'selected'; } ?>>TRANS</option>
                                    <option value="SUITSING" <?php if($show['jurusan'] == 'SUITSING'){ echo 'selected'; } ?>>SUITSING</option>
                                    <option value="TJA" <?php if($show['jurusan'] == 'TJA'){ echo 'selected'; } ?>>TJA</option>

                                </select>
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