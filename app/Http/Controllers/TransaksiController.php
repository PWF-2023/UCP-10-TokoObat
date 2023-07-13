<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        dd($transaksi);
    }

    public function create()
    {
        // return view('transaksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_customer'  => 'required',
            'jumlah_item'    => 'required',
            'total_item'     => 'required',
            'is_available'   => 'required',
        ]);

        Transaksi::create($request->all());

        // return redirect()->route('transaksi.index')
        //     ->with('success', 'Transaksi created successfully.');
    }

    public function show(Transaksi $transaksi)
    {
        // return view('transaksi.show', compact('transaksi'));
    }

    public function edit(Transaksi $transaksi)
    {
        // return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, Transaksi $barang)
    {
        $request->validate([
            'nama_costumer'  => 'required',
            'jumlah_item'    => 'required',
            'total_item'     => 'required',
            'is_available'   => 'required',
        ]);

        $transaksi->update($request->all());

        // return redirect()->route('transaksi.index')
        //     ->with('success', 'transaksi updated successfully');
    }

    public function destroy(transaksi $transaksi)
    {
        $transaksi->delete();

        // return redirect()->route('transaksi.index')
        //     ->with('success', 'transaksi deleted successfully');
    }
}
