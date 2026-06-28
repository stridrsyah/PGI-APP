@extends('layouts.main')

@section('title', 'Booking Servis - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari booking, servis, atau pelanggan...')

@section('content')
<!-- Header & Primary Action -->
<div class="flex justify-between items-end mb-8">
    <div>
        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-1">Manajemen Booking</h2>
        <p class="text-body-md text-outline">Kelola semua janji temu servis dan pengambilan barang pelanggan.</p>
    </div>
    <button class="bg-primary hover:bg-primary-container transition-all text-white px-6 py-3 rounded-xl font-label-md flex items-center gap-2 active:scale-95 shadow-lg shadow-primary/20">
        <span class="material-symbols-outlined">add_circle</span>
        Booking Baru
    </button>
</div>
<!-- Booking Status Cards (Bento Style) -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-8">
    <div class="bg-surface-container-lowest p-padding-card rounded-2xl border border-outline-variant/50 card-elevation group transition-all hover:border-primary/50">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-primary/10 text-primary rounded-xl group-hover:bg-primary group-hover:text-white transition-colors">
                <span class="material-symbols-outlined">calendar_today</span>
            </div>
            <span class="text-label-md text-on-surface-variant bg-surface-container px-2 py-1 rounded-full">+12%</span>
        </div>
        <p class="text-outline font-label-md mb-1">Total Booking Hari Ini</p>
        <p class="font-display-lg text-display-lg text-on-surface">42</p>
    </div>
    <div class="bg-surface-container-lowest p-padding-card rounded-2xl border border-outline-variant/50 card-elevation group transition-all hover:border-primary/50">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-tertiary/10 text-tertiary rounded-xl group-hover:bg-tertiary group-hover:text-white transition-colors">
                <span class="material-symbols-outlined">pending_actions</span>
            </div>
            <span class="text-label-md text-error bg-error-container/20 px-2 py-1 rounded-full">Urgent</span>
        </div>
        <p class="text-outline font-label-md mb-1">Menunggu Konfirmasi</p>
        <p class="font-display-lg text-display-lg text-on-surface">08</p>
    </div>
    <div class="bg-surface-container-lowest p-padding-card rounded-2xl border border-outline-variant/50 card-elevation group transition-all hover:border-primary/50">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-secondary/10 text-secondary rounded-xl group-hover:bg-secondary group-hover:text-white transition-colors">
                <span class="material-symbols-outlined">moped</span>
            </div>
            <span class="text-label-md text-outline bg-surface-container px-2 py-1 rounded-full">Running</span>
        </div>
        <p class="text-outline font-label-md mb-1">Servis Berjalan</p>
        <p class="font-display-lg text-display-lg text-on-surface">15</p>
    </div>
    <div class="bg-surface-container-lowest p-padding-card rounded-2xl border border-outline-variant/50 card-elevation group transition-all hover:border-primary/50">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-primary-container/10 text-primary-container rounded-xl group-hover:bg-primary-container group-hover:text-white transition-colors">
                <span class="material-symbols-outlined">task_alt</span>
            </div>
            <span class="text-label-md text-on-primary-fixed-variant bg-secondary-container px-2 py-1 rounded-full">Selesai</span>
        </div>
        <p class="text-outline font-label-md mb-1">Selesai Hari Ini</p>
        <p class="font-display-lg text-display-lg text-on-surface">19</p>
    </div>
