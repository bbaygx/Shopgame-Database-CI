<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('/feedback/save') ?>">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>

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

<div>
    <div>
        <h3>Tambah/Edit User</h3>
    </div>
</div>


<div class="row mb-3">
    <label class="form-label">Nama</label>
    <div>
        <input class="form-control" type="text" name="nama" id="nama" value="<?= $nama ?>" required/>
    </div>
</div>

<div class="row mb-3">
    <label>Gmail</label>
    <div class="form-label">
        <input class="form-control" type="gmail" name="gmail" id="gmail" value="<?= $gmail ?>" required/>
    </div>
</div>

<div class="row mb-3">
    <label class="form-label">Keluhan</label>
    <div class="form-label">
        <input class="form-control" type="textarea" name="keluhan" id="keluhan" value="<?= $keluhan ?>" required/>
    </div>
</div>
<div>
<!-- <div class="row mb-3">
    <label>Selesai/Belum</label>
    <div class="form-label">
        <input class="form-control" type="" name="gmail" id="gmail" value="<?= $gmail ?>" required/>
    </div>
</div> -->
<div class="row mb-3">
    <label class="form-label">Tanggal</label>
    <div>
        <input class="form-control" type="date" name="tanggal" id="tanggal" value="<?= $tanggal ?>" required/>
    </div>
</div>
<div>
<input class="btn btn-warning btn-sm" type="button" value="Cancel" onclick="history.back()" />
    <input class="btn btn-primary btn-sm" type="submit" value="Simpan" />
</div>

</form>
<?php
    include APPPATH . 'views/fragment/footer.php'; 
?>