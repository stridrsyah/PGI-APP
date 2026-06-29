<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::withCount('penjualans')->latest()->paginate(10);
        return view('pages.v_pelanggan', compact('pelanggans'));
    }

    public function create()
    {
        return view('pages.v_pelanggan');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'     => 'required|string|max:150',
            'kategori' => 'required|in:regular,silver,gold',
            'kontak'   => 'required|string|max:20',
            'email'    => 'nullable|email|max:150',
            'alamat'   => 'nullable|string',
        ]);
        $data['poin'] = 0;

        Pelanggan::create($data);
        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan.');
    }

    public function show(Pelanggan $pelanggan)
    {
        $pelanggan->load('penjualans', 'bookings', 'servis');
        return view('pages.v_pelanggan', compact('pelanggan'));
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pages.v_pelanggan', compact('pelanggan'));
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $data = $request->validate([
            'nama'     => 'required|string|max:150',
            'kategori' => 'required|in:regular,silver,gold',
            'kontak'   => 'required|string|max:20',
            'email'    => 'nullable|email|max:150',
            'alamat'   => 'nullable|string',
            'poin'     => 'integer|min:0',
        ]);

        $pelanggan->update($data);
        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diperbarui.');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus.');
    }
}
