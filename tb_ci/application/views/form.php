<html>
<head>
	
<body>
	<h2>Ubah Data <?php echo $dataBerita['judul'];?></h2>
	<hr>
	<form action="" method="post">
	<table>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input type="text" name="judul" value="<?php echo $dataBerita['judul'];?>"></td>
		</tr>

		<tr>
			<td>Penulis</td>
			<td>:</td>
			<td><input type="text" name="penulis" value="<?php echo $dataBerita['penulis'];?>"></td>
		</tr>

		<tr>
			<td>Isi</td>
			<td>:</td>
			<td><textarea name="isi"><?php echo $dataBerita['isi'];?></textarea></td>
		</tr>

		<tr>
			<td colspan="3">
				<center>
					<input type="submit" name="ubah" value="Ubah">
				</center>
			</td>
		</tr>
		
	</table>
	</form>

</body>

</head>
</html>