<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
       // $transaksi = Transaksi::all();
        // dd($transaksi);

        // tanpa pagination/
        $transaksi = Transaksi::all();
        
        return view('transaksi.index',compact('transaksi'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'nama_customer'  => 'required',
            'jumlah_item'    => 'required',
            'total_item'     => 'required',
        ]);

        $transaksi = Transaksi::create($request->all());

         return redirect()->route('transaksi.index')->with('success', 'Transaksi created successfully.');
    }

    public function show(Transaksi $transaksi)
    {
         return view('transaksi.show', compact('transaksi'));
    }

    public function edit(Transaksi $transaksi)
    {
         return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'nama_customer'  => 'required',
            'jumlah_item'    => 'required',
            'total_item'     => 'required',
        ]);

        $transaksi->update([
            'nama_customer'  => ucfirst($request->nama_customer),
            'jumlah_item'    => $request->jumlah_item,
            'total_item'     => $request->total_item,
        ]);

        // $transaksi->update($request->all());

         return redirect()->route('transaksi.index')
             ->with('success', 'transaksi updated successfully');
    }

    public function destroy(transaksi $transaksi)
    {
        $transaksi->delete();

         return redirect()->route('transaksi.index')
            ->with('success', 'transaksi deleted successfully');
    }
}
