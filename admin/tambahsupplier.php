<div class="container-fluid px-4">
 <h1 class="mt-4">Tambah Data Supplier</h1>

 <div class="card" style="width: 60%;">
    <div class="card-body">
        <form action="../config/aksiSupplier.php" method="post">
        <div class="form-group mb-2">
            <label for="">Kode Supplier</label>
            <input type="text" class="form-control" name="kode_supllier">
        </div>
        <div class="form-group mb-2">
            <label for="">Nama Supplier</label>
            <input type="text" class="form-control" name="nama_supplier">
        </div>
        <div class="form-group mb-2">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat_supplier">
        </div>
        <div class="form-group mb-2">
            <label for="">Telepon Supplier</label>
            <input type="text" class="form-control" name="tlpn_supplier">
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
        <a href="?hal=stokBarang" class="btn btn-danger">Kembali</a>
        </form>
    </div>
 </div>
</div>