{{-- @extends('layout/main')

@section('title', 'Detail Data Aktivitas | SILOOMAN')

@section('content')

<div class="container">
    <div class="mt-4">
        <h2><u>Lahan {{$lahan->lokasi_lahan}} Periode Tanam {{$lahan->periode_tanam}}</u></h2s>
    </div>
</div>

<div class="container mt-3">
    <a href="/aktivitas">Kembali</a>
</div>

<div class="container">
    <div class="mt-3">
        <div class="card col-sm-6">
            <div class="card-body">
                <div class="row">
                    <h6 class="col-sm-4">Judul</h6>
                    <div class="col-sm-8">
                        <p class="card-title">: {{ $aktivitas->judul }}</p>
                    </div>

                    <h6 class="col-sm-4">Informasi</h6>
                    <div class="col-sm-8">
                        <p class="card-title">: {{ $aktivitas->informasi }}</p>
                    </div>

                    <h6 class="col-sm-4">Picture</h6>
                    <div class="col-sm-8">
                        ​<picture>
                            <img src={{url('/images/todoro.jpg')}} width="300" height="200" alt="image"/>
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="mt-4">
        <a href="/edit" class="btn btn-warning mr-3">Edit</a>
        <form action="" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger mr-3">Hapus Data</button>
        </form>
    </div>
</div>

@endsection --}}

@extends('backup.layout.main')

@section('title', 'Detail Aktivitas | SILOOMAN')

@section('content')

<div class="container mt-4" >
    <div class="card">
        <div class="card-header">
            Lahan {{$lahan->lokasi_lahan}} Periode Tanam {{$lahan->periode_tanam}}
        </div>
        <div class="card-body">
            <form method="post" action="/aktivitas">
                @method('patch')
                @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}
                <div class="container">
                    <div class="form-group row">
                        <label class="col-sm-2" for="judul">Judul</label>
                        <div class="col-sm-10">
                            <p class="card-title">: {{ $aktivitas->judul }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2" for="deskripsi">Deskripsi</label>
                        <div class="col-sm-10">
                            <p class="card-title">: {{ $aktivitas->informasi }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2" for="file">Foto </label>
                        <div class="col-sm-10" style="width: 18rem;">
                            <img src={{url('/images/todoro.jpg')}} width="300" height="200" alt="image"/>
                        </div>
                    </div>

                    <label class="col-sm-2" for="text">Tanggapan</label>
                    <div class="container bg-light p-2 row ">
                        {{-- <div class="bg-light p-2"> --}}
                            {{-- <label for="text">Tanggapan</label> --}}
                            <div class="col-sm-11"><textarea class="form-control shadow-none textarea"></textarea></div>
                            <div class="col"><button class="btn btn-primary btn-sm shadow-none">Post</button></div>
                            {{-- <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer text-muted">
            <a href="/edit/<?= $lahan['id']; ?>" class="btn btn-warning mr-3">Edit</a>
            <form action="" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm shadow-none mr-3">Hapus Data</button>
            </form>
        </div>
    </div>
</div>


@endsection
