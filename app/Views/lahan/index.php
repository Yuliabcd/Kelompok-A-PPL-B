<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="alert alert-primary" role="alert" style="font-size: 15px">
        LAHAN
    </div>
</div>


<div class="container ">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Periode Tanam</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($lahan as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $a['lokasi_lahan'] ?></td>
                            <td><?= $a['periode_tanam'] ?></td>
                            <td>
                                <a href="lahan/ <?= $a['id']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="/lahan/create" class="btn btn-primary mb-3">Tambah</a>
        </div>
    </div>
</div>

<!-- <div class="container">
    <a href="/lahan/create" class="btn btn-primary">Tambah</a>
</div> -->

<?= $this->endSection('content'); ?>