@extends('backup.layout.main')

@section('title', 'Lahan | SILOOMAN')

@section('content')

<div class="container" >
    <h1 class="mt-4" style= "font-size: 28px"><u> Daftar Lahan </u></h1>
</div>

{{-- pesan yang ditampilkan di halaman lahan jika data berhasil ditambahakan --}}
<div class="container mt-3">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-10">
            {{-- <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Periode Tanam</th>
                        <th scope="col"></th>
                    </tr>
                </thead> --}}

                 <tbody>
                     @foreach($lahan as $a)
                        <!-- {{-- <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td> {{ $a->lokasi_lahan}} </td>
                            <td>{{ $a->periode_tanam}}</td>
                            <td>
                            <a href="/lahan/{{$a->id_lahan}}" class="btn btn-success">Detail</a>
                            </td>
                        </tr> --}} -->
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center mt-2">
                                Lahan {{$a->lokasi_lahan}} Periode Tanam {{$a->periode_tanam}}
                                <a href="/lahan/{{$a->id_lahan}}" class="badge badge-success">Detail</a>
                            </li>
                        </ul>
                    @endforeach
                </tbody>
            {{-- </table> --}}


            <a href="/lahan/create" class="btn btn-primary mt-3">Tambah Data</a>
        </div>
    </div>
</div>


@endsection
