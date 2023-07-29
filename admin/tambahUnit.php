<div class="container-fluid px-4">
 <h1 class="mt-4">Tambah Data Unit Penerimaan</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <form action="../config/aksiUnit.php" method="post">
        <div class="form-group mb-2">
            <label for="">Nama Unit</label>
            <input type="text" class="form-control" name="nama_unit">
        </div>
        <div class="form-group mb-2">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan">
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
        <a href="?hal=stokBarang" class="btn btn-danger">Kembali</a>
        </form>
    </div>
 </div>
</div>