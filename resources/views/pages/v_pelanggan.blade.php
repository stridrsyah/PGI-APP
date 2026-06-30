@extends('layouts.main')
@section('title', 'Manajemen Pelanggan — Planet Gadget Indonesia')
@section('search-placeholder', 'Cari nama, nomor HP, atau email pelanggan...')

@push('styles')
<style>
    .table-row-hover:hover {
        background: #f5f2fd;
    }

    .modal-backdrop {
        background: rgba(0, 0, 0, 0.45);
        backdrop-filter: blur(4px);
    }

    .form-input {
        @apply w-full bg-surface-container-low border border-outline-variant rounded-xl px-4 py-3 text-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all;
    }

    .form-label {
        @apply block text-label-md font-semibold text-on-surface-variant uppercase tracking-wider mb-1.5;
    }

    .btn-primary {
        @apply flex items-center gap-2 bg-primary text-on-primary px-5 py-2.5 rounded-xl font-semibold hover:brightness-110 active:scale-95 transition-all shadow-md shadow-primary/20;
    }

    .btn-ghost {
        @apply flex items-center gap-2 border border-outline-variant text-on-surface-variant px-5 py-2.5 rounded-xl font-medium hover:bg-surface-container transition-all;
    }
</style>
@endpush

@section('content')

{{-- ── Flash Messages ── --}}
@if(session('success'))
<div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl mb-6">
    <span class="material-symbols-outlined text-green-600" style="font-variation-settings:'FILL' 1;">check_circle</span>
    <span class="text-body-md font-medium">{{ session('success') }}</span>
</div>
@endif

{{-- ── Page Header ── --}}
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <nav class="flex items-center gap-1.5 text-label-md text-on-surface-variant mb-2">
            <a href="{{ route('dashboard') }}" class="hover:text-primary transition-colors">Dashboard</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Pelanggan</span>
        </nav>
        <h1 class="text-headline-lg font-headline-lg text-on-surface">Manajemen Pelanggan</h1>
        <p class="text-body-md text-on-surface-variant mt-1">Kelola database pelanggan & program loyalitas toko.</p>
    </div>
    <button onclick="openModal('modal-tambah')" class="btn-primary">
        <span class="material-symbols-outlined">person_add</span>
        Tambah Pelanggan
    </button>
</div>

