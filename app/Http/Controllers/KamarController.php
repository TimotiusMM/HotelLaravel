<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $data = Kamar::select('id', 'nama_kamar', 'jum_kamar', 'harga_kamar')
            ->when($search, function ($query, $search) {
                return $query->where('nama_kamar', 'like', "%{$search}%")
                    ->orWhere('harga_kamar', 'like', "%{$search}%");
            })
            ->paginate(50);
        return view('kamar.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kamar' => 'required|min:3',
            'foto' => 'required|image|mimes:png,jpg,jpeg|dimensions:min_widht=1000,min_height=500|between:50,1000',
            'jumlah' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required|min:10'
        ]);
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
