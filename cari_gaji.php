<h5>Gaji Karyawan</h5>
<form action="?h=cari_gaji" method="post">
	<input type="text" name="cari" placeholder="Cari Nama Karyawan" required>
	<button type="submit">Cari</button>
</form>
<table cellspacing="0" cellpadding="10" border="1">
	<tr>
		<td>No</td>
		<td>Nama Karyawan</td>
		<td>Divisi</td>
		<td>Gaji s/d Sekarang</td>
	</tr>
	<?php
		if(isset($_POST['cari'])) {
		$cari= $_POST['cari'];
		$sql = 'SELECT karyawan.id, karyawan.nama, karyawan.tgl_masuk, divisi.nama_divisi, divisi.gaji_perhari FROM karyawan INNER JOIN divisi ON karyawan.divisi_id = divisi.id WHERE karyawan.nama LIKE "%'.$cari.'%" ORDER BY karyawan.id ASC';
		$exe = mysql_query($sql);
		while ($data = mysql_fetch_array($exe)) {
			$sekarang 		= date('Y-m-d');
			$bagi 			= 60*60*24;
			$lama_kerja 	= abs((strtotime($data[tgl_masuk])-(strtotime($sekarang))) / $bagi);
			$lama_kerja 	= ceil($lama_kerja);
			$gaji_sekarang 	= $lama_kerja * $data['gaji_perhari'];
	?>

	<tr>
		<td><?php echo $data[id]; ?></td>
		<td><?php echo $data[nama]; ?></td>
		<td><?php echo $data[nama_divisi]; ?></td>
		<td><?php echo 'Rp. ' . $gaji_sekarang . ' ['.$lama_kerja.' hari]'; ?></td>
	</tr>

	<?php
		} // close while
		} // close if
	?>
</table>