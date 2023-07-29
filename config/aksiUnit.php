<?php
include "koneksi.php";

if(isset($_POST["submit"])){
    $nama_unit = $_POST["nama_unit"];
    $keterangan = $_POST["keterangan"];   

    $query = "INSERT INTO tb_unitpenerima VALUES ('', '$nama_unit', '$keterangan')";

    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('Data Berhasil DIMASUKAN !!!'); document.location = '../admin/index.php?hal=unitPermintaan'</script>";

    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=tambahUnit'</script>";

    }
}if(isset($_POST["edit"])){
    $id_unit = $_POST['id_unit'];
    $nama_unit = $_POST['nama_unit'];
    $keterangan = $_POST['keterangan'];
   

    $query = "UPDATE tb_unitpenerima SET nama_unit='$nama_unit',keterangan='$keterangan' WHERE id_unit = '$id_unit'";

    mysqli_query($conn,$query);

     if($query){
       
        echo "<script>alert('Data Berhasil Diedit !!!'); document.location = '../admin/index.php?hal=unitPermintaan'</script>";
        
      
    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=editUnit'</script>";
    }
    return mysqli_affected_rows($conn);
}
if($_GET["delete"]){
    $query = "DELETE FROM tb_unitpenerima WHERE id_unit = '$_GET[delete]'";
    mysqli_query($conn,$query); 
    if($query){
        echo "<script>alert('Data Berhasil Dihapus !!!'); document.location = '../admin/index.php?hal=unitPermintaan'</script>";

    }else{
        echo "<script>alert('Data Gagal Dihapus !!!'); document.location = '../admin/index.php?hal=unitPermintaan'</script>";
    }
    return mysqli_affected_rows($conn);
}
?>