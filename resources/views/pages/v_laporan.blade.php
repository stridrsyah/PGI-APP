@extends('layouts.main')

@section('title', 'Laporan - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari laporan, periode, atau kategori...')

@section('content')
<!-- Breadcrumbs & Header -->
<div class="mb-8">
    <nav class="flex items-center gap-2 text-label-md font-label-md text-secondary mb-2">
        <span class="hover:text-primary cursor-pointer">Dashboard</span>
        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
        <span class="text-primary font-bold">Laporan</span>
    </nav>
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight mb-1">Laporan Bisnis</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Analisis performa penjualan, laba, dan stok secara menyeluruh.</p>
        </div>
        <!-- Action Bar -->
        <div class="flex items-center gap-3">
            <div class="flex items-center gap-2 bg-white border border-outline-variant rounded-xl px-4 py-2 custom-shadow">
                <span class="material-symbols-outlined text-primary text-[20px]">calendar_today</span>
                <select class="border-none bg-transparent text-body-md font-medium text-on-surface-variant focus:ring-0 cursor-pointer">
                    <option>1 Jan 2024 - 31 Jan 2024</option>
                    <option>Februari 2024</option>
                    <option>Kuartal 1 2024</option>
                </select>
            </div>
            <button class="flex items-center gap-2 bg-primary text-on-primary px-6 py-2.5 rounded-xl font-body-md font-semibold hover:bg-primary/90 transition-all active:scale-95 shadow-lg shadow-primary/20">
                <span class="material-symbols-outlined text-[20px]">download</span>
                Export Laporan
            </button>
        </div>
    </div>
</div>
<!-- Summary Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-surface-container-lowest p-6 rounded-[16px] border border-outline-variant custom-shadow transition-transform hover:-translate-y-1">
        <div class="flex items-start justify-between mb-4">
            <div class="p-2 bg-primary/10 rounded-lg">
                <span class="material-symbols-outlined text-primary">account_balance_wallet</span>
            </div>
            <span class="flex items-center text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full">+12.5%</span>
        </div>
        <p class="text-label-md font-label-md text-secondary mb-1">Total Pendapatan</p>
        <h3 class="font-headline-md text-headline-md text-on-surface">Rp 2.450.000.000</h3>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-[16px] border border-outline-variant custom-shadow transition-transform hover:-translate-y-1">
        <div class="flex items-start justify-between mb-4">
            <div class="p-2 bg-tertiary-fixed-dim/20 rounded-lg">
                <span class="material-symbols-outlined text-tertiary">monetization_on</span>
            </div>
            <span class="flex items-center text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full">+8.2%</span>
        </div>
        <p class="text-label-md font-label-md text-secondary mb-1">Total Laba Bersih</p>
        <h3 class="font-headline-md text-headline-md text-on-surface">Rp 482.300.000</h3>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-[16px] border border-outline-variant custom-shadow transition-transform hover:-translate-y-1">
        <div class="flex items-start justify-between mb-4">
            <div class="p-2 bg-secondary-container rounded-lg">
                <span class="material-symbols-outlined text-secondary">trending_up</span>
            </div>
            <span class="flex items-center text-xs font-bold text-secondary bg-secondary/10 px-2 py-1 rounded-full">Stabil</span>
        </div>
        <p class="text-label-md font-label-md text-secondary mb-1">Margin Keuntungan</p>
        <h3 class="font-headline-md text-headline-md text-on-surface">19.7%</h3>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-[16px] border border-outline-variant custom-shadow transition-transform hover:-translate-y-1">
        <div class="flex items-start justify-between mb-4">
            <div class="p-2 bg-error-container/40 rounded-lg">
                <span class="material-symbols-outlined text-error">shopping_bag</span>
            </div>
            <span class="flex items-center text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full">+245 Unit</span>
        </div>
        <p class="text-label-md font-label-md text-secondary mb-1">Unit Terjual</p>
        <h3 class="font-headline-md text-headline-md text-on-surface">1,248 Units</h3>
    </div>
