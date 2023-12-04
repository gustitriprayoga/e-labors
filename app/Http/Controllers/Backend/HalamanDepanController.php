<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\HalamanDepan;
use App\Models\Labor;
use App\Models\LaborProdi;
use Illuminate\Http\Request;

class HalamanDepanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halamanDepan = HalamanDepan::first();

        return view('pages.backend.halaman-depan.index', compact('halamanDepan'));
    }
    /**
     * Display a listing of the resource.
     */
    public function halamandepan()
    {
        $halamanDepan = HalamanDepan::all();
        $labs = Labor::all();
        $prodi = LaborProdi::all();

        return view('pages.frontend.landingpage', compact('halamanDepan', 'labs', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $halamanDepan = HalamanDepan::all();

        return view('pages.backend.halaman-depan.create', compact('halamanDepan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul_atas_kecil' => 'required',
            'judul_atas_besar' => 'required',
            'judul_atas_animasi' => 'required',
            'judul_atas_foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        // Upload foto laboratorium
        if ($request->hasFile('judul_atas_foto')) {
            $fotoPath = $request->file('judul_atas_foto')->store('judul_atas_foto');
            $input['judul_atas_foto'] = $fotoPath;
        }
        try {
            HalamanDepan::create($input);
        } catch (\Throwable $th) {
            return redirect()->back()->with('toast_error', 'Task Created Successfully!');
        }


        return view('pages.backend.halaman-depan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(HalamanDepan $halamanDepan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HalamanDepan $halamanDepan, $id)
    {
        $halamanDepan = HalamanDepan::findOrFail($id);

        return view('pages.backend.halaman-depan.edit', compact('halamanDepan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HalamanDepan $halamanDepan, $id)
    {
        $request->validate([
            'judul_atas_kecil' => 'required',
            'judul_atas_besar' => 'required',
            'judul_atas_animasi' => 'required',
            'judul_atas_foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        // Upload foto laboratorium jika ada
        if ($request->hasFile('judul_atas_foto')) {
            $fotoPath = $request->file('judul_atas_foto')->store('judul_atas_foto');
            $input['judul_atas_foto'] = $fotoPath;
        }

        $halamanDepan = HalamanDepan::findOrFail($id);

        $halamanDepan->update($input);

        return redirect()->route('halamandepan.index')
            ->with('toast_success', 'Halaman Depan Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HalamanDepan $halamanDepan)
    {
        //
    }
}
