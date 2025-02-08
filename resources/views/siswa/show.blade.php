@extends('templates.layout')

@section('title', 'Data siswa')

@section('kontent')
<div class="row mt-5">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-gray">
                    Detail Data Siswa
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td>{{ $siswa->nama }}</td>
                    </tr>
                    <tr>
                        <th>Nisn</th>
                        <td>{{ $siswa->nisn }}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>{{ $siswa->local->nama_kelas }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $siswa->jk }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $siswa->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Handphone</th>
                        <td>{{ $siswa->nohp }}</td>
                    </tr>
                    <tr>
                        <th>Foto</th>
                        <td><img src="{{ asset('storage/' . $siswa->foto) }}" alt="foto" width="100"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection