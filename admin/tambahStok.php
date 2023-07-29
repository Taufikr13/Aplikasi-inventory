<div class="container-fluid px-4">
 <h1 class="mt-4">Tambah Data Stok</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <form action="../config/aksiStok.php" method="post">
        <div class="form-group mb-2">
            <label for="">Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang">
        </div>
        <div class="form-group mb-2">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang">
        </div>
        <div class="form-group mb-2">
            <label for="">Satuan</label>
            <input type="text" class="form-control" name="satuan">
        </div>
        <div class="form-group mb-2">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi">
        </div>
        
        <div class="form-group mb-2">
            <label for="">Stok</label>
            <input type="text" class="form-control" name="stok">
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
        <a href="?hal=stokBarang" class="btn btn-danger">Kembali</a>
        </form>
    </div>
 </div>
</div>