<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Labor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class LaborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labors = Labor::all();

        return view('pages.backend.labor.index', compact('labors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.labor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_labor' => 'required',
            'lokasi_labor' => 'required',
            'kapasitas_labor' => 'required',
            'status_labor' => 'required',
            'foto_labor' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        // Upload foto laboratorium
        if ($request->hasFile('foto_labor')) {
            $fotoPath = $request->file('foto_labor')->store('foto_labors');
            $input['foto_labor'] = $fotoPath;
        }
        try {
            Labor::create($input);
        } catch (\Throwable $th) {
            return redirect()->route('labor.index')->with('toast_error', 'Task Created Successfully!');
        }

        return redirect()->route('labor.index')->with('toast_success', 'Task Created Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Labor $labor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $labor = Labor::findOrFail($id);

        return view('pages.backend.labor.edit', compact('labor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_labor' => 'required',
            'lokasi_labor' => 'required',
            'kapasitas_labor' => 'required',
            'status_labor' => 'required',
            'foto_labor' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        // Upload foto laboratorium jika ada
        if ($request->hasFile('foto_labor')) {
            $fotoPath = $request->file('foto_labor')->store('foto_labors');
            $input['foto_labor'] = $fotoPath;
        }

        $labor = Labor::findOrFail($id);
        $labor->update($input);

        return redirect()->route('labor.index')
            ->with('toast_success', 'Laboratorium Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Labor $labor)
    {
        //
    }
}
