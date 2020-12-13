@extends('backup.layout.main')

@section('title', 'Detail Lahan | SILOOMAN')

@section('content')

{{-- <div class="container">
    <div class="mt-4">
        <h2>Lahan {{$lahan->lokasi_lahan}} Periode Tanam {{$lahan->periode_tanam}}</h2s>
    </div>
</div> --}}

<div class="container mt-3">
    <a href="/lahan">Kembali</a>
</div>

<div class="container">
    <div class="mt-3">
        <div class="card">
            <div class="card-header">
                <h5> {{$lahan->lokasi_lahan}} Periode Tanam {{$lahan->periode_tanam}}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <label class="col-sm-2 ">Judul</label>
                    <div class="col-sm-10">
                        <p class="card-title">: {{$lahan->judul}}</p>
                    </div>
                    <label class="col-sm-2 ">Lokasi</label>
                    <div class="col-sm-10">
                        <p class="card-title">: {{$lahan->lokasi_lahan}}</p>
                    </div>
                    <label class="col-sm-2 ">Ukuran Lahan</label>
                    <div class="col-sm-10">
                        <p class="card-title">: {{$lahan->ukuran_lahan}}</p>
                    </div>
                    <label class="col-sm-2 ">Ukuran Lahan Garap</label>
                    <div class="col-sm-10">
                        <p class="card-title">: {{$lahan->ukuran_lahan_garap}}</p>
                    </div>
                    <label class="col-sm-2 ">Periode Tanam</label>
                    <div class="col-sm-10">
                        <p class="card-title">: {{$lahan->periode_tanam}}</p>
                    </div>
                    <label class="col-sm-2 ">Jenis Bibit </label>
                    <div class="col-sm-10">
                        <p class="card-title">: {{$lahan->jenis_bibit}}</p>
                    </div>
                    <label class="col-sm-2 ">Obat </label>
                    <div class="col-sm-10">
                        <p class="card-title">: {{$lahan->obat}}</p>
                    </div>
                    <label class="col-sm-2 ">Pupuk </label>
                    <div class="col-sm-10">
                        <p class="card-title">: {{$lahan->pupuk}}</p>
                    </div>
                    <label class="col-sm-2 ">Hasil Tanam </label>
                    <div class="col-sm-10">
                        <p class="card-title">: {{$lahan->hasil_tanam}}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/lahan/<?= $lahan['id_lahan']; ?>/edit" class="btn btn-warning mr-3">Edit</a>
                <form action="{{$lahan->id_lahan}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger mr-3">Hapus Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="mt-4">
        <a href="/lahan//edit" class="btn btn-warning mr-3">Edit</a>
        <form action="{{$lahan->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger mr-3">Hapus Data</button>
        </form>
    </div>
</div> --}}

@endsection
