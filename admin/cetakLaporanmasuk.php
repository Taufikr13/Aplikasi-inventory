<?php

include "../config/koneksi.php";
    if((isset($_GET['tanggalAwal']) && $_GET['tanggalAwal']!='') && (isset($_GET['tanggalAkhir'])&& $_GET['tanggalAkhir']!='')){
        $tanggalAwal = $_GET['tanggalAwal'];
        $tanggalAkhir = $_GET['tanggalAkhir'];
        $query = $conn->query("SELECT * FROM tb_barang,tb_barangmasuk WHERE tb_barangmasuk.id_barang=tb_barang.id_barang 
        AND tanggal_masuk BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
    }else{
        $tanggalAwal = '';
        $tanggalAkhir ='';
    }

    setlocale(LC_TIME, 'id_ID');

    // Mendapatkan tanggal dan waktu saat ini
    $now = time();
    
    // Format tanggal menggunakan setlocale() dan date()
    $formattedDate = strftime('%A, %d %B %Y', $now);
    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <style>
        /* Gaya CSS untuk tampilan laporan */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .signature-container {
            margin-top: 50px;
        }

        .signature-container:after {
            content: "";
            display: table;
            clear: both;
        }

        .signature-box {
            width: 200px;
            height: 100px;
            border: 1px solid #ddd;
            float: right;
            margin-right: 20px;
            padding: 10px;
        }

        .signature-box p {
            text-align: center;
            margin: 0;
        }

    
      
    </style>
</head>
<body>
    <h1>Laporan Barang Masuk</h1>

    <table>
        <tr>
        <th>NO</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Tanggal Masuk</th>
        <th>Jumlah Masuk</th>
        </tr>
        <?php $i=1;while($data = mysqli_fetch_array($query)){?>
        <tr>
            <td><?php echo$i;?></td>
            <td><?php echo$data['kode_barang'];?></td>
            <td><?php echo$data['nama_barang'];?></td>
            <td><?php echo$data['tanggal_masuk'];?></td>
            <td><?php echo$data['jumlahBarang'];?></td>
                                       
        </tr>
        <?php $i++;?>
        <?php }?>
        <!-- Tambahkan data lainnya di sini -->
    </table>

    <div class="signature-container">
        <div class="signature-box">
            <p>Sukabumi, <?php echo $formattedDate?></p>
        </div>
        
    </div>


    <script>window.print()</script>
</body>
</html>
