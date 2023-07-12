<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        dd($barang);
    }

    public function create()
    {
        // return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang'  => 'required',
            'stok_barang'  => 'required',
            'harga_barang' => 'required',
            'is_available' => 'required',
        ]);

        Barang::create($request->all());

        // return redirect()->route('barang.index')
        //     ->with('success', 'Barang created successfully.');
    }

    public function show(Barang $barang)
    {
        // return view('barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        // return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang'  => 'required',
            'stok_barang'  => 'required',
            'harga_barang' => 'required',
            'is_available' => 'required',
        ]);

        $barang->update($request->all());

        // return redirect()->route('barang.index')
        //     ->with('success', 'Barang updated successfully');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        // return redirect()->route('barang.index')
        //     ->with('success', 'Barang deleted successfully');
    }
}