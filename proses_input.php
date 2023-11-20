<?php 
include 'koneksi.php';
if (isset($_POST['tambah'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nim = $_POST['nim'];
    $jk = $_POST['jenis_kelamin'];
    $usia = $_POST['usia'];
    mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES(NULL, '$name', '$email', '$nim','$usia','$jk')");
    header('location:index.php');
}
?>