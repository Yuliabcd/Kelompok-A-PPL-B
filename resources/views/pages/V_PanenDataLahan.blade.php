<x-app-layout>
    <div>
        <x-slot name="header">
            <h1>Edit Lahan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('getPageKelolaLahan')}}">Data Lahan</a></div>
                <div class="breadcrumb-item">Panen Lahan</div>
            </div>
        </x-slot>

        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('panen',$lahan->id)}}">
                        @method('put')
                        @csrf {{--mencegah akses web lain masuk ke halaman yang sama --}}

                        <div class="form-group row">
                            <label for="ukuran" class="col-sm-2 col-form-label">Hasil Panen</label>
                            <div class="col-sm-10">
                                <input type="number" step='0.0000001' class="form-control @error('hasil_tanam') is-invalid @enderror"
                                       id="ukuran_lahan" name="hasil_tanam" value="{{$lahan->hasil_tanam}}" style="width: 90%; display: inline"> ha
                                @error('hasil_tanam')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'hasil_tanam harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lahan garap" class="col-sm-2 col-form-label">Selesai</label>
                            <div class="col-sm-10">
                                <input type="text"
                                       class="form-control datepicker @error('selesai') is-invalid @enderror"
                                       id="ukuran_lahan_garap" name="selesai"
                                       value="{{ $lahan->selesai }}" style="width: 90%; display: inline"> ha
                                @error('selesai')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Tanggal selesai harap diisi!'}} </div>
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
