<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1 class="mt-4" style="font-size: 10mm"><u> Sistem Informasi Pengelolaan dan Monitoring Lahan</u></h1>
    <h2>SILOOMAN</h2>
</div>

<div class="container">
    <form class="mt-4">
        <div class="card col-sm-5">
            <div class="card-body">
                <div class="form-col">
                    <div class="form-group col-sm-9">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-sm-9">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group col">
                        <button type="submit" class="btn btn-success">LOGIN</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection('content'); ?>