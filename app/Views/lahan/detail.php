<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="mt-4">
        <h2>Lahan <?= $lahan['lokasi_lahan']; ?> Periode <?= $lahan['periode_tanam']; ?></h2s>
    </div>
</div>

<div class="container">
    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h5 class="col-sm-2 ">Judul</h5>
                    <div class="col-sm-10">
                        <a class="card-title"><?= $lahan['judul']; ?> </a>
                    </div>
                    <h5 class="col-sm-2 ">Lokasi</h5>
                    <div class="col-sm-10">
                        <a class="card-title"><?= $lahan['lokasi_lahan']; ?> </a>
                    </div>
                    <h5 class="col-sm-2 ">Ukuran Lahan</h5>
                    <div class="col-sm-10">
                        <a class="card-title"><?= $lahan['ukuran_lahan']; ?> </a>
                    </div>
                    <h5 class="col-sm-2 ">Ukuran Lahan Garap</h5>
                    <div class="col-sm-10">
                        <a class="card-title"><?= $lahan['ukuran_lahan_garap']; ?> </a>
                    </div>
                    <h5 class="col-sm-2 ">Periode Tanam</h5>
                    <div class="col-sm-10">
                        <a class="card-title"><?= $lahan['periode_tanam']; ?> </a>
                    </div>
                    <h5 class="col-sm-2 ">Jenis Bibit </h5>
                    <div class="col-sm-10">
                        <a class="card-title"><?= $lahan['jenis_bibit']; ?> </a>
                    </div>
                    <h5 class="col-sm-2 ">Obat </h5>
                    <div class="col-sm-10">
                        <a class="card-title"><?= $lahan['obat']; ?> </a>
                    </div>
                    <h5 class="col-sm-2 ">Pupuk </h5>
                    <div class="col-sm-10">
                        <a class="card-title"><?= $lahan['pupuk']; ?> </a>
                    </div>
                    <h5 class="col-sm-2 ">Hasil Tanam </h5>
                    <div class="col-sm-10">
                        <a class="card-title"><?= $lahan['hasil_tanam']; ?> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="mt-4">
        <button type="submit" class="btn btn-warning" href="<?= base_url(''); ?>">Aktifitas</button>
        <a href="/lahan/edit/<?= $lahan['id']; ?>" class="btn btn-danger" href="<?= base_url(''); ?>">Edit</a>
    </div>
</div>

<?= $this->endSection('content'); ?>