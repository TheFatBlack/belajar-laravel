@extends('templates.layout')
@section('halaman_judul','halaman latihan')
@section('style')
<style>
h1 {
    color: aqua;
}

h2 {
    color: blue;
}

h3 {
    color: red;
}
</style>
@endsection
@section('kontent')
<h1>ini halaman latihan laravel</h1>
<h2>materi hari ini adalah {{$judul}}</h2>
<h3>tanggal hari ini {{$tanggal}}</h3>
@endsection