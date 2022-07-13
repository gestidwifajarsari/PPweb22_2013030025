<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Laporan</title>
</head>
<body>
<h2>Tambah Data</h2>
<a href="add_penjual.php">TAMBAH</a> <a href="penjual.php">LIHAT</a>
<br>
<form action="proc_penjual.php" method="post">
	ID<br>
	<input type="text" name="id"><br>
	Nama<br>
	<input type="text" name="nama"><br>
	Jenis<br>
	<select name="item_grp_id">
		<?php 
			$sql = "SELECT * FROM item_grp";
			$res = $koneksi->query($sql);
			while($rows = $res->fetch_array(MYSQLI_BOTH)){
				echo "<option value='".$rows['id']."'>".$rows['nama']."</option>";
			}
		?>
	</select><br>
	Satuan<br>
	<select name="satuan_id">
		<?php 
			$sql = "SELECT * FROM satuan";
			$res = $koneksi->query($sql);
			while ($rows = $res->fetch_array(MYSQLI_BOTH)){
				echo "<option value ='".$rows['id']."'>".$rows['nama']."</option>";
			}
		?>
	</select><br>
	Harga<br>
	<input type="text" name="hpp"><br>
	warna<br>
	<input type="text" name="warna"><br>
	<input type="submit" name="proses" value="SIMPAN">
</form>
</body>
</html>