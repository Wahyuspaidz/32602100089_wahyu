<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
        <div class="main mt-5">
        <h1>Data Mahasiswa</h1>
    <form action="" method="post">
        <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama :</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" name="nama">
        </div>

        <div class="mb-3 mt-3">
        <label for="nim" class="form-label">Nim :</label>
        <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM Anda" name="nim">
        </div>

        <div class="mb-3 mt-3">
        <label for="kelas" class="form-label">Kelas :</label>
        <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas Anda" name="kelas">
        </div>

        <div class="mb-3 mt-3">
        <label for="matakuliah" class="form-label">Mata Kuliah :</label>
        <input type="text" class="form-control" id="matakuliah" placeholder="Masukkan Mata Kuliah Anda" name="matakuliah">
        </div>

        <div class="mb-3 mt-3">
        <label for="dosen" class="form-label">Dosen :</label>
        <input type="text" class="form-control" id="dosen" placeholder="Masukkan Nama Dosen Anda" name="dosen">
        </div>

        <div class="mb-3 mt-3">
        <label for="asisten" class="form-label">Asisten :</label>
        <input type="text" class="form-control" id="asisten" placeholder="Masukkan Asisten Anda" name="asisten">
        </div>

       <button type="submit" class="btn btn-success"> KIRIM </button>
       <button type="reset" class="btn btn-danger"> BATAL </button>

    </form>
    </div>
    <h1>Form Submission Result</h1>
    <p>Nama: <?php echo $nama; ?></p>
    <p>NIM: <?php echo $nim; ?></p>
    <p>Kelas: <?php echo $kelas; ?></p>
    <p>Matakuliah: <?php echo $matakuliah; ?></p>
    <p>Dosen Pengampu: <?php echo $dosen; ?></p>
    <p>Asisten Praktikum: <?php echo $asisten; ?></p>
</body>
</html>
