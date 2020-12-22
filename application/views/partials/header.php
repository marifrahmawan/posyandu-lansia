			<!-- Logo -->
			<a href="<?=base_url()?>" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>A</b>LT</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Admin</b>LTE</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?=base_url()?>assets/dist/img/user.png" class="user-image" alt="User Image">
								<span class="hidden-xs">
									<?php
									$ci =& get_instance();
									$user_session = $ci->session->userdata('nama_user');
									echo $user_session;
									?>
								</span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="<?=base_url()?>assets/dist/img/user.png" class="img-circle" alt="User Image">
									<p>
										<?php
										$ci =& get_instance();
										$nama = $ci->session->userdata('nama_user');
										$level = $ci->session->userdata('level');

										echo $nama;
										echo "<br>";
										if ($level == 1) {
											echo "Administrator";
										}
										else if ($level == 2){
											echo "Pegawai";
										}
										?>
									</p>
								</li>
								
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="
										<?php
											$ci =& get_instance();

											$id_user = $ci->session->userdata('id_user');
											echo base_url('user/settings/'.$id_user)
											?>"
											class="btn btn-default btn-flat">Settings
										</a>

									</div>
									<div class="pull-right">
										<a href="#" data-toggle="modal" data-target="#modalLogout" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>