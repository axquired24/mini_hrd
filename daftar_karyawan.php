<h5>Daftar Karyawan</h5>
<table cellspacing="0" cellpadding="10" border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Divisi</td>
		<td>Awal Masuk</td>
	</tr>
	<?php
		$sql = 'SELECT karyawan.id, karyawan.nama, karyawan.tgl_masuk, divisi.nama_divisi, divisi.gaji_perhari FROM karyawan INNER JOIN divisi ON karyawan.divisi_id = divisi.id ORDER BY karyawan.id ASC';
		$exe = mysql_query($sql);
		while ($data = mysql_fetch_array($exe)) {
	?>

	<tr>
		<td><?php echo $data[id]; ?></td>
		<td><?php echo $data[nama]; ?></td>
		<td><?php echo $data[nama_divisi]; ?></td>
		<td><?php echo $data[tgl_masuk]; ?></td>
	</tr>

	<?php
		} // close foreach
	?>
</table>