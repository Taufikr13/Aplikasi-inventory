<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_unitpenerima WHERE id_unit = '$id'");


?>
<div class="container-fluid px-4">
 <h1 class="mt-4"><i class="fa fa-edit"></i> Edit Stok Barang</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <?php foreach ($query as $sql):?>
        <form action="../config/aksiUnit.php" method="post">
        <div class="form-group mb-2">
            <label for="">Nama Unit</label>
            <input type="hidden" class="form-control" name="id_unit" value="<?php echo $sql['id_unit']?>">
            <input type="text" class="form-control" name="nama_unit" value="<?php echo $sql['nama_unit']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="<?php echo $sql['keterangan']?>">
        </div>
        <button type="submit" name="edit" value="edit" class="btn btn-primary">Simpan</button>
        <a href="?hal=stokBarang" class="btn btn-danger">Kembali</a>
        </form>
        <?php endforeach?>
    </div>
 </div>
</div>