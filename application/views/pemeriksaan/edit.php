
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('partials/head'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<header class="main-header">
			<?php $this->load->view('partials/header'); ?>
		</header>

		<!-- =============================================== -->

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<?php $this->load->view('partials/sidebar'); ?>
			<!-- /.sidebar -->
		</aside>

		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Posyandu Lansia
					<small>Wredo Utomo</small>
				</h1>
				<?php $this->load->view('partials/breadcrumb') ?>
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Edit Data Pemeriksaan : <?php echo $pemeriksaan->nama_lansia ?></h3>
								<div class="pull-right">
									<a href="<?php echo base_url('pemeriksaan/list_pemeriksaan/'.$pemeriksaan->kode_lansia) ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<form action="" method="post">
									<input type="text" hidden name="id" value="<?php echo $pemeriksaan->kode_periksa ?>">
									<input type="text" hidden name="kode_lansia" value="<?php echo $pemeriksaan->kode_lansia ?>">

									<div class="form-group col-md-2 col-md-offset-4 col-md-pull-4 <?php echo form_error('tgl_periksa') ? "has-error" : null ?>">
										<label for="Tanggal Periksa">Tanggal Periksa</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" name="tgl_periksa" class="form-control" value="<?php echo $pemeriksaan->tgl_periksa ?>" autocomplete="off">
										</div>
										<span class="help-block"><?php echo form_error('tgl_periksa'); ?></span>
									</div>

									<div class="form-group col-md-3 col-md-offset-4 col-md-pull-4 <?php echo form_error('tensi') ? "has-error" : null ?>">
										<label for="Tensi Darah">Tensi Darah</label>
										<div class="input-group">
											<input type="text" name="tensi" id="Tensi Darah" class="form-control" value="<?php echo $pemeriksaan->tensi ?>" placeholder="/mmHg" autocomplete="off">
											<span class="help-block"><?php echo form_error('tensi'); ?></span>
										</div>
									</div>

									<div class="form-group col-md-3 col-md-offset-4 col-md-pull-4 <?php echo form_error('berat_badan') ? "has-error" : null ?>">
										<label for="Berat Badan">Berat Badan</label>
										<div class="input-group">
											<input type="text" name="berat_badan" id="Berat Badan" class="form-control" value="<?php echo $pemeriksaan->berat_badan ?>" placeholder="/Kg" autocomplete="off">
											<span class="help-block"><?php echo form_error('berat_badan'); ?></span>
										</div>
									</div>

									<div class="form-group col-md-3 col-md-offset-4 col-md-pull-4 <?php echo form_error('tinggi_badan') ? "has-error" : null ?>">
										<label for="Tinggi Badan">Tinggi Badan</label>
										<div class="input-group">
											<input type="text" name="tinggi_badan" id="Tinggi Badan" class="form-control" value="<?php echo $pemeriksaan->tinggi_badan ?>"  placeholder="/Cm" autocomplete="off">
											<span class="help-block"><?php echo form_error('tinggi_badan'); ?></span>
										</div>
									</div>

									<div class="form-group col-md-3 col-md-offset-4 col-md-pull-4 <?php echo form_error('gula_darah') ? "has-error" : null ?>">
										<label for="Gula Darah">Gula Darah</label>
										<div class="input-group">
											<input type="text" name="gula_darah" id="Gula Darah" class="form-control" value="<?php echo $pemeriksaan->gula_darah ?>" placeholder="/mgdL" autocomplete="off">
											<span class="help-block"><?php echo form_error('gula_darah'); ?></span>
										</div>
									</div>

									<div class="form-group col-md-3 col-md-offset-4 col-md-pull-4 <?php echo form_error('kolesterol') ? "has-error" : null ?>">
										<label for="Kolesterol">Kolesterol</label>
										<div class="input-group">
											<input type="text" name="kolesterol" id="Kolesterol" class="form-control" value="<?php echo $pemeriksaan->kolesterol ?>" placeholder="/mgdL" autocomplete="off">
											<span class="help-block"><?php echo form_error('kolesterol'); ?></span>
										</div>
									</div>

									<div class="form-group col-md-6 col-md-offset-4 col-md-pull-4">
										<label for="Keluhan">Keluhan</label>
										<div class="input-group">
											<textarea name="keluhan" id="Keluhan" class="form-control" rows="4" cols="90"><?php echo $pemeriksaan->keluhan ?></textarea>
											<span class="help-block"></span>
										</div>
									</div>

									<div class="form-group col-md-4 col-md-offset-4 col-md-pull-4">
										<label for="Diagnosa">Diagnosa </label><br>
										<select readonly class="form-control col-md-1" name="old_diagnosa">
											<option selected value="<?php echo $pemeriksaan->diagnosa ?>"><?php echo $pemeriksaan->diagnosa; ?></option>
										</select>
									</div>

									<div class="form-group col-md-4 col-md-offset-4 col-md-pull-4">
										<select class="form-control col-md-1" name="diagnosa">
											<option value="">-- PILIH --</option>
											<?php
											$host = mysql_connect("localhost","root","");
											$db = mysql_select_db("lansia");
											$query = mysql_query("SELECT * FROM data_penyakit");
											while ($row = mysql_fetch_array($query)) {
												?>
												<option value="<?php echo $row["nama_penyakit"] ?>"><?php echo $row["nama_penyakit"] ?></option>
												<?php
											}
											?>
										</select>
									</div>

									<div class="form-group col-md-4 col-md-offset-4 col-md-pull-4">
										<label for="Perawatan Tambahan">Perawatan Tambahan </label><br>
										<select class="form-control col-md-1" name="old_perawatan_tambahan" readonly>
											<option selected value="<?php echo $pemeriksaan->perawatan_tambahan ?>"><?php echo $pemeriksaan->perawatan_tambahan; ?></option>
										</select>
									</div>

									<div class="form-group col-md-4 col-md-offset-4 col-md-pull-4">
										<select class="form-control col-md-1" name="perawatan_tambahan">
											<option value="">-- PILIH --</option>
											<option value="Pemeriksaan Ke Puskesmas">Pemeriksaan Ke Puskesmas</option>
											<option value="Pemeriksaan Ke Rumah Sakit">Pemeriksaan Ke Rumah Sakit</option>
										</select>
									</div>


									<div class="form-group col-md-9">
										<button type="reset" class="btn btn-flat" name="submit">Cancel</button>
										<button type="submit" class="btn btn-success btn-flat" name="submit"><i class="fa fa-paper-plane"> Save</i></button>
									</div>
								</form>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<?php $this->load->view('partials/footer'); ?>
		</footer>
  <!-- Add the sidebar's background. This div must be placed
  	immediately after the control sidebar -->
  	<div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <?php $this->load->view('partials/jquery.php'); ?>
</body>
</html>
