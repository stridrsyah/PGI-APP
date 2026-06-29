<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ManajemenController extends Controller
{
    /*──────────────────────────────────────────────
     | PENGGUNA (CRUD)  – hanya Owner
     ──────────────────────────────────────────────*/

    public function index()
    {
        $users = User::latest()->paginate(15);
        return view('pages.v_manajemen', compact('users'));
    }

    public function create()
    {
        return view('pages.v_manajemen');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role'     => 'required|in:owner,admin',
            'is_aktif' => 'boolean',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['is_aktif'] = $request->boolean('is_aktif', true);

        User::create($data);

        return redirect()->route('manajemen.pengguna.index')
            ->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit(User $user)
    {
        return view('pages.v_manajemen', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Owner tidak boleh mengubah role dirinya sendiri
        if ($user->id === Auth::id() && $request->role !== 'owner') {
            return back()->withErrors(['role' => 'Anda tidak bisa mengubah role akun Anda sendiri.']);
        }

        $data = $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:8|confirmed',
            'role'     => 'required|in:owner,admin',
            'is_aktif' => 'boolean',
        ]);

        if (filled($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $data['is_aktif'] = $request->boolean('is_aktif', true);

        $user->update($data);

        return redirect()->route('manajemen.pengguna.index')
            ->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        // Owner tidak bisa hapus dirinya sendiri
        if ($user->id === Auth::id()) {
            return back()->withErrors(['delete' => 'Anda tidak bisa menghapus akun Anda sendiri.']);
        }

        $user->delete();

        return redirect()->route('manajemen.pengguna.index')
            ->with('success', 'Pengguna berhasil dihapus.');
    }

    /*──────────────────────────────────────────────
     | PENGATURAN SISTEM  – hanya Owner
     ──────────────────────────────────────────────*/

    public function pengaturanIndex()
    {
        return view('pages.v_manajemen');
    }

    public function pengaturanUpdate(Request $request)
    {
        // Simpan ke config / tabel settings sesuai kebutuhan project
        return back()->with('success', 'Pengaturan berhasil disimpan.');
    }
}
