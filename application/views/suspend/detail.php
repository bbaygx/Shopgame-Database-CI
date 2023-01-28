<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Akun Suspend</h1>
<dl>
  <dt>Nama User</dt>
  <dd><?= $nama ?></dd>

  <dt>Telpon</dt>
  <dd><?= $telpon ?></dd>
</dl>

<a class="btn btn-primary btn-sm"  href='#' onclick="history.back()">Back</a>