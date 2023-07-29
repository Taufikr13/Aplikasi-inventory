<?php $query = $conn ->query("SELECT * FROM tb_barang");?>
<div class="container-fluid px-4">
 <h1 class="mt-4 mb-4">Stok Barang</h1>
 <div class="card mb-4">
    
                            <div class="card-header">
                            <a href="?hal=tambahStok" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
                            <a href="printStok.php" class="btn btn-sm btn-danger" style="float: right;"><i class="fa fa-print"></i> Print</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Satuan</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php $i=1;while($data = mysqli_fetch_array($query)){?>
                                        <tr>
                                        <td><?php echo$i;?></td>
                                        <td><?php echo$data['kode_barang'];?></td>
                                        <td><?php echo$data['nama_barang'];?></td>
                                        <td><?php echo$data['satuan'];?></td>
                                        <td><?php echo$data['stok'];?></td>
                                        <td><?php echo$data['deskripsi'];?></td>
                                        <td>
                                            <center>
                                                <a href="index.php?hal=editStok&amp;id=<?php echo $data['id_barang']?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="../config/aksiStok.php?delete=<?php echo $data["id_barang"]?>" class="btn btn-sm btn-danger" onclick=" return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>
                                            </center>
                                        </td>
                                        </tr>
                                        <?php $i++;?>
                                    <?php }?>
                                    </tbody>
                                    
                                </table>
                            </div>


                            
</div>

