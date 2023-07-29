<?php 
include "../config/koneksi.php";
$query = $conn->query("SELECT * FROM tb_barang");
$supplier = $conn->query("SELECT * FROM tb_supplier");
$id = $_GET['id'];

$masuk = mysqli_query($conn, "SELECT * FROM tb_barang,tb_barangmasuk, tb_supplier WHERE tb_barangmasuk.id_barang=tb_barang.id_barang AND tb_barangmasuk.id_supplier=tb_supplier.id_supplier AND id_barangMasuk = '$id'");

?>
<div class="container-fluid px-4">
 <h1 class="mt-4">Edit Barang Masuk</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <?php foreach($masuk as $msk):?>
        <form action="../config/aksiBarangMasuk.php" method="post">
        
        <div class="form-group mb-2">
            <label for="">Nama Barang</label>
            <input type="hidden" name="id_barangMasuk" value="<?php echo $msk['id_barangMasuk']?>">
            <select name="id_barang" id="" class="form-control">
            <option value="<?php echo $msk['id_barang']?>"><?php echo $msk['nama_barang']?></option>
            <?php foreach($query as $sql):?>
                <option value="<?php echo $sql['id_barang']?>"> <?php echo $sql['nama_barang']?></option>
            <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="">Tanggal Barang Masuk</label>
            <input type="date" class="form-control" name="tanggal_masuk" value="<?php echo $msk['tanggal_masuk']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlahBarang" value="<?php echo $msk['jumlahBarang']?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Nama Supplier</label>
            <select name="id_supplier" id="" class="form-control">
            <option value="<?php echo $msk['id_supplier']?>"><?php echo $msk['nama_supplier']?></option>
            <?php foreach($supplier as $data):?>
                <option value="<?php echo $data['id_supplier']?>"> <?php echo $data['nama_supplier']?></option>
            <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="<?php echo $msk['keterangan']?>">
        </div>
        <button type="submit" name="edit" value="edit" class="btn btn-primary">Simpan</button>
        <a href="?hal=barangMasuk" class="btn btn-danger">Kembali</a>
        </form>
        <?php endforeach;?>
    </div>
 </div>
</div>