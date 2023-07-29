<?php 
include "../config/koneksi.php";
$query = $conn->query("SELECT * FROM tb_barang");
$unit = $conn->query("SELECT * FROM tb_unitpenerima");

$id = $_GET['id'];

$keluar = mysqli_query($conn, "SELECT * FROM tb_barang,tb_barangkeluar, tb_unitpenerima WHERE tb_barangkeluar.id_barang=tb_barang.id_barang AND tb_barangkeluar.id_unit=tb_unitpenerima.id_unit AND id_barangKeluar = '$id'");


?>
<div class="container-fluid px-4">
 <h1 class="mt-4">Edit Barang Keluar</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <?php foreach($keluar as $klr): ?>
        <form action="../config/aksiBarangKeluar.php" method="post">
        <div class="form-group mb-2">
            <label for="">Nama Barang</label>
            <input type="hidden" name="id_barangKeluar" value="<?php echo $klr['id_barangKeluar']?>">
            <select name="id_barang" id="" class="form-control">
            <option value="<?php echo $klr['id_barang'];?>"><?php echo $klr['nama_barang'];?></option>
            <?php foreach($query as $sql):?>
                <option value="<?php echo $sql['id_barang']?>"> <?php echo $sql['nama_barang']?></option>
            <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="">Tanggal Barang Keluar</label>
            <input type="date" class="form-control" name="tanggal_keluar" value="<?php echo $klr['tanggal_keluar'];?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlahBarang" value="<?php echo $klr['jumlahBarang'];?>">
        </div>
        <div class="form-group mb-2">
            <label for="">Unit Pemohon</label>
            <select name="id_unit" id="" class="form-control">
            <option value="<?php echo $klr['id_unit'];?>"><?php echo $klr['nama_unit'];?></option>
            <?php foreach($unit as $data):?>
                <option value="<?php echo $data['id_unit']?>"> <?php echo $data['nama_unit']?></option>
            <?php endforeach;?>
            </select>
        </div>
        <button type="submit" name="edit" value="edit" class="btn btn-primary">Simpan</button>
        <a href="?hal=barangKeluar" class="btn btn-danger">Kembali</a>
        </form>
        <?php endforeach;?>
    </div>
 </div>
</div>