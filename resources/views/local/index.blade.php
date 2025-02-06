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
                            </tr>
                        </thead>
                        <tfoot>
                            <th>No</th>
                            <th>kelas</th>
                            <th>wali</th>
                        </tfoot>
                        @foreach ($data_kelas as $dk)
                        <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dk['nama_kelas']}}</td>
                                <td>{{$dk['wali_kelas']}}</td>
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