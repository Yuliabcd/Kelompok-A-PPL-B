{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}

{{--        <!-- Styles -->--}}
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

{{--        @livewireStyles--}}

{{--        <!-- Scripts -->--}}
{{--        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>--}}
{{--    </head>--}}
{{--    <body class="font-sans antialiased">--}}
{{--        <div class="min-h-screen bg-gray-100">--}}


{{--            <!-- Page Heading -->--}}
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

{{--            <!-- Page Content -->--}}
{{--            <main>--}}
{{--                {{ $slot }}--}}
{{--            </main>--}}
{{--        </div>--}}

{{--    </body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Silooman</title>

    <link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}"/>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CSS Libraries -->
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/bootstrap-daterangepicker/daterangepicker.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>


    {{--    <script defer src="{{ asset('vendor/alpine.js') }}"></script>--}}
    @livewireStyles
</head>

<body class="layout-3">
<div id="app">
    <div class="main-wrapper container">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <a href="#" class="navbar-brand sidebar-gone-hide">
                Silooman
                {{--                <img class="login-brand" style="height: 45px" src="{{asset('images/logo.png')}}" alt="">--}}
            </a>
            <div class="navbar-nav">
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
            </div>
            <div class="nav-collapse">
                <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                    <i class="fas fa-ellipsis-v"></i>
                </a>
                <ul class="navbar-nav">
                    @if(Auth::check())
                    <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link">Dashboard</a></li>
                    {{--                    @if(Auth::user()->role=="pekerja")--}}
                    <li class="nav-item"><a href="{{route('getPageKelolaLahan')}}" class="nav-link">Kelola data
                            lahan</a></li>
                    {{--                    @endif--}}
                    <li class="nav-item"><a href="{{route('getPageDataAktivitas')}}" class="nav-link">Aktivitas</a></li>

                    <li class="nav-item"><a href="{{route('getPagePermintaan')}}" class="nav-link">Permintaan</a></li>
                    
                        @if(Auth::user()->role=="pemilik")
                            <li class="nav-item"><a href="{{route('getPageKeuangan')}}" class="nav-link">Keuangan</a>
                            </li>
                        @endif

                    @endif
                </ul>

            </div>
            <form class="form-inline ml-auto">

            </form>
            @if(Auth::check())
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                                 class="nav-link notification-toggle nav-link-lg beep"><i
                                class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Permintaan
                                <div class="float-right">
                                    {{--                                <a href="#">Mark All As Read</a>--}}
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                @foreach(Notif::setPermintaan() as $notif)
{{--                                    {{dd($notif)}}--}}
                                    <a href="{{route('setPageRekapPermintan',$notif->id_lahan)}}"
                                       class="dropdown-item dropdown-item-unread">
                                        <div class="dropdown-item-icon bg-primary text-white">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                        <div class="dropdown-item-desc">
                                            {{$notif->kebutuhan}}
                                            <div
                                                class="time text-primary">{{$notif->statusPermintaan->status_permintaan}}</div>
                                            <div class="time text-primary">{{$notif->updated_at->diffForHumans()}}</div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            {{--                        <div class="dropdown-footer text-center">--}}
                            {{--                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>--}}
                            {{--                        </div>--}}
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                                 class="nav-link notification-toggle nav-link-lg beep"><i
                                class="fas fa-comments"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Tanggapan Terbaru
                                <div class="float-right">
                                    {{--                                <a href="#">Mark All As Read</a>--}}
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                @foreach(Notif::setTanggapan() as $notif)
                                    <a href="{{route('redirect-notif-tanggapan',$notif->id_aktivitas)}}"
                                       class="dropdown-item dropdown-item-unread">
                                        <div class="dropdown-item-icon bg-primary text-white">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                        <div class="dropdown-item-desc">
                                            {{$notif->komentar}}
                                            <div class="time text-primary">{{$notif->user->name}}</div>
                                            <div class="time text-primary">{{$notif->updated_at->diffForHumans()}}</div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            {{--                        <div class="dropdown-footer text-center">--}}
                            {{--                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>--}}
                            {{--                        </div>--}}
                        </div>
                    </li>
                    {{--                @livewire('navigation-dropdown')--}}
                    <li class="dropdown"><a href="#" data-turbolinks="false" data-toggle="dropdown"
                                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            @if (!is_null(Auth::user()))
                                <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
                        @else
                            <div class="d-sm-none d-lg-inline-block">Hi, Welcome</div></a>
                        @endif
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route('profile.show')}}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            @if (request()->get('is_admin'))
                                <a href="/setting" class="dropdown-item has-icon">
                                    <i class="fas fa-cog"></i> Setting
                                </a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                                   onclick="event.preventDefault();this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </form>
                        </div>
                    </li>

                </ul>
            @else
                <a href="{{route('login')}}" class="btn btn-primary">Login</a>
            @endif

            {{--            <ul class="navbar-nav navbar-right">--}}
            {{--                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"--}}
            {{--                                                             class="nav-link nav-link-lg message-toggle beep"><i--}}
            {{--                            class="far fa-envelope"></i></a>--}}
            {{--                    <div class="dropdown-menu dropdown-list dropdown-menu-right">--}}
            {{--                        <div class="dropdown-header">Messages--}}
            {{--                            <div class="float-right">--}}
            {{--                                <a href="#">Mark All As Read</a>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="dropdown-list-content dropdown-list-message">--}}
            {{--                            <a href="#" class="dropdown-item dropdown-item-unread">--}}
            {{--                                <div class="dropdown-item-avatar">--}}
            {{--                                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">--}}
            {{--                                    <div class="is-online"></div>--}}
            {{--                                </div>--}}
            {{--                                <div class="dropdown-item-desc">--}}
            {{--                                    <b>Kusnaedi</b>--}}
            {{--                                    <p>Hello, Bro!</p>--}}
            {{--                                    <div class="time">10 Hours Ago</div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                            <a href="#" class="dropdown-item dropdown-item-unread">--}}
            {{--                                <div class="dropdown-item-avatar">--}}
            {{--                                    <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">--}}
            {{--                                </div>--}}
            {{--                                <div class="dropdown-item-desc">--}}
            {{--                                    <b>Dedik Sugiharto</b>--}}
            {{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>--}}
            {{--                                    <div class="time">12 Hours Ago</div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                            <a href="#" class="dropdown-item dropdown-item-unread">--}}
            {{--                                <div class="dropdown-item-avatar">--}}
            {{--                                    <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">--}}
            {{--                                    <div class="is-online"></div>--}}
            {{--                                </div>--}}
            {{--                                <div class="dropdown-item-desc">--}}
            {{--                                    <b>Agung Ardiansyah</b>--}}
            {{--                                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
            {{--                                    <div class="time">12 Hours Ago</div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                            <a href="#" class="dropdown-item">--}}
            {{--                                <div class="dropdown-item-avatar">--}}
            {{--                                    <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">--}}
            {{--                                </div>--}}
            {{--                                <div class="dropdown-item-desc">--}}
            {{--                                    <b>Ardian Rahardiansyah</b>--}}
            {{--                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>--}}
            {{--                                    <div class="time">16 Hours Ago</div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                            <a href="#" class="dropdown-item">--}}
            {{--                                <div class="dropdown-item-avatar">--}}
            {{--                                    <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">--}}
            {{--                                </div>--}}
            {{--                                <div class="dropdown-item-desc">--}}
            {{--                                    <b>Alfa Zulkarnain</b>--}}
            {{--                                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>--}}
            {{--                                    <div class="time">Yesterday</div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="dropdown-footer text-center">--}}
            {{--                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </li>--}}


            {{--            </ul>--}}
        </nav>


        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                @if (session('status'))
                    <div class="container mt-3">
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif
                <div class="section-header">
                    {{--                    @yield('header')--}}
                    {{$header}}
                </div>

                <div class="section-body">
                    {{$slot}}
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018
                <div class="bullet"></div>
                Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>
</div>

@stack('modals')

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script defer async src="{{ asset('stisla/js/modules/tooltip.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{asset('assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('node_modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('node_modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- Page Specific JS File -->

<script src="{{asset('assets/js/page/modules-datatables.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

@livewireScripts
</body>
</html>
