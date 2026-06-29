<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function index()
    {
        $servis = Servis::with('pelanggan')->latest()->paginate(10);
        return view('pages.v_servis', compact('servis'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::orderBy('nama')->get();
        return view('pages.v_servis', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pelanggan_id'    => 'required|exists:pelanggans,id',
            'model_perangkat' => 'required|string|max:150',
            'keluhan'         => 'required|string',
            'teknisi'         => 'nullable|string|max:100',
            'estimasi_biaya'  => 'nullable|numeric|min:0',
            'tanggal_masuk'   => 'required|date',
            'catatan'         => 'nullable|string',
        ]);
        $data['no_servis'] = 'SRV-' . date('Ymd') . '-' . str_pad(Servis::count() + 1, 4, '0', STR_PAD_LEFT);
        $data['status']    = 'antri';

        Servis::create($data);
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil ditambahkan.');
    }

    public function show(Servis $servi)
    {
        $servi->load('pelanggan');
        return view('pages.v_servis', compact('servi'));
    }

    public function edit(Servis $servi)
    {
        $pelanggans = Pelanggan::orderBy('nama')->get();
        return view('pages.v_servis', compact('servi', 'pelanggans'));
    }

    public function update(Request $request, Servis $servi)
    {
        $data = $request->validate([
            'pelanggan_id'    => 'required|exists:pelanggans,id',
            'model_perangkat' => 'required|string|max:150',
            'keluhan'         => 'required|string',
            'teknisi'         => 'nullable|string|max:100',
            'estimasi_biaya'  => 'nullable|numeric|min:0',
            'biaya_akhir'     => 'nullable|numeric|min:0',
            'tanggal_masuk'   => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_masuk',
            'catatan'         => 'nullable|string',
        ]);
        $servi->update($data);
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil diperbarui.');
    }

    public function updateStatus(Request $request, Servis $servi)
    {
        $request->validate([
            'status' => 'required|in:antri,proses,selesai,diambil,batal',
        ]);
        $update = ['status' => $request->status];
        if ($request->status === 'selesai') {
            $update['tanggal_selesai'] = now()->toDateString();
        }
        $servi->update($update);
        return back()->with('success', 'Status servis diperbarui.');
    }

    public function destroy(Servis $servi)
    {
        $servi->delete();
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil dihapus.');
    }
}
