<?php 
include "../config/koneksi.php";
$query = $conn->query("SELECT * FROM tb_barang");
$supplier = $conn->query("SELECT * FROM tb_supplier");

?>
<div class="container-fluid px-4">
 <h1 class="mt-4">Tambah Barang Masuk</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <form action="../config/aksiBarangMasuk.php" method="post">
        
        <div class="form-group mb-2">
            <label for="">Nama Barang</label>
            <select name="id_barang" id="" class="form-control">
            <option value=""> -- Pilih Barang-- </option>
            <?php foreach($query as $sql):?>
                <option value="<?php echo $sql['id_barang']?>"> <?php echo $sql['nama_barang']?></option>
            <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="">Tanggal Barang Masuk</label>
            <input type="date" class="form-control" name="tanggal_masuk">
        </div>
        <div class="form-group mb-2">
            <label for="">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlahBarang">
        </div>
        <div class="form-group mb-2">
            <label for="">Nama Barang</label>
            <select name="id_supplier" id="" class="form-control">
            <option value=""> -- Pilih Supplier-- </option>
            <?php foreach($supplier as $data):?>
                <option value="<?php echo $data['id_supplier']?>"> <?php echo $data['nama_supplier']?></option>
            <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan">
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
        <a href="?hal=barangMasuk" class="btn btn-danger">Kembali</a>
        </form>
    </div>
 </div>
</div>