@extends('templates.layout')
@section('halaman_judul','data siswa')
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
                            <tr class="text-center">
                                <th>No</th>
                                <th>nama</th>
                                <th>kelas</th>
                                <th>Jenis Kelamin</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        @foreach ($data_siswa as $ds)
                        <tbody>
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$ds->nama}}</td>
                                <td>{{$ds->local->nama_kelas}}</td>
                                <td>{{$ds->jk}}</td>
                                <td>
                                    <a href="{{route('siswa.show', $ds->id)}}" class="btn btn-info btn-circle btn-sm"><i
                                            class="fas fa-info"></i></a>
                                    <a href="{{route('siswa.edit', $ds->id)}}" class="btn btn-info btn-circle btn-sm"><i
                                            class="fas fa-info"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <a href="{{route('siswa.create')}}" class="btn btn-danger mb-3 float-right">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection