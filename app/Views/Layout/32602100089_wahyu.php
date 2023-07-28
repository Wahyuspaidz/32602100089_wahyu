<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-schale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
         <style>
        body{
    background-image: url("aset/alan-walker-2019-zx-1280x800.jpg");
     background-size: cover;
     background-repeat: no-repeat;
     background-size: cover;
     backdrop-filter: blur(50px);
  }
        </style>
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="">Home</a><li>
                <li><a href="">About</a><li>
                <li><a href="">Portofolio</a><li>
                <li><a href="">Contact</a><li>
            </ul>
            <div class="navbar-sosmed">
                <ul>
                    <li><i class="fa-brands"><a href="/"><img src="assets/img/facebook.png" alt="" width="20" height="auto"></a></i></li>
                    <li><i class="fa-brands"><a href="/"><img src="assets/img/instagram.png" alt="" width="20" height="auto"></a></i></li>
                    <li><i class="fa-brands"><a href="/"><img src="assets/img/linkedin.png" alt="" width="20" height="auto"></a></i></li>
                    <li><i class="fa-brands"><a href="/"><img src="assets/img/whatsapp.png" alt="" width="20" height="auto"></a></i></li>
                </ul>
            </div>
        </div>
        <div>
           
            <h1 class="name">Muhammad Wahyu Syaiful Anaam</h1></br>
            <p class="description">Saya seorang mahasiswa informatika angkatan 2021</p></br>
        </div>
        <?php $this->renderSection('content')?>
    </body>
</html>