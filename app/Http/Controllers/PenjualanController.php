<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use App\Models\Handphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::with('pelanggan')->latest()->paginate(10);
        return view('pages.v_penjualan', compact('penjualans'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::orderBy('nama')->get();
        $handphones = Handphone::where('is_aktif', true)->where('stok', '>', 0)->with('merek')->get();
        return view('pages.v_penjualan', compact('pelanggans', 'handphones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id'         => 'nullable|exists:pelanggans,id',
            'tanggal'              => 'required|date',
            'metode_pembayaran'    => 'required|string|max:50',
            'catatan'              => 'nullable|string',
            'items'                => 'required|array|min:1',
            'items.*.handphone_id' => 'required|exists:handphones,id',
            'items.*.qty'          => 'required|integer|min:1',
            'items.*.harga_satuan' => 'required|numeric|min:0',
        ]);

        DB::transaction(function () use ($request) {
            $total = collect($request->items)->sum(
                fn($item) => $item['qty'] * $item['harga_satuan']
            );

            $penjualan = Penjualan::create([
                'no_invoice'        => 'INV-' . date('ymd') . '-' . str_pad(Penjualan::count() + 1, 4, '0', STR_PAD_LEFT),
                'pelanggan_id'      => $request->pelanggan_id,
                'user_id'           => Auth::id(),
                'tanggal'           => $request->tanggal,
                'total'             => $total,
                'metode_pembayaran' => $request->metode_pembayaran,
                'status'            => 'selesai',
                'catatan'           => $request->catatan,
            ]);

            foreach ($request->items as $item) {
                DetailPenjualan::create([
                    'penjualan_id' => $penjualan->id,
                    'handphone_id' => $item['handphone_id'],
                    'qty'          => $item['qty'],
                    'harga_satuan' => $item['harga_satuan'],
                    'subtotal'     => $item['qty'] * $item['harga_satuan'],
                ]);
                Handphone::find($item['handphone_id'])->decrement('stok', $item['qty']);
            }
        });

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil disimpan.');
    }

    public function show(Penjualan $penjualan)
    {
        $penjualan->load('pelanggan', 'details.handphone.merek', 'user');
        return view('pages.v_penjualan', compact('penjualan'));
    }

    public function edit(Penjualan $penjualan)
    {
        $pelanggans = Pelanggan::orderBy('nama')->get();
        $handphones = Handphone::where('is_aktif', true)->with('merek')->get();
        $penjualan->load('details');
        return view('pages.v_penjualan', compact('penjualan', 'pelanggans', 'handphones'));
    }

    public function update(Request $request, Penjualan $penjualan)
    {
        $data = $request->validate([
            'status'  => 'required|in:selesai,proses,batal',
            'catatan' => 'nullable|string',
        ]);
        $penjualan->update($data);
        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil diperbarui.');
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil dihapus.');
    }
}
