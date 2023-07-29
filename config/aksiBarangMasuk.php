<?php
include "koneksi.php";

if(isset($_POST["submit"])){
    $id_barang = $_POST["id_barang"];
    $tanggal_masuk = $_POST["tanggal_masuk"];
    $jumlahBarang = $_POST["jumlahBarang"];
    $keterangan = $_POST["keterangan"];
    $id_supplier = $_POST["id_supplier"];
   

    $query = "INSERT INTO tb_barangmasuk VALUES ('', '$id_barang', '$tanggal_masuk' , '$jumlahBarang' , '$keterangan','$id_supplier')";

    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('Data Berhasil DIMASUKAN !!!'); document.location = '../admin/index.php?hal=barangMasuk'</script>";

    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=tambahBarangMasuk'</script>";

    }
}if(isset($_POST["edit"])){
    $id_barangMasuk = $_POST['id_barangMasuk'];
    $id_barang = $_POST['id_barang'];
    $tanggal_masuk = $_POST["tanggal_masuk"];
    $jumlahBarang = $_POST["jumlahBarang"];
    $keterangan = $_POST["keterangan"];
    $id_supplier = $_POST["id_supplier"];

    $query = "UPDATE tb_barangmasuk SET id_barang='$id_barang',tanggal_masuk='$tanggal_masuk',jumlahBarang='$jumlahBarang', keterangan='$keterangan', id_supplier='$id_supplier' WHERE id_barangMasuk = '$id_barangMasuk'";

    mysqli_query($conn,$query);

     if($query){
       
        echo "<script>alert('Data Berhasil Diedit !!!'); document.location = '../admin/index.php?hal=barangMasuk'</script>";
        
      
    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=editBarangMasuk'</script>";
    }
    return mysqli_affected_rows($conn);
}
if($_GET["delete"]){
    $query = "DELETE FROM tb_barangmasuk WHERE id_barangMasuk = '$_GET[delete]'";
    mysqli_query($conn,$query); 
    if($query){
        echo "<script>alert('Data Berhasil Dihapus !!!'); document.location = '../admin/index.php?hal=barangMasuk'</script>";

    }else{
        echo "<script>alert('Data Gagal Dihapus !!!'); document.location = '../admin/index.php?hal=barangMasuk'</script>";
    }
    return mysqli_affected_rows($conn);
}
?>