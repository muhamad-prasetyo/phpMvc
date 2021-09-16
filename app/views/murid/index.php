<div class="container mt-3">

    <!-- untuk popup flasher  -->
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
        Tambah Data Murid
        </button>
        <br><br>

            <h3>Daftar Murid</h3>
            <ul class="list-group">
                <?php foreach((array)$data['mrd'] as $murid) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $murid['nama']; ?>
                        <a href="<?= BASEURL; ?>/murid/detail/<?= $murid['id']; ?>" class="badge badge-info">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
                   
        
        </div>
    </div>
</div>






<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Murid</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form action="<?= BASEURL; ?>/murid/tambah" method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="nim">nim</label>
            <input type="number" class="form-control" id="nim" name="nim">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="materi">Materi</label>
            <select class="form-control" id="materi" name="materi">
                    <option value="Pemrograman JavaScript">Pemrograman JavaScript</option>
                    <option value="Pemrograman PHP">Pemrograman PHP</option>
                    <option value="Fullstack WebDeveloper">Fullstack Web Developer</option>
                    <option value="Fullstack Backend">Fullstack Backend</option>
                    <option value="Fullstack Frontend">Fullstack Frontend</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>