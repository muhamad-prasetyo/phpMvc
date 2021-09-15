<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['mrd']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mrd']['nim'] ?></h6>
    <p class="card-text"><?= $data['mrd']['email'] ?></p>
    <p class="card-text"><?= $data['mrd']['materi'] ?></p>
    <a href="<?= BASEURL; ?>/murid" class="card-link">Kembali</a>
  </div>
</div>

</div>