</div>
<!-- Table & Filtering Area -->
<div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/50 card-elevation overflow-hidden">
    <div class="p-6 border-b border-outline-variant/30 flex flex-wrap gap-4 items-center justify-between bg-surface-container-low/30">
        <div class="flex gap-2">
            <button class="px-4 py-2 bg-primary text-white rounded-full font-label-md transition-all active-pill">Semua</button>
            <button class="px-4 py-2 hover:bg-surface-container text-on-surface-variant rounded-full font-label-md transition-all">Terkonfirmasi</button>
            <button class="px-4 py-2 hover:bg-surface-container text-on-surface-variant rounded-full font-label-md transition-all">Menunggu</button>
            <button class="px-4 py-2 hover:bg-surface-container text-on-surface-variant rounded-full font-label-md transition-all">Selesai</button>
        </div>
        <div class="flex items-center gap-3">
            <button class="flex items-center gap-2 px-3 py-2 border border-outline-variant rounded-lg text-body-md hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-[18px]">filter_list</span>
                Filter
            </button>
            <button class="flex items-center gap-2 px-3 py-2 border border-outline-variant rounded-lg text-body-md hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Ekspor
            </button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-low/20">
                    <th class="px-6 py-4 font-label-md text-label-md text-outline uppercase tracking-wider">Nama Pelanggan</th>
                    <th class="px-6 py-4 font-label-md text-label-md text-outline uppercase tracking-wider">Model Perangkat</th>
                    <th class="px-6 py-4 font-label-md text-label-md text-outline uppercase tracking-wider">Tipe Layanan</th>
                    <th class="px-6 py-4 font-label-md text-label-md text-outline uppercase tracking-wider">Waktu Jadwal</th>
                    <th class="px-6 py-4 font-label-md text-label-md text-outline uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 font-label-md text-label-md text-outline uppercase tracking-wider text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
                <!-- Row 1 -->
                <tr class="hover:bg-surface-container-low/50 transition-colors">
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-semibold text-xs">AS</div>
                            <div>
                                <p class="font-body-md text-on-surface font-semibold">Andi Setiawan</p>
                                <p class="text-xs text-outline">ID: BK-7821</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <p class="font-body-md text-on-surface">iPhone 14 Pro Max</p>
                        <p class="text-xs text-outline">Space Black, 256GB</p>
                    </td>
                    <td class="px-6 py-5">
                        <span class="px-3 py-1 rounded-full bg-surface-variant text-[11px] font-bold text-on-surface-variant">Ganti Baterai</span>
                    </td>
                    <td class="px-6 py-5">
                        <p class="font-body-md text-on-surface">Hari ini, 14:00</p>
                        <p class="text-xs text-primary font-medium">Dalam 2 jam</p>
                    </td>
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
                            <span class="text-body-md text-primary font-semibold">Terkonfirmasi</span>
                        </div>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="p-2 hover:bg-primary-container/10 text-primary rounded-lg transition-all" title="Detail">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                            <button class="p-2 hover:bg-tertiary-container/10 text-tertiary rounded-lg transition-all" title="Reschedule">
                                <span class="material-symbols-outlined">schedule</span>
                            </button>
                            <button class="p-2 hover:bg-error-container/10 text-error rounded-lg transition-all" title="Batalkan">
                                <span class="material-symbols-outlined">cancel</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr class="hover:bg-surface-container-low/50 transition-colors">
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center font-semibold text-xs">BP</div>
                            <div>
                                <p class="font-body-md text-on-surface font-semibold">Budi Pratama</p>
                                <p class="text-xs text-outline">ID: BK-7825</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <p class="font-body-md text-on-surface">Samsung S23 Ultra</p>
                        <p class="text-xs text-outline">Green, 512GB</p>
                    </td>
                    <td class="px-6 py-5">
                        <span class="px-3 py-1 rounded-full bg-secondary-container text-[11px] font-bold text-on-secondary-container">Pengambilan Barang</span>
                    </td>
                    <td class="px-6 py-5">
                        <p class="font-body-md text-on-surface">Besok, 10:30</p>
                        <p class="text-xs text-outline">Senin, 24 Mei</p>
                    </td>
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 rounded-full bg-outline"></div>
                            <span class="text-body-md text-outline">Menunggu</span>
                        </div>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="p-2 bg-primary/10 hover:bg-primary text-primary hover:text-white rounded-lg transition-all px-4 font-label-md text-xs">Konfirmasi</button>
                            <button class="p-2 hover:bg-error-container/10 text-error rounded-lg transition-all">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 3 -->
                <tr class="hover:bg-surface-container-low/50 transition-colors">
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-on-primary-fixed text-primary-fixed flex items-center justify-center font-semibold text-xs">CY</div>
                            <div>
                                <p class="font-body-md text-on-surface font-semibold">Citra Yolanda</p>
                                <p class="text-xs text-outline">ID: BK-7830</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <p class="font-body-md text-on-surface">iPad Air Gen 5</p>
                        <p class="text-xs text-outline">Blue, 64GB</p>
                    </td>
                    <td class="px-6 py-5">
                        <span class="px-3 py-1 rounded-full bg-error-container/30 text-[11px] font-bold text-error">Ganti Layar</span>
                    </td>
                    <td class="px-6 py-5">
                        <p class="font-body-md text-on-surface">25 Mei, 16:15</p>
                        <p class="text-xs text-outline">Selasa</p>
                    </td>
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 rounded-full bg-tertiary"></div>
                            <span class="text-body-md text-tertiary font-semibold">Sedang Dikerjakan</span>
                        </div>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="p-2 hover:bg-primary-container/10 text-primary rounded-lg transition-all">
                                <span class="material-symbols-outlined">message</span>
                            </button>
                            <button class="p-2 hover:bg-outline/10 text-outline rounded-lg transition-all">
                                <span class="material-symbols-outlined">more_vert</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="p-6 border-t border-outline-variant/30 flex items-center justify-between">
        <p class="text-body-md text-outline">Menampilkan 1-10 dari 42 data</p>
        <div class="flex items-center gap-2">
            <button class="p-2 hover:bg-surface-container rounded-lg disabled:opacity-50" disabled="">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button class="w-8 h-8 bg-primary text-white rounded-lg text-label-md">1</button>
            <button class="w-8 h-8 hover:bg-surface-container text-on-surface rounded-lg text-label-md">2</button>
            <button class="w-8 h-8 hover:bg-surface-container text-on-surface rounded-lg text-label-md">3</button>
            <span class="text-outline">...</span>
            <button class="w-8 h-8 hover:bg-surface-container text-on-surface rounded-lg text-label-md">5</button>
            <button class="p-2 hover:bg-surface-container rounded-lg">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
        </div>
    </div>
