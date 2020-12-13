<x-app-layout>
    <div>
        <x-slot name="header">

            <h1>Data Aktivitas</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Aktivitas - pada {{$lahan->judul}}</div>
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
                                        <a href="{{route('getFormDataAktivitas',$lahan->id)}}" class="btn btn-primary"> Tambah</a>
                                    </div>
                                @endif
                                <div class="card-body">
                                    @if(count($lahan->aktivitas))
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>Judul</th>
                                                    <th>Informasi</th>
                                                    <th>Gambar</th>
                                                    <th>Tanggapan</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($lahan->aktivitas as $ak)
                                                    <tr>
                                                        <td>{{$ak->id}}</td>
                                                        <td>{{$ak->judul}}</td>
                                                        <td>{{$ak->informasi}}</td>
                                                        <td><img src="{{asset('storage/aktivitas/'.$ak->gambar)}}" style="max-height: 100px" alt=""></td>
                                                        <td>
                                                            <a href="{{route('setPageDetailAktivitas',[$lahan->id,$ak->id])}}" class="btn btn-info">Lihat</a>
                                                            @if(Auth::user()->role=="pekerja")
                                                                <a href="{{route('getFormEditAktivitas',[$ak->id])}}" class="btn btn-primary">Edit</a>
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
