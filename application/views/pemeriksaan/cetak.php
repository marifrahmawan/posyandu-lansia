<!DOCTYPE html>
<html>
<head>
	<title>-</title>
</head>
<body>
	<div id="printableArea">
		<center>
			<h2>Posyandu Wredo Utomo</h2>
		</center>
		<table class="table table-striped">
			<tbody>
				<tr>
					<td width="30%">Nama </td>
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
					<td><?php echo $pemeriksaan->jarak ?> KM</td>
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
				<?php 
				$host = @mysqli_connect("localhost","root","");
				$db = mysqli_select_db($host, "lansia");
				$query = mysqli_query($host, "SELECT * FROM data_penyakit WHERE nama_penyakit = '$pemeriksaan->diagnosa'");
				while ($row = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td width="10%">Anjuran </td>
					<td width="1%"> : </td>
					<td><?php echo $row["anjuran"] ?></td>
				</tr>
				<tr>
					<td width="10%">Pantangan </td>
					<td width="1%"> : </td>
					<td><?php echo $row["pantangan"] ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<script>
		window.print();
	</script>
</body>
</html>