<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::withCount('pembelians')->latest()->paginate(10);
        return view('pages.v_supplier', compact('suppliers'));
    }

    public function create()
    {
        return view('pages.v_supplier');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'     => 'required|string|max:150',
            'kategori' => 'required|string|max:100',
            'kontak'   => 'required|string|max:20',
            'email'    => 'nullable|email|max:150',
            'alamat'   => 'nullable|string',
        ]);
        $data['is_aktif'] = true;

        Supplier::create($data);
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function show(Supplier $supplier)
    {
        $supplier->load('pembelians');
        return view('pages.v_supplier', compact('supplier'));
    }

    public function edit(Supplier $supplier)
    {
        return view('pages.v_supplier', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $data = $request->validate([
            'nama'     => 'required|string|max:150',
            'kategori' => 'required|string|max:100',
            'kontak'   => 'required|string|max:20',
            'email'    => 'nullable|email|max:150',
            'alamat'   => 'nullable|string',
            'is_aktif' => 'boolean',
        ]);
        $data['is_aktif'] = $request->boolean('is_aktif', true);

        $supplier->update($data);
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil diperbarui.');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil dihapus.');
    }
}
