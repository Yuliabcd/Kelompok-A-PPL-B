<x-app-layout>
    <div>
        <x-slot name="header">
            <h1>Detail Data Lahan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="#">Data Lahan</a></div>
                <div class="breadcrumb-item">Detail Data Lahan</div>
            </div>
        </x-slot>

        <div class="mt-3">
            <div class="card">
                <div class="card-body">

                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                   name="judul" value="{{$lahan->judul}}">
                            @error('judul')
                            <div id="validationServer03Feedback"
                                 class="invalid-feedback"> {{'Judul harap diisi!'}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control @error('lokasi_lahan') is-invalid @enderror"
                                   id="lokasi_lahan" name="lokasi_lahan" value="{{$lahan->lokasi_lahan}}">
                            @error('lokasi_lahan')
                            <div id="validationServer03Feedback"
                                 class="invalid-feedback"> {{'Lokasi harap diisi!'}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ukuran" class="col-sm-2 col-form-label">Ukuran Lahan</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control @error('ukuran_lahan') is-invalid @enderror"
                                   id="ukuran_lahan" name="ukuran_lahan" value="{{$lahan->ukuran_lahan}}">
                            @error('ukuran_lahan')
                            <div id="validationServer03Feedback"
                                 class="invalid-feedback"> {{'Ukuran Lahan harap diisi!'}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lahan garap" class="col-sm-2 col-form-label">Ukuran Lahan Garap</label>
                        <div class="col-sm-10">
                            <input disabled type="text"
                                   class="form-control @error('ukuran_lahan_garap') is-invalid @enderror"
                                   id="ukuran_lahan_garap" name="ukuran_lahan_garap"
                                   value="{{$lahan->ukuran_lahan_garap}}">
                            @error('ukuran_lahan_garap')
                            <div id="validationServer03Feedback"
                                 class="invalid-feedback"> {{'Ukuran Lahan Garap harap diisi!'}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="periode" class="col-sm-2 col-form-label">Periode Tanam</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control @error('periode_tanam') is-invalid @enderror"
                                   id="periode_tanam" name="periode_tanam" value="{{$lahan->periode_tanam}}">
                            @error('periode_tanam')
                            <div id="validationServer03Feedback"
                                 class="invalid-feedback"> {{'Periode Tanam harap diisi!'}} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bibit" class="col-sm-2 col-form-label">Jenis Bibit</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control" id="jenis_bibit" name="jenis_bibit"
                                   value="{{$lahan->jenis_bibit}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="obat" class="col-sm-2 col-form-label">Obat</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control" id="obat" name="obat" value="{{$lahan->obat}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pupuk" class="col-sm-2 col-form-label">Pupuk</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control" id="pupuk" name="pupuk"
                                   value="{{$lahan->pupuk}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hasil" class="col-sm-2 col-form-label">Hasil Tanam</label>
                        <div class="col-sm-10">
                            <input disabled type="text" class="form-control" id="hasil_tanam" name="hasil_tanam"
                                   value="{{$lahan->hasil_tanam}}">
                        </div>
                    </div>
                    <div class="float-right">

                        <a href="/data-lahan" type="submit" class="btn btn-primary">Kembali</a>
                    </div>

                </div>
            </div>

    </div>
</x-app-layout>