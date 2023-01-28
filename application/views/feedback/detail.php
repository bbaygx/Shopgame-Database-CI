<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>

<!-- var $data = [
        'isbn' => '',
        'judul' => '',
        'pengarang' => '',
        'tanggal_rilis' => '',
        'jumlah_halaman' => '',
        'sinopsis' => '',
        'id_penerbit' => '',
        'gambar' => '',
        'nama_penerbit' => '',
        'tersedia' => 1,
]; -->

<h1>Data Makanan</h1>
<dl>
  <dt>ID</dt>
  <dd><?= $id ?></dd>
  <dt>Nama</dt>
  <dd><?= $nama ?></dd>
  <dt>Gmail</dt>
  <dd><?= $gmail ?></dd>
  <dt>Keluhan</dt>
  <dd><?= $keluhan ?></dd>
  <dt>Tanggal</dt>
  <dd><?= $tanggal ?></dd>
</dl>

<a class="btn btn-primary btn-sm"  href='#' onclick="history.back()">Back</a>