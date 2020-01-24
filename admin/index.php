<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">


		<!-- Mini Top Stats Row -->
		<div class="row">
			<div class="col-sm-12 ">
				<!-- Widget -->
				<a href="index.php" class="widget widget-hover-effect1">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-night animation-fadeIn">
							<i class="fa fa-user"></i>
						</div>
						<h3 class="widget-content text-left animation-pullDown">
							Selamat Datang <strong><?php echo $nama; ?></strong><br>
						</h3>
						<small>Administrator</small>
					</div>
				</a>
				<!-- END Widget -->
			</div>
			<div class="col-sm-6 col-lg-4">
				<!-- Widget -->
				<a href="index.php" class="widget widget-hover-effect1">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
							<i class="fa fa-group"></i>
						</div>
						<h3 class="widget-content text-right animation-pullDown">
							Jumlah <strong>Siswa/i</strong><br>
							<h4 class="pull-right"><?php echo $far_count_siswa[0]; ?></h4>
						</h3>
					</div>
				</a>
				<!-- END Widget -->
			</div>
			<div class="col-sm-6 col-lg-4">
				<!-- Widget -->
				<a href="jenis_tatib.php" class="widget widget-hover-effect1">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-spring animation-fadeIn">
							<i class="gi gi-book"></i>
						</div>
						<h3 class="widget-content text-right animation-pullDown">
							Jenis <strong>Tata Tertib</strong><br>
							<h4 class="pull-right"><?php echo $far_count_jenis_tatib[0]; ?></h4>
						</h3>
					</div>
				</a>
				<!-- END Widget -->
			</div>
			<div class="col-sm-6 col-lg-4">
				<!-- Widget -->
				<a href="pilih_data_pelanggaran.php" class="widget widget-hover-effect1">
					<div class="widget-simple">
						<div class="widget-icon pull-left themed-background-fire animation-fadeIn">
							<i class="fa fa-times"></i>
						</div>
						<h3 class="widget-content text-right animation-pullDown">
							Jumlah <strong>Pelanggaran</strong>
							<h4 class="pull-right"><?php echo $far_data_pelanggaran[0]; ?></h4>
						</h3>
					</div>
				</a>
				<!-- END Widget -->
			</div>
		</div>

		<!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Data</strong> Siswa-Siswi</h2>
        </div>
        <h2 style="text-align: center; font-family: Arial; margin-bottom: 30px;">Semua Data Siswa-Siswi</h2>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th hidden>Jurusan</th>
                    </tr>
                </thead>
                <tbody>

                   <?php
					$no = 0;
					while ($show = mysqli_fetch_array($exe_siswa)){
						$no++;
						?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $show['nis']; ?></td>
							<td><?php echo $show['nama']; ?></td>
							<td><?php echo $show['kelas']; ?></td>
							<td><?php echo $show['jurusan']; ?></td>
							<td hidden><?php echo $show['jurusan']; ?></td>
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