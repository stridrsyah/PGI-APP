@extends('layouts.main')
@section('title', 'Merek HP — Planet Gadget Indonesia')
@section('search-placeholder', 'Cari nama merek atau kategori...')

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

{{-- Header --}}
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <nav class="flex items-center gap-1.5 text-label-md text-on-surface-variant mb-2">
            <a href="{{ route('dashboard') }}" class="hover:text-primary transition-colors">Dashboard</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Merek HP</span>
        </nav>
        <h1 class="text-headline-lg font-headline-lg text-on-surface">Merek & Kategori HP</h1>
        <p class="text-body-md text-on-surface-variant mt-1">Kelola daftar merek dan kategorisasi produk.</p>
    </div>
    <button onclick="openModal('modal-tambah')" class="btn-primary">
        <span class="material-symbols-outlined">add</span>
        Tambah Merek
    </button>
</div>

{{-- Stats --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    @foreach([
    ['icon'=>'branding_watermark', 'label'=>'Total Merek', 'value'=> $mereks->total(), 'color'=>'primary', 'fill'=>1],
    ['icon'=>'check_circle', 'label'=>'Aktif', 'value'=> $mereks->getCollection()->where('status','aktif')->count(), 'color'=>'secondary', 'fill'=>1],
    ['icon'=>'smartphone', 'label'=>'Total Produk', 'value'=> $mereks->getCollection()->sum('data_hps_count'), 'color'=>'tertiary', 'fill'=>0],
    ['icon'=>'block', 'label'=>'Nonaktif', 'value'=> $mereks->getCollection()->where('status','nonaktif')->count(), 'color'=>'error', 'fill'=>1],
    ] as $c)
    <div class="bg-white rounded-2xl p-5 border border-outline-variant/40 shadow-sm hover:-translate-y-0.5 transition-transform">
        <div class="w-10 h-10 rounded-xl bg-{{ $c['color'] }}/10 flex items-center justify-center mb-3">
            <span class="material-symbols-outlined text-{{ $c['color'] }} text-[20px]" style="font-variation-settings:'FILL' {{ $c['fill'] }};">{{ $c['icon'] }}</span>
        </div>
        <p class="text-label-md text-on-surface-variant uppercase tracking-wider">{{ $c['label'] }}</p>
        <p class="text-2xl font-bold text-on-surface mt-0.5">{{ number_format($c['value']) }}</p>
    </div>
    @endforeach
</div>

{{-- Filter --}}
<div class="bg-white rounded-2xl border border-outline-variant/40 shadow-sm p-5 mb-6">
    <form method="GET" action="{{ route('merek.index') }}" class="flex flex-wrap gap-3">
        <div class="flex-1 min-w-[220px] relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-[18px]">search</span>
            <input name="search" value="{{ request('search') }}" placeholder="Nama merek atau kategori..."
                class="w-full pl-10 pr-4 h-11 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
        </div>
        <button type="submit" class="btn-primary h-11 px-5"><span class="material-symbols-outlined text-[18px]">search</span> Cari</button>
        @if(request('search'))
        <a href="{{ route('merek.index') }}" class="btn-ghost h-11 px-5"><span class="material-symbols-outlined text-[18px]">close</span> Reset</a>
        @endif
    </form>
</div>

{{-- Table --}}
<div class="bg-white rounded-2xl border border-outline-variant/40 shadow-sm overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant/30">
        <p class="text-body-md text-on-surface-variant">
            Menampilkan <span class="font-semibold text-on-surface">{{ $mereks->firstItem() }}–{{ $mereks->lastItem() }}</span>
            dari <span class="font-semibold text-on-surface">{{ $mereks->total() }}</span> merek
        </p>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-body-md">
            <thead>
                <tr class="border-b border-outline-variant/30 bg-surface-container-low">
                    <th class="text-left px-6 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Merek</th>
                    <th class="text-left px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Kategori</th>
                    <th class="text-left px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Deskripsi</th>
                    <th class="text-center px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Jumlah Produk</th>
                    <th class="text-center px-4 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Status</th>
                    <th class="text-center px-6 py-3 text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/20">
                @forelse($mereks as $m)
                <tr class="table-row-hover transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center font-bold text-primary text-sm">
                                {{ strtoupper(substr($m->nama,0,2)) }}
                            </div>
                            <p class="font-semibold text-on-surface">{{ $m->nama }}</p>
                        </div>
                    </td>
                    <td class="px-4 py-4">
                        <span class="px-2.5 py-1 rounded-full bg-secondary/10 text-secondary text-label-md font-semibold">{{ $m->kategori }}</span>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-on-surface-variant max-w-[200px] truncate">{{ $m->deskripsi ?? '—' }}</p>
                    </td>
                    <td class="px-4 py-4 text-center">
                        <span class="text-lg font-bold text-on-surface">{{ $m->data_hps_count }}</span>
                        <p class="text-label-md text-on-surface-variant">produk</p>
                    </td>
                    <td class="px-4 py-4 text-center">
                        @if($m->status === 'aktif')
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-label-md font-bold bg-green-100 text-green-800">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span> Aktif
                        </span>
                        @else
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-label-md font-bold bg-red-100 text-red-800">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500 inline-block"></span> Nonaktif
                        </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-1">
                            <button onclick="openEditModal({{ $m->id }}, '{{ addslashes($m->nama) }}', '{{ $m->kategori }}', '{{ addslashes($m->deskripsi ?? '') }}', '{{ $m->status }}')"
                                class="p-2 rounded-lg hover:bg-primary/10 text-primary transition-colors">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <button onclick="confirmDelete({{ $m->id }}, '{{ addslashes($m->nama) }}')"
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
                            <span class="material-symbols-outlined text-[48px] opacity-30">branding_watermark</span>
                            <p class="text-body-lg font-medium">Belum ada data merek</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($mereks->hasPages())
    <div class="px-6 py-4 border-t border-outline-variant/30 flex items-center justify-between">
        <p class="text-body-md text-on-surface-variant">Halaman {{ $mereks->currentPage() }} dari {{ $mereks->lastPage() }}</p>
        <div class="flex gap-1">
            @if(!$mereks->onFirstPage())<a href="{{ $mereks->previousPageUrl() }}" class="px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"><span class="material-symbols-outlined text-[18px]">chevron_left</span></a>@endif
            @foreach($mereks->getUrlRange(max(1,$mereks->currentPage()-2),min($mereks->lastPage(),$mereks->currentPage()+2)) as $pg => $url)
            <a href="{{ $url }}" class="w-9 h-9 rounded-lg flex items-center justify-center text-body-md transition-colors {{ $pg==$mereks->currentPage() ? 'bg-primary text-on-primary font-semibold':'text-on-surface-variant hover:bg-surface-container' }}">{{ $pg }}</a>
            @endforeach
            @if($mereks->hasMorePages())<a href="{{ $mereks->nextPageUrl() }}" class="px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors"><span class="material-symbols-outlined text-[18px]">chevron_right</span></a>@endif
        </div>
    </div>
    @endif
</div>

{{-- Modal Tambah --}}
<div id="modal-tambah" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-tambah')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-md max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white rounded-t-3xl border-b border-outline-variant/30 px-8 py-5 flex items-center justify-between">
            <h2 class="text-headline-md font-headline-md text-on-surface">Tambah Merek</h2>
            <button onclick="closeModal('modal-tambah')" class="p-2 rounded-full hover:bg-surface-container"><span class="material-symbols-outlined text-on-surface-variant">close</span></button>
        </div>
        <form method="POST" action="{{ route('merek.store') }}" class="px-8 py-6 space-y-5">
            @csrf
            <div><label class="form-label">Nama Merek <span class="text-error">*</span></label><input name="nama" type="text" required value="{{ old('nama') }}" placeholder="Contoh: Samsung" class="form-input" />@error('nama')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror</div>
            <div><label class="form-label">Kategori <span class="text-error">*</span></label><input name="kategori" type="text" required value="{{ old('kategori') }}" placeholder="Smartphone, Tablet, dll." class="form-input" />@error('kategori')<p class="text-label-md text-error mt-1">{{ $message }}</p>@enderror</div>
            <div>
                <label class="form-label">Status <span class="text-error">*</span></label>
                <select name="status" required class="form-input">
                    <option value="aktif" {{ old('status','aktif')=='aktif' ? 'selected':'' }}>Aktif</option>
                    <option value="nonaktif" {{ old('status')=='nonaktif' ? 'selected':'' }}>Nonaktif</option>
                </select>
            </div>
            <div><label class="form-label">Deskripsi</label><textarea name="deskripsi" rows="3" placeholder="Deskripsi singkat merek..." class="form-input resize-none">{{ old('deskripsi') }}</textarea></div>
            <div class="flex justify-end gap-3 pt-2 border-t border-outline-variant/30">
                <button type="button" onclick="closeModal('modal-tambah')" class="btn-ghost">Batal</button>
                <button type="submit" class="btn-primary"><span class="material-symbols-outlined text-[18px]">save</span> Simpan</button>
            </div>
        </form>
    </div>
</div>

{{-- Modal Edit --}}
<div id="modal-edit" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-edit')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-md max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white rounded-t-3xl border-b border-outline-variant/30 px-8 py-5 flex items-center justify-between">
            <h2 class="text-headline-md font-headline-md text-on-surface">Edit Merek</h2>
            <button onclick="closeModal('modal-edit')" class="p-2 rounded-full hover:bg-surface-container"><span class="material-symbols-outlined text-on-surface-variant">close</span></button>
        </div>
        <form id="form-edit" method="POST" action="" class="px-8 py-6 space-y-5">
            @csrf @method('PUT')
            <div><label class="form-label">Nama Merek <span class="text-error">*</span></label><input id="edit-nama" name="nama" type="text" required class="form-input" /></div>
            <div><label class="form-label">Kategori <span class="text-error">*</span></label><input id="edit-kategori" name="kategori" type="text" required class="form-input" /></div>
            <div><label class="form-label">Status <span class="text-error">*</span></label>
                <select id="edit-status" name="status" required class="form-input">
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                </select>
            </div>
            <div><label class="form-label">Deskripsi</label><textarea id="edit-deskripsi" name="deskripsi" rows="3" class="form-input resize-none"></textarea></div>
            <div class="flex justify-end gap-3 pt-2 border-t border-outline-variant/30">
                <button type="button" onclick="closeModal('modal-edit')" class="btn-ghost">Batal</button>
                <button type="submit" class="btn-primary"><span class="material-symbols-outlined text-[18px]">save</span> Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

{{-- Modal Hapus --}}
<div id="modal-hapus" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="modal-backdrop absolute inset-0" onclick="closeModal('modal-hapus')"></div>
    <div class="relative bg-white rounded-3xl shadow-2xl w-full max-w-md p-8 text-center">
        <div class="w-16 h-16 rounded-full bg-error/10 flex items-center justify-center mx-auto mb-4">
            <span class="material-symbols-outlined text-error text-[32px]" style="font-variation-settings:'FILL' 1;">delete_forever</span>
        </div>
        <h3 class="text-headline-md font-headline-md mb-2">Hapus Merek?</h3>
        <p id="hapus-nama" class="text-body-lg font-bold text-on-surface mb-4">—</p>
        <p class="text-body-md text-error/80 mb-6">Produk dengan merek ini juga akan terpengaruh.</p>
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

    function openEditModal(id, nama, kategori, deskripsi, status) {
        document.getElementById('form-edit').action = `/merek/${id}`;
        document.getElementById('edit-nama').value = nama;
        document.getElementById('edit-kategori').value = kategori;
        document.getElementById('edit-deskripsi').value = deskripsi;
        document.getElementById('edit-status').value = status;
        openModal('modal-edit');
    }

    function confirmDelete(id, nama) {
        document.getElementById('form-hapus').action = `/merek/${id}`;
        document.getElementById('hapus-nama').textContent = nama;
        openModal('modal-hapus');
    }
    @if($errors - > any()) openModal('modal-tambah');
    @endif
</script>
@endpush