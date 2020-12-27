<x-app-layout>
    <div>
        <x-slot name="header">
            <h1>Data Lahan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('getPageKelolaLahan')}}">Data Lahan</a></div>
                <div class="breadcrumb-item">Form Lahan</div>
            </div>
        </x-slot>
        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('addmore-obat-pupuk',$id)}}" enctype="multipart/form-data">
                        @method('put')
                        @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}
                        <div class="form-group row">
                            <label for="obat" class="col-sm-2 col-form-label">Obat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('obat') is-invalid @enderror" id="obat" name="obat" value="{{ $lahan->obat }}">
                                pisahkan dengan koma(,) jika mengisi lebih dari 1 dan beri koma (,) diakhir penulisan
                                @error('obat')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Obat harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pupuk" class="col-sm-2 col-form-label">Pupuk</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('pupuk') is-invalid @enderror" id="pupuk" name="pupuk"
                                       value="{{ $lahan->pupuk }}">
                                pisahkan dengan koma(,) jika mengisi lebih dari 1 dan beri koma (,) diakhir penulisan
                                @error('pupuk')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Pupuk harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="float-right">
                            <a href="{{route('getPageKelolaLahan')}}" type="submit" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>