<x-app-layout>
    <div>
        <x-slot name="header">
            <h1>Data Aktivitas {{$aktivitas->judul}} - pada {{$lahan->judul}}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Aktivitas</div>
            </div>
        </x-slot>
        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>Nama : {{$lahan->judul}}</h4>
                            <h4>Lokasi : {{$lahan->lokasi_lahan}}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="mb-3">Komentar</h1>

            <div class="row container">
                @if(count($aktivitas->komentar))
                    @foreach($aktivitas->komentar as $ak)
                        @if($ak->user->id ==Auth::id())
                            <div class="col-md-4">

                            </div>
                        @endif
                        <div class="card indigo-400 col-md-8" style="padding: 0">
                            <div class="card-body bg-primary @if($ak->user->id ==Auth::id()) text-right @endif"
                                 style="color: #ffffff; font-size: 20px; width: 100%">
                                <b>
                                    {{$ak->user->name}}
                                </b>
                            </div>
                            <div class="card-body @if($ak->user->id ==Auth::id()) text-right @endif">
                                {{$ak->komentar}}a
                            </div>
                        </div>
                        @if($ak->user->id !=Auth::id())
                            <div class="col-md-4">

                            </div>
                        @endif
                    @endforeach
            </div>
            @else
                Belum Ada Data
            @endif

            <form action="{{route('simpanKomentar',[$id,$detail])}}" method="post" class="container">
                <h4 class="mb-3">
                    Tulis komentar disini</h4>
                @csrf
                <textarea name="komentar" class="form-control @error('komentar') is-invalid @enderror" id="komentar"
                          cols="30" rows="100" style="height: 100px" placeholder="tulis komentar disini">

            </textarea>
                @error('komentar')
                <div id="validationServer03Feedback"
                     class="invalid-feedback"> tanggapan tidak boleh kosong harap diisi
                </div>
                @enderror
                <input type="submit" class="btn btn-primary mt-3" value="submit">
            </form>
        </div>
    </div>
</x-app-layout>
