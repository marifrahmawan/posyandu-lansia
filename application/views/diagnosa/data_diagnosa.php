
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
								<h3 class="box-title">Data Lansia</h3>
								<div class="pull-right">
									<a href="<?php echo base_url('diagnosa/add') ?>" class="btn btn-primary btn-flat"><i class="fa fa-ambulance"></i> Tambah</a>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive">
								<table id="lansia" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="1%">No. </th>
											<th width="10%">Diagnosa</th>
											<th width="36%">Anjuran</th>
											<th width="36%">Pantangan</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach ($data_penyakit as $value) :?>
										<tr>
											<td align="center"><?php echo $i++." ." ?></td>
											<td><?php echo $value->nama_penyakit ?></td>
											<td><?php echo $value->anjuran ?></td>
											<td><?php echo $value->pantangan ?></td>
											<td>
												<a href="<?php echo base_url('diagnosa/detail/'.$value->kode_penyakit) ?>" class="btn btn-sm btn-info btn-flat"><i class="fa fa-book"></i> Detail</a>
												<a href="<?php echo base_url('diagnosa/edit/'.$value->kode_penyakit) ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
												<a onclick="deleteConfirm('<?php echo site_url('diagnosa/delete/'.$value->kode_penyakit) ?>')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
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