{{-- ── Stats Cards ── --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    @foreach([
    ['icon'=>'groups', 'label'=>'Total Pelanggan', 'value'=> $pelanggans->total(), 'color'=>'primary', 'fill'=>1],
    ['icon'=>'star', 'label'=>'Pelanggan Gold', 'value'=> $pelanggans->getCollection()->where('kategori','gold')->count(), 'color'=>'tertiary', 'fill'=>1],
    ['icon'=>'workspace_premium','label'=>'Pelanggan Platinum', 'value'=> $pelanggans->getCollection()->where('kategori','platinum')->count(), 'color'=>'secondary', 'fill'=>1],
    ['icon'=>'trending_up', 'label'=>'Transaksi Total', 'value'=> $pelanggans->getCollection()->sum('penjualans_count'), 'color'=>'error', 'fill'=>0],
    ] as $card)
    <div class="bg-white rounded-2xl p-5 border border-outline-variant/40 shadow-sm hover:-translate-y-0.5 transition-transform">
        <div class="w-10 h-10 rounded-xl bg-{{ $card['color'] }}/10 flex items-center justify-center mb-3">
            <span class="material-symbols-outlined text-{{ $card['color'] }} text-[20px]"
                style="font-variation-settings:'FILL' {{ $card['fill'] }};">{{ $card['icon'] }}</span>
        </div>
        <p class="text-label-md text-on-surface-variant uppercase tracking-wider">{{ $card['label'] }}</p>
        <p class="text-2xl font-bold text-on-surface mt-0.5">{{ number_format($card['value']) }}</p>
    </div>
    @endforeach
</div>

{{-- ── Filter ── --}}
<div class="bg-white rounded-2xl border border-outline-variant/40 shadow-sm p-5 mb-6">
    <form method="GET" action="{{ route('pelanggan.index') }}" class="flex flex-wrap gap-3">
        <div class="flex-1 min-w-[220px] relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-[18px]">search</span>
            <input name="search" value="{{ request('search') }}" placeholder="Nama, nomor HP, atau email..."
                class="w-full pl-10 pr-4 h-11 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
        </div>
        <select name="kategori" class="h-11 px-4 pr-8 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:outline-none focus:border-primary appearance-none">
            <option value="">Semua Kategori</option>
            @foreach(['reguler'=>'Reguler','silver'=>'Silver','gold'=>'Gold','platinum'=>'Platinum'] as $val => $lbl)
            <option value="{{ $val }}" {{ request('kategori') == $val ? 'selected' : '' }}>{{ $lbl }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn-primary h-11 px-5">
            <span class="material-symbols-outlined text-[18px]">filter_list</span> Filter
        </button>
        @if(request()->hasAny(['search','kategori']))
        <a href="{{ route('pelanggan.index') }}" class="btn-ghost h-11 px-5">
            <span class="material-symbols-outlined text-[18px]">close</span> Reset
        </a>
        @endif
    </form>
</div>

{{-- ── Table ── --}}
<div class="bg-white rounded-2xl border border-outline-variant/40 shadow-sm overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant/30">
        <p class="text-body-md text-on-surface-variant">
            Menampilkan <span class="font-semibold text-on-surface">{{ $pelanggans->firstItem() }}–{{ $pelanggans->lastItem() }}</span>
            dari <span class="font-semibold text-on-surface">{{ $pelanggans->total() }}</span> pelanggan
        </p>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-body-md">
            <thead>
                <tr class="border-b border-outline-variant/30 bg-surface-container-low">
                    <th class="text-left px-6 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Pelanggan</th>
                    <th class="text-left px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Kontak</th>
                    <th class="text-center px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Kategori</th>
                    <th class="text-center px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Transaksi</th>
                    <th class="text-left px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Alamat</th>
                    <th class="text-center px-6 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/20">
                @forelse($pelanggans as $p)
                @php
                $initials = collect(explode(' ', $p->nama))->map(fn($w) => strtoupper($w[0]))->take(2)->join('');
                $katColors = ['reguler'=>['bg-secondary/10','text-secondary'],'silver'=>['bg-outline/10','text-outline'],'gold'=>['bg-tertiary/10','text-tertiary'],'platinum'=>['bg-primary/10','text-primary']];
                $kc = $katColors[$p->kategori] ?? ['bg-surface-container','text-on-surface-variant'];
                @endphp
                <tr class="table-row-hover transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center font-bold text-primary text-sm flex-shrink-0">
                                {{ $initials }}
                            </div>
                            <div>
                                <p class="font-semibold text-on-surface">{{ $p->nama }}</p>
                                <p class="text-label-md text-on-surface-variant">{{ $p->email ?? '—' }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-on-surface">{{ $p->no_hp }}</p>
                    </td>
                    <td class="px-4 py-4 text-center">
                        <span class="px-3 py-1 rounded-full text-label-md font-bold capitalize {{ $kc[0] }} {{ $kc[1] }}">
                            {{ ucfirst($p->kategori) }}
                        </span>
                    </td>
                    <td class="px-4 py-4 text-center">
                        <span class="text-lg font-bold text-on-surface">{{ $p->penjualans_count }}</span>
                        <p class="text-label-md text-on-surface-variant">transaksi</p>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-on-surface-variant text-body-md max-w-[180px] truncate">{{ $p->alamat ?? '—' }}</p>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-1">
                            <button onclick="openEditModal({{ $p->id }}, '{{ addslashes($p->nama) }}', '{{ $p->no_hp }}', '{{ $p->email }}', '{{ addslashes($p->alamat ?? '') }}', '{{ $p->kategori }}')"
                                class="p-2 rounded-lg hover:bg-primary/10 text-primary transition-colors" title="Edit">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button onclick="confirmDelete({{ $p->id }}, '{{ addslashes($p->nama) }}')"
                                class="p-2 rounded-lg hover:bg-error/10 text-error transition-colors" title="Hapus">
                                <span class="material-symbols-outlined text-[18px]">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-16 text-center">
                        <div class="flex flex-col items-center gap-3 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[48px] opacity-30">group_off</span>
                            <p class="text-body-lg font-medium">Belum ada data pelanggan</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($pelanggans->hasPages())
    <div class="px-6 py-4 border-t border-outline-variant/30 flex items-center justify-between">
        <p class="text-body-md text-on-surface-variant">Halaman {{ $pelanggans->currentPage() }} dari {{ $pelanggans->lastPage() }}</p>
        <div class="flex gap-1">
            @if(!$pelanggans->onFirstPage())
            <a href="{{ $pelanggans->previousPageUrl() }}" class="px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </a>
            @endif
            @foreach($pelanggans->getUrlRange(max(1,$pelanggans->currentPage()-2), min($pelanggans->lastPage(),$pelanggans->currentPage()+2)) as $page => $url)
            <a href="{{ $url }}" class="w-9 h-9 rounded-lg flex items-center justify-center text-body-md transition-colors {{ $page == $pelanggans->currentPage() ? 'bg-primary text-on-primary font-semibold' : 'text-on-surface-variant hover:bg-surface-container' }}">{{ $page }}</a>
            @endforeach
            @if($pelanggans->hasMorePages())
            <a href="{{ $pelanggans->nextPageUrl() }}" class="px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </a>
            @endif
        </div>
    </div>
    @endif
</div>

{{-- ══ MODAL TAMBAH ══ --}}
<div id="modal-tambah" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-tambah')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-lg max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white rounded-t-3xl border-b border-outline-variant/30 px-8 py-5 flex items-center justify-between">
            <div>
                <h2 class="text-headline-md font-headline-md text-on-surface">Tambah Pelanggan</h2>
                <p class="text-body-md text-on-surface-variant">Isi data pelanggan baru.</p>
            </div>
            <button onclick="closeModal('modal-tambah')" class="p-2 rounded-full hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">close</span>
            </button>
        </div>
        <form method="POST" action="{{ route('pelanggan.store') }}" class="px-8 py-6 space-y-5">
            @csrf
            <div>
                <label class="form-label">Nama Lengkap <span class="text-error">*</span></label>
                <input name="nama" type="text" required value="{{ old('nama') }}" placeholder="Nama lengkap pelanggan" class="form-input" />
                @error('nama')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="form-label">Nomor HP <span class="text-error">*</span></label>
                <input name="no_hp" type="text" required value="{{ old('no_hp') }}" placeholder="08xx-xxxx-xxxx" class="form-input" />
                @error('no_hp')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="form-label">Email</label>
                <input name="email" type="email" value="{{ old('email') }}" placeholder="email@contoh.com" class="form-input" />
            </div>
            <div>
                <label class="form-label">Kategori Pelanggan <span class="text-error">*</span></label>
                <select name="kategori" required class="form-input">
                    @foreach(['reguler'=>'Reguler','silver'=>'Silver','gold'=>'Gold','platinum'=>'Platinum'] as $val => $lbl)
                    <option value="{{ $val }}" {{ old('kategori','reguler') == $val ? 'selected' : '' }}>{{ $lbl }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="form-label">Alamat</label>
                <textarea name="alamat" rows="3" placeholder="Alamat lengkap pelanggan..." class="form-input resize-none">{{ old('alamat') }}</textarea>
            </div>
            <div class="flex justify-end gap-3 pt-2 border-t border-outline-variant/30">
                <button type="button" onclick="closeModal('modal-tambah')" class="btn-ghost">Batal</button>
                <button type="submit" class="btn-primary">
                    <span class="material-symbols-outlined text-[18px]">person_add</span> Simpan
                </button>
            </div>
        </form>
    </div>
</div>

{{-- ══ MODAL EDIT ══ --}}
<div id="modal-edit" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-edit')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-lg max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white rounded-t-3xl border-b border-outline-variant/30 px-8 py-5 flex items-center justify-between">
            <h2 class="text-headline-md font-headline-md text-on-surface">Edit Pelanggan</h2>
            <button onclick="closeModal('modal-edit')" class="p-2 rounded-full hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">close</span>
            </button>
        </div>
        <form id="form-edit" method="POST" action="" class="px-8 py-6 space-y-5">
            @csrf @method('PUT')
            <div>
                <label class="form-label">Nama Lengkap <span class="text-error">*</span></label>
                <input id="edit-nama" name="nama" type="text" required class="form-input" />
            </div>
            <div>
                <label class="form-label">Nomor HP <span class="text-error">*</span></label>
                <input id="edit-nohp" name="no_hp" type="text" required class="form-input" />
            </div>
            <div>
                <label class="form-label">Email</label>
                <input id="edit-email" name="email" type="email" class="form-input" />
            </div>
            <div>
                <label class="form-label">Kategori <span class="text-error">*</span></label>
                <select id="edit-kategori" name="kategori" required class="form-input">
                    @foreach(['reguler'=>'Reguler','silver'=>'Silver','gold'=>'Gold','platinum'=>'Platinum'] as $val => $lbl)
                    <option value="{{ $val }}">{{ $lbl }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="form-label">Alamat</label>
                <textarea id="edit-alamat" name="alamat" rows="3" class="form-input resize-none"></textarea>
            </div>
            <div class="flex justify-end gap-3 pt-2 border-t border-outline-variant/30">
                <button type="button" onclick="closeModal('modal-edit')" class="btn-ghost">Batal</button>
                <button type="submit" class="btn-primary">
                    <span class="material-symbols-outlined text-[18px]">save</span> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

{{-- ══ MODAL HAPUS ══ --}}
<div id="modal-hapus" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-hapus')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-md p-8 text-center">
        <div class="w-16 h-16 rounded-full bg-error/10 flex items-center justify-center mx-auto mb-4">
            <span class="material-symbols-outlined text-error text-[32px]" style="font-variation-settings:'FILL' 1;">person_remove</span>
        </div>
        <h3 class="text-headline-md font-headline-md text-on-surface mb-2">Hapus Pelanggan?</h3>
        <p id="hapus-nama" class="text-body-lg font-bold text-on-surface mb-4">—</p>
        <p class="text-body-md text-error/80 mb-6">Data riwayat transaksi juga akan terpengaruh.</p>
        <form id="form-hapus" method="POST" action="">
            @csrf @method('DELETE')
            <div class="flex gap-3">
                <button type="button" onclick="closeModal('modal-hapus')" class="btn-ghost flex-1 justify-center">Batal</button>
                <button type="submit" class="flex-1 flex items-center justify-center gap-2 bg-error text-white px-5 py-2.5 rounded-xl font-semibold hover:brightness-110 active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-[18px]">delete</span> Ya, Hapus
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
        document.getElementById(id).classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
        document.getElementById(id).classList.remove('flex');
        document.body.style.overflow = '';
    }

    function openEditModal(id, nama, noHp, email, alamat, kategori) {
        document.getElementById('form-edit').action = `/pelanggan/${id}`;
        document.getElementById('edit-nama').value = nama;
        document.getElementById('edit-nohp').value = noHp;
        document.getElementById('edit-email').value = email;
        document.getElementById('edit-alamat').value = alamat;
        document.getElementById('edit-kategori').value = kategori;
        openModal('modal-edit');
    }

    function confirmDelete(id, nama) {
        document.getElementById('form-hapus').action = `/pelanggan/${id}`;
        document.getElementById('hapus-nama').textContent = nama;
        openModal('modal-hapus');
    }
    @if($errors - > any()) openModal('modal-tambah');
    @endif
</script>
@endpush