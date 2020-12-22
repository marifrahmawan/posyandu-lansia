
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
				<!-- Alert -->
				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Success</h4>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>
				<!-- ./Alert -->
				<div class="row">
					<div class="col-lg-4 col-xs-6">
						<?php
						$host = @mysqli_connect("localhost", "root", "");
						$db = mysqli_select_db($host,"lansia");
						$query = mysqli_query($host, "SELECT * FROM data_lansia");
						$count = mysqli_num_rows($query);
						?>
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3><?php echo $count; ?></h3>

								<p>Data Lansia</p>
							</div>
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<a href="<?php echo base_url('lansia') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-xs-6">
						<?php
						$host = @mysqli_connect("localhost", "root", "");
						$db = mysqli_select_db($host,"lansia");
						$query = mysqli_query($host, "SELECT * FROM pemeriksaan");
						$count = mysqli_num_rows($query);
						?>
						<!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">
								<h3><?php echo $count; ?></h3>

								<p>Data Pemeriksaan</p>
							</div>
							<div class="icon">
								<i class="fa fa-heartbeat"></i>
							</div>
							<a href="<?php echo base_url('pemeriksaan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-xs-6">
						<?php
						$host = @mysqli_connect("localhost", "root", "");
						$db = mysqli_select_db($host, "lansia");
						$query = mysqli_query($host, "SELECT * FROM data_penyakit");
						$count = mysqli_num_rows($query);
						?>
						<!-- small box -->
						<div class="small-box bg-orange">
							<div class="inner">
								<h3><?php echo $count; ?></h3>

								<p>Data Diagnosa</p>
							</div>
							<div class="icon">
								<i class="fa fa-ambulance"></i>
							</div>
							<a href="<?php echo base_url('diagnosa') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
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
