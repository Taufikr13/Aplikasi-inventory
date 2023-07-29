<?php


include "config/koneksi.php";
$username = $_POST["username"];

$password = $_POST["password"];

$sql = "SELECT * FROM tb_user WHERE username='$username' AND password='".md5($password)."'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nama_user'] = $data['nama_uer'];
        header("location: admin/index.php");
}else{
    echo"<script>alert('maaf username atau password salah'); window.location.assign('index.php')</script>";
}

?>