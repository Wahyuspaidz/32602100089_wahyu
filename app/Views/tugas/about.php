<?php $this->extend('Layout/header');?>
<?php $this->Section('isi');?>

      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/tugas.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
      </head>
  <body>
        <a href="#"><h3 class="text-center text-success mt-3">About Me</h3></a>
        <!-- Isi Biodata Paling Keren di HTML disini -->
<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <div class="foto">
        <img src="aset/PP34.jpg" alt="" width="200" height="auto">
      </div>
      </div>
      <div class="col-md-8 kertas-biodata">
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <div class="biodata">
        <table border="0">
    <tbody><tr>
        <td >
        <table border="0">
          <tbody>
            <tr>
              <td>Nama</td>
                <td >:</td>
                <td >Muhammad Wahyu Syaiful Anaam</td>
            </tr>
          <tr>
              <td>Jenis Kelamin</td>
                <td>:</td>
                <td>Laki-Laki</td>
            </tr>
          <tr>
              <td>Tempat Lahir</td>
                <td>:</td>
                <td>Kendal, Jawa Tengah</td>
            </tr>
          <tr>
              <td>Tanggal Lahir</td>
                <td>:</td>
                <td>16/04/2002</td>
            </tr>
          <tr>
              <td>Fakultas</td>
                <td>:</td>
                <td>Fakultas Teknologi Industri</td>
            </tr>
          <tr>
              <td >Prodi</td>
                <td >:</td>
                <td>Teknik Informatika</td>
            </tr>
            </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/bootstrap.min.js"></script>
  </body>
  <?= $this->endSection();  ?>