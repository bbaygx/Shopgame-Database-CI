<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>



<h1>List Feedback/Masukkan</h1>

<div class="d-flex justify-content-end">
    <a  class="btn btn-success btn-sm" href="<?= base_url("feedback/form")?>">Tambah</a>
</div>

<table class="table table-striped">     
    <tr>
        <th>ID</th>
        <th>Nama Pelanggan</th>
        <th>Gmail</th>
        <th>Keluhan/Masukkan</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['gmail'] ?></td>
            <td><?= $data['keluhan'] ?></td>
            <td><?= $data['tanggal'] ?></td>
            <td>
            <div class="btn-group">
                <a class="btn btn-primary btn-sm" href="<?= base_url("/feedback/detail/{$data['id']}")?>">Detail</a>
                <a class="btn btn-warning btn-sm" href="<?= base_url("/feedback/form/{$data['id']}")?>">Edit</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("feedback/hapus/{$data['id']}")?>">Hapus</a>
            </div>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>