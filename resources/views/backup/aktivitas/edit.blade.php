@extends('backup.layout.main')

@section('title', 'Edit Data Aktivitas | SILOOMAN')

@section('content')

<div class="container">
    <div class="mt-4">
        <h2><u> Lahan {{$lahan->lokasi_lahan}} Periode Tanam {{$lahan->periode_tanam}} </u></h2s>
    </div>
</div>


<div class="container">
    <div class="mt-4">
        <div class="card">
            <div class="card-body">
                <form method="post" action="/aktivitas/show/{{$aktivitas->id}}" method="post">
                    @method('patch')
                    @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}
                    <div class="form-group">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control  id="judul" name="judul">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-sm-2 col-form-label">File Input</label>
                        <div class="custom-file col-sm-10">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary ">Simpan</button>
                        <a href="/aktivitas/list" type="submit" class="btn btn-warning">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
