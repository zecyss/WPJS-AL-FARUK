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
</head>
<body>
    <section id="nav">
    <nav class="nav">
        <section class="nav__item">
            <img src="../assets/image/logo.jpg" alt="">
        </section>
        <section class="nav__item">
            <a href="#main">About</a>
            <a href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="../auth/index.php">Login</a>
        </section>
    </nav>    
</section>

<section id="main">
    <card class="main">
        <section id="#about">
            <h1 class="main--heading">Selamat Datang di AL-FARUK</h1>
        </section>
        <section class="image-banner">
            <img src="../assets/image/taylor.jpeg" >
        </section>
        <section class="main__text">
            <h1 class="main--sub-heading">Ayoo Ketahui Tentang Jasa Jahit Online AL-FARUK!!</h1>
            <p class="main--sub-heading-small">Alfaruk didirikan oleh Mei Ani Ilan Lestari dan nama bisnis jahit ini sendiri diambil dari nama kedua saya yaitu Alfaro. Alfaruk didirikan pada tanggal 27 maret 2020 dikarenakan orangtua saya nonmuslim dan setelah ibu saya meninggal dan memakan biaya yang lumayan jadi, saya berniat membuatkan baju untuk bapak saya agar mengurangi biaya pakaian saat kematian. Jadi saya mengambil kursus menjahit untuk membuat pikiran dan ide saya itu jadi nyata dan setelah kursus selama 3 bulan, saya memberanikan diri untuk membuka bisnis jahit dan Alhamdulillah lancer sampai saat ini.</p>
        </section>
    </card>
</section>

    <main id="home" class="card">
        <section>
            <h1>PRODUK</h1>
        </section>
    </main>    

    <script src="../transaksi/home.js"></script>
</body>
<?php include 'boxx.php';?>
<?php include 'contact.php';?>