</div>
<!-- Data Visualizations -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-8">
    <!-- Left: Trends Area Chart Placeholder -->
    <div class="lg:col-span-8 bg-surface-container-lowest p-padding-card rounded-[16px] border border-outline-variant custom-shadow">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="font-headline-md text-headline-md text-on-surface">Tren Penjualan &amp; Laba</h2>
                <p class="text-body-md text-secondary">Statistik pertumbuhan bulanan periode ini.</p>
            </div>
            <div class="flex items-center gap-4 text-xs font-semibold">
                <div class="flex items-center gap-1.5"><span class="w-3 h-3 rounded-full bg-primary"></span> Penjualan</div>
                <div class="flex items-center gap-1.5"><span class="w-3 h-3 rounded-full bg-tertiary-fixed-dim"></span> Laba</div>
            </div>
        </div>
        <div class="chart-container flex items-end justify-between gap-2 pt-4">
            <!-- Simple CSS bar/area representation to keep it clean and interactive without heavy JS libs -->
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full flex items-end gap-1 h-48">
                    <div class="w-1/2 bg-primary/20 rounded-t-md hover:bg-primary transition-all cursor-pointer" style="height: 40%"></div>
                    <div class="w-1/2 bg-tertiary-fixed-dim/40 rounded-t-md hover:bg-tertiary-fixed-dim transition-all cursor-pointer" style="height: 15%"></div>
                </div>
                <span class="text-[10px] font-bold text-outline">JAN</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full flex items-end gap-1 h-48">
                    <div class="w-1/2 bg-primary/20 rounded-t-md hover:bg-primary transition-all cursor-pointer" style="height: 55%"></div>
                    <div class="w-1/2 bg-tertiary-fixed-dim/40 rounded-t-md hover:bg-tertiary-fixed-dim transition-all cursor-pointer" style="height: 25%"></div>
                </div>
                <span class="text-[10px] font-bold text-outline">FEB</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full flex items-end gap-1 h-48">
                    <div class="w-1/2 bg-primary/20 rounded-t-md hover:bg-primary transition-all cursor-pointer" style="height: 75%"></div>
                    <div class="w-1/2 bg-tertiary-fixed-dim/40 rounded-t-md hover:bg-tertiary-fixed-dim transition-all cursor-pointer" style="height: 35%"></div>
                </div>
                <span class="text-[10px] font-bold text-outline">MAR</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full flex items-end gap-1 h-48">
                    <div class="w-1/2 bg-primary/20 rounded-t-md hover:bg-primary transition-all cursor-pointer" style="height: 65%"></div>
                    <div class="w-1/2 bg-tertiary-fixed-dim/40 rounded-t-md hover:bg-tertiary-fixed-dim transition-all cursor-pointer" style="height: 30%"></div>
                </div>
                <span class="text-[10px] font-bold text-outline">APR</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full flex items-end gap-1 h-48">
                    <div class="w-1/2 bg-primary/20 rounded-t-md hover:bg-primary transition-all cursor-pointer" style="height: 90%"></div>
                    <div class="w-1/2 bg-tertiary-fixed-dim/40 rounded-t-md hover:bg-tertiary-fixed-dim transition-all cursor-pointer" style="height: 45%"></div>
                </div>
                <span class="text-[10px] font-bold text-outline">MEI</span>
            </div>
            <div class="flex-1 flex flex-col items-center gap-2 group">
                <div class="w-full flex items-end gap-1 h-48 relative">
                    <div class="w-1/2 bg-primary rounded-t-md" style="height: 85%"></div>
                    <div class="w-1/2 bg-tertiary-fixed-dim rounded-t-md" style="height: 40%"></div>
                    <!-- Tooltip highlight -->
                    <div class="absolute -top-12 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">
                        Jun: Rp 450jt (Laba 180jt)
                    </div>
                </div>
                <span class="text-[10px] font-bold text-primary">JUN</span>
            </div>
        </div>
    </div>
    <!-- Right: Donut Chart Representation -->
    <div class="lg:col-span-4 bg-surface-container-lowest p-padding-card rounded-[16px] border border-outline-variant custom-shadow">
        <h2 class="font-headline-md text-headline-md text-on-surface mb-2">Kategori Terlaris</h2>
        <p class="text-body-md text-secondary mb-8">Distribusi unit per kategori.</p>
        <div class="relative flex justify-center mb-8">
            <!-- SVG Donut Representation -->
            <svg class="w-48 h-48 -rotate-90">
                <circle cx="96" cy="96" fill="none" r="70" stroke="#efecf8" stroke-width="20"></circle>
                <circle cx="96" cy="96" fill="none" r="70" stroke="#3e40c3" stroke-dasharray="440" stroke-dashoffset="110" stroke-width="20"></circle>
                <circle cx="96" cy="96" fill="none" r="70" stroke="#844000" stroke-dasharray="440" stroke-dashoffset="350" stroke-width="20"></circle>
            </svg>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <span class="text-headline-md font-bold text-on-surface">1,248</span>
                <span class="text-[10px] text-secondary font-bold uppercase tracking-widest">Total Unit</span>
            </div>
        </div>
        <div class="space-y-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 rounded-full bg-primary"></div>
                    <span class="text-body-md text-on-surface">Smartphone</span>
                </div>
                <span class="font-bold text-on-surface">75%</span>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 rounded-full bg-tertiary"></div>
                    <span class="text-body-md text-on-surface">Tablet</span>
                </div>
                <span class="font-bold text-on-surface">15%</span>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 rounded-full bg-surface-variant"></div>
                    <span class="text-body-md text-on-surface">Aksesoris</span>
                </div>
                <span class="font-bold text-on-surface">10%</span>
            </div>
        </div>
    </div>
