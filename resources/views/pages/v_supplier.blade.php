@extends('layouts.main')
@section('title', 'Manajemen Supplier — Planet Gadget Indonesia')
@section('search-placeholder', 'Cari nama, kontak, atau email supplier...')

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

@if(session('success'))
<div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl mb-6">
    <span class="material-symbols-outlined text-green-600" style="font-variation-settings:'FILL' 1;">check_circle</span>
    <span class="text-body-md font-medium">{{ session('success') }}</span>
</div>
@endif

{{-- ── Header ── --}}
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <nav class="flex items-center gap-1.5 text-label-md text-on-surface-variant mb-2">
            <a href="{{ route('dashboard') }}" class="hover:text-primary transition-colors">Dashboard</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Supplier</span>
        </nav>
        <h1 class="text-headline-lg font-headline-lg text-on-surface">Manajemen Supplier</h1>
        <p class="text-body-md text-on-surface-variant mt-1">Kelola data rekanan dan pemasok perangkat.</p>
    </div>
    <button onclick="openModal('modal-tambah')" class="btn-primary">
        <span class="material-symbols-outlined">add_business</span>
        Tambah Supplier
    </button>
</div>

{{-- ── Stats ── --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    @php
    $colSupplier = $suppliers->getCollection();
    $totalAktif = $colSupplier->where('status','aktif')->count();
    $totalNonaktif = $colSupplier->where('status','nonaktif')->count();
    $totalPercobaan= $colSupplier->where('status','masa_percobaan')->count();
    @endphp
    @foreach([
    ['icon'=>'inventory_2', 'label'=>'Total Supplier', 'value'=> $suppliers->total(), 'color'=>'primary', 'fill'=>1],
    ['icon'=>'check_circle','label'=>'Aktif', 'value'=> $totalAktif, 'color'=>'secondary', 'fill'=>1],
    ['icon'=>'schedule', 'label'=>'Masa Percobaan', 'value'=> $totalPercobaan, 'color'=>'tertiary', 'fill'=>0],
    ['icon'=>'cancel', 'label'=>'Nonaktif', 'value'=> $totalNonaktif, 'color'=>'error', 'fill'=>1],
    ] as $c)
    <div class="bg-white rounded-2xl p-5 border border-outline-variant/40 shadow-sm hover:-translate-y-0.5 transition-transform">
        <div class="w-10 h-10 rounded-xl bg-{{ $c['color'] }}/10 flex items-center justify-center mb-3">
            <span class="material-symbols-outlined text-{{ $c['color'] }} text-[20px]"
                style="font-variation-settings:'FILL' {{ $c['fill'] }};">{{ $c['icon'] }}</span>
        </div>
        <p class="text-label-md text-on-surface-variant uppercase tracking-wider">{{ $c['label'] }}</p>
        <p class="text-2xl font-bold text-on-surface mt-0.5">{{ number_format($c['value']) }}</p>
    </div>
    @endforeach
</div>

{{-- ── Filter ── --}}
<div class="bg-white rounded-2xl border border-outline-variant/40 shadow-sm p-5 mb-6">
    <form method="GET" action="{{ route('supplier.index') }}" class="flex flex-wrap gap-3">
        <div class="flex-1 min-w-[220px] relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-[18px]">search</span>
            <input name="search" value="{{ request('search') }}" placeholder="Nama, kontak, atau email..."
                class="w-full pl-10 pr-4 h-11 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
        </div>
        <select name="status" class="h-11 px-4 pr-8 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:outline-none focus:border-primary appearance-none">
            <option value="">Semua Status</option>
            <option value="aktif" {{ request('status')=='aktif' ? 'selected':'' }}>Aktif</option>
            <option value="nonaktif" {{ request('status')=='nonaktif' ? 'selected':'' }}>Nonaktif</option>
            <option value="masa_percobaan" {{ request('status')=='masa_percobaan' ? 'selected':'' }}>Masa Percobaan</option>
        </select>
        <button type="submit" class="btn-primary h-11 px-5">
            <span class="material-symbols-outlined text-[18px]">filter_list</span> Filter
        </button>
        @if(request()->hasAny(['search','status']))
        <a href="{{ route('supplier.index') }}" class="btn-ghost h-11 px-5">
            <span class="material-symbols-outlined text-[18px]">close</span> Reset
        </a>
        @endif
    </form>
</div>

{{-- ── Table ── --}}
<div class="bg-white rounded-2xl border border-outline-variant/40 shadow-sm overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant/30">
        <p class="text-body-md text-on-surface-variant">
            Menampilkan <span class="font-semibold text-on-surface">{{ $suppliers->firstItem() }}–{{ $suppliers->lastItem() }}</span>
            dari <span class="font-semibold text-on-surface">{{ $suppliers->total() }}</span> supplier
        </p>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-body-md">
            <thead>
                <tr class="border-b border-outline-variant/30 bg-surface-container-low">
                    <th class="text-left px-6 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Nama Supplier</th>
                    <th class="text-left px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Kategori</th>
                    <th class="text-left px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Kontak</th>
                    <th class="text-left px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Alamat</th>
                    <th class="text-center px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Status</th>
                    <th class="text-center px-6 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/20">
                @forelse($suppliers as $s)
                @php
                $statusMap = [
                'aktif' => ['bg-green-100 text-green-800','check_circle'],
                'nonaktif' => ['bg-red-100 text-red-800','cancel'],
                'masa_percobaan' => ['bg-yellow-100 text-yellow-800','schedule'],
                ];
                $sm = $statusMap[$s->status] ?? ['bg-surface-container text-on-surface-variant','help'];
                @endphp
                <tr class="table-row-hover transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-secondary text-[20px]"
                                    style="font-variation-settings:'FILL' 1;">business</span>
                            </div>
                            <div>
                                <p class="font-semibold text-on-surface">{{ $s->nama }}</p>
                                <p class="text-label-md text-on-surface-variant">{{ $s->email ?? '—' }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <span class="px-2.5 py-1 rounded-full bg-primary/10 text-primary text-label-md font-semibold">
                            {{ $s->kategori }}
                        </span>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-on-surface">{{ $s->kontak }}</p>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-on-surface-variant max-w-[200px] truncate">{{ $s->alamat ?? '—' }}</p>
                    </td>
                    <td class="px-4 py-4 text-center">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-label-md font-bold {{ $sm[0] }}">
                            <span class="material-symbols-outlined text-[14px]" style="font-variation-settings:'FILL' 1;">{{ $sm[1] }}</span>
                            {{ ucfirst(str_replace('_',' ',$s->status)) }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-1">
                            <button onclick="openEditModal({{ $s->id }}, '{{ addslashes($s->nama) }}', '{{ $s->kategori }}', '{{ $s->kontak }}', '{{ $s->email }}', '{{ addslashes($s->alamat ?? '') }}', '{{ $s->status }}')"
                                class="p-2 rounded-lg hover:bg-primary/10 text-primary transition-colors">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button onclick="confirmDelete({{ $s->id }}, '{{ addslashes($s->nama) }}')"
                                class="p-2 rounded-lg hover:bg-error/10 text-error transition-colors">
                                <span class="material-symbols-outlined text-[18px]">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-16 text-center">
                        <div class="flex flex-col items-center gap-3 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[48px] opacity-30">store_off</span>
                            <p class="text-body-lg font-medium">Belum ada data supplier</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($suppliers->hasPages())
    <div class="px-6 py-4 border-t border-outline-variant/30 flex items-center justify-between">
        <p class="text-body-md text-on-surface-variant">Halaman {{ $suppliers->currentPage() }} dari {{ $suppliers->lastPage() }}</p>
        <div class="flex gap-1">
            @if(!$suppliers->onFirstPage())
            <a href="{{ $suppliers->previousPageUrl() }}" class="px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"><span class="material-symbols-outlined text-[18px]">chevron_left</span></a>
            @endif
            @foreach($suppliers->getUrlRange(max(1,$suppliers->currentPage()-2),min($suppliers->lastPage(),$suppliers->currentPage()+2)) as $pg => $url)
            <a href="{{ $url }}" class="w-9 h-9 rounded-lg flex items-center justify-center text-body-md transition-colors {{ $pg==$suppliers->currentPage() ? 'bg-primary text-on-primary font-semibold':'text-on-surface-variant hover:bg-surface-container' }}">{{ $pg }}</a>
            @endforeach
            @if($suppliers->hasMorePages())
            <a href="{{ $suppliers->nextPageUrl() }}" class="px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"><span class="material-symbols-outlined text-[18px]">chevron_right</span></a>
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
                <h2 class="text-headline-md font-headline-md text-on-surface">Tambah Supplier</h2>
                <p class="text-body-md text-on-surface-variant">Isi data rekanan baru.</p>
            </div>
            <button onclick="closeModal('modal-tambah')" class="p-2 rounded-full hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">close</span>
            </button>
        </div>
        <form method="POST" action="{{ route('supplier.store') }}" class="px-8 py-6 space-y-5">
            @csrf
            <div>
                <label class="form-label">Nama Perusahaan <span class="text-error">*</span></label>
                <input name="nama" type="text" required value="{{ old('nama') }}" placeholder="PT. Nama Perusahaan" class="form-input" />
                @error('nama')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="form-label">Kategori <span class="text-error">*</span></label>
                <input name="kategori" type="text" required value="{{ old('kategori') }}" placeholder="Smartphone, Aksesori, dll." class="form-input" />
                @error('kategori')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="form-label">No. Kontak <span class="text-error">*</span></label>
                <input name="kontak" type="text" required value="{{ old('kontak') }}" placeholder="08xx-xxxx-xxxx" class="form-input" />
                @error('kontak')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="form-label">Email</label>
                <input name="email" type="email" value="{{ old('email') }}" placeholder="perusahaan@email.com" class="form-input" />
            </div>
            <div>
                <label class="form-label">Status <span class="text-error">*</span></label>
                <select name="status" required class="form-input">
                    <option value="aktif" {{ old('status','aktif')=='aktif' ? 'selected':'' }}>Aktif</option>
                    <option value="masa_percobaan" {{ old('status')=='masa_percobaan' ? 'selected':'' }}>Masa Percobaan</option>
                    <option value="nonaktif" {{ old('status')=='nonaktif' ? 'selected':'' }}>Nonaktif</option>
                </select>
            </div>
            <div>
                <label class="form-label">Alamat</label>
                <textarea name="alamat" rows="3" placeholder="Alamat lengkap supplier..." class="form-input resize-none">{{ old('alamat') }}</textarea>
            </div>
            <div class="flex justify-end gap-3 pt-2 border-t border-outline-variant/30">
                <button type="button" onclick="closeModal('modal-tambah')" class="btn-ghost">Batal</button>
                <button type="submit" class="btn-primary"><span class="material-symbols-outlined text-[18px]">save</span> Simpan</button>
            </div>
        </form>
    </div>
</div>

{{-- ══ MODAL EDIT ══ --}}
<div id="modal-edit" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-edit')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-lg max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white rounded-t-3xl border-b border-outline-variant/30 px-8 py-5 flex items-center justify-between">
            <h2 class="text-headline-md font-headline-md text-on-surface">Edit Supplier</h2>
            <button onclick="closeModal('modal-edit')" class="p-2 rounded-full hover:bg-surface-container"><span class="material-symbols-outlined text-on-surface-variant">close</span></button>
        </div>
        <form id="form-edit" method="POST" action="" class="px-8 py-6 space-y-5">
            @csrf @method('PUT')
            <div><label class="form-label">Nama Perusahaan <span class="text-error">*</span></label><input id="edit-nama" name="nama" type="text" required class="form-input" /></div>
            <div><label class="form-label">Kategori <span class="text-error">*</span></label><input id="edit-kategori" name="kategori" type="text" required class="form-input" /></div>
            <div><label class="form-label">No. Kontak <span class="text-error">*</span></label><input id="edit-kontak" name="kontak" type="text" required class="form-input" /></div>
            <div><label class="form-label">Email</label><input id="edit-email" name="email" type="email" class="form-input" /></div>
            <div>
                <label class="form-label">Status <span class="text-error">*</span></label>
                <select id="edit-status" name="status" required class="form-input">
                    <option value="aktif">Aktif</option>
                    <option value="masa_percobaan">Masa Percobaan</option>
                    <option value="nonaktif">Nonaktif</option>
                </select>
            </div>
            <div><label class="form-label">Alamat</label><textarea id="edit-alamat" name="alamat" rows="3" class="form-input resize-none"></textarea></div>
            <div class="flex justify-end gap-3 pt-2 border-t border-outline-variant/30">
                <button type="button" onclick="closeModal('modal-edit')" class="btn-ghost">Batal</button>
                <button type="submit" class="btn-primary"><span class="material-symbols-outlined text-[18px]">save</span> Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

{{-- ══ MODAL HAPUS ══ --}}
<div id="modal-hapus" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-hapus')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-md p-8 text-center">
        <div class="w-16 h-16 rounded-full bg-error/10 flex items-center justify-center mx-auto mb-4">
            <span class="material-symbols-outlined text-error text-[32px]" style="font-variation-settings:'FILL' 1;">delete_forever</span>
        </div>
        <h3 class="text-headline-md font-headline-md mb-2">Hapus Supplier?</h3>
        <p id="hapus-nama" class="text-body-lg font-bold text-on-surface mb-4">—</p>
        <p class="text-body-md text-error/80 mb-6">Tindakan ini tidak dapat dibatalkan.</p>
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

    function openEditModal(id, nama, kategori, kontak, email, alamat, status) {
        document.getElementById('form-edit').action = `/supplier/${id}`;
        document.getElementById('edit-nama').value = nama;
        document.getElementById('edit-kategori').value = kategori;
        document.getElementById('edit-kontak').value = kontak;
        document.getElementById('edit-email').value = email;
        document.getElementById('edit-alamat').value = alamat;
        document.getElementById('edit-status').value = status;
        openModal('modal-edit');
    }

    function confirmDelete(id, nama) {
        document.getElementById('form-hapus').action = `/supplier/${id}`;
        document.getElementById('hapus-nama').textContent = nama;
        openModal('modal-hapus');
    }
    @if($errors - > any()) openModal('modal-tambah');
    @endif
</script>
@endpush