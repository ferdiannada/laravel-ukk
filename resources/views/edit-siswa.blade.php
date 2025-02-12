@extends('partials.main')

@section('content')

<h1>Form Edit Data</h1>

<form action="{{ Route('siswa.update', $data['id']) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row col-5">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama"
                value="{{ $data['nama'] }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat"
                placeholder="Masukkan alamat">{{ $data['alamat'] }}</textarea>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-Laki" {{ $data['jenis_kelamin']=="Laki-Laki" ? 'selected' : '' }}>Laki-Laki</option>

                <option value="Perempuan" {{ $data['jenis_kelamin']=="Perempuan" ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Edit</button>
        </div>

    </div>
</form>


@endsection