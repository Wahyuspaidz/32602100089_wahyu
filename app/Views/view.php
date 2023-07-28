<?= $this->extends('layout/template');?>
<?= $this->section('content');?>


<main>
    <div class="title">
        <h1>Data mahasiswa</h1>
        <a href="crud/tambah"><botton>Tambah Data</botton></a>
</div>
<div class="table">
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Prodi</th>
            <th>Universitan</th>
            <th>No HP</th>
            <th>Action</th>
</tr>
<tr>
    <td>1</td>
    <td>Wahyu</td>
    <td>32602100089</td>
    <td>Teknik Informatika</td>
    <td>unissula</td>
    <td>128298388</td>
    <td class="action">
        <a href="#"><button class="btn-delete">Delete</botton></a>