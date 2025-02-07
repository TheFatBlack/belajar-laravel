@extends('templates.layout')
@section('halaman_judul','data kelas')
@section('kontent')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                edit data kelas
            </div>
            <div class="card-body">
                <form action="{{route('local.update')}}" method="post" width="100%">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$data_kelas->id}}">
                    <div class="col mt-2">
                        <label for="nama_kelas" class="text-gray-400">Nama Kelas</label>
                        <input type="text" name="nama_kelas" id="nama_kelas" class="form-control"
                            value="{{$data_kelas->nama_kelas}}">
                    </div>
                    <div class="col mt-2">
                        <label for="wali_kelas" class="text-gray-400">Wali Kelas</label>
                        <input type="text" name="wali_kelas" id="wali_kelas" class="form-control"
                            value="{{$data_kelas->wali_kelas}}">
                    </div>
                    <button type="submit" class="btn btn-md btn-primary float-right mt-4 mr-2">Simpan</button>
                </form>
            </div>
        </div>
        <div class="col">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection