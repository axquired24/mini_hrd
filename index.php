<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>[Mini] Sistem Penggajian HRD</title>
	<style>
		body {
			font: 18px 'Segoe UI';
			padding-top: 20px;
			padding-bottom: 50px;
		}
		a:link, a:visited {
			text-decoration: none;
			color: blue;
			padding: 0px 5px;
		}
		a:hover {
			text-decoration: underline;
		}

		input {
			border: #403E3E 2px solid;
			padding: 5px;
			margin: 10px;
		}

		button {
			border: #403E3E 2px solid;
			padding: 5px;
			margin: 10px;
			cursor: pointer;
		}

		button:hover {
			background-color: #1D1D1D;
			color: #FFF;
		}
	</style>
</head>
<body>
	<div align="center">
		<h2>[Mini] Sistem Penggajian HRD</h2>
		<a href="?h=daftar_karyawan">Daftar Karyawan</a>
		<a href="?h=daftar_divisi">Divisi</a>
		<a href="?h=cari_gaji"><b>Gaji Karyawan</b></a>
		<hr>
		<?php 
			include 'koneksi.php';
			$hal 	= $_GET['h'];
			if(isset($hal)) {
				include $hal.'.php';
			} else {
				include 'daftar_karyawan.php';
			}
		?>
	</div>	
</body>
</html>