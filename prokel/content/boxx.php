<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto:wght@700&display=swap"
        rel="stylesheet">

    <title>Selamat Datang di ALFARUK</title>
    <style>
        * {
            font-family: 'Roboto';
        }

        body {
            margin: 0;
        }

        
.nav {
    width: 98%;
    display: flex;
    justify-content: space-between;
    padding: 16px;
    color: white;
    font-weight: 400;
    background-color: black;
}

.nav__item {
    color: #FFF;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    display: flex;
    gap: 16px;

}

.nav__item img{
    width: 60px;
    height: 60px;
    margin-left: 60px;
    flex-shrink: 0;
    border-radius: 100px;
}

.nav__item a{
    padding: 16px;
    color: #FFF;
    text-decoration: none;
}

.card--heading{
    color: #000;
    font-family: Roboto;
    font-size: 52px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-align: center;
    margin-top: 23px;
}

.card img{
    width: 780px;
    height: 450px;
    margin-top: -23px;
    padding: 0px 0px 0px 220px;
    flex-shrink: 0;
}


.card--sub-heading{
    color: #000;
    font-family: Roboto;
    font-size: 52px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin-top: 23px;
    padding: 0px 0px 0px 220px;
}

.card--sub-heading-small{
    width: 780px;
    height: 230px;
    flex-shrink: 0;
    color: #000;
    font-family: Roboto;
    font-size: 25px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin-top: -23px;
    padding: 0px 0px 0px 220px;
}

.card a{
    width: 272px;
    height: 79px;
    flex-shrink: 0;
    background-color: #FFF;
}


        .text-align {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-left: 50px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-bottom: 30px;
            margin-top: 80px;
            color: #FFF;
        }

        .box1,
        .box2,
        .box3,
        .box4{
            width: 165px;
            height: 325px;
            background-color: black;
        }

        .box-cv {
            display: flex;
            justify-content: space-between;
            margin-right: 40px;
            margin-top: 30px;
            text-align: center;
        }

        .box11,
        .box13,
        .box15 {
            margin-bottom: 30px;
            background-color: black;
            padding: 30px 30px;
            display: flex;
        }

        .box12,
        .box14 {
            margin-bottom: 30px;
            background-color: black;
            padding: 30px 30px;
            display: flex;
            flex-direction: row-reverse;
            justify-content: end;
        }

        .box {
            margin-right: 40px;
            margin-top: 30px;
        }

        .box p {
            margin-left: 30px;
            margin-right: 30px;
            flex-direction: row;
        }

        .box-cv button {
            width: 180px;
            border-radius: 10px;
            height: 30px;
            background-color: #fff;
        }

        .btn a,
        li a {
            text-decoration: none;
        }


        footer {
            padding-top: 20px;
            padding-bottom: 15px;
            text-align: center;
            color: #FFF;
            background-color: black;
            margin-top: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <main>
        <section>
            <section>
                <div class="text-align">
                    <div a style="color: black;"><h2>PILIH MODEL : <h2></a></div>
            <form action="../content/transaksi.php">
                <div class="box-cv">
                    <div style="padding: 50px;" class="box1">
                        <img src="../assets/image/baju.jpg" width="95%">
                        <p>Atasan</p>
                        <p>Rp. 10.000</p>
                    <div class="btn">
                        <button><a style="color:black;" href="../assets/content/transaksi.php">Pesan</a></button>                               
                    </div>
                    </div>
            
                    <div style="padding: 50px;" class="box2">
                        <img src="../assets/image/celana.jpg" width="95%">
                            <p>Bawahan</p>
                            <p>Rp. 10.000</p>
                            <div class="btn">
                                <button><a style="color:black;" href="../content/transaksi.php">Pesan</a></button>                               
                            </div>
                            </div>

                            <div style="padding: 50px;" class="box3">
                                <img src="../assets/image/dress.jpg" width="95%">
                                    <p>Dress</p>
                                    <p>Rp. 10.000</p>
                                    <div class="btn">
                                        <button><a style="color:black;" href="../content/transaksi.php">Pesan</a></button>                               
                                    </div>
                                        </div>
                    
                    
                    <div style="padding: 50px;" class="box4">
                        <img src="../assets/image/baju-keluarga.jpg" width="95%">
                            <p>Promo 1 Paket</p>
                            <p>Rp. 10.000</p>
                        <div class="btn">
                            <button><a style="color:black;" href="../content/transaksi.php">Pesan</a></button>                               
                        </div>
                    </div>
                    </section>
                </form>

    <div class="text-align">
        <div a style="color: black;">
            <h2>LIHAT TIPE KAIN : <h2></a>
        </div>

        <div class="box">
            <div class="box11">
                <img src="../assets/image/motif-batik.jpg" width="200">
                <p>Batik <br> <br> Kain batik dikenal karena motif-motif yang unik dan bervariasi. Motif-motif ini seringkali mewakili aspek budaya, sejarah, dan kepercayaan lokal</p>
                
            </div>

            <div class="box12">
                <img src="../assets/image/motif-sasi.jpg" width="200">
                <p>Sasirangan <br> <br> Kain Sasirangan merupakan kain adat suku Banjar di Kalimantan Selatan yang diwariskan secara turun temurun sejak abad XII</p> 
            </div>

            <div class="box13">
                <img src="../assets/image/motif-denim.jpg" width="200">
                <p>Denim <br> <br>Denim adalah kain katun yang kokoh dengan benang pakan melewati dua atau lebih benang lungsin. Kain yang digunakan menghadap sisi benang lungsin.</p> 
            </div>
            <div class="box14">
                <img src="../assets/image/motif-satin.jpg" width="200">
                <p>satin <br> <br> Satin adalah jenis kain satin sutra yang lembut yang ditenun dengan menggunakan teknik serat filamen sehingga memiliki ciri khas permukaan yang mengilap</p>
            </div>

            <div class="box15">
                <img src="../assets/image/motif-sutra.jpg" width="200">
                <p>sutra <br> <br> Kain Sutera Sutra atau sutera merupakan serat protein alami yang dapat ditenun menjadi tekstil. Jenis sutra yang paling umum adalah sutra dari kepompong yang dihasilkan larva ulat sutra murbei (Bombyx mori) yang diternak (peternakan ulat disebut serikultur).</p>
            </div>
        </div>
    </div>
</body>

</html>