<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\PinjamLabor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Labor;

class PinjamLaborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labors = Labor::all();

        return view('pages.backend.user.labor.index', ['labors' => $labors]);
    }

    public function status_pengajuan()
    {
        return view('pages.backend.user.labor.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function showForm()
    {
        $labors = Labor::all(); // Mengambil semua data laboratorium
        return view('pages.backend.user.labor.index', ['labors' => $labors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'labor_id' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjaman' => 'required|date',
            'waktu_dipinjam' => 'required',
            'keterangan' => 'nullable',
            'foto_selfie' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses pengunggahan foto_selfie
        $fotoSelfiePath = null;
        if ($request->hasFile('foto_selfie')) {
            $fotoSelfiePath = $request->file('foto_selfie')->store('foto_selfies');
        }

        // // Upload foto laboratorium jika ada
        // if ($request->hasFile('foto_labor')) {
        //     $fotoPath = $request->file('foto_labor')->store('foto_labors');
        //     $input['foto_labor'] = $fotoPath;
        // }


        // Buat array data peminjaman
        $peminjamanData = [
            'labor_id' => $request->input('labor_id'),
            'nama_peminjam' => $request->input('nama_peminjam'),
            'tanggal_peminjaman' => $request->input('tanggal_peminjaman'),
            'waktu_dipinjam' => $request->input('waktu_dipinjam'),
            'keterangan' => $request->input('keterangan'),
            'user_id' => Auth::id(),
            'admin_id' => Auth::id(),
            'foto_selfie' => $fotoSelfiePath,
        ];

        // Simpan data peminjaman ke dalam database
        PinjamLabor::create($peminjamanData);

        // Redirect dengan pesan sukses
        return redirect()->route('pengajuan.status')->with('toast_success', 'Pengajuan berhasil Diajukan');
    }



    /**
     * Display the specified resource.
     */

    public function show(PinjamLabor $pinjamLabor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PinjamLabor $pinjamLabor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PinjamLabor $pinjamLabor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PinjamLabor $pinjamLabor)
    {
        //
    }
}
