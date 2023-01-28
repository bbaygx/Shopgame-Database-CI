<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('/suspend/save') ?>">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
<div>
    <div>
        <h3>Tambah/Ubah Data</h3>
    </div>
</div>

<div class="row mb-3">
    <label class="form-label">Nama User</label>
    <div>
        <input class="form-control" type="text" name="nama" id="nama" value="<?= $nama ?>" required/>
    </div>
</div>

<div class="row mb-3">
    <label>ID User</label>
    <div class="form-label">
        <input class="form-control" type="text" name="telpon" id="telpon" value="<?= $telpon ?>" required/>
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