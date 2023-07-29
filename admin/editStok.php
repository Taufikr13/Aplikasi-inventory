<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_barang WHERE id_barang = '$id'");


?>
<div class="container-fluid px-4">
 <h1 class="mt-4"><i class="fa fa-edit"></i> Edit Stok Barang</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <?php foreach ($query as $sql):?>
        <form action="../config/aksiStok.php" method="post">
        <div class="form-group mb-2">
            <label for="">Kode Barang</label>
            <input type="hidden" class="form-control" name="id_barang" value="<?php echo $sql['id_barang']?>">
            <input type="text" class="form-control" name="kode_barang" value="<?php echo $sql['kode_barang']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" value="<?php echo $sql['nama_barang']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" value="<?php echo $sql['deskripsi']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Satuan</label>
            <input type="text" class="form-control" name="satuan" value="<?php echo $sql['satuan']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Stok</label>
            <input type="text" class="form-control" name="stok" value="<?php echo $sql['stok']?>">
        </div>
        <button type="submit" name="edit" value="edit" class="btn btn-primary">Simpan</button>
        <a href="?hal=stokBarang" class="btn btn-danger">Kembali</a>
        </form>
        <?php endforeach?>
    </div>
 </div>
</div>