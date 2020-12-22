
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
    <?php $this->load->view('partials/sidebar'); ?>
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"><br>
      <h1>Lansia<small>Detail Lansia</small></h1>
      <?php $this->load->view('partials/breadcrumb') ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Lansia : <?php echo $lansia->nama_lansia ?></h3>
              <div class="pull-right">
                <a href="<?php echo base_url('lansia') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td width="10%">Nama </td>
                    <td width="1%"> : </td>
                    <td><?php echo $lansia->nama_lansia ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Nama </td>
                    <td width="1%"> : </td>
                    <td><?php echo $lansia->alamat ?></td>
                  </tr>
                  <tr>
                    <td width="10%">RT </td>
                    <td width="1%"> : </td>
                    <td><?php echo $lansia->rt ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Tanggal Lahir </td>
                    <td width="1%"> : </td>
                    <td><?php echo $lansia->ttl ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Umur </td>
                    <td width="1%"> : </td>
                    <td><?php echo $lansia->umur ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Riwayat Penyakit </td>
                    <td width="1%"> : </td>
                    <td><?php echo $lansia->riwayat_penyakit ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Jarak Tempat Tinggal </td>
                    <td width="1%"> : </td>
                    <td><?php echo $lansia->jarak ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Tinggal Bersama </td>
                    <td width="1%"> : </td>
                    <td><?php echo $lansia->tinggal_bersama ?></td>
                  </tr>
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

  <?php $this->load->view('partials/footer'); ?>

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  <?php $this->load->view('partials/modal'); ?>
</div>
<!-- ./wrapper -->

<?php $this->load->view('partials/jquery'); ?>

</body>
</html>
