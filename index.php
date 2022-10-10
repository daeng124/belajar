<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");


if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


// ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() // mengembalikan array numeric
//mysqli_fetch_assoc() // mengembalikan array assoc
//mysqli_fetch_array() // mengembalikan keduanya
//mysqli_fetch_object() // mengembalikan obhect


// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>

    </form>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>aksi</th>
            <th>Gambar</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>
        <?php $nomor = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm ('anda yakin ingin menghapus data ini?')">hapus</a>
                </td>
                <td>
                    <img src="img/<?php echo $row["gambar"]; ?>" alt="" width="50">

                </td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $nomor++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>