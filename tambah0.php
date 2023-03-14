<!DOCTYPE html>
<html>
<head>
	<title>Tambah MHS</title>
</head>
<body>
	<h2>MENAMBAHKAN DATA MAHASISWA</h2>
	<br>
	<a href="index.php">HOME</a>
	<br>
	<br>
	<h3>Isi Form di bawah ini</h3>
	<form method="post" action="tambahaksi.php">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>