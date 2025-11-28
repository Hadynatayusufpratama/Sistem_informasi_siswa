<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SiswaController extends Controller
{
    // ===========================
    // INDEX + SEARCH
    // ===========================
    public function index(Request $request)
    {
        $keyword = $request->search;

        $siswas = Siswa::when($keyword, function ($query) use ($keyword) {
            $query->where('nama', 'like', "%$keyword%");
        })->get();

        return view('siswa.index', compact('siswas'));
    }

    // ===========================
    // HALAMAN CREATE
    // ===========================
    public function create()
    {
        return view('siswa.create');
    }

    // ===========================
    // STORE DATA SISWA
    // ===========================
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswas',
            'kelas' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
        ]);

        Siswa::create([
            'nama'       => $request->nama,
            'nis'        => $request->nis,
            'kelas'      => $request->kelas,
            'alamat'     => $request->alamat,
            'gender'     => $request->gender,
            'created_at' => now(),   // ← PENTING UNTUK GRAFIK
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    // ===========================
    // EDIT DATA
    // ===========================
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    // ===========================
    // UPDATE DATA
    // ===========================
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswas,nis,' . $siswa->id,
            'kelas' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
        ]);

        $siswa->update([
            'nama'   => $request->nama,
            'nis'    => $request->nis,
            'kelas'  => $request->kelas,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'updated_at' => now(),
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui');
    }

    // ===========================
    // DELETE DATA
    // ===========================
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus');
    }

    // ===========================
    // API: DATA UNTUK GRAFIK
    // ===========================
    public function chartData()
    {
        $data = Siswa::selectRaw('YEAR(created_at) as tahun, COUNT(*) as total')
            ->whereNotNull('created_at')
            ->groupBy('tahun')
            ->orderBy('tahun')
            ->get();

        return response()->json($data);
    }
}

