<?php
include "koneksi.php";

if(isset($_POST["submit"])){
    $kode_barang = $_POST["kode_barang"];
    $nama_barang = $_POST["nama_barang"];
    $deskripsi = $_POST["deskripsi"];
    $stok = $_POST["stok"];
    $satuan = $_POST["satuan"];

   

    $query = "INSERT INTO tb_barang VALUES ('', '$kode_barang', '$nama_barang' , '$deskripsi' , '$stok', '$satuan')";

    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn) > 0){
        echo "<script>alert('Data Berhasil DIMASUKAN !!!'); document.location = '../admin/index.php?hal=stokBarang'</script>";

    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=tambahStok'</script>";

    }
}if(isset($_POST["edit"])){
    $id_barang = $_POST['id_barang'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $satuan = $_POST['satuan'];

    $query = "UPDATE tb_barang SET kode_barang='$kode_barang',nama_barang='$nama_barang',deskripsi='$deskripsi',stok='$stok',satuan='$satuan' WHERE id_barang = '$id_barang'";

    mysqli_query($conn,$query);

     if($query){
       
        echo "<script>alert('Data Berhasil Diedit !!!'); document.location = '../admin/index.php?hal=stokBarang'</script>";
        
      
    }else{
        echo "<script>alert('Data Gagal !!!'); document.location = '../admin/index.php?hal=editStok'</script>";
    }
    return mysqli_affected_rows($conn);
}
if($_GET["delete"]){
    $query = "DELETE FROM tb_barang WHERE id_barang = '$_GET[delete]'";
    mysqli_query($conn,$query); 
    if($query){
        echo "<script>alert('Data Berhasil Dihapus !!!'); document.location = '../admin/index.php?hal=stokBarang'</script>";

    }else{
        echo "<script>alert('Data Gagal Dihapus !!!'); document.location = '../admin/index.php?hal=stokBarang'</script>";
    }
    return mysqli_affected_rows($conn);
}
?>