<x-app-layout>
    <div>
        <x-slot name="header">

            <h1>Data Keuangan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Permintaan - pada {{$lahan->judul}}</div>
            </div>
        </x-slot>

        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h4>Nama : {{$lahan->judul}}</h4>
                                <h4>Lokasi : {{$lahan->lokasi_lahan}}</h4>
                                @if(Auth::user()->role=="pekerja")
                                    <div class="card-header">
                                        {{--                                {{route('getFormDataAktivitas',$lahan->id)}}--}}
                                        <a href="{{route('getFormDataPermintaan',$lahan->id)}}" class="btn btn-primary">
                                            Tambah</a>
                                    </div>
                                @endif
                                <div class="card-body">
                                    @if(count($lahan->permintaan->where('id_statuspermintaan','=',1)))
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>kebutuhan</th>
                                                    <th>jumlah</th>
                                                    <th>Tanggal Beli</th>
                                                    <th>Gambar</th>
                                                    <th>Harga Total</th>
                                                    <th>aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($lahan->permintaan->where('id_statuspermintaan','=',1)  as $ak)
                                                    <tr>
                                                        <td>{{$ak->id}}</td>
                                                        <td>{{$ak->kebutuhan}}</td>
                                                        <td>{{$ak->jumlah}}</td>
                                                        <td>{{isset($ak->keuangan->tanggal_beli)?$ak->keuangan->tanggal_beli:''}}</td>
                                                        <td><img src="{{asset(isset($ak->keuangan->tanggal_beli)?'storage/keuangan/'.$ak->keuangan->bukti:'')}}" alt="" width="300px"></td>
                                                        <td>{{isset($ak->keuangan->harga)?$ak->keuangan->harga:''}}</td>
                                                        <td>
                                                            @if(!isset($ak->keuangan->tanggal_beli))
                                                            <a href="{{route('getFormDataKeuangan',[$lahan->id,$ak->id])}}"
                                                               class="btn btn-info">Lengkapi</a>
                                                            @else
                                                                Telah terlengkapi
                                                            @endif

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    @else
                                        Belum Ada Data
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

