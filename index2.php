<?php

// koneksi ke databases
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa  

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td>
                    <a href="">Ubah </a> |
                    <a href="">hapus</a>
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
        <?php endwhile; ?>
    </table>
</body>

</html>