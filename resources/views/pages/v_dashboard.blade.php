@extends('layouts.main')

@section('title', 'Dashboard - Pusat Gadget Indonesia')

@section('content')
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
    <div>
        <h2 class="text-headline-lg font-headline-lg text-on-surface tracking-tight">Selamat Datang </h2>
        <p class="text-body-lg text-on-surface-variant mt-1">Pantau perkembangan bisnis Pusat Gadget Indonesia secara real-time.</p>
    </div>
    <div class="flex items-center gap-3">
        <button class="bg-surface border border-outline-variant px-4 py-2.5 rounded-xl text-label-md font-bold flex items-center gap-2 hover:bg-surface-container-low transition-all">
            <span class="material-symbols-outlined text-[18px]">calendar_today</span>
            Terakhir 30 Hari
        </button>
        <button class="bg-primary text-on-primary px-6 py-2.5 rounded-xl text-label-md font-bold flex items-center gap-2 hover:opacity-90 shadow-lg shadow-primary/20 transition-all">
            <span class="material-symbols-outlined text-[18px]">add</span>
            Input Baru
        </button>
    </div>
</div>
<!-- Statistics Bento Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-6">
    <!-- Card 1 -->
    <div class="glass-card p-padding-card rounded-2xl hover:shadow-md transition-all duration-300 group">
        <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-secondary-container/30 flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined">inventory_2</span>
            </div>
            <span class="text-label-md font-bold text-tertiary-container">+2%</span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">Total Stok HP</p>
        <h3 class="text-headline-md font-bold mt-1">1.248</h3>
    </div>
    <!-- Card 2 -->
    <div class="glass-card p-padding-card rounded-2xl hover:shadow-md transition-all duration-300">
        <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-primary-container/10 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">trending_up</span>
            </div>
            <span class="text-label-md font-bold text-tertiary-container">+12%</span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">Penjualan Hari Ini</p>
        <h3 class="text-headline-md font-bold mt-1">24</h3>
    </div>
    <!-- Card 3 -->
    <div class="glass-card p-padding-card rounded-2xl hover:shadow-md transition-all duration-300 lg:col-span-1">
        <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-tertiary-container/10 flex items-center justify-center text-tertiary">
                <span class="material-symbols-outlined">payments</span>
            </div>
            <span class="text-label-md font-bold text-tertiary-container">+8.4%</span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">Omzet Bulan Ini</p>
        <h3 class="text-headline-md font-bold mt-1">Rp 842M</h3>
    </div>
    <!-- Card 4 -->
    <div class="glass-card p-padding-card rounded-2xl hover:shadow-md transition-all duration-300">
        <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-secondary-container/30 flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined">account_balance_wallet</span>
            </div>
            <span class="text-label-md font-bold text-tertiary-container">+5%</span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">Laba Bulan Ini</p>
        <h3 class="text-headline-md font-bold mt-1">Rp 126M</h3>
    </div>
    <!-- Card 5 -->
    <div class="glass-card p-padding-card rounded-2xl hover:shadow-md transition-all duration-300">
        <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-primary-container/10 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">build_circle</span>
            </div>
            <span class="text-label-md font-bold text-on-surface-variant">12% Aktif</span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">HP Servis</p>
        <h3 class="text-headline-md font-bold mt-1">15</h3>
    </div>
    <!-- Card 6 -->
    <div class="glass-card p-padding-card rounded-2xl hover:shadow-md transition-all duration-300 border-error/20">
        <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-error-container/10 flex items-center justify-center text-error">
                <span class="material-symbols-outlined">warning</span>
            </div>
            <span class="text-label-md font-bold text-error">Kritis</span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">Stok Menipis</p>
        <h3 class="text-headline-md font-bold mt-1">8</h3>
    </div>
