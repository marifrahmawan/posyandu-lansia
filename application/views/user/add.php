
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
								<h3 class="box-title">Tambah User</h3>
								<div class="pull-right">
									<a href="<?php echo base_url('user') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<form action="" method="post">
									<div class="form-group col-md-8 <?php echo form_error('nama_user') ? "has-error" : null ?>">
										<label for="Nama"> Nama</label>
										<input type="text" name="nama_user" id="nama_user" class="form-control" value="<?php echo set_value('nama_user') ?>" autocomplete="off">
										<span class="help-block"><?php echo form_error('nama_user'); ?></span>
									</div>

									<div class="form-group col-md-5 <?php echo form_error('username') ? "has-error" : null ?>">
										<label for="username"> Username</label>
										<input type="text" name="username" id="username" class="form-control" value="<?php echo set_value('username') ?>" autocomplete="off">
										<span class="help-block"><?php echo form_error('username'); ?></span>
									</div>
									
									<div class="form-group col-md-4">
										<label for="level"> Level</label>
										<input type="text" readonly="" name="level" id="level" class="form-control" value="2" autocomplete="off">
										<span class="help-block"></span>
									</div>

									<div class="form-group col-md-4 col-md-offset-4 col-md-pull-4 <?php echo form_error('password') ? "has-error" : null ?>">
										<label for="Password">Password</label>
										<input type="password" name="password" id="Password" class="form-control" value="<?php echo set_value('password') ?>" autocomplete="off">
										<span class="help-block"><?php echo form_error('password'); ?></span>
									</div>

									<div class="form-group col-md-4 col-md-offset-4 col-md-pull-4 <?php echo form_error('password_conf') ? "has-error" : null ?>">
										<label for="PasswordC">Konfirmasi Password</label>
										<input type="password" name="password_conf" id="PasswordC" class="form-control" value="<?php echo set_value('password_conf') ?>" autocomplete="off">
										<span class="help-block"><?php echo form_error('password_conf'); ?></span>
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
