<x-app-layout>
    <div>
        <x-slot name="header">

            <h1>Data Permintaan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
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
                                    @if(count($lahan->permintaan))
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>kebutuhan</th>
                                                    <th>jumlah</th>
                                                    <th>keterangan</th>
                                                    <th>status</th>
                                                    <th>aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($lahan->permintaan as $ak)
                                                    <tr>
                                                        <td>{{$ak->id}}</td>
                                                        <td>{{$ak->kebutuhan}}</td>
                                                        <td>{{$ak->jumlah}}</td>
                                                        <td>{{$ak->keterangan}}</td>
                                                        <td>{{$ak->statusPermintaan->status_permintaan}}</td>
                                                        <td>
                                                            @if(Auth::user()->role=="pemilik")
                                                                {{--                                                                @for($i=0;$i<3;$i++)--}}
                                                                @if($ak->id_statuspermintaan!=1)
                                                                    <a href="{{route('simpanStatusPermintaan',[$lahan->id,$ak->id,1])}}"
                                                                       class="btn btn-primary">Setujui</a>
                                                                @endif
                                                                @if($ak->id_statuspermintaan!=0)
                                                                    <a href="{{route('simpanStatusPermintaan',[$lahan->id,$ak->id,0])}}"
                                                                       class="btn btn-warning">Buat Menunggu</a>
                                                                @endif
                                                                @if($ak->id_statuspermintaan!=2)
                                                                    <a href="{{route('simpanStatusPermintaan',[$lahan->id,$ak->id,2])}}"
                                                                       class="btn btn-danger">Tolak</a>
                                                                @endif

                                                            @else
                                                                @if($ak->id_statuspermintaan!=1)
                                                                <a href="{{route('getFormUbahDataPermintaan',[$lahan->id,$ak->id])}}"
                                                                   class="btn btn-info">ubah</a>
                                                                @else
                                                                    Permintaan sudah disetujui
                                                                @endif
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