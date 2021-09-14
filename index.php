<!DOCTYPE html>
<html>
<head>
	<title>Karyawan</title>
		<link rel="icon" href="clipboard.png">
	<link rel="stylesheet" href="stylee.css">
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<div class="para">
		<center><h1>Data Calon Karyawan</h1>

	<table>
		<tr>
			<th>Nomor KTP</th>
			<th>Nama Lengkap</th>
			<th>Aksi</th>
		</tr>
		<?php 
		while($tampil= mysqli_fetch_array($qry))
		{
			?>
			<tr>
				<td><?php echo $tampil['nomor_ktp']; ?></td>
				<td><?php echo $tampil['nama_lengkap'];?></td>
				<td><a href="edit.php?nmrktp=<?php echo $tampil['nomor_ktp']; ?>"><img class="ehd" src="baseline_create_black_18dp.png" title="Edit"></a>
					<a href="hapus.php?nmrktp=<?php echo $tampil['nomor_ktp']; ?>"><img class="ehd" src="baseline_cancel_black_18dp.png" title="Hapus"></a>
					<a href="detail.php?nmrktp=<?php echo $tampil['nomor_ktp']; ?>"><img class="ehd" src="baseline_visibility_black_18dp.png" title="Detail"></a></td>
				</tr>

				<?php 
			} 
			?>
		</table>
		<a href="tambah.php"><img src="baseline_add_circle_outline_black_18dp.png"></a>
	</center>
</div>
	</body>
	</html>