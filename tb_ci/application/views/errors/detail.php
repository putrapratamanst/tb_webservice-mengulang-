<html>
<head>
	
<body>
		
	<h2> Detail Berita <?php echo $dataBerita['judul'];?></h2>
	<hr>

	<table>
		<tr>
			<td>No</td>
			<td>:</td>
			<td><?php echo $dataBerita['id'];?></td>
		</tr>

		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><?php echo $dataBerita['judul'];?></td>
		</tr>

		<tr>
			<td>Isi</td>
			<td>:</td>
			<td><?php echo $dataBerita['isi'];?></td>
		</tr>

		<tr>
			<td>Penulis</td>
			<td>:</td>
			<td><?php echo $dataBerita['penulis'];?></td>
		</tr>

		<tr>
			<td colspan="3">
				<center>
					<a href="<?php echo site_url('web');?>">
						Back
					</a>
				</center>
			</td>
		</tr>
		
	</table>

</body>

</head>
</html>