<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\LaborJadwal;
use App\Models\Labor;
use Illuminate\Http\Request;

class LaborJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = LaborJadwal::with('labor')->get();
        return view('pages.backend.jadwal.index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $labors = Labor::all();
        return view('pages.backend.jadwal.create', compact('labors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'labor_id' => 'required',
            'hari' => 'required',
            'prodi' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'nama_dosen' => 'required',
        ]);

        LaborJadwal::create($request->all());

        return redirect()->route('jadwal.labor.index')->with('toast_success', 'Jadwal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(LaborJadwal $laborJadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwal = LaborJadwal::findOrFail($id);
        $labors = Labor::all();
        return view('pages.backend.jadwal.edit', compact('jadwal','labors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LaborJadwal $laborJadwal)
    {
        $request->validate([
            'labor_id' => 'required',
            'hari' => 'required',
            'prodi' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'nama_dosen' => 'required',
        ]);

        $laborJadwal->update($request->all());

        return redirect()->route('jadwal.labor.index')->with('toast_success', 'Jadwal berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaborJadwal $laborJadwal)
    {
        $laborJadwal->delete();

        return redirect()->route('jadwal.labor.index')->with('toast_success', 'Jadwal berhasil dihapus');
    }
}
