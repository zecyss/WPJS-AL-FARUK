<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/landingpage.css">


    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto:wght@700&display=swap" rel="stylesheet">

    <title>Selamat Datang di ALFARUK</title>
    <style>
        *{
        font-family: 'Roboto';
        }

        body{
            margin: 0;
        }

        .text-align {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-bottom: 30px;
        }

        h2{
            margin-left: 247px;
        }
        
        .box {
            display: flex;
            margin-top: 30px;
            gap: 140px;
            justify-content: center;
            text-align: center;
        }

        .box p{
            color: #fff;
        }

        .box1{
            width: 245px;
            height: 310px;
            background-color: black;
        }

        .box1 img{
            width: 225px;
            height: 150px;
            padding: 10px;
        }
        
        .box button{
            width: 135px;
            border-radius: 10px;
            height: 30px;
        }

        .data-paket{
            background: #0081CF ;
            color: white;
            width: 245px;
            margin-left: 140px;
            height: 310px;
            background-color: black;
        }

        .col-md-3{
            float: left;
        }

        .geser{
            margin-left: 310px;
        }

@media screen and (max-width: 1280px){
    h2{
        margin-left: 135px;
    }
}

@media screen and (max-width: 1114px) {
    h2{
        margin-left: 10px;
    }
}

@media screen and (max-width: 480px) {
    
    }

    </style>
    </head>
    <body>
    <?php
            // Array berisi informasi tentang paket laundry
            $datapaket = array( 
                array("Baju", 10000),   
                array("Celana", 10000),   
                array("Tas", 10000),  
            ); 
        ?>
        <main>
            <section class="geser">
                <?php
                        // Menampilkan paket-paket laundry dengan menggunakan perulangan foreach
                    foreach ($datapaket as $values => $data) {
                ?>
                    <div class="col-md-3">
                        <div class="data-paket">
                            <div class="teksdata">
                                <!-- Menampilkan informasi paket-->
                                <p><?php echo $data[0]; ?></p>
                                    <p><?php echo "Rp. " . $data[1]; ?></p>
                            </div>
                        </div>
                    <div class="pilihpaket">
                        <!-- Form untuk memilih paket dan mengirim data ke halaman transaksi -->
                        <form action="transaksi.php" method="post">
                            <input type="hidden" name="data1" id="data" value="<?php echo $data[0] ?>">
                            <input type="hidden" name="data2" id="data" value="<?php echo $data[1] ?>">
                            <button class="btn-a">
                                Pilih Paket
                            </button>
                        </form>
                    </div>
                </div>
                    <?php
                        }
                    ?>
            </section>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <section>
                    <div class="text-align">
                        <div a style="color: black;"><h2>MODEL KAIN :<h2></a></div>
                    <div class="box">
                        <div class="box1">
                            <img src="../assets/image/jahit.jpg" width="100%">
                            <p>Kain Tenun</p>
                        </div>
                            
                    <div class="box1">
                        <img src="../assets/image/jahit.jpg" width="100%">
                        <p>Kain Satin</p>
                    </div>
                                    
                    <div class="box1">
                        <img src="../assets/image/jahit.jpg" width="100%">
                        <p>Kain katun</p>
                    </div>
                </div>
            </section>
            <section>
                    <div class="text-align">    
                    <div class="box">
                    <div class="box1">
                        <img src="../assets/image/jahit.jpg" width="100%">
                        <p>Kain Baby Canvas</p>
                    </div>
                                
                    <div class="box1">
                        <img src="../assets/image/jahit.jpg" width="100%">
                        <p>Kain Drill</p>
                    </div>
                                        
                    <div class="box1">
                        <img src="../assets/image/jahit.jpg" width="100%">
                        <p>Kain Linen</p>
                    </div>
            </section>
        </main>    
</body>
</html>