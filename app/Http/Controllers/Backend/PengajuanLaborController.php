<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PengajuanLabor;
use App\Models\PinjamLabor;
use Illuminate\Http\Request;

class PengajuanLaborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjamans = PinjamLabor::all();
        return view('pages.backend.pengajuan.index', compact('peminjamans'));
    }

    public function status_pengajuan()
    {
        $peminjamans = PinjamLabor::all();
        return view('pages.backend.pengajuan.status_pengajuan', compact('peminjamans'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PengajuanLabor $pengajuanLabor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengajuanLabor $pengajuanLabor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengajuanLabor $pengajuanLabor)
    {
        //
    }

    // Metode lainnya

    public function accept($id)
    {
        $peminjaman = PinjamLabor::find($id);
        $peminjaman->update(['status' => 'diterima']);

        return redirect()->route('pengajuan_labor_admin.index')->with('success', 'Peminjaman diterima.');
    }

    public function reject($id)
    {
        $peminjaman = PinjamLabor::find($id);
        $peminjaman->update(['status' => 'ditolak']);

        return redirect()->route('pengajuan_labor_admin.index')->with('success', 'Peminjaman ditolak.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengajuanLabor $pengajuanLabor)
    {
        //
    }


}
