@extends('templates.layout')
@section('halaman_judul','data kelas')
@section('kontent')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-danger">Manajemen Data</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>kelas</th>
                                <th>wali</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        @foreach ($data_kelas as $dk)
                        <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dk['nama_kelas']}}</td>
                                <td>{{$dk['wali_kelas']}}</td>
                                <td>
                                    <a href="{{route('local.edit',$dk['id'])}}" class="btn btn-info btn-circle"
                                        title="edit"><i class="fas fa-info-circle"></i></a>
                                    <form action="{{route('local.hapus',$dk['id'])}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-circle" title="delete"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <a href="{{route('local.create')}}" class="btn btn-danger mb-3 float-right">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection