<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="<?=base_url()?>assets/dist/img/user.png" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
			<p>
				<?php
				$ci =& get_instance();
				$nama = $ci->session->userdata('nama_user');
				$level = $ci->session->userdata('level');

				echo $nama;
				?>
			</p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>
	<!-- search form -->
	<form action="#" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Search...">
			<span class="input-group-btn">
				<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
				</button>
			</span>
		</div>
	</form>
	<!-- /.search form -->
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">MAIN NAVIGATION</li>
		<li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		<li><a href="<?=base_url('lansia')?>"><i class="fa fa-users"></i> <span>Data Lansia</span></a></li>
		<li><a href="<?=base_url('pemeriksaan')?>"><i class="fa fa-heartbeat"></i> <span>Data Pemeriksaan Pasien</span></a></li>
		<li><a href="<?=base_url('diagnosa')?>"><i class="fa fa-ambulance"></i> <span>Data Diagnosa</span></a></li>
		<?php
			$ci =& get_instance();
			$nama = $ci->session->userdata('nama_user');
			$level = $ci->session->userdata('level');
			echo "";
			echo "<br>";
			if ($level == 1) {
		?>
		<li><a href="<?=base_url('user')?>"><i class="fa fa-user"></i> <span>User</span></a></li>
		<?php
			}
		?>
	</ul>
</section>
