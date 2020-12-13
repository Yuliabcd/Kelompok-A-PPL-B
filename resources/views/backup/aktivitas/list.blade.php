@extends('backup.layout.main')

@section('title', 'List Aktivitas | SILOOMAN')

@section('content')

<div class="container">
    <div class="mt-4">
        <h2><u> Lahan {{$lahan->lokasi_lahan}} Periode Tanam {{$lahan->periode_tanam}}</u></h2s>
    </div>
</div>

<div class="container mt-3">
    <a href="/aktivitas">Kembali</a>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col-10">
                 <tbody>
                    @foreach($aktivitas as $a)
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center mt-2">
                            Aktivitas {{$a->judul}}
                        <a href="/aktivitas/show/{{ $a->id_aktivitas }}" class="badge badge-success">Detail</a>
                        </li>
                    </ul>
                    @endforeach
                </tbody>

            <a href="/aktivitas/create/{{ $a->id_lahan }}" class="btn btn-primary mt-3">Tambah Aktivitas</a>
        </div>
    </div>
</div>

@endsection