</div>
<!-- Visual Charts & Timeline -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
    <!-- Trend Sales Chart Placeholder -->
    <div class="lg:col-span-8 glass-card p-padding-card rounded-2xl relative overflow-hidden">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h4 class="text-headline-md font-bold text-on-surface">Tren Penjualan</h4>
                <p class="text-label-md text-on-surface-variant">Analisis unit terjual mingguan</p>
            </div>
            <div class="flex gap-2">
                <button class="px-3 py-1 rounded-full bg-surface-container text-label-md font-bold">Harian</button>
                <button class="px-3 py-1 rounded-full text-label-md text-on-surface-variant">Mingguan</button>
            </div>
        </div>
        <div class="h-[300px] flex items-end justify-between gap-4 px-2">
            <!-- Mock Bars with gradients -->
            <div class="flex-1 flex flex-col justify-end gap-2 group cursor-pointer">
                <div class="w-full bg-primary-container/20 rounded-t-lg h-[40%] group-hover:bg-primary-container transition-all"></div>
                <span class="text-[10px] text-center text-on-surface-variant">Sen</span>
            </div>
            <div class="flex-1 flex flex-col justify-end gap-2 group cursor-pointer">
                <div class="w-full bg-primary-container/20 rounded-t-lg h-[65%] group-hover:bg-primary-container transition-all"></div>
                <span class="text-[10px] text-center text-on-surface-variant">Sel</span>
            </div>
            <div class="flex-1 flex flex-col justify-end gap-2 group cursor-pointer">
                <div class="w-full bg-primary-container/20 rounded-t-lg h-[45%] group-hover:bg-primary-container transition-all"></div>
                <span class="text-[10px] text-center text-on-surface-variant">Rab</span>
            </div>
            <div class="flex-1 flex flex-col justify-end gap-2 group cursor-pointer">
                <div class="w-full bg-primary-container/20 rounded-t-lg h-[90%] group-hover:bg-primary-container transition-all"></div>
                <span class="text-[10px] text-center text-on-surface-variant">Kam</span>
            </div>
            <div class="flex-1 flex flex-col justify-end gap-2 group cursor-pointer">
                <div class="w-full bg-primary rounded-t-lg h-[75%]"></div>
                <span class="text-[10px] text-center text-on-surface-variant font-bold">Jum</span>
            </div>
            <div class="flex-1 flex flex-col justify-end gap-2 group cursor-pointer">
                <div class="w-full bg-primary-container/20 rounded-t-lg h-[55%] group-hover:bg-primary-container transition-all"></div>
                <span class="text-[10px] text-center text-on-surface-variant">Sab</span>
            </div>
            <div class="flex-1 flex flex-col justify-end gap-2 group cursor-pointer">
                <div class="w-full bg-primary-container/20 rounded-t-lg h-[35%] group-hover:bg-primary-container transition-all"></div>
                <span class="text-[10px] text-center text-on-surface-variant">Min</span>
            </div>
        </div>
    </div>
    <!-- Activity Timeline -->
    <div class="lg:col-span-4 glass-card p-padding-card rounded-2xl">
        <h4 class="text-headline-md font-bold text-on-surface mb-6">Aktivitas Terkini</h4>
        <div class="space-y-6 relative before:absolute before:left-[11px] before:top-2 before:bottom-2 before:w-[2px] before:bg-outline-variant/30">
            <!-- Item 1 -->
            <div class="relative pl-10">
                <div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-primary-container/10 border-2 border-white flex items-center justify-center z-10">
                    <span class="material-symbols-outlined text-[14px] text-primary" style="font-variation-settings: 'FILL' 1;">add_shopping_cart</span>
                </div>
                <p class="text-body-md font-medium text-on-surface">iPhone 15 Pro Max (Titanium)</p>
                <p class="text-label-md text-on-surface-variant mt-0.5">Admin menambahkan stok baru</p>
                <span class="text-[10px] text-on-surface-variant/60 font-bold uppercase tracking-wider mt-1 block">5 Menit yang lalu</span>
            </div>
            <!-- Item 2 -->
            <div class="relative pl-10">
                <div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-tertiary-container/10 border-2 border-white flex items-center justify-center z-10">
                    <span class="material-symbols-outlined text-[14px] text-tertiary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                </div>
                <p class="text-body-md font-medium text-on-surface">Transaksi #TRX-9482 Berhasil</p>
                <p class="text-label-md text-on-surface-variant mt-0.5">Pembayaran Samsung S24 Ultra selesai</p>
                <span class="text-[10px] text-on-surface-variant/60 font-bold uppercase tracking-wider mt-1 block">15 Menit yang lalu</span>
            </div>
            <!-- Item 3 -->
            <div class="relative pl-10">
                <div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-secondary-container/30 border-2 border-white flex items-center justify-center z-10">
                    <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">build</span>
                </div>
                <p class="text-body-md font-medium text-on-surface">Servis Selesai - Xiaomi 13T</p>
                <p class="text-label-md text-on-surface-variant mt-0.5">Teknisi: Ahmad Budiman</p>
                <span class="text-[10px] text-on-surface-variant/60 font-bold uppercase tracking-wider mt-1 block">42 Menit yang lalu</span>
            </div>
            <!-- Item 4 -->
            <div class="relative pl-10">
                <div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-primary-container/10 border-2 border-white flex items-center justify-center z-10">
                    <span class="material-symbols-outlined text-[14px] text-primary" style="font-variation-settings: 'FILL' 1;">person_add</span>
                </div>
                <p class="text-body-md font-medium text-on-surface">Pelanggan Baru Terdaftar</p>
                <p class="text-label-md text-on-surface-variant mt-0.5">Siti Aminah - Jakarta Selatan</p>
                <span class="text-[10px] text-on-surface-variant/60 font-bold uppercase tracking-wider mt-1 block">1 Jam yang lalu</span>
            </div>
        </div>
        <button class="w-full mt-6 py-2.5 text-label-md font-bold text-primary hover:bg-primary-container/10 rounded-xl transition-all">Lihat Semua Aktivitas</button>
    </div>
