<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    public function index()
    {
        $mereks = Merek::withCount('handphones')->latest()->paginate(10);
        return view('pages.v_merek', compact('mereks'));
    }

    public function create()
    {
        return view('pages.v_merek');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'      => 'required|string|max:100|unique:mereks,nama',
            'kategori'  => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'logo'      => 'nullable|image|max:2048',
            'is_aktif'  => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('mereks', 'public');
        }
        $data['is_aktif'] = $request->boolean('is_aktif', true);

        Merek::create($data);
        return redirect()->route('merek.index')->with('success', 'Merek berhasil ditambahkan.');
    }

    public function show(Merek $merek)
    {
        $merek->loadCount('handphones');
        return view('pages.v_merek', compact('merek'));
    }

    public function edit(Merek $merek)
    {
        return view('pages.v_merek', compact('merek'));
    }

    public function update(Request $request, Merek $merek)
    {
        $data = $request->validate([
            'nama'      => 'required|string|max:100|unique:mereks,nama,' . $merek->id,
            'kategori'  => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'logo'      => 'nullable|image|max:2048',
            'is_aktif'  => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('mereks', 'public');
        }
        $data['is_aktif'] = $request->boolean('is_aktif', true);

        $merek->update($data);
        return redirect()->route('merek.index')->with('success', 'Merek berhasil diperbarui.');
    }

    public function destroy(Merek $merek)
    {
        $merek->delete();
        return redirect()->route('merek.index')->with('success', 'Merek berhasil dihapus.');
    }
}
