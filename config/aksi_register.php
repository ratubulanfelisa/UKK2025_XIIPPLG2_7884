<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5 ($_POST['password']);
$email = $_POST['email'];
$name = $_POST['name'];


$sql = mysqli_query($koneksi, "INSERT INTO users VALUES('','$username','$password','$email','$name')");


if($sql) {
    echo "<script>
    alert('Pendaftaran akun berhasil');
    location.href='../login.php';
    </script>";
}

?>