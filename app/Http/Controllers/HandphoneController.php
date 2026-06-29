<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use App\Models\Merek;
use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    public function index()
    {
        $handphones = Handphone::with('merek')->latest()->paginate(10);
        $mereks     = Merek::where('is_aktif', true)->get();
        return view('pages.v_datahp', compact('handphones', 'mereks'));
    }

    public function create()
    {
        $mereks = Merek::where('is_aktif', true)->get();
        return view('pages.v_datahp', compact('mereks'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'merek_id'   => 'required|exists:mereks,id',
            'nama'       => 'required|string|max:150',
            'sku'        => 'required|string|max:100|unique:handphones,sku',
            'imei'       => 'nullable|string|max:20',
            'kategori'   => 'required|in:flagship,mid-range,entry-level',
            'stok'       => 'required|integer|min:0',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'deskripsi'  => 'nullable|string',
            'foto'       => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('handphones', 'public');
        }
        $data['is_aktif'] = true;

        Handphone::create($data);
        return redirect()->route('datahp.index')->with('success', 'Data HP berhasil ditambahkan.');
    }

    public function show(Handphone $handphone)
    {
        $handphone->load('merek');
        return view('pages.v_datahp', compact('handphone'));
    }

    public function edit(Handphone $handphone)
    {
        $mereks = Merek::where('is_aktif', true)->get();
        return view('pages.v_datahp', compact('handphone', 'mereks'));
    }

    public function update(Request $request, Handphone $handphone)
    {
        $data = $request->validate([
            'merek_id'   => 'required|exists:mereks,id',
            'nama'       => 'required|string|max:150',
            'sku'        => 'required|string|max:100|unique:handphones,sku,' . $handphone->id,
            'imei'       => 'nullable|string|max:20',
            'kategori'   => 'required|in:flagship,mid-range,entry-level',
            'stok'       => 'required|integer|min:0',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'deskripsi'  => 'nullable|string',
            'foto'       => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('handphones', 'public');
        }

        $handphone->update($data);
        return redirect()->route('datahp.index')->with('success', 'Data HP berhasil diperbarui.');
    }

    public function destroy(Handphone $handphone)
    {
        $handphone->delete();
        return redirect()->route('datahp.index')->with('success', 'Data HP berhasil dihapus.');
    }
}
