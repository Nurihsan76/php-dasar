<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?= flasher::flash() ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tomboltambahdata" data-toggle="modal" data-target="#formmodal">
                tambah data santri
            </button>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/santri/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari santri..." name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolcari">cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h2>daftar santri</h2>
            <ul class="list-group">
                <?php foreach ($data['santri'] as $santri) { ?>
                    <li class="list-group-item"><?= $santri['nama'] ?>
                        <a href="<?= BASEURL ?>/santri/hapus/<?= $santri['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?')">hapus</a>
                        <a href="<?= BASEURL ?>/santri/ubah/<?= $santri['id'] ?>" class="badge badge-success float-right ml-1 tampilmodalubah" data-toggle="modal" data-target="#formmodal" data-id="<?= $santri['id'] ?>">ubah</a>
                        <a href="<?= BASEURL ?>/santri/detail/<?= $santri['id'] ?>" class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                <?php } ?>
            </ul>

        </div>
    </div>
</div>


<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="formmodallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formmodallabel">tambah data santri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/santri/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="asal">asal</label>
                        <input type="text" class="form-control" id="asal" name="asal">
                    </div>
                    <div class="form-group">
                        <label for="umur">umur</label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>