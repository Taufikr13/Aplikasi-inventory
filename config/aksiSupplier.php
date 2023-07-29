<?php
include "koneksi.php";

if(isset($_POST["submit"])){
    $kode_supllier = $_POST["kode_supllier"];
    $nama_supplier = $_POST["nama_supplier"];
    $alamat_supplier = $_POST["alamat_supplier"];
    $tlpn_supplier = $_POST["tlpn_supplier"];   

    $query = "INSERT INTO tb_supplier VALUES ('', '$kode_supllier', '$nama_supplier' , '$alamat_supplier' , '$tlpn_supplier')";

    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('Data Berhasil DIMASUKAN !!!'); document.location = '../admin/index.php?hal=supplier'</script>";

    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=tambahsupplier'</script>";

    }
}if(isset($_POST["edit"])){
    $id_supplier = $_POST['id_supplier'];
    $kode_supllier = $_POST["kode_supllier"];
    $nama_supplier = $_POST["nama_supplier"];
    $alamat_supplier = $_POST["alamat_supplier"];
    $tlpn_supplier = $_POST["tlpn_supplier"];

    $query = "UPDATE tb_supplier SET kode_supllier='$kode_supllier',nama_supplier='$nama_supplier',alamat_supplier='$alamat_supplier',tlpn_supplier='$tlpn_supplier' WHERE id_supplier = '$id_supplier'";

    mysqli_query($conn,$query);

     if($query){
       
        echo "<script>alert('Data Berhasil Diedit !!!'); document.location = '../admin/index.php?hal=supplier'</script>";
        
      
    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=editSupplier'</script>";
    }
    return mysqli_affected_rows($conn);
}
if($_GET["delete"]){
    $query = "DELETE FROM tb_supplier WHERE id_supplier = '$_GET[delete]'";
    mysqli_query($conn,$query); 
    if($query){
        echo "<script>alert('Data Berhasil Dihapus !!!'); document.location = '../admin/index.php?hal=supplier'</script>";

    }else{
        echo "<script>alert('Data Gagal Dihapus !!!'); document.location = '../admin/index.php?hal=supplier'</script>";
    }
    return mysqli_affected_rows($conn);
}
?>