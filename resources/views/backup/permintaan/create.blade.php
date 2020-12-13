@extends('layout/main')

@section('title', 'Tambah Permintaan User | SILOOMAN')

@section('content') 

<div class="container mt-4" >
    <div class="card">
        <div class="card-header">
            <h5> Form Permintaan</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/permintaan/store">
                @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}
                <div class="form-group">
                    <label for="kebutuhan">Kebutuhan</label>
                    <div class="row col-sm-9">
                        <input type="text" class="form-control  id="judul" name="judul">
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="informasi">Jumlah</label>
                    <div class="row col-sm-9">                        
                        <input type="text" class="form-control  id="jumlah" name="jumlah">                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <div class="row col-sm-9">                        
                        <textarea class="form-control" rows="5" id="keterangan"></textarea>
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