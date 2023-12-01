<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\LaborPerlengkapan;
use App\Models\Labor;
use Illuminate\Http\Request;

class LaborPerlengkapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perlengkapans = LaborPerlengkapan::all();
        return view('pages.backend.perlengkapan.index', compact('perlengkapans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $labors = Labor::all();

        return view('pages.backend.perlengkapan.create', compact('labors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'labor_id' => 'required|exists:labors,id',
            'nama_perlengkapan' => 'required|string',
            'jumlah_perlengkapan' => 'required|integer|min:0',
            'kondisi_bagus' => 'required|integer|min:0',
            'kondisi_tbagus' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
        ]);

        // Create a new LaborPerlengkapan instance
        $perlengkapan = new LaborPerlengkapan([
            'labor_id' => $request->labor_id,
            'nama_perlengkapan' => $request->nama_perlengkapan,
            'jumlah_perlengkapan' => $request->jumlah_perlengkapan,
            'kondisi_bagus' => $request->kondisi_bagus,
            'kondisi_tbagus' => $request->kondisi_tbagus,
            'keterangan' => $request->keterangan,
        ]);

        // Save the LaborPerlengkapan instance
        $perlengkapan->save();

        return redirect()->route('perlengkapan.index')->with('taost_success', 'Perlengkapan added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(LaborPerlengkapan $laborPerlengkapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LaborPerlengkapan $laborPerlengkapan, $id)
    {
        // Find the PerlengkapanLabor by ID
        $perlengkapan = LaborPerlengkapan::findOrFail($id);

        // Fetch the list of Labors to populate a dropdown in the form
        $labors = Labor::all(); // Adjust this query based on your model

        return view('pages.backend.perlengkapan.edit', compact('perlengkapan', 'labors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LaborPerlengkapan $laborPerlengkapan, $id)
    {

        $request->validate([
            'labor_id' => 'required|exists:labors,id',
            'nama_perlengkapan' => 'required|string|max:255',
            'jumlah_perlengkapan' => 'required|integer|min:0',
            'kondisi_bagus' => 'required|integer|min:0',
            'kondisi_tbagus' => 'required|integer|min:0',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $perlengkapan = LaborPerlengkapan::findOrFail($id);

        $perlengkapan->update([
            'labor_id' => $request->input('labor_id'),
            'nama_perlengkapan' => $request->input('nama_perlengkapan'),
            'jumlah_perlengkapan' => $request->input('jumlah_perlengkapan'),
            'kondisi_bagus' => $request->input('kondisi_bagus'),
            'kondisi_tbagus' => $request->input('kondisi_tbagus'),
            'keterangan' => $request->input('keterangan'),
        ]);

        return redirect()->route('perlengkapan.index')->with('toast_success', 'Perlengkapan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaborPerlengkapan $laborPerlengkapan, $id)
    {
        $perlengkapan = LaborPerlengkapan::findOrFail($id);

        $perlengkapan->delete();

        return redirect()->back()->with('toast_success', 'Perlengkapan berhasil dihapus');
    }
}
