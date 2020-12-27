<x-app-layout>
    <div>
        <x-slot name="header">
            <h1>Edit Aktivitas</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('getPageDataAktivitas')}}">Data Aktivitas</a></div>
                <div class="breadcrumb-item">Form Lahan</div>
            </div>
        </x-slot>

        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('updateAktivitas',$id)}}" enctype="multipart/form-data">
                        @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}
                        @method('put')
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                       name="judul" value="{{$aktivitas->judul}}">
                                @error('judul')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Judul harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lokasi" class="col-sm-2 col-form-label">informasi</label>
                            <div class="col-sm-10">
                            <textarea type="text" class="form-control @error('informasi') is-invalid @enderror"
                                      id="informasi" name="informasi" >{{$aktivitas->informasi}}</textarea>
                                @error('informasi')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Informasi tambahan harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('file') is-invalid @enderror" id="gambar"
                                       name="file" >
                                @error('file')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'gambar harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="float-right">

                            <a href="/lahan" type="submit" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

