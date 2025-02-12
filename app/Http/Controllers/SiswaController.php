<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function index()
    {
        $siswa = Student::all();
        // dd($siswa);
        return view('siswa', compact('siswa'));
    }

    public function add()
    {
        return view('add-siswa');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ], [
            'nama.required' => "Kolom nama harus di isi",
            'alamat.required' => "Kolom alamat harus di isi",
            'jenis_kelamin.required' => "Kolom jenis_kelamin harus di isi"
        ]);

        // untuk menyimpan data siswa
        // data yang di simpan adalah nama, alamat dan jenis kelamin
        $data = Student::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        // mengarahkan kembali ke halaman siswa setelah berhasil simpan data
        return redirect()->route('siswa');

    }

    public function destroy($id)
    {
        // menemukan siswa berdasarkan id
        $data = Student::find($id);

        // menghapus siswa berdasarkan id yang di temukan
        $data->delete();

        return redirect()->route('siswa');
    }

    public function edit($id)
    {
        // menemukan siswa berdasarkan id
        $data = Student::findOrFail($id);

        // mengirimkan data sesuai id ke view
        return view('edit-siswa', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Student::findOrFail($id);

        $data->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('siswa');
    }

}
