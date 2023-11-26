<?php

namespace App\Http\Controllers;

use App\Models\Resepsionis;
use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('proses_pesan');
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
            'nama_pemesan' => 'required',
            'email' => 'required',
            'notelp' => 'required',
            'nama_tamu' => 'required',
            'tipe_kamar' => 'required',
            'cekIn' => 'required',
            'cekOut' => 'required',
            'jumlah_kamar' => 'required',
        ]);

        // Create a new Resepsionis record
        $resepsionis = Resepsionis::create([
            'nama_pemesan' => $request->nama_pemesan,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'nama_tamu' => $request->nama_tamu,
            'tipe_kamar' => $request->tipe_kamar,
            'cekIn' => $request->cekIn,
            'cekOut' => $request->cekOut,
            'jumlah_kamar' => $request->jumlah_kamar,
        ]);

        // Fetch all Resepsionis data
        $allResepsionis = Resepsionis::all();

        // Modify the return statement to include the data
        return redirect()->route('home')->with(['status' => 'store', 'allResepsionis' => $allResepsionis]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
