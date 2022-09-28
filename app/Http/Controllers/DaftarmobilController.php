<?php

namespace App\Http\Controllers;

use App\Models\Daftarmobil;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarmobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $daftarmobil = Daftarmobil::all();

        return view('mobil.index', [
            "daftarmobil" => $daftarmobil,
            'vendor' => Vendor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mobil.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'gambar' => 'image|file|max:1024',
            'vendor_id' => 'required',
            'nama_mobil' => 'required',
            'transmisi' => 'required',
            'harga_sewa' => 'required',
            'denda' => 'required',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('car-images');
        }

        daftarmobil::create($validatedData);

        return redirect('mobil')->with('success', 'Data Mobil Berhasi ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftarmobil  $daftarmobil
     * @return \Illuminate\Http\Response
     */
    public function show(Daftarmobil $daftarmobil)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftarmobil  $daftarmobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftarmobil $mobil)
    {
        //
        return view('mobil.edit', [
            'mobil' => $mobil,
            'vendor' => Vendor::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftarmobil  $daftarmobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftarmobil $mobil)
    {
        //
        $rules = [
            'gambar' => 'image|file|max:1024',
            'vendor_id' => 'required',
            'nama_mobil' => 'required',
            'transmisi' => 'required',
            'harga_sewa' => 'required',
            'denda' => 'required',
        ];


        // Daftarmobil::where('id', $mobil->id)->update($validatedData);
        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('car-images');
        }

        Daftarmobil::where('id', $mobil->id)
            ->update($validatedData);

        return redirect('mobil')->with('success', "Data Mobil $mobil->nama_mobil Berhasi diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftarmobil  $daftarmobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftarmobil $mobil)
    {
        if ($mobil->gambar) {
            Storage::delete($mobil->gambar);
        }
        daftarmobil::destroy($mobil->id);

        return redirect('mobil')->with('success', "Data Mobil $mobil->nama_mobil Berhasi dihapus");
    }
}
