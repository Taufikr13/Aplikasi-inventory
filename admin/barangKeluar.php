<?php 
$query = $conn->query("SELECT * FROM tb_barangkeluar,tb_barang, tb_unitpenerima WHERE tb_barangkeluar.id_barang=tb_barang.id_barang AND tb_barangkeluar.id_unit=tb_unitpenerima.id_unit");

?>
<div class="container-fluid px-4">
 <h1 class="mt-4 mb-4">Barang Keluar</h1>
 <div class="card mb-4">
    
    <div class="card-header">
    <a href="?hal=tambahBarangKeluar" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Unit Pemohon</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
            <?php $i=1;while($data = mysqli_fetch_array($query)){?>
                <tr>
                <td><?php echo$i;?></td>
                <td><?php echo$data['kode_barang'];?></td>
                <td><?php echo$data['nama_barang'];?></td>
                <td><?php echo$data['tanggal_keluar'];?></td>
                <td><?php echo$data['jumlahBarang'];?></td>
                <td><?php echo$data['nama_unit'];?></td>
                <td>
                    <center>
                        <a href="index.php?hal=editBarangKeluar&amp;id=<?php echo $data['id_barangKeluar']?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="../config/aksiBarangKeluar.php?delete=<?php echo $data["id_barangKeluar"]?>" class="btn btn-sm btn-danger" onclick=" return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>
                    </center>
                </td>
                </tr>
                <?php $i++;?>
            <?php }?>
            </tbody>
            
        </table>
    </div>

</div>