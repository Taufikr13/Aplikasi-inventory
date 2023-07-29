<?php
$query = $conn->query("SELECT * FROM tb_barangmasuk, tb_barang, tb_supplier WHERE tb_barangmasuk.id_barang = tb_barang.id_barang AND tb_barangmasuk.id_supplier=tb_supplier.id_supplier");

?>

<div class="container-fluid px-4">
 <h1 class="mt-4 mb-4">Barang Masuk</h1>
 <div class="card mb-4">
 <div class="card-header">
                            <a href="?hal=tambahBarangMasuk" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Jumlah Masuk</th>
                                            <th>Nama Supplier</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php $i=1;while($data = mysqli_fetch_array($query)){?>
                                        <tr>
                                        <td><?php echo$i;?></td>
                                        <td><?php echo$data['kode_barang'];?></td>
                                        <td><?php echo$data['nama_barang'];?></td>
                                        <td><?php echo$data['tanggal_masuk'];?></td>
                                        <td><?php echo$data['jumlahBarang'];?></td>
                                        <td><?php echo$data['nama_supplier'];?></td>
                                        <td>
                                            <center>
                                                <a href="index.php?hal=editBarangMasuk&amp;id=<?php echo $data['id_barangMasuk']?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="../config/aksiBarangMasuk.php?delete=<?php echo $data["id_barangMasuk"]?>" class="btn btn-sm btn-danger" onclick=" return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>
                                            </center>
                                        </td>
                                        </tr>
                                        <?php $i++;?>
                                    <?php }?>
                                    </tbody>
                                    
                                </table>
                            </div>
</div>