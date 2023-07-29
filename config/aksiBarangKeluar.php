<?php
include "koneksi.php";

if(isset($_POST["submit"])){
    $id_barang = $_POST["id_barang"];
    $tanggal_keluar = $_POST["tanggal_keluar"];
    $jumlahBarang = $_POST["jumlahBarang"];
    $id_unit = $_POST["id_unit"];

   

    $query = "INSERT INTO tb_barangkeluar VALUES ('', '$id_barang', '$tanggal_keluar' , '$jumlahBarang' , '$id_unit')";

    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('Data Berhasil DIMASUKAN !!!'); document.location = '../admin/index.php?hal=barangKeluar'</script>";

    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=tambahBarangKeluar'</script>";

    }
}if(isset($_POST["edit"])){
    $id_barangKeluar = $_POST['id_barangKeluar'];
    $id_barang = $_POST["id_barang"];
    $tanggal_keluar = $_POST["tanggal_keluar"];
    $jumlahBarang = $_POST["jumlahBarang"];
    $id_unit = $_POST["id_unit"];

    $query = "UPDATE tb_barangkeluar SET id_barang='$id_barang',tanggal_keluar='$tanggal_keluar',jumlahBarang='$jumlahBarang',id_unit='$id_unit' WHERE id_barangKeluar = '$id_barangKeluar'";

    mysqli_query($conn,$query);

     if($query){
       
        echo "<script>alert('Data Berhasil Diedit !!!'); document.location = '../admin/index.php?hal=barangKeluar'</script>";
        
      
    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=editbarangKeluar'</script>";
    }
    return mysqli_affected_rows($conn);
}
if($_GET["delete"]){
    $query = "DELETE FROM tb_barangkeluar WHERE id_barangKeluar = '$_GET[delete]'";
    mysqli_query($conn,$query); 
    if($query){
        echo "<script>alert('Data Berhasil Dihapus !!!'); document.location = '../admin/index.php?hal=barangKeluar'</script>";

    }else{
        echo "<script>alert('Data Gagal Dihapus !!!'); document.location = '../admin/index.php?hal=barangKeluar'</script>";
    }
    return mysqli_affected_rows($conn);
}
?>