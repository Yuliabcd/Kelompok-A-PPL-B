@extends('backup.layout.main')

@section('title', 'Tambah Data Aktivitas | SILOOMAN')

@section('content')

{{-- <div class="container">
    <div class="mt-4">
        <div class="card">
            <div class="card-body">
                <form method="post" action="/aktivitas/cretae">
                    @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}
                    {{-- <div class="form-group">
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
        </div> --}}
    {{-- </div> --}}
{{-- </div> --}}

<div class="container mt-4" >
    <div class="card">
        <div class="card-header">
            Form Lahan {{$lahan->lokasi_lahan}} Periode Tanam {{$lahan->periode_tanam}}
        </div>
        <div class="card-body">
            <form method="post" action="/aktivitas/store">
                @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <div class="row col-sm-9">
                        <input type="text" class="form-control  id="judul" name="judul">
                    </div>
                </div>

                <div class="form-group">
                    <label for="informasi">Deskripsi</label>
                    <div class="row col-sm-9">
                        <textarea class="form-control" rows="5" id="deskripsi"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="file">File Input </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label col-sm-9" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary ">Simpan</button>
            <a href="" type="submit" class="btn btn-warning">Batal</a>
        </div>
    </div>
</div>

@endsection
