<x-app-layout>
    <div>
        <x-slot name="header">
            <h1>Tambah Permintaan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('getPagePermintaan')}}">Data Permintaan</a></div>
                <div class="breadcrumb-item">Form Permintaan</div>
            </div>
        </x-slot>

        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('simpanKeuangan',[$id,$permintaan])}}" enctype="multipart/form-data">
                        @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga"
                                       name="harga" value="{{ old('harga') }}">
                                @error('harga')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'harga harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Tanggal Beli</label>
                            <div class="col-sm-10">

                                <input type="text"
                                       class="form-control datepicker @error('tanggal_beli') is-invalid @enderror"
                                       name="tanggal_beli" value="{{old('tanggal_beli')}}">

                                @error('jumlah')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'jumlah harap diisi!'}} </div>
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

{{--                        <div class="form-group row">--}}
{{--                            <label for="lokasi" class="col-sm-2 col-form-label">keterangan</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                            <textarea type="text" class="form-control @error('keterangan') is-invalid @enderror"--}}
{{--                                      id="keterangan" name="keterangan">--}}

{{--                            </textarea>--}}
{{--                                @error('keterangan')--}}
{{--                                <div id="validationServer03Feedback"--}}
{{--                                     class="invalid-feedback"> {{'keterangan harap diisi!'}} </div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="float-right">

                            <a href="{{route('getPageRekapKeuangan',$id)}}" type="submit"
                               class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
