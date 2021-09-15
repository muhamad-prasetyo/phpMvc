<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Murid</h3>

                <?php foreach($data['mrd'] as $mrd) : ?>
                    <ul>
                        <li><?= $mrd['nama']; ?></li>
                        <li><?= $mrd['nim']; ?></li>
                        <li><?= $mrd['email']; ?></li>
                        <li><?= $mrd['materi']; ?></li>
                    </ul>
                <?php endforeach; ?>
        </div>
    </div>
</div>