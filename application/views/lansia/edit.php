
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
								<h3 class="box-title">Tambah Data Lansia</h3>
								<div class="pull-right">
									<a href="<?php echo base_url('lansia') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<form action="" method="post">
									<input type="hidden" name="id" class="form-control" value="<?php echo $data_lansia->kode_lansia ?>" autocomplete="off">

									<div class="form-group col-md-9 <?php echo form_error('nama_lansia') ? "has-error" : null ?>">
										<label for="nama_lansia"> Nama</label>
										<input type="text" name="nama_lansia" id="Nama" class="form-control" value="<?php echo $data_lansia->nama_lansia ?>" autocomplete="off">
										<span class="help-block"><?php echo form_error('nama_lansia'); ?></span>
									</div>

									<div class="form-group col-md-7 <?php echo form_error('alamat') ? "has-error" : null ?>">
										<label for="Alamat"> Alamat</label>
										<textarea name="alamat" id="Alamat" class="form-control" rows="8" cols="80"><?php echo $data_lansia->alamat ?></textarea>
										<span class="help-block"><?php echo form_error('alamat'); ?></span>
									</div>

									<div class="form-group col-md-1">
										<label for="RT">RT </label><br>
										<input type="text" name="rt" id="RT" class="form-control" value="<?php echo $data_lansia->rt ?>" autocomplete="off">
									</div>

									<div class="form-group col-md-9 <?php echo form_error('jenis_kelamin') ? "has-error" : null ?>">
										<label>Jenis Kelamin</label>
										<div class="radio">
											<label>
												<input type="radio" name="jenis_kelamin" value="Laki - Laki" <?php echo $data_lansia->jenis_kelamin == "Laki - Laki" ? "checked" : null ?>> Laki - Laki &emsp;&emsp;
											</label>
											<label>
												<input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo $data_lansia->jenis_kelamin == "Perempuan" ? "checked" : null ?>> Perempuan
											</label>
										</div>
										<span class="help-block"><?php echo form_error('jenis_kelamin'); ?></span>
									</div>

									<div class="form-group col-md-4 <?php echo form_error('ttl') ? "has-error" : null ?>">
										<label for="TTL">Tanggal Lahir</label>
										<input type="text" name="ttl" id="ttl" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" value="<?php echo $data_lansia->ttl ?>" data-mask autocomplete="off">
										<span class="help-block"><?php echo form_error('ttl'); ?></span>
									</div>

									<div class="form-group col-md-4 <?php echo form_error('umur') ? "has-error" : null ?>">
										<label for="Umur">Umur</label>
										<input type="text" name="umur" id="umur" class="form-control" value="<?php echo $data_lansia->umur ?>" autocomplete="off">
										<span class="help-block"><?php echo form_error('umur'); ?></span>
									</div>

									<div class="form-group col-md-9 <?php echo form_error('riwayat_penyakit') ? "has-error" : null ?>">
										<label for="Riwayat Penyakit"> Riwayat Penyakit</label>
										<textarea name="riwayat_penyakit" id="Riwayat Penyakit" class="form-control" rows="8" cols="80"><?php echo $data_lansia->riwayat_penyakit ?></textarea>
										<span class="help-block"><?php echo form_error('riwayat_penyakit'); ?></span>
									</div>

									<div class="form-group col-md-4">
										<label for="Jarak">Jarak </label><br>
										<select class="form-control col-md-1" name="jarak">
											<option value="1" <?php echo $data_lansia->jarak == "1" ? "selected" : null ?> > 1 Kilometer</option>
											<option value="2" <?php echo $data_lansia->jarak == "2" ? "selected" : null ?> > 2 Kilometer</option>
											<option value="3" <?php echo $data_lansia->jarak == "3" ? "selected" : null ?> > 3 Kilometer</option>
											<option value="4" <?php echo $data_lansia->jarak == "4" ? "selected" : null ?> > 4 Kilometer</option>
											<option value="5" <?php echo $data_lansia->jarak == "5" ? "selected" : null ?> > 5 Kilometer</option>
											<option value="6" <?php echo $data_lansia->jarak == "6" ? "selected" : null ?> > 6 Kilometer</option>
											<option value="7" <?php echo $data_lansia->jarak == "7" ? "selected" : null ?> > 7 Kilometer</option>
											<option value="8" <?php echo $data_lansia->jarak == "8" ? "selected" : null ?> > 8 Kilometer</option>
											<option value="9" <?php echo $data_lansia->jarak == "9" ? "selected" : null ?> > 9 Kilometer</option>
											<option value="10" <?php echo $data_lansia->jarak == "10" ? "selected" : null ?> > 10 Kilometer</option>
											<option value="11" <?php echo $data_lansia->jarak == "11" ? "selected" : null ?> > 11 Kilometer</option>
										</select>
									</div>

									<div class="form-group col-md-4<?php echo form_error('tinggal_bersama') ? "has-error" : null ?>">
										<label for="Tinggal Bersama"> Tinggal Bersama</label>
										<input type="text" name="tinggal_bersama" id="Tinggal Bersama" class="form-control" value="<?php echo $data_lansia->tinggal_bersama ?>" autocomplete="off">
										<span class="help-block"><?php echo form_error('tinggal_bersama'); ?></span>
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