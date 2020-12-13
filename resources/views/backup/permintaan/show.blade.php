@extends('layout/main')

@section('title', 'Detail Permintaan | SILOOMAN')

@section('content')   

<div class="container mt-4">
    <h3>Lahan...Periode Tanam...</h3>
</div>

<div class="container mt-3">    
    <a href="/permintaan">Kembali</a>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kebutuhan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Pupuk Kompos</td>
            <td>2 Karung</td>
            <td>Kurang</td>
            <td>29/11/2020</td>
            <td>diterima/ditolak</td>
          </tr>          
        </tbody>
      </table>
</div>

@endsection