@extends('partials.main')

@section('content')

<h1>Form Tambah Data</h1>

<form action="{{ Route('siswa.add.process') }}" method="post">
    @csrf


    <div class="row col-5">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
            @error('nama')
            <div class="text-danger fs-6">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Masukkan alamat"></textarea>
            @error('alamat')
            <div class="text-danger fs-6">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
            <div class="text-danger fs-6">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>

    </div>
</form>


@endsection