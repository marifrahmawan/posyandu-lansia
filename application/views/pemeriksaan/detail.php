
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
      <h1>Pemeriksaan<small>Detail Pemeriksaan</small></h1>
      <?php $this->load->view('partials/breadcrumb') ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Pemeriksaan : <?php echo $pemeriksaan->nama_lansia ?></h3>
              <div class="pull-right">
                <a href="<?php echo base_url('pemeriksaan/cetak/').$pemeriksaan->kode_periksa ?>" target="_blank" class="btn btn-info btn-flat"><i class="fa fa-print"></i> Print</a>
                <a href="<?php echo base_url('pemeriksaan/list_pemeriksaan/').$pemeriksaan->kode_lansia ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td width="10%">Nama </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->nama_lansia ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Nama </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->alamat ?></td>
                  </tr>
                  <tr>
                    <td width="10%">RT </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->rt ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Tanggal Lahir </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->ttl ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Umur </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->umur ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Riwayat Penyakit </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->riwayat_penyakit ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Jarak Tempat Tinggal </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->jarak ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Tinggal Bersama </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->tinggal_bersama ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Tanggal Pemeriksaan </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->tgl_periksa ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Berat Badan </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->berat_badan ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Tinggi Badan </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->tinggi_badan ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Tensi Darah </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->tensi ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Gula Darah </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->gula_darah ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Kolesterol </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->kolesterol ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Diagnosa </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->diagnosa ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Keluhan </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->keluhan ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Perawatan Tambahan </td>
                    <td width="1%"> : </td>
                    <td><?php echo $pemeriksaan->perawatan_tambahan ?></td>
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
