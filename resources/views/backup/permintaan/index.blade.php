@extends('layout/main')

@section('title', 'Permintaan | SILOOMAN')

@section('content')  

<div class="container" >
    <h1 class="mt-4" style= "font-size: 28px"><u> Daftar Permintaan </u></h1>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-10">
            <tbody>
                {{-- @foreach($lahan as $a) --}}
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center mt-2">
                        {{-- Lahan {{$a->lokasi_lahan}} Periode Tanam {{$a->periode_tanam}} --}}
                    <a href="/permintaan" class="badge badge-success">Detail</a>
                    </li>
                </ul>
                {{-- @endforeach --}}
            </tbody>
            <a href="/permintaan/create" class="btn btn-primary mt-3">Tambah Aktivitas</a>
        </div>
    </div>
</div>

@endsection