</div>
<!-- Transaction Table Section -->
<div class="glass-card rounded-2xl overflow-hidden">
    <div class="p-padding-card flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-outline-variant">
        <div>
            <h4 class="text-headline-md font-bold text-on-surface">Transaksi Terbaru</h4>
            <p class="text-label-md text-on-surface-variant">Data penjualan 24 jam terakhir</p>
        </div>
        <div class="flex items-center gap-2">
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[18px] text-on-surface-variant">filter_list</span>
                <select class="bg-surface border border-outline-variant rounded-xl pl-10 pr-8 py-2 text-label-md font-medium appearance-none focus:ring-2 focus:ring-primary/20 outline-none">
                    <option>Semua Status</option>
                    <option>Berhasil</option>
                    <option>Proses</option>
                    <option>Batal</option>
                </select>
            </div>
            <button class="p-2 border border-outline-variant rounded-xl hover:bg-surface-container-low transition-all">
                <span class="material-symbols-outlined text-[20px]">download</span>
            </button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-lowest/50">
                    <th class="px-padding-card py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">ID Transaksi</th>
                    <th class="px-padding-card py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Pelanggan</th>
                    <th class="px-padding-card py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Produk</th>
                    <th class="px-padding-card py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Waktu</th>
                    <th class="px-padding-card py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Total</th>
                    <th class="px-padding-card py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Status</th>
                    <th class="px-padding-card py-4"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
                <tr class="hover:bg-surface-container-low/30 transition-colors group">
                    <td class="px-padding-card py-4 text-body-md font-bold text-primary">#TRX-00124</td>
                    <td class="px-padding-card py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-secondary-container/50 flex items-center justify-center text-[10px] font-bold">BK</div>
                            <span class="text-body-md font-medium">Budi Kusuma</span>
                        </div>
                    </td>
                    <td class="px-padding-card py-4 text-body-md">iPhone 15 Pro 256GB</td>
                    <td class="px-padding-card py-4 text-body-md text-on-surface-variant">10:24 WIB</td>
                    <td class="px-padding-card py-4 text-body-md font-bold">Rp 18.250.000</td>
                    <td class="px-padding-card py-4">
                        <span class="px-3 py-1 rounded-full bg-tertiary-container/10 text-tertiary text-[11px] font-bold uppercase tracking-tight">Berhasil</span>
                    </td>
                    <td class="px-padding-card py-4 text-right">
                        <button class="text-on-surface-variant hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-surface-container-low/30 transition-colors group">
                    <td class="px-padding-card py-4 text-body-md font-bold text-primary">#TRX-00123</td>
                    <td class="px-padding-card py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center text-[10px] font-bold">AN</div>
                            <span class="text-body-md font-medium">Anita Nur</span>
                        </div>
                    </td>
                    <td class="px-padding-card py-4 text-body-md">Samsung S24 Ultra</td>
                    <td class="px-padding-card py-4 text-body-md text-on-surface-variant">09:45 WIB</td>
                    <td class="px-padding-card py-4 text-body-md font-bold">Rp 21.999.000</td>
                    <td class="px-padding-card py-4">
                        <span class="px-3 py-1 rounded-full bg-secondary-container/50 text-on-secondary-container text-[11px] font-bold uppercase tracking-tight">Proses</span>
                    </td>
                    <td class="px-padding-card py-4 text-right">
                        <button class="text-on-surface-variant hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-surface-container-low/30 transition-colors group">
                    <td class="px-padding-card py-4 text-body-md font-bold text-primary">#TRX-00122</td>
                    <td class="px-padding-card py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-error-container/10 flex items-center justify-center text-[10px] font-bold text-error">RP</div>
                            <span class="text-body-md font-medium">Raka Putra</span>
                        </div>
                    </td>
                    <td class="px-padding-card py-4 text-body-md">Xiaomi 13T Black</td>
                    <td class="px-padding-card py-4 text-body-md text-on-surface-variant">08:12 WIB</td>
                    <td class="px-padding-card py-4 text-body-md font-bold">Rp 6.499.000</td>
                    <td class="px-padding-card py-4">
                        <span class="px-3 py-1 rounded-full bg-error-container/20 text-error text-[11px] font-bold uppercase tracking-tight">Batal</span>
                    </td>
                    <td class="px-padding-card py-4 text-right">
                        <button class="text-on-surface-variant hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="p-4 border-t border-outline-variant flex items-center justify-center">
        <button class="text-label-md font-bold text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2">
            Tampilkan 15 Transaksi Lagi
            <span class="material-symbols-outlined text-[18px]">expand_more</span>
        </button>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Simple dashboard interaction effects
    document.querySelectorAll('.glass-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-2px)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });
</script>
@endpush