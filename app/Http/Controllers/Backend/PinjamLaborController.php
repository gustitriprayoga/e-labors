<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\PinjamLabor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PinjamLaborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.backend.user.labor.index');
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'labor_id' => 'required', // Pastikan 'labor_id' valid sesuai aturan validasi yang diperlukan
            'nama_peminjam' => 'required',
            'tanggal_peminjaman' => 'required|date',
            'keterangan' => 'nullable',
        ]);

        $peminjamanData = $request->all();

        // Tambahkan user_id
        $peminjamanData['user_id'] = Auth::id(); // Menyimpan ID pengguna yang sedang masuk

        // Misalnya, kamu bisa mendapatkan labor_id dari formulir atau sumber lain
        // Tambahkan labor_id sesuai kebutuhan
        $peminjamanData['labor_id'] = $request->input('labor_id');

        // Tambahkan admin_id jika diperlukan (contoh: admin yang menangani pengajuan)
        $peminjamanData['admin_id'] = Auth::id(); // Misalnya, admin adalah pengguna yang sedang masuk

        PinjamLabor::create($peminjamanData);

        return redirect()->route('pengajuan_labor.index')->with('toast_success', 'Pengajuan berhasil Diajukan');

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
