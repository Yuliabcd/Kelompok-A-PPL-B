<x-app-layout>
    <div>
        <x-slot name="header">
            <h1>Data Permintaan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Permintaan</div>
            </div>
        </x-slot>
        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @if(count($lahan))
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="table-1">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>Judul</th>
                                                    <th>Lokasi lahan</th>
                                                    <th>Lihat permintaan</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($lahan as $l)
                                                    <tr>
                                                        <td>{{$l->id}}</td>
                                                        <td>{{$l->judul}}</td>
                                                        <td>{{$l->lokasi_lahan}}</td>
                                                        <td>
                                                            <a href="{{route('getPageRekapPermintaan',$l->id)}}" class="btn btn-info">Lihat</a>
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
