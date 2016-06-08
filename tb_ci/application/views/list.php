<html>
<head>
	
<body>
		
	<h2> List Portal Berita</h2>
	<hr>

	<table>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Isi</th>
			<th>Action</th>
		</tr>

		<?php
		if(!empty($dataBerita)):
			$no=1;
			foreach ($dataBerita as $dataBerita):
		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $dataBerita['judul'];?></td>
			<td><?php echo $dataBerita['penulis'];?></td>
			<td><?php echo substr($dataBerita['isi'],0,20);?></td>
			<td>
				<a href="<?php echo site_url('web/detail/'.$dataBerita['id']);?>">
					Lihat
				</a> | 
				<a href="<?php echo site_url('web/ubah/'.$dataBerita['id']);?>">
					Ubah
				</a> | 
				<a href="<?php echo site_url('web/hapus/'.$dataBerita['id']);?>">
					Hapus
				</a>
			</td>
		</tr>
		<?php
			$no++;
			endforeach;
		endif;
		?>
	</table>


	<br>
	<h2>Tambah Data</h2>
	<hr>
	<form action="" method="post">
	<table>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input type="text" name="judul"></td>
		</tr>

		<tr>
			<td>Penulis</td>
			<td>:</td>
			<td><input type="text" name="penulis"></td>
		</tr>

		<tr>
			<td>Isi</td>
			<td>:</td>
			<td><textarea name="isi"></textarea></td>
		</tr>

		<tr>
			<td colspan="3">
				<center>
					<input type="submit" name="simpan" value="Simpan">
				</center>
			</td>
		</tr>
		
	</table>
	</form>

</body>

</head>
</html>