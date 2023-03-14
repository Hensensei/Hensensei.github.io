<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Mahasiswa JTI Polije</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			color: #333;
			margin: 0;
			padding: 0;
		}
		h2 {
			text-align: center;
			margin-top: 30px;
		}
		table {
			margin: 30px auto;
			border-collapse: collapse;
			background-color: white;
			box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
			width: 80%;
			max-width: 1000px;
		}
		th, td {
			padding: 10px;
			text-align: center;
			border: 1px solid #ccc;
		}
		th {
			background-color: #f8f8f8;
			font-weight: bold;
		}
		a.button {
			display: inline-block;
			padding: 8px 16px;
			margin: 10px;
			background-color: #4CAF50;
			color: white;
			border-radius: 4px;
			text-decoration: none;
			transition: background-color 0.3s ease-in-out;
		}
		a.button:hover {
			background-color: #3e8e41;
		}
		.actions {
			display: flex;
			justify-content: center;
		}
		.actions a {
			margin: 0 5px;
		}
		.actions a.delete {
			background-color: #e74c3c;
		}
		.actions a.delete:hover {
			background-color: #c0392b;
		}
		.actions a.edit {
			background-color: #3498db;
		}
		.actions a.edit:hover {
			background-color: #2980b9;
		}
	</style>
</head>
<body>
	<h2>Data Mahasiswa JTI Polije</h2>
	<div class="actions">
		<a class="button" href="tambah.php">Tambah Data Mahasiswa</a>
	</div>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Prodi</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM data");
			while ($d = mysqli_fetch_array($data)) {
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['prodi']; ?></td>
					<td class="actions">
						<a class="button edit" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
						<a class="button delete" href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>