
<?php include "temp/header.php"?>
<?php include "temp/sidebar.php"?>
            <div id="layoutSidenav_content">
                <main>
                <?php
                  $halaman = (isset($_GET['hal']))?$_GET['hal']:'home';
                    if($halaman){
                    if(file_exists($halaman.".php")){
                              include $halaman.".php";
                    } else {
                        echo "Halaman Tidak Ditemukan!";
                    }
                  }else{
                      include "home.php";
                  }
                ?>
                </main>
<?php include "temp/footer.php"?>