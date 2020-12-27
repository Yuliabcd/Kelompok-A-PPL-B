<x-app-layout>
    <div>
        <x-slot name="header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Form Lahan</div>
            </div>
        </x-slot>
        <div class="mt-3">
            <div class="card">
                <div class="card-body">
                    <h1>Selamat Datang</h1>
                    <p style="font-size: 20px;text-align: justify; text-indent: 45px" class="m-3">
                        Silooman adalah suatu sistem informasi pengelolaan dan monitoring lahan di bidang pertanian yang dibuat sebagai penunjang pengambilan keputusan berbasis website. Sistem ini dibuat khusus untuk membantu mitra kami, Bapak Sariyanto, dalam mengatasi masalah efisiensi dalam pengelolaan lahannya. Fitur-fitur yang terdapat di dalam Silooman, antara lain : pencatatan data lahan, monitoring aktivitas pertanian, pengajuan permintaan, dan pencatatan arus keuangan selama proses pengelolaan lahan. Sistem ini diharapkan dapat memudahkan Bapak Sariyanto dalam memantau pengelolaan lahannya, memonitor aktivitas pertanian di lahannya, memudahkan pengajuan permintaan, serta mencatat arus keuangan dalam proses pengelolaan lahan
                    </p>

                    <img src="{{asset('images/bg.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
