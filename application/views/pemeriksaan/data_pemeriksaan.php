
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
								<!-- Alert -->
								<?php if ($this->session->flashdata('success')): ?>
									<div class="alert alert-success alert-dismissible">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<h4><i class="icon fa fa-check"></i> Success</h4>
										<?php echo $this->session->flashdata('success'); ?>
									</div>
								<?php endif; ?>
								<!-- ./Alert -->
								<h3 class="box-title">Data Pemeriksaan Pasien</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive">
								<table id="lansia" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="1%">No. </th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Jenis Kelamin</th>
											<th>Umur</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach ($data_lansia as $value) :?>
										<tr>
											<td align="center"><?php echo $i++." ." ?></td>
											<td><a href="<?php echo site_url('pemeriksaan/list_pemeriksaan/'.$value->kode_lansia) ?>"><?php echo $value->nama_lansia ?></a></td>
											<td><?php echo $value->alamat ?></td>
											<td><?php echo $value->jenis_kelamin ?></td>
											<td><?php echo $value->umur ?></td>
											<td>
												<a href="<?php echo site_url('pemeriksaan/add/'.$value->kode_lansia) ?>" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Tambah</a>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
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
