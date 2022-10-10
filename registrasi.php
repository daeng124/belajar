<?php
require 'functions.php';


if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>alert('user baru berhasil ditambahkan');</script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman registrasi</title>
</head>
<style>
    label {
        display: block;
    }
</style>

<body>
    <h1>halaman registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="passowrd">Passowrd</label>
                <input type="password" name="passowrd" id="passowrd">
            </li>
            <li>
                <label for="passowrd2">Confirm Passowrd</label>
                <input type="password" name="passowrd2" id="passowrd2">
            </li>
            <li>
                <button type="submit" name="register">Registrasi</button>
            </li>
        </ul>


    </form>
</body>

</html>