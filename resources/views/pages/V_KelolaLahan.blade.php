<x-app-layout>
    <div>
        <x-slot name="header">
            <h1>Data Lahan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                {{--        <div class="breadcrumb-item">Form Lahan</div>--}}
            </div>
        </x-slot>
        <div class="mt-3">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                @if(Auth::user()->role=="pekerja")
                                    <div class="card-header">
                                        <a href="{{route('getFormDataLahan')}}" class="btn btn-primary"> Tambah</a>
                                    </div>
                                @endif
                                <div class="card-body">
                                    @if(count($lahan))
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        #
                                                    </th>
                                                    <th>Judul</th>
                                                    <th>Lokasi lahan</th>
                                                    <th>Ukuran lahan</th>
                                                    <th>Ukuran lahan arap</th>
                                                    <th>Periode Tanam</th>
                                                    <th>Jenis Bibit</th>
                                                    <th>Obat</th>
                                                    <th>Pupuk</th>
                                                    <th>Hasil Tanam</th>

                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($lahan as $l)
                                                    <tr>
                                                        <td>{{$l->id}}</td>
                                                        <td>{{$l->judul}}</td>
                                                        <td>{{$l->lokasi_lahan}}</td>
                                                        <td>{{$l->ukuran_lahan}}</td>
                                                        <td>{{$l->ukuran_lahan_garap}}</td>
                                                        <td>{{$l->periode_tanam}}</td>
                                                        <td>{{$l->jenis_bibit}}</td>
                                                        <td>{{$l->obat}}</td>
                                                        <td>{{$l->pupuk}}</td>
                                                        <td>{{$l->hasil_tanam}}</td>
                                                        <td>

                                                            <a href="{{route('getDataLahan',$l->id)}}" class="btn btn-info">Detail</a>
                                                            @if(Auth::user()->role=="pekerja")
                                                                <a href="{{route('getFormEditDataLahan',$l->id)}}" class="btn btn-primary">Ubah</a>
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
