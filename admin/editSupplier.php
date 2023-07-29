<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_supplier WHERE id_supplier = '$id'");


?>
<div class="container-fluid px-4">
 <h1 class="mt-4"><i class="fa fa-edit"></i> Edit Supplier</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <?php foreach ($query as $sql):?>
        <form action="../config/aksiSupplier.php" method="post">
        <div class="form-group mb-2">
            <label for="">Kode Supplier</label>
            <input type="text" class="form-control" name="id_supplier" value="<?php echo $sql['id_supplier']?>">
            <input type="text" class="form-control" name="kode_supllier" value="<?php echo $sql['kode_supllier']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Nama Supplier</label>
            <input type="text" class="form-control" name="nama_supplier" value="<?php echo $sql['nama_supplier']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Alamat Supplier</label>
            <input type="text" class="form-control" name="alamat_supplier" value="<?php echo $sql['alamat_supplier']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Telepon</label>
            <input type="text" class="form-control" name="tlpn_supplier" value="<?php echo $sql['tlpn_supplier']?>">
        </div>
        <button type="submit" name="edit" value="edit" class="btn btn-primary">Simpan</button>
        <a href="?hal=stokBarang" class="btn btn-danger">Kembali</a>
        </form>
        <?php endforeach?>
    </div>
 </div>
</div>