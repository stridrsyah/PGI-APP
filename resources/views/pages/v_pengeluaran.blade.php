@extends('layouts.main')

@section('title', 'Pengeluaran - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari data pengeluaran...')

@section('content')
<div class="flex justify-between items-end mb-8">
    <div>
        <h2 class="text-headline-lg font-headline-lg text-on-background">Manajemen Pengeluaran</h2>
        <p class="text-body-md text-on-surface-variant">Pantau dan kelola arus kas keluar perusahaan Anda</p>
    </div>
    <div class="flex gap-3">
        <button class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded-lg text-body-md font-medium hover:bg-surface-container-low transition-colors">
            <span class="material-symbols-outlined text-[20px]">filter_list</span>
            Filter
        </button>
        <button class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary rounded-lg text-body-md font-medium hover:opacity-90 transition-opacity">
            <span class="material-symbols-outlined text-[20px]">add</span>
            Tambah Pengeluaran
        </button>
    </div>
</div>
<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="glass-card p-6 rounded-xl">
        <div class="flex justify-between items-start mb-4">
            <div class="p-2 bg-primary/10 text-primary rounded-lg">
                <span class="material-symbols-outlined">account_balance_wallet</span>
            </div>
            <span class="text-label-md text-green-600 flex items-center gap-1 font-bold">
                +12% <span class="material-symbols-outlined text-[14px]">trending_up</span>
            </span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">Total Pengeluaran Bulan Ini</p>
        <h3 class="text-headline-md font-bold mt-1 text-on-surface">Rp 128.450.000</h3>
    </div>
    <div class="glass-card p-6 rounded-xl">
        <div class="flex justify-between items-start mb-4">
            <div class="p-2 bg-secondary-container text-on-secondary-container rounded-lg">
                <span class="material-symbols-outlined">settings_suggest</span>
            </div>
            <span class="text-label-md text-red-600 flex items-center gap-1 font-bold">
                -2% <span class="material-symbols-outlined text-[14px]">trending_down</span>
            </span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">Pengeluaran Operasional</p>
        <h3 class="text-headline-md font-bold mt-1 text-on-surface">Rp 45.200.000</h3>
    </div>
    <div class="glass-card p-6 rounded-xl">
        <div class="flex justify-between items-start mb-4">
            <div class="p-2 bg-tertiary-fixed-dim text-on-tertiary-fixed-variant rounded-lg">
                <span class="material-symbols-outlined">person_pin</span>
            </div>
            <span class="text-label-md text-on-surface-variant">Tetap</span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">Gaji &amp; Bonus</p>
        <h3 class="text-headline-md font-bold mt-1 text-on-surface">Rp 75.000.000</h3>
    </div>
    <div class="glass-card p-6 rounded-xl">
        <div class="flex justify-between items-start mb-4">
            <div class="p-2 bg-error-container/30 text-error rounded-lg">
                <span class="material-symbols-outlined">more_horiz</span>
            </div>
            <span class="text-label-md text-green-600 flex items-center gap-1 font-bold">
                -5% <span class="material-symbols-outlined text-[14px]">trending_down</span>
            </span>
        </div>
        <p class="text-label-md text-on-surface-variant font-medium">Biaya Lain-lain</p>
        <h3 class="text-headline-md font-bold mt-1 text-on-surface">Rp 8.250.000</h3>
    </div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Data Table Section -->
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm">
            <div class="p-6 border-b border-outline-variant flex justify-between items-center">
                <h4 class="font-bold text-on-surface">Rincian Pengeluaran</h4>
                <div class="flex items-center gap-4">
                    <select class="text-body-md border-outline-variant rounded-lg py-1 px-3 focus:ring-primary/20 focus:border-primary">
                        <option>Semua Kategori</option>
                        <option>Listrik</option>
                        <option>Gaji</option>
                        <option>Sewa</option>
                    </select>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-surface-container-low text-on-surface-variant border-b border-outline-variant">
                        <tr>
                            <th class="px-6 py-4 text-label-md font-bold uppercase tracking-wider">Tanggal</th>
                            <th class="px-6 py-4 text-label-md font-bold uppercase tracking-wider">Kategori</th>
                            <th class="px-6 py-4 text-label-md font-bold uppercase tracking-wider">Deskripsi</th>
                            <th class="px-6 py-4 text-label-md font-bold uppercase tracking-wider">Nominal</th>
                            <th class="px-6 py-4 text-label-md font-bold uppercase tracking-wider text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="px-6 py-4 text-body-md">12 Okt 2023</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 bg-primary/10 text-primary rounded text-[11px] font-bold">Listrik</span>
                            </td>
                            <td class="px-6 py-4 text-body-md font-medium">Tagihan Listrik Cabang Sudirman</td>
                            <td class="px-6 py-4 text-body-md font-bold">Rp 3.500.000</td>
                            <td class="px-6 py-4 text-right">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[11px] font-bold">Lunas</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="px-6 py-4 text-body-md">11 Okt 2023</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 bg-tertiary-fixed-dim text-on-tertiary-fixed-variant rounded text-[11px] font-bold">Gaji</span>
                            </td>
                            <td class="px-6 py-4 text-body-md font-medium">Gaji Karyawan - September</td>
                            <td class="px-6 py-4 text-body-md font-bold">Rp 45.000.000</td>
                            <td class="px-6 py-4 text-right">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[11px] font-bold">Lunas</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="px-6 py-4 text-body-md">10 Okt 2023</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 bg-secondary-container text-on-secondary-container rounded text-[11px] font-bold">Sewa</span>
                            </td>
                            <td class="px-6 py-4 text-body-md font-medium">Sewa Gudang Tambahan</td>
                            <td class="px-6 py-4 text-body-md font-bold">Rp 12.000.000</td>
                            <td class="px-6 py-4 text-right">
                                <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-[11px] font-bold">Menunggu</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="px-6 py-4 text-body-md">08 Okt 2023</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 bg-error-container/30 text-error rounded text-[11px] font-bold">Lainnya</span>
                            </td>
                            <td class="px-6 py-4 text-body-md font-medium">Pengadaan Kursi Kantor Baru</td>
                            <td class="px-6 py-4 text-body-md font-bold">Rp 2.400.000</td>
                            <td class="px-6 py-4 text-right">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[11px] font-bold">Lunas</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="px-6 py-4 text-body-md">05 Okt 2023</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 bg-primary/10 text-primary rounded text-[11px] font-bold">WiFi</span>
                            </td>
                            <td class="px-6 py-4 text-body-md font-medium">Internet &amp; Telepon</td>
                            <td class="px-6 py-4 text-body-md font-bold">Rp 1.200.000</td>
                            <td class="px-6 py-4 text-right">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[11px] font-bold">Lunas</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-6 border-t border-outline-variant flex justify-between items-center text-body-md text-on-surface-variant">
                <span>Menampilkan 5 dari 48 transaksi</span>
                <div class="flex gap-2">
                    <button class="p-1 rounded border border-outline-variant hover:bg-surface-container-low"><span class="material-symbols-outlined">chevron_left</span></button>
                    <button class="px-3 py-1 rounded bg-primary text-on-primary">1</button>
                    <button class="px-3 py-1 rounded hover:bg-surface-container-low">2</button>
                    <button class="px-3 py-1 rounded hover:bg-surface-container-low">3</button>
                    <button class="p-1 rounded border border-outline-variant hover:bg-surface-container-low"><span class="material-symbols-outlined">chevron_right</span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar Breakdown Section -->
    <div class="space-y-6">
        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-6 shadow-sm">
            <h4 class="font-bold text-on-surface mb-6">Analitik Kategori</h4>
            <div class="relative w-48 h-48 mx-auto mb-8">
                <!-- Circular Breakdown Simulation -->
                <svg class="w-full h-full transform -rotate-90">
                    <circle cx="96" cy="96" fill="none" r="80" stroke="#f1f5f9" stroke-width="16"></circle>
                    <circle cx="96" cy="96" fill="none" r="80" stroke="#3e40c3" stroke-dasharray="250 502" stroke-width="16"></circle>
                    <circle cx="96" cy="96" fill="none" r="80" stroke="#844000" stroke-dasharray="120 502" stroke-dashoffset="-250" stroke-width="16"></circle>
                    <circle cx="96" cy="96" fill="none" r="80" stroke="#515f74" stroke-dasharray="100 502" stroke-dashoffset="-370" stroke-width="16"></circle>
                </svg>
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <span class="text-label-md text-on-surface-variant">Total</span>
                    <span class="text-headline-md font-bold">100%</span>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-primary"></div>
                        <span class="text-body-md">Gaji &amp; Operasional</span>
                    </div>
                    <span class="text-body-md font-bold">58%</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-tertiary"></div>
                        <span class="text-body-md">Penyusutan Asset</span>
                    </div>
                    <span class="text-body-md font-bold">24%</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-secondary"></div>
                        <span class="text-body-md">Utilitas &amp; Sewa</span>
                    </div>
                    <span class="text-body-md font-bold">18%</span>
                </div>
            </div>
            <button class="w-full mt-8 py-2 text-primary font-bold text-body-md hover:bg-primary-container/10 transition-colors rounded-lg border border-primary/20">
                Lihat Laporan Lengkap
            </button>
        </div>
        <div class="bg-primary text-on-primary rounded-xl p-6 relative overflow-hidden">
            <div class="relative z-10">
                <h5 class="font-bold text-headline-md mb-2">Hemat 15% Biaya?</h5>
                <p class="text-body-md opacity-90 mb-4">Analitik kami mendeteksi lonjakan biaya listrik yang tidak wajar di Gudang B.</p>
                <button class="bg-surface-container-lowest text-primary px-4 py-2 rounded-lg font-bold text-label-md">
                    Periksa Rekomendasi
                </button>
            </div>
            <span class="material-symbols-outlined absolute -bottom-4 -right-4 text-[120px] opacity-10">lightbulb</span>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Simple micro-interaction for rows
    document.querySelectorAll('tr').forEach(row => {
        row.addEventListener('mousedown', () => {
            row.classList.add('bg-surface-container-high');
        });
        row.addEventListener('mouseup', () => {
            row.classList.remove('bg-surface-container-high');
        });
    });
</script>
@endpush