</div>
<!-- Dashboard Extra Section: Appointment Summary -->
<div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-gutter">
    <div class="lg:col-span-2 bg-surface-container-lowest rounded-2xl border border-outline-variant/50 p-padding-card">
        <h3 class="font-headline-md text-headline-md mb-6">Alur Kerja Servis</h3>
        <div class="flex gap-4 overflow-x-auto pb-4 custom-scrollbar">
            <!-- Step 1 -->
            <div class="min-w-[200px] flex-1 bg-surface-container-low p-4 rounded-xl border border-dashed border-outline-variant">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-outline">Menunggu (8)</span>
                    <span class="material-symbols-outlined text-outline text-sm">more_horiz</span>
                </div>
                <div class="space-y-3">
                    <div class="bg-white p-3 rounded-lg shadow-sm border border-outline-variant/20">
                        <p class="text-xs font-semibold mb-1">iPhone 13 - Andi</p>
                        <div class="h-1 w-full bg-outline-variant/20 rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-1/4"></div>
                        </div>
                    </div>
                    <div class="bg-white p-3 rounded-lg shadow-sm border border-outline-variant/20">
                        <p class="text-xs font-semibold mb-1">Macbook Air - Susi</p>
                        <div class="h-1 w-full bg-outline-variant/20 rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-1/4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="min-w-[200px] flex-1 bg-primary-container/5 p-4 rounded-xl border border-dashed border-primary/30">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-primary">Diagnosa (12)</span>
                    <span class="material-symbols-outlined text-primary text-sm">play_circle</span>
                </div>
                <div class="space-y-3">
                    <div class="bg-white p-3 rounded-lg shadow-sm border border-primary/20">
                        <p class="text-xs font-semibold mb-1">Rog Phone 6 - Reza</p>
                        <div class="h-1 w-full bg-primary/20 rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-2/4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="min-w-[200px] flex-1 bg-tertiary-container/5 p-4 rounded-xl border border-dashed border-tertiary/30">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-tertiary">Perbaikan (4)</span>
                    <span class="material-symbols-outlined text-tertiary text-sm">build</span>
                </div>
                <div class="space-y-3">
                    <div class="bg-white p-3 rounded-lg shadow-sm border border-tertiary/20">
                        <p class="text-xs font-semibold mb-1">PS5 - Denny</p>
                        <div class="h-1 w-full bg-tertiary/20 rounded-full overflow-hidden">
                            <div class="h-full bg-tertiary w-3/4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/50 p-padding-card">
        <h3 class="font-headline-md text-headline-md mb-6">Kalender Mini</h3>
        <div class="space-y-4">
            <div class="grid grid-cols-7 gap-1 text-center">
                <span class="text-[10px] text-outline font-bold">M</span>
                <span class="text-[10px] text-outline font-bold">S</span>
                <span class="text-[10px] text-outline font-bold">S</span>
                <span class="text-[10px] text-outline font-bold">R</span>
                <span class="text-[10px] text-outline font-bold">K</span>
                <span class="text-[10px] text-outline font-bold">J</span>
                <span class="text-[10px] text-outline font-bold">S</span>
                <span class="p-2 text-xs text-outline/30">27</span>
                <span class="p-2 text-xs text-outline/30">28</span>
                <span class="p-2 text-xs text-outline/30">29</span>
                <span class="p-2 text-xs text-outline/30">30</span>
                <span class="p-2 text-xs font-semibold hover:bg-primary-container/10 rounded-lg cursor-pointer">1</span>
                <span class="p-2 text-xs font-semibold hover:bg-primary-container/10 rounded-lg cursor-pointer">2</span>
                <span class="p-2 text-xs font-semibold hover:bg-primary-container/10 rounded-lg cursor-pointer">3</span>
                <!-- Current Day -->
                <span class="p-2 text-xs font-semibold bg-primary text-white rounded-lg cursor-pointer">23</span>
                <span class="p-2 text-xs font-semibold hover:bg-primary-container/10 rounded-lg cursor-pointer">24</span>
                <span class="p-2 text-xs font-semibold hover:bg-primary-container/10 rounded-lg cursor-pointer relative">
                    25
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 bg-error rounded-full"></span>
                </span>
                <span class="p-2 text-xs font-semibold hover:bg-primary-container/10 rounded-lg cursor-pointer">26</span>
                <span class="p-2 text-xs font-semibold hover:bg-primary-container/10 rounded-lg cursor-pointer">27</span>
                <span class="p-2 text-xs font-semibold hover:bg-primary-container/10 rounded-lg cursor-pointer">28</span>
                <span class="p-2 text-xs font-semibold hover:bg-primary-container/10 rounded-lg cursor-pointer">29</span>
            </div>
            <div class="pt-4 border-t border-outline-variant/30">
                <p class="text-xs font-bold uppercase tracking-widest text-outline mb-3">Agenda Terdekat</p>
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-1.5 h-10 bg-primary rounded-full"></div>
                        <div>
                            <p class="text-xs font-semibold">Servis Laptop MSI</p>
                            <p class="text-[10px] text-outline">15:30 - Technician A</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-1.5 h-10 bg-tertiary rounded-full"></div>
                        <div>
                            <p class="text-xs font-semibold">Visit Toko Cabang</p>
                            <p class="text-[10px] text-outline">17:00 - Operasional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('button').forEach(button => {
                button.addEventListener('mousedown', () => {
                    button.classList.add('scale-95');
                });
                button.addEventListener('mouseup', () => {
                    button.classList.remove('scale-95');
                });
</script>
@endpush