</div>
<!-- Detailed Report Table -->
<div class="bg-surface-container-lowest rounded-[16px] border border-outline-variant overflow-hidden custom-shadow">
    <div class="px-8 py-6 border-b border-outline-variant flex items-center justify-between bg-surface-container-low/30">
        <h2 class="font-headline-md text-headline-md text-on-surface">Ringkasan Penjualan per Merek</h2>
        <button class="text-primary font-bold text-body-md hover:underline">Lihat Semua</button>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-surface-container-low/50">
                    <th class="px-8 py-4 text-label-md font-bold text-secondary uppercase tracking-wider">Merek</th>
                    <th class="px-8 py-4 text-label-md font-bold text-secondary uppercase tracking-wider">Jumlah Terjual</th>
                    <th class="px-8 py-4 text-label-md font-bold text-secondary uppercase tracking-wider">Total Omzet</th>
                    <th class="px-8 py-4 text-label-md font-bold text-secondary uppercase tracking-wider">Total Laba</th>
                    <th class="px-8 py-4 text-label-md font-bold text-secondary uppercase tracking-wider">Status Performa</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
                <tr class="hover:bg-surface-container-low transition-colors">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-surface flex items-center justify-center border border-outline-variant">
                                <span class="material-symbols-outlined text-[20px] text-on-surface">apps</span>
                            </div>
                            <span class="font-body-lg text-body-lg font-bold text-on-surface">Apple</span>
                        </div>
                    </td>
                    <td class="px-8 py-5 text-body-md text-on-surface-variant">412 Unit</td>
                    <td class="px-8 py-5 font-bold text-on-surface">Rp 845.200.000</td>
                    <td class="px-8 py-5 font-medium text-primary">Rp 169.040.000</td>
                    <td class="px-8 py-5">
                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 px-3 py-1 rounded-full text-xs font-bold border border-green-200">
                            <span class="material-symbols-outlined text-[14px]">trending_up</span> Naik
                        </span>
                    </td>
                </tr>
                <tr class="hover:bg-surface-container-low transition-colors">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-surface flex items-center justify-center border border-outline-variant">
                                <span class="material-symbols-outlined text-[20px] text-on-surface">smartphone</span>
                            </div>
                            <span class="font-body-lg text-body-lg font-bold text-on-surface">Samsung</span>
                        </div>
                    </td>
                    <td class="px-8 py-5 text-body-md text-on-surface-variant">385 Unit</td>
                    <td class="px-8 py-5 font-bold text-on-surface">Rp 612.450.000</td>
                    <td class="px-8 py-5 font-medium text-primary">Rp 122.490.000</td>
                    <td class="px-8 py-5">
                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 px-3 py-1 rounded-full text-xs font-bold border border-green-200">
                            <span class="material-symbols-outlined text-[14px]">trending_up</span> Naik
                        </span>
                    </td>
                </tr>
                <tr class="hover:bg-surface-container-low transition-colors">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-surface flex items-center justify-center border border-outline-variant">
                                <span class="material-symbols-outlined text-[20px] text-on-surface">devices</span>
                            </div>
                            <span class="font-body-lg text-body-lg font-bold text-on-surface">Xiaomi</span>
                        </div>
                    </td>
                    <td class="px-8 py-5 text-body-md text-on-surface-variant">256 Unit</td>
                    <td class="px-8 py-5 font-bold text-on-surface">Rp 285.600.000</td>
                    <td class="px-8 py-5 font-medium text-primary">Rp 57.120.000</td>
                    <td class="px-8 py-5">
                        <span class="inline-flex items-center gap-1 bg-red-50 text-red-700 px-3 py-1 rounded-full text-xs font-bold border border-red-200">
                            <span class="material-symbols-outlined text-[14px]">trending_down</span> Turun
                        </span>
                    </td>
                </tr>
                <tr class="hover:bg-surface-container-low transition-colors">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-surface flex items-center justify-center border border-outline-variant">
                                <span class="material-symbols-outlined text-[20px] text-on-surface">phone_android</span>
                            </div>
                            <span class="font-body-lg text-body-lg font-bold text-on-surface">Oppo</span>
                        </div>
                    </td>
                    <td class="px-8 py-5 text-body-md text-on-surface-variant">195 Unit</td>
                    <td class="px-8 py-5 font-bold text-on-surface">Rp 195.000.000</td>
                    <td class="px-8 py-5 font-medium text-primary">Rp 39.000.000</td>
                    <td class="px-8 py-5">
                        <span class="inline-flex items-center gap-1 bg-secondary-container text-secondary px-3 py-1 rounded-full text-xs font-bold">
                            <span class="material-symbols-outlined text-[14px]">remove</span> Stabil
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="px-8 py-4 bg-surface-container-low/30 border-t border-outline-variant text-center">
        <p class="text-label-md text-secondary">Menampilkan 4 dari 12 merek aktif.</p>
    </div>
</div>
<!-- Footer -->
<footer class="mt-12 mb-8 text-center">
    <p class="text-label-md text-secondary">© 2024 Pusat Gadget Indonesia. Sistem Laporan Operasional Terpadu.</p>
</footer>
@endsection

@push('scripts')
<script>
    // Micro-interactions for table rows
    document.querySelectorAll('tbody tr').forEach(row => {
        row.addEventListener('mouseenter', () => {
            row.style.cursor = 'pointer';
        });
    });

    // Search bar focus effect
    const searchInput = document.querySelector('input[type="text"]');
    searchInput.addEventListener('focus', () => {
        searchInput.parentElement.classList.add('ring-2', 'ring-primary/20');
    });
    searchInput.addEventListener('blur', () => {
        searchInput.parentElement.classList.remove('ring-2', 'ring-primary/20');
    });
</script>
@endpush