@extends('templates.layout')
@section('title','Edit Data Siswa')
@section('kontent')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Edit Data Siswa
            </div>
            <div class="card-body">
                <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col mt-2">
                        <label for="nama" class="text-gray-900">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama siswa"
                            value="{{($siswa->nama)}}">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mt-2">
                        <label for="nisn" class="text-gray-900">NISN</label>
                        <input type="text" name="nisn" id="nisn" class="form-control" placeholder="Masukkan NISN siswa"
                            value="{{($siswa->nisn)}}">
                        @error('nisn')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mt-2">
                        <label for="kelas" class="text-gray-900">Kelas</label>
                        <select name="local_id" id="local_id" class="form-control mt-2">
                            <option disabled>Pilih Kelas</option>
                            @foreach($kelas as $k)
                            <option value="{{ $k->id }}" {{ $siswa->local_id == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                        @error('local_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mt-2">
                        <label for="jenis_kelamin" class="text-gray-900">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control mt-2">
                            <option disabled>Pilih Jenis Kelamin</option>
                            <option value="L" {{ $siswa->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $siswa->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jk')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mt-2">
                        <label for="alamat" class="text-gray-900">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat"
                            value="{{($siswa->alamat)}}">
                        @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mt-2">
                        <label for="nohp" class="text-gray-900">Nomor Handphone</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control"
                            placeholder="Masukkan nomor handphone" value="{{($siswa->no_telp)}}">
                        @error('no_telp')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mt-2">
                        <label for="foto" class="text-gray-900">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                        @if($siswa->foto)
                        <img src="{{ asset('storage/' . $siswa->foto) }}" alt="Foto Siswa" class="img-thumbnail mt-2"
                            width="150">
                        @endif
                        @error('foto')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary float-right mt-4">Simpan</button>
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