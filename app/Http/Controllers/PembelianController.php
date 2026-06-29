<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\DetailPembelian;
use App\Models\Supplier;
use App\Models\Handphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelians = Pembelian::with('supplier')->latest()->paginate(10);
        return view('pages.v_pembelian', compact('pembelians'));
    }

    public function create()
    {
        $suppliers  = Supplier::where('is_aktif', true)->get();
        $handphones = Handphone::where('is_aktif', true)->with('merek')->get();
        return view('pages.v_pembelian', compact('suppliers', 'handphones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_id'          => 'required|exists:suppliers,id',
            'tanggal'              => 'required|date',
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

            $pembelian = Pembelian::create([
                'no_po'       => 'PO-' . date('ymd') . '-' . str_pad(Pembelian::count() + 1, 4, '0', STR_PAD_LEFT),
                'supplier_id' => $request->supplier_id,
                'tanggal'     => $request->tanggal,
                'total_harga' => $total,
                'status'      => 'pending',
                'catatan'     => $request->catatan,
            ]);

            foreach ($request->items as $item) {
                DetailPembelian::create([
                    'pembelian_id' => $pembelian->id,
                    'handphone_id' => $item['handphone_id'],
                    'qty'          => $item['qty'],
                    'harga_satuan' => $item['harga_satuan'],
                    'subtotal'     => $item['qty'] * $item['harga_satuan'],
                ]);
                Handphone::find($item['handphone_id'])->increment('stok', $item['qty']);
            }
        });

        return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil disimpan.');
    }

    public function show(Pembelian $pembelian)
    {
        $pembelian->load('supplier', 'details.handphone.merek');
        return view('pages.v_pembelian', compact('pembelian'));
    }

    public function edit(Pembelian $pembelian)
    {
        $suppliers  = Supplier::where('is_aktif', true)->get();
        $handphones = Handphone::where('is_aktif', true)->with('merek')->get();
        $pembelian->load('details');
        return view('pages.v_pembelian', compact('pembelian', 'suppliers', 'handphones'));
    }

    public function update(Request $request, Pembelian $pembelian)
    {
        $data = $request->validate([
            'status'  => 'required|in:pending,diterima,dibatalkan',
            'catatan' => 'nullable|string',
        ]);
        $pembelian->update($data);
        return redirect()->route('pembelian.index')->with('success', 'Status pembelian diperbarui.');
    }

    public function destroy(Pembelian $pembelian)
    {
        $pembelian->delete();
        return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil dihapus.');
    }
}
