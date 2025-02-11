@extends('partials.main')

@section('content')

<h1>Data Siswa</h1>
<a href="{{ Route('siswa.add') }}" class="btn btn-success">Tambah Data</a>

<table class="table table-hover mt-5">

    <tr class="table-dark">
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Menu</th>
    </tr>

    @foreach ($siswa as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item['nama'] }}</td>
        <td>{{ $item['alamat'] }}</td>
        <td>{{ $item['jenis_kelamin'] }}</td>
        <td>

            <form action="{{ Route('siswa.delete', $item['id']) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Hapus</button>
                <a class="btn btn-warning" href="{{ Route('siswa.edit', $item['id']) }}">Edit</a>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection