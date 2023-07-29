<?php 
include "../config/koneksi.php";
$query = $conn->query("SELECT * FROM tb_barang");

$unit = $conn->query("SELECT * FROM tb_unitpenerima");
?>
<div class="container-fluid px-4">
 <h1 class="mt-4">Tambah Barang Keluar</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <form action="../config/aksiBarangKeluar.php" method="post">
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
            <label for="">Tanggal Barang Keluar</label>
            <input type="date" class="form-control" name="tanggal_keluar">
        </div>
        <div class="form-group mb-2">
            <label for="">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlahBarang">
        </div>
        <div class="form-group mb-2">
            <label for="">Unit Pemohon</label>
            <select name="id_unit" id="" class="form-control">
            <option value=""> -- Pilih Unit-- </option>
            <?php foreach($unit as $data):?>
                <option value="<?php echo $data['id_unit']?>"> <?php echo $data['nama_unit']?></option>
            <?php endforeach;?>
            </select>
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
        <a href="?hal=barangKeluar" class="btn btn-danger">Kembali</a>
        </form>
    </div>
 </div>
</div>