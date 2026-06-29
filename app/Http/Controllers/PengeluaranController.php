<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluarans = Pengeluaran::with('user')->latest()->paginate(10);
        return view('pages.v_pengeluaran', compact('pengeluarans'));
    }

    public function create()
    {
        return view('pages.v_pengeluaran');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal'   => 'required|date',
            'kategori'  => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'nominal'   => 'required|numeric|min:0',
            'status'    => 'required|in:lunas,pending',
            'bukti'     => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('bukti')) {
            $data['bukti'] = $request->file('bukti')->store('pengeluaran', 'public');
        }
        $data['user_id'] = Auth::id();

        Pengeluaran::create($data);
        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran berhasil dicatat.');
    }

    public function show(Pengeluaran $pengeluaran)
    {
        return view('pages.v_pengeluaran', compact('pengeluaran'));
    }

    public function edit(Pengeluaran $pengeluaran)
    {
        return view('pages.v_pengeluaran', compact('pengeluaran'));
    }

    public function update(Request $request, Pengeluaran $pengeluaran)
    {
        $data = $request->validate([
            'tanggal'   => 'required|date',
            'kategori'  => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'nominal'   => 'required|numeric|min:0',
            'status'    => 'required|in:lunas,pending',
            'bukti'     => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('bukti')) {
            $data['bukti'] = $request->file('bukti')->store('pengeluaran', 'public');
        }
        $pengeluaran->update($data);
        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran berhasil diperbarui.');
    }

    public function destroy(Pengeluaran $pengeluaran)
    {
        $pengeluaran->delete();
        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran berhasil dihapus.');
    }
}
