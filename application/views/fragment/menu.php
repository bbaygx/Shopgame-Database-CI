

<?php
$mycafe = $this->uri->segment(1);
?>



<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dasboard Admin@UserGame</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-3 ">
        <li class="nav-item">
          <a class="nav-link btn btn-outline-primary" aria-current="page" href="#" >Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link btn btn-outline-warning <?= $mycafe == 'suspend' ? 'active' : '' ?>" href="<?= base_url() ?>suspend">Suspend</a>
        </li>
        <li class="nav-item">
        <a class="nav-link btn btn-outline-warning <?= $mycafe == 'feedback' ? 'active' : '' ?>" href="<?= base_url() ?>feedback">Feedback</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
  <p></p>