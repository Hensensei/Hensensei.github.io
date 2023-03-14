<!DOCTYPE html>
<html>

<head>
    <title>EDIT DATA MAHASISWA</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
        }

        h2 {
            color: #4CAF50;
            font-size: 36px;
            margin: 50px auto 30px auto;
            text-align: center;
        }

        a {
            color: #008CBA;
            font-size: 20px;
            margin-left: 20px;
            text-decoration: none;
        }

        h3 {
            color: #555;
            font-size: 24px;
            margin: 30px auto 20px auto;
            text-align: center;
        }

        form {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: auto;
            padding: 20px;
            width: 50%;
        }

        table {
            border-collapse: separate;
            border-spacing: 0;
            margin: auto;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #4CAF50;
            border-bottom: 2px solid #ddd;
            color: #fff;
            font-size: 20px;
            padding: 15px;
            text-align: left;
            border-right: 1px solid #ddd;
        }

        td {
            border-bottom: 1px solid #ddd;
            font-size: 18px;
            padding: 10px;
            border-right: 1px solid #ddd;
        }

        td:last-child,
        th:last-child {
            border-right: none;
        }

        input[type=text] {
            border: 2px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin: 8px 0;
            padding: 12px 20px;
            width: 100%;
        }

        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            float: right;
            padding: 12px 20px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>EDIT DATA MAHASISWA</h2>
    <a href="index.php">KEMBALI</a>
    <h3>Klik Simpan untuk Menyimpan Perubahan Data</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM data WHERE id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Nim</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nim" value="<?php echo $d['nim']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td><input type="text" name="prodi" value="<?php echo $d['prodi']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>