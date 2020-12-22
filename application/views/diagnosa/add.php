
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
								<h3 class="box-title">Tambah Data Diagnosa</h3>
								<div class="pull-right">
									<a href="<?php echo base_url('diagnosa') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<form action="" method="post">
									<div class="form-group col-md-3 col-md-offset-4 col-md-pull-4 <?php echo form_error('nama_penyakit') ? "has-error" : null ?>">
										<label for="Nama Diagnosa">Nama Diagnosa</label>
										<div class="input-group">
											<input type="text" name="nama_penyakit" id="Namai Diagnosa" class="form-control" value="<?php echo set_value('nama_penyakit') ?>" autocomplete="off">
											<span class="help-block"><?php echo form_error('nama_penyakit'); ?></span>
										</div>
									</div>

									<div class="form-group col-md-7 <?php echo form_error('anjuran') ? "has-error" : null ?>">
										<label for="Anjuran"> Anjuran</label>
										<textarea name="anjuran" id="Anjuran" class="form-control" rows="8" cols="80"><?php echo set_value('anjuran') ?></textarea>
										<span class="help-block"><?php echo form_error('anjuran'); ?></span>
									</div>

									<div class="form-group col-md-7 <?php echo form_error('pantangan') ? "has-error" : null ?>">
										<label for="Pantangan"> Pantangan</label>
										<textarea name="pantangan" id="Pantangan" class="form-control" rows="8" cols="80"><?php echo set_value('pantangan') ?></textarea>
										<span class="help-block"><?php echo form_error('pantangan'); ?></span>
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
