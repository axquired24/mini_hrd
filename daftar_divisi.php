<h5>Daftar Divisi</h5>
<table cellspacing="0" cellpadding="10" border="1">
	<tr>
		<td>No</td>
		<td>Nama Divisi</td>
		<td>Gaji per hari</td>
	</tr>
	<?php
		$sql = 'SELECT * FROM divisi';
		$exe = mysql_query($sql);
		while ($data = mysql_fetch_array($exe)) {
	?>

	<tr>
		<td><?php echo $data[id]; ?></td>
		<td><?php echo $data[nama_divisi]; ?></td>
		<td><?php echo $data[gaji_perhari]; ?></td>
	</tr>

	<?php
		} // close foreach
	?>
</table>