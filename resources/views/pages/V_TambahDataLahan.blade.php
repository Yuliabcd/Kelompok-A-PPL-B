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
                    <form method="post" action="{{route('simpanLahan')}}">
                        @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                       name="judul" value="{{ old('judul') }}">
                                @error('judul')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Judul harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('lokasi_lahan') is-invalid @enderror"
                                       id="lokasi_lahan" name="lokasi_lahan" value="{{ old('lokasi_lahan') }}">
                                @error('lokasi_lahan')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Lokasi harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ukuran" class="col-sm-2 col-form-label">Ukuran Lahan</label>
                            <div class="col-sm-10">
                                <input type="number" step='0.0000001' class="form-control @error('ukuran_lahan') is-invalid @enderror "
                                       id="ukuran_lahan" name="ukuran_lahan" value="{{ old('ukuran_lahan') }}" style="width: 90%; display: inline"> ha
                                @error('ukuran_lahan')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Ukuran lahan harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lahan garap" class="col-sm-2 col-form-label">Ukuran Lahan Garap</label>
                            <div class="col-sm-10">
                                <input type="number" step='0.0000001'
                                       class="form-control @error('ukuran_lahan_garap') is-invalid @enderror"
                                       id="ukuran_lahan_garap" name="ukuran_lahan_garap"
                                       value="{{ old('ukuran_lahan_garap') }}" style="width: 90%; display: inline"> ha
                                @error('ukuran_lahan_garap')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Ukuran lahan garap harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>
{{--                        <div class="form-group row">--}}
{{--                            <label for="periode" class="col-sm-2 col-form-label">Periode Tanam</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" class="form-control @error('periode_tanam') is-invalid @enderror"--}}
{{--                                       id="periode_tanam" name="periode_tanam" value="{{ old('periode_tanam') }}">--}}
{{--                                @error('periode_tanam')--}}
{{--                                <div id="validationServer03Feedback"--}}
{{--                                     class="invalid-feedback"> {{'Periode tanam harap diisi!'}} </div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group row">
                            <label for="bibit" class="col-sm-2 col-form-label">Jenis Bibit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('jenis_bibit') is-invalid @enderror" id="jenis_bibit" name="jenis_bibit"
                                       value="{{ old('jenis_bibit') }}">
                                @error('jenis_bibit')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Jenis bibit harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="obat" class="col-sm-2 col-form-label">Obat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('obat') is-invalid @enderror" id="obat" name="obat" value="{{ old('obat') }}">

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
                                       value="{{ old('pupuk') }}">

                                @error('pupuk')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Pupuk harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>
{{--                        <div class="form-group row">--}}
{{--                            <label for="hasil" class="col-sm-2 col-form-label">Hasil Tanam</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="number" class="form-control @error('hasil_tanam') is-invalid @enderror" id="hasil_tanam" name="hasil_tanam"--}}
{{--                                       value="{{ old('hasil_tanam') }}" style="width: 90%; display: inline"> ton--}}

{{--                                @error('hasil_tanam')--}}
{{--                                <div id="validationServer03Feedback"--}}
{{--                                     class="invalid-feedback"> {{'Hasil tanam harap diisi!'}} </div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row">
                            <label for="lahan garap" class="col-sm-2 col-form-label">Mulai</label>
                            <div class="col-sm-10">
                                <input type="text"
                                       class="form-control datepicker @error('mulai') is-invalid @enderror"
                                       id="ukuran_lahan_garap" name="mulai"
                                       value="{{ old('mulai') }}" style="width: 90%; display: inline">
                                @error('mulai')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Awal mulai harap diisi!'}} </div>
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
