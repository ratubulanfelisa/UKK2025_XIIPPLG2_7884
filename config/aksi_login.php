<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5 ($_POST['password']);

$sql = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);

    $_SESSION['username'] = $data['username'] ;
    $_SESSION['userid'] = $data['userid'];
    $_SESSION['status'] = 'login';
    echo "<script>
    alert('Login berhasil');
    location.href='../index.php';
    </script>";
}else{
    echo "<script>
    alert('username atau password salah!');
    location.href='../login.php';
    </script>";
}
?>