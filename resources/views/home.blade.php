@extends('templates.layout')
@section('halaman_judul','halaman mantan')
@section('style')
<style>
h1 {
    color: aqua;
}

h3 {
    color: blue;
    text-align: justify;
}

ol li {
    color: violet;
}
</style>
@endsection
@section('kontent')
<h1>Belajar Laravel</h1>
<h3>Selama datang {{$nama}},<br> di kelas {{$kelas}}, <br>dan tinggal di{{$alamat}}</h3>

<h3>Mantan {{$nama}} adalah</h3>
<ol>
    @foreach($mantanapip as $ma)
    <li>{{$ma}}</li>
    @endforeach
</ol>
@endsection