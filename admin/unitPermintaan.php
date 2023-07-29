<?php $query = $conn ->query("SELECT * FROM tb_unitpenerima");?>
<div class="container-fluid px-4">
 <h1 class="mt-4 mb-4">Unit Permintaan</h1>
 <div class="card mb-4">
    
                            <div class="card-header">
                            <a href="?hal=tambahUnit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
                            <a href="printStok.php" class="btn btn-sm btn-danger" style="float: right;"><i class="fa fa-print"></i> Print</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Unit</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php $i=1;while($data = mysqli_fetch_array($query)){?>
                                        <tr>
                                        <td><?php echo$i;?></td>
                                        <td><?php echo$data['nama_unit'];?></td>
                                        <td><?php echo$data['keterangan'];?></td>
                                        <td>
                                            <center>
                                                <a href="index.php?hal=editUnit&amp;id=<?php echo $data['id_unit']?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="../config/aksiUnit.php?delete=<?php echo $data["id_unit"]?>" class="btn btn-sm btn-danger" onclick=" return confirm('Apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a>
                                            </center>
                                        </td>
                                        </tr>
                                        <?php $i++;?>
                                    <?php }?>
                                    </tbody>
                                    
                                </table>
                            </div>


                            
</div>

