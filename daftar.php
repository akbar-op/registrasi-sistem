<?php 
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $n = $_POST['nama_lengkap'];
    $e = $_POST['email'];
    $p = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users (nama_lengkap, email, password) VALUES ('$n', '$e', '$p')");

    echo"<script>alert('data berhasil di kirim');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h2>ISI FORMULIR DI BAWAH INI</h2>

    <form action="" method="POST">
        <label>Nama : </label>
        <input type="text" name="nama_lengkap" placeholder="masukkan nama" required><br>
        <label>Email : </label>
        <input type="text" name="email" placeholder="masukkan email" required><br>
        <label>Password : </label>
        <input type="text" name="password" placeholder="masukkan password" required><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>