@extends('layout/main')

@section('title', 'Home | SILOOMAN')

@section('content')

<div class="container" >
    <h1 class="mt-4" style= "font-size: 10mm"><u>Sistem Informasi Pengelolaan dan Monitoring Lahan</u></h1>
    <h2>SILOOMAN</h2>
</div>

<div class="container" >    
    <form class = "mt-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <a href="/lahan" type="submit" class="btn btn-primary">LOGIN</a>
    </form>
</div>
@endsection