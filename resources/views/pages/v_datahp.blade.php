@extends('layouts.main')
@section('title', 'Data HP — Planet Gadget Indonesia')
@section('search-placeholder', 'Cari nama HP, SKU, atau IMEI...')

@push('styles')
<style>
    .table-row-hover:hover {
        background: #f5f2fd;
    }

    .modal-backdrop {
        background: rgba(0, 0, 0, 0.45);
        backdrop-filter: blur(4px);
    }

    .badge-stok-ok {
        background: #dcfce7;
        color: #166534;
    }

    .badge-stok-tipis {
        background: #fef9c3;
        color: #854d0e;
    }

    .badge-stok-habis {
        background: #fee2e2;
        color: #991b1b;
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
<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
    class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl mb-6">
    <span class="material-symbols-outlined text-green-600" style="font-variation-settings:'FILL' 1;">check_circle</span>
    <span class="text-body-md font-medium">{{ session('success') }}</span>
</div>
@endif
@if(session('error'))
<div class="flex items-center gap-3 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-xl mb-6">
    <span class="material-symbols-outlined text-red-600" style="font-variation-settings:'FILL' 1;">error</span>
    <span class="text-body-md font-medium">{{ session('error') }}</span>
</div>
@endif

{{-- ── Page Header ── --}}
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <nav class="flex items-center gap-1.5 text-label-md text-on-surface-variant mb-2">
            <a href="{{ route('dashboard') }}" class="hover:text-primary transition-colors">Dashboard</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Data HP</span>
        </nav>
        <h1 class="text-headline-lg font-headline-lg text-on-surface">Data HP</h1>
        <p class="text-body-md text-on-surface-variant mt-1">Kelola inventaris handphone & perangkat elektronik.</p>
    </div>
    <button onclick="openModal('modal-tambah')"
        class="btn-primary">
        <span class="material-symbols-outlined">add</span>
        Tambah Perangkat Baru
    </button>
</div>

{{-- ── Stats Cards ── --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    @php
    $totalStok = $dataHp->sum('stok') ?? 0;
    $totalProduk = $dataHp->total() ?? 0;
    $stokMenipis = $dataHp->filter(fn($d) => $d->stok > 0 && $d->stok <= 5)->count();
        $stokHabis = $dataHp->filter(fn($d) => $d->stok == 0)->count();
        @endphp
        @foreach([
        ['icon'=>'inventory_2', 'label'=>'Total Produk', 'value'=> $totalProduk, 'color'=>'primary', 'fill'=>1],
        ['icon'=>'warehouse', 'label'=>'Total Stok', 'value'=> $totalStok, 'color'=>'secondary', 'fill'=>0],
        ['icon'=>'warning', 'label'=>'Stok Menipis', 'value'=> $stokMenipis, 'color'=>'tertiary', 'fill'=>1],
        ['icon'=>'do_not_disturb_on','label'=>'Stok Habis', 'value'=> $stokHabis, 'color'=>'error', 'fill'=>1],
        ] as $card)
        <div class="bg-white rounded-2xl p-5 border border-outline-variant/40 shadow-sm hover:-translate-y-0.5 transition-transform">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-xl bg-{{ $card['color'] }}/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-{{ $card['color'] }} text-[20px]"
                        style="font-variation-settings:'FILL' {{ $card['fill'] }};">{{ $card['icon'] }}</span>
                </div>
            </div>
            <p class="text-label-md text-on-surface-variant uppercase tracking-wider">{{ $card['label'] }}</p>
            <p class="text-2xl font-bold text-on-surface mt-0.5">{{ number_format($card['value']) }}</p>
        </div>
        @endforeach
</div>

{{-- ── Filter & Search ── --}}
<div class="bg-white rounded-2xl border border-outline-variant/40 shadow-sm p-5 mb-6">
    <form method="GET" action="{{ route('datahp.index') }}" class="flex flex-wrap gap-3">
        <div class="flex-1 min-w-[220px] relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-[18px]">search</span>
            <input name="search" value="{{ request('search') }}"
                placeholder="Nama HP, SKU, atau IMEI..."
                class="w-full pl-10 pr-4 h-11 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
        </div>
        <select name="merek_id" class="h-11 px-4 pr-8 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:outline-none focus:border-primary appearance-none">
            <option value="">Semua Merek</option>
            @foreach($mereks as $merek)
            <option value="{{ $merek->id }}" {{ request('merek_id') == $merek->id ? 'selected' : '' }}>
                {{ $merek->nama }}
            </option>
            @endforeach
        </select>
        <select name="stok_filter" class="h-11 px-4 pr-8 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:outline-none focus:border-primary appearance-none">
            <option value="">Semua Stok</option>
            <option value="tersedia" {{ request('stok_filter') === 'tersedia'  ? 'selected' : '' }}>Tersedia</option>
            <option value="menipis" {{ request('stok_filter') === 'menipis'   ? 'selected' : '' }}>Menipis (≤5)</option>
            <option value="habis" {{ request('stok_filter') === 'habis'     ? 'selected' : '' }}>Habis</option>
        </select>
        <button type="submit" class="btn-primary h-11 px-5">
            <span class="material-symbols-outlined text-[18px]">filter_list</span> Filter
        </button>
        @if(request()->hasAny(['search','merek_id','stok_filter']))
        <a href="{{ route('datahp.index') }}" class="btn-ghost h-11 px-5">
            <span class="material-symbols-outlined text-[18px]">close</span> Reset
        </a>
        @endif
    </form>
</div>

{{-- ── Data Table ── --}}
<div class="bg-white rounded-2xl border border-outline-variant/40 shadow-sm overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant/30">
        <p class="text-body-md text-on-surface-variant">
            Menampilkan <span class="font-semibold text-on-surface">{{ $dataHp->firstItem() }}–{{ $dataHp->lastItem() }}</span>
            dari <span class="font-semibold text-on-surface">{{ $dataHp->total() }}</span> produk
        </p>
        <div class="flex items-center gap-2 text-label-md text-on-surface-variant">
            <span class="material-symbols-outlined text-[16px]">sort</span> Terbaru
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-body-md">
            <thead>
                <tr class="border-b border-outline-variant/30 bg-surface-container-low">
                    <th class="text-left px-6 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Perangkat</th>
                    <th class="text-left px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Merek</th>
                    <th class="text-left px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">SKU / IMEI</th>
                    <th class="text-center px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Stok</th>
                    <th class="text-right px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Harga Beli</th>
                    <th class="text-right px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Harga Jual</th>
                    <th class="text-center px-6 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/20">
                @forelse($dataHp as $hp)
                <tr class="table-row-hover transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-primary/8 flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-primary text-[20px]"
                                    style="font-variation-settings:'FILL' 1;">smartphone</span>
                            </div>
                            <div>
                                <p class="font-semibold text-on-surface">{{ $hp->nama_produk }}</p>
                                <p class="text-label-md text-on-surface-variant">{{ $hp->deskripsi ? Str::limit($hp->deskripsi, 40) : '—' }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <span class="px-2.5 py-1 rounded-full bg-primary/10 text-primary text-label-md font-semibold">
                            {{ $hp->merek->nama ?? '—' }}
                        </span>
                    </td>
                    <td class="px-4 py-4">
                        <p class="font-mono text-body-md text-on-surface">{{ $hp->sku }}</p>
                        @if($hp->imei)
                        <p class="font-mono text-label-md text-on-surface-variant">{{ $hp->imei }}</p>
                        @endif
                    </td>
                    <td class="px-4 py-4 text-center">
                        @php
                        $stokClass = $hp->stok == 0 ? 'badge-stok-habis' : ($hp->stok <= 5 ? 'badge-stok-tipis' : 'badge-stok-ok' );
                            $stokLabel=$hp->stok == 0 ? 'Habis' : ($hp->stok <= 5 ? 'Menipis' : 'OK' );
                                @endphp
                                <div class="inline-flex flex-col items-center gap-0.5">
                                <span class="text-lg font-bold text-on-surface">{{ $hp->stok }}</span>
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold {{ $stokClass }}">{{ $stokLabel }}</span>
    </div>
    </td>
    <td class="px-4 py-4 text-right">
        <span class="font-semibold text-on-surface">Rp {{ number_format($hp->harga_beli, 0, ',', '.') }}</span>
    </td>
    <td class="px-4 py-4 text-right">
        <span class="font-bold text-primary">Rp {{ number_format($hp->harga_jual, 0, ',', '.') }}</span>
        @php $margin = $hp->harga_beli > 0 ? round(($hp->harga_jual - $hp->harga_beli) / $hp->harga_beli * 100, 1) : 0; @endphp
        <p class="text-label-md text-green-600">+{{ $margin }}% margin</p>
    </td>
    <td class="px-6 py-4">
        <div class="flex items-center justify-center gap-1">
            <button onclick="openEditModal({{ $hp->id }}, '{{ addslashes($hp->nama_produk) }}', {{ $hp->merek_id }}, '{{ $hp->sku }}', '{{ $hp->imei }}', {{ $hp->stok }}, {{ $hp->harga_beli }}, {{ $hp->harga_jual }}, '{{ addslashes($hp->deskripsi ?? '') }}')"
                class="p-2 rounded-lg hover:bg-primary/10 text-primary transition-colors" title="Edit">
                <span class="material-symbols-outlined text-[18px]">edit</span>
            </button>
            <button onclick="confirmDelete({{ $hp->id }}, '{{ addslashes($hp->nama_produk) }}')"
                class="p-2 rounded-lg hover:bg-error/10 text-error transition-colors" title="Hapus">
                <span class="material-symbols-outlined text-[18px]">delete</span>
            </button>
        </div>
    </td>
    </tr>
    @empty
    <tr>
        <td colspan="7" class="px-6 py-16 text-center">
            <div class="flex flex-col items-center gap-3 text-on-surface-variant">
                <span class="material-symbols-outlined text-[48px] opacity-30">inventory_2</span>
                <p class="text-body-lg font-medium">Belum ada data HP</p>
                <p class="text-body-md opacity-60">Tambahkan perangkat pertama Anda</p>
            </div>
        </td>
    </tr>
    @endforelse
    </tbody>
    </table>
</div>

{{-- Pagination --}}
@if($dataHp->hasPages())
<div class="px-6 py-4 border-t border-outline-variant/30 flex items-center justify-between">
    <p class="text-body-md text-on-surface-variant">Halaman {{ $dataHp->currentPage() }} dari {{ $dataHp->lastPage() }}</p>
    <div class="flex gap-1">
        @if($dataHp->onFirstPage())
        <span class="px-3 py-2 rounded-lg text-on-surface-variant/40 cursor-not-allowed">
            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
        </span>
        @else
        <a href="{{ $dataHp->previousPageUrl() }}" class="px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors">
            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
        </a>
        @endif
        @foreach($dataHp->getUrlRange(max(1,$dataHp->currentPage()-2), min($dataHp->lastPage(),$dataHp->currentPage()+2)) as $page => $url)
        <a href="{{ $url }}" class="w-9 h-9 rounded-lg flex items-center justify-center text-body-md transition-colors
                   {{ $page == $dataHp->currentPage() ? 'bg-primary text-on-primary font-semibold' : 'text-on-surface-variant hover:bg-surface-container' }}">
            {{ $page }}
        </a>
        @endforeach
        @if($dataHp->hasMorePages())
        <a href="{{ $dataHp->nextPageUrl() }}" class="px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors">
            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
        </a>
        @else
        <span class="px-3 py-2 rounded-lg text-on-surface-variant/40 cursor-not-allowed">
            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
        </span>
        @endif
    </div>
</div>
@endif
</div>

{{-- ══════════════════════════════════════
     MODAL: TAMBAH DATA HP
═══════════════════════════════════════ --}}
<div id="modal-tambah" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-tambah')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white rounded-t-3xl border-b border-outline-variant/30 px-8 py-5 flex items-center justify-between">
            <div>
                <h2 class="text-headline-md font-headline-md text-on-surface">Tambah Perangkat Baru</h2>
                <p class="text-body-md text-on-surface-variant">Isi detail produk HP yang akan ditambahkan.</p>
            </div>
            <button onclick="closeModal('modal-tambah')" class="p-2 rounded-full hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">close</span>
            </button>
        </div>
        <form method="POST" action="{{ route('datahp.store') }}" class="px-8 py-6 space-y-5">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="md:col-span-2">
                    <label class="form-label">Nama Produk <span class="text-error">*</span></label>
                    <input name="nama_produk" type="text" required value="{{ old('nama_produk') }}"
                        placeholder="Contoh: iPhone 15 Pro Max 256GB" class="form-input" />
                    @error('nama_produk')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="form-label">Merek <span class="text-error">*</span></label>
                    <select name="merek_id" required class="form-input">
                        <option value="">— Pilih Merek —</option>
                        @foreach($mereks as $merek)
                        <option value="{{ $merek->id }}" {{ old('merek_id') == $merek->id ? 'selected' : '' }}>{{ $merek->nama }}</option>
                        @endforeach
                    </select>
                    @error('merek_id')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="form-label">SKU <span class="text-error">*</span></label>
                    <input name="sku" type="text" required value="{{ old('sku') }}"
                        placeholder="Contoh: IPH-15PM-256-BLK" class="form-input font-mono" />
                    @error('sku')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="form-label">IMEI</label>
                    <input name="imei" type="text" value="{{ old('imei') }}"
                        placeholder="15 digit IMEI (opsional)" class="form-input font-mono" />
                </div>
                <div>
                    <label class="form-label">Stok Awal <span class="text-error">*</span></label>
                    <input name="stok" type="number" min="0" required value="{{ old('stok', 0) }}" class="form-input" />
                    @error('stok')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="form-label">Harga Beli (Rp) <span class="text-error">*</span></label>
                    <input name="harga_beli" type="number" min="0" required value="{{ old('harga_beli') }}"
                        placeholder="0" class="form-input" />
                    @error('harga_beli')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="md:col-span-2">
                    <label class="form-label">Harga Jual (Rp) <span class="text-error">*</span></label>
                    <input name="harga_jual" type="number" min="0" required value="{{ old('harga_jual') }}"
                        placeholder="0" class="form-input" />
                    @error('harga_jual')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="md:col-span-2">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" rows="3" placeholder="Spesifikasi singkat produk..."
                        class="form-input resize-none">{{ old('deskripsi') }}</textarea>
                </div>
            </div>
            <div class="flex justify-end gap-3 pt-2 border-t border-outline-variant/30">
                <button type="button" onclick="closeModal('modal-tambah')" class="btn-ghost">Batal</button>
                <button type="submit" class="btn-primary">
                    <span class="material-symbols-outlined text-[18px]">save</span> Simpan Produk
                </button>
            </div>
        </form>
    </div>
</div>

{{-- ══════════════════════════════════════
     MODAL: EDIT DATA HP
═══════════════════════════════════════ --}}
<div id="modal-edit" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-edit')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white rounded-t-3xl border-b border-outline-variant/30 px-8 py-5 flex items-center justify-between">
            <div>
                <h2 class="text-headline-md font-headline-md text-on-surface">Edit Perangkat</h2>
                <p class="text-body-md text-on-surface-variant">Perbarui informasi produk HP.</p>
            </div>
            <button onclick="closeModal('modal-edit')" class="p-2 rounded-full hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">close</span>
            </button>
        </div>
        <form id="form-edit" method="POST" action="" class="px-8 py-6 space-y-5">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="md:col-span-2">
                    <label class="form-label">Nama Produk <span class="text-error">*</span></label>
                    <input id="edit-nama" name="nama_produk" type="text" required class="form-input" />
                </div>
                <div>
                    <label class="form-label">Merek <span class="text-error">*</span></label>
                    <select id="edit-merek" name="merek_id" required class="form-input">
                        <option value="">— Pilih Merek —</option>
                        @foreach($mereks as $merek)
                        <option value="{{ $merek->id }}">{{ $merek->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="form-label">SKU <span class="text-error">*</span></label>
                    <input id="edit-sku" name="sku" type="text" required class="form-input font-mono" />
                </div>
                <div>
                    <label class="form-label">IMEI</label>
                    <input id="edit-imei" name="imei" type="text" class="form-input font-mono" />
                </div>
                <div>
                    <label class="form-label">Stok <span class="text-error">*</span></label>
                    <input id="edit-stok" name="stok" type="number" min="0" required class="form-input" />
                </div>
                <div>
                    <label class="form-label">Harga Beli (Rp) <span class="text-error">*</span></label>
                    <input id="edit-harga-beli" name="harga_beli" type="number" min="0" required class="form-input" />
                </div>
                <div class="md:col-span-2">
                    <label class="form-label">Harga Jual (Rp) <span class="text-error">*</span></label>
                    <input id="edit-harga-jual" name="harga_jual" type="number" min="0" required class="form-input" />
                </div>
                <div class="md:col-span-2">
                    <label class="form-label">Deskripsi</label>
                    <textarea id="edit-deskripsi" name="deskripsi" rows="3" class="form-input resize-none"></textarea>
                </div>
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

{{-- ══════════════════════════════════════
     MODAL: KONFIRMASI HAPUS
═══════════════════════════════════════ --}}
<div id="modal-hapus" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-hapus')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-md p-8 text-center">
        <div class="w-16 h-16 rounded-full bg-error/10 flex items-center justify-center mx-auto mb-4">
            <span class="material-symbols-outlined text-error text-[32px]" style="font-variation-settings:'FILL' 1;">delete_forever</span>
        </div>
        <h3 class="text-headline-md font-headline-md text-on-surface mb-2">Hapus Produk?</h3>
        <p class="text-body-md text-on-surface-variant mb-1">Anda akan menghapus:</p>
        <p id="hapus-nama" class="text-body-lg font-bold text-on-surface mb-4">—</p>
        <p class="text-body-md text-error/80 mb-6">Tindakan ini tidak dapat dibatalkan.</p>
        <form id="form-hapus" method="POST" action="">
            @csrf
            @method('DELETE')
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
        const modal = document.getElementById(id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    function openEditModal(id, nama, merekId, sku, imei, stok, hargaBeli, hargaJual, deskripsi) {
        document.getElementById('form-edit').action = `/data-hp/${id}`;
        document.getElementById('edit-nama').value = nama;
        document.getElementById('edit-sku').value = sku;
        document.getElementById('edit-imei').value = imei;
        document.getElementById('edit-stok').value = stok;
        document.getElementById('edit-harga-beli').value = hargaBeli;
        document.getElementById('edit-harga-jual').value = hargaJual;
        document.getElementById('edit-deskripsi').value = deskripsi;
        document.getElementById('edit-merek').value = merekId;
        openModal('modal-edit');
    }

    function confirmDelete(id, nama) {
        document.getElementById('form-hapus').action = `/data-hp/${id}`;
        document.getElementById('hapus-nama').textContent = nama;
        openModal('modal-hapus');l/
    }
    // Open tambah modal if there are validation errors
    @if($errors - > any() && old('_token'))
    openModal('modal-tambah');
    @endif
</script>
@endpush