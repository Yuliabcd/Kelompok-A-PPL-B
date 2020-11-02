<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="alert alert-primary" role="alert" style="font-size: 15px">
        FORM Ubah
    </div>
</div>

<div class="container">
    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <form action="/lahan/update/<?= $lahan['id']; ?>" method="post">
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $lahan['judul']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lokasi_lahan" name="lokasi_lahan" value="<?= $lahan['lokasi_lahan']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ukuran" class="col-sm-2 col-form-label">Ukuran Lahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukuran_lahan" name="ukuran_lahan" value="<?= $lahan['ukuran_lahan']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lahan garap" class="col-sm-2 col-form-label">Ukuran Lahan Garap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukuran_lahan_garap" name="ukuran_lahan_garap" value="<?= $lahan['ukuran_lahan_garap']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="periode" class="col-sm-2 col-form-label">Periode Tanam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="periode_tanam" name="periode_tanam" value="<?= $lahan['periode_tanam']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bibit" class="col-sm-2 col-form-label">Jenis Bibit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_bibit" name="jenis_bibit" value="<?= $lahan['jenis_bibit']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="obat" class="col-sm-2 col-form-label">Obat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="obat" name="obat" value="<?= $lahan['obat']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pupuk" class="col-sm-2 col-form-label">Pupuk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pupuk" name="pupuk" value="<?= $lahan['pupuk']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hasil" class="col-sm-2 col-form-label">Hasil Tanam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hasil_tanam" name="hasil_tanam" <?= $lahan['hasil_tanam']; ?>>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" ">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>