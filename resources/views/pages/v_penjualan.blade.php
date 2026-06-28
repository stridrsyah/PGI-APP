@extends('layouts.main')

@section('title', 'Penjualan - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari transaksi, produk, atau pelanggan...')

@section('content')
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
    <div>
        <h3 class="text-headline-lg font-headline-lg text-on-surface">Daftar Transaksi Penjualan</h3>
        <p class="text-body-md text-on-surface-variant">Kelola dan pantau semua riwayat penjualan produk gadget Anda.</p>
    </div>
    <button class="flex items-center justify-center gap-2 px-6 py-3 bg-primary text-white font-semibold rounded-xl shadow-lg hover:shadow-primary/30 active:scale-95 transition-all duration-150 group">
        <span class="material-symbols-outlined group-hover:rotate-90 transition-transform duration-300">add_circle</span>
        <span>Buat Transaksi Baru</span>
    </button>
</div>
<!-- Stats Cards Grid (Bento Style) -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
    <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-3xl">shopping_bag</span>
            </div>
            <span class="text-label-md px-2 py-1 bg-green-100 text-green-700 rounded-lg font-bold">+12%</span>
        </div>
        <p class="text-label-md text-on-surface-variant">Total Penjualan (Hari Ini)</p>
        <h4 class="text-headline-lg font-bold text-on-surface">24 Unit</h4>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-tertiary-container/10 rounded-xl flex items-center justify-center text-tertiary">
                <span class="material-symbols-outlined text-3xl">payments</span>
            </div>
            <span class="text-label-md px-2 py-1 bg-green-100 text-green-700 rounded-lg font-bold">+8.4%</span>
        </div>
        <p class="text-label-md text-on-surface-variant">Total Pendapatan</p>
        <h4 class="text-headline-lg font-bold text-on-surface">Rp 154,2M</h4>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-secondary-container/30 rounded-xl flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-3xl">check_circle</span>
            </div>
            <span class="text-label-md px-2 py-1 bg-on-surface-variant/10 text-on-surface-variant rounded-lg font-bold">Stable</span>
        </div>
        <p class="text-label-md text-on-surface-variant">Transaksi Berhasil</p>
        <h4 class="text-headline-lg font-bold text-on-surface">1,248</h4>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-error-container/20 rounded-xl flex items-center justify-center text-error">
                <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">pending</span>
            </div>
            <span class="text-label-md px-2 py-1 bg-error-container text-on-error-container rounded-lg font-bold">4 Baru</span>
        </div>
        <p class="text-label-md text-on-surface-variant">Transaksi Menunggu</p>
        <h4 class="text-headline-lg font-bold text-on-surface">18</h4>
    </div>
</div>
<!-- Filters & Table Section -->
<div class="bg-surface-container-lowest rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
    <!-- Filter Area -->
    <div class="p-6 border-b border-outline-variant space-y-4">
        <div class="flex flex-col lg:flex-row items-center gap-4">
            <!-- Search Bar -->
            <div class="relative flex-1 w-full">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                <input class="w-full pl-12 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none text-body-md transition-all" placeholder="Cari No. Invoice atau Nama Pelanggan..." type="text" />
            </div>
            <!-- Date Range -->
            <div class="flex items-center gap-2 w-full lg:w-auto">
                <div class="relative flex-1 lg:w-48">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">calendar_today</span>
                    <input class="w-full pl-11 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:ring-primary/20 focus:border-primary outline-none" type="date" />
                </div>
                <span class="text-on-surface-variant">-</span>
                <div class="relative flex-1 lg:w-48">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">calendar_today</span>
                    <input class="w-full pl-11 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:ring-primary/20 focus:border-primary outline-none" type="date" />
                </div>
            </div>
            <!-- Status Filter -->
            <select class="w-full lg:w-48 pl-4 pr-10 py-3 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:ring-primary/20 focus:border-primary outline-none appearance-none cursor-pointer">
                <option value="">Semua Status</option>
                <option value="success">Berhasil</option>
                <option value="process">Proses</option>
                <option value="cancelled">Batal</option>
            </select>
            <button class="flex items-center justify-center gap-2 px-6 py-3 bg-secondary-container text-on-secondary-container font-semibold rounded-xl hover:bg-secondary-fixed transition-colors active:scale-95">
                <span class="material-symbols-outlined text-[20px]">refresh</span>
                <span>Reset</span>
            </button>
        </div>
    </div>
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-low">
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">No. Invoice</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Pelanggan</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Produk</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Total</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Pembayaran</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant">
                <!-- Row 1 -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="px-6 py-4">
                        <span class="text-body-md font-bold text-primary">INV/20231012/001</span>
                    </td>
                    <td class="px-6 py-4 text-body-md text-on-surface-variant">12 Okt 2023, 14:20</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-bold text-[10px]">AS</div>
                            <span class="text-body-md font-semibold">Andi Saputra</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="space-y-1">
                            <p class="text-body-md font-medium">iPhone 15 Pro Max (1x)</p>
                            <p class="text-label-md text-on-surface-variant">+2 item lainnya</p>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-body-md font-bold">Rp 24.500.000</td>
                    <td class="px-6 py-4 text-body-md">Transfer BCA</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-700 text-label-md font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-700 mr-2"></span>
                            Berhasil
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <button class="p-2 hover:bg-surface-container rounded-lg text-primary-fixed-dim" title="Detail">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button class="p-2 hover:bg-surface-container rounded-lg text-on-surface-variant" title="Cetak">
                                <span class="material-symbols-outlined text-[20px]">print</span>
                            </button>
                            <button class="p-2 hover:bg-error-container/20 rounded-lg text-error" title="Hapus">
                                <span class="material-symbols-outlined text-[20px]">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="px-6 py-4">
                        <span class="text-body-md font-bold text-primary">INV/20231012/002</span>
                    </td>
                    <td class="px-6 py-4 text-body-md text-on-surface-variant">12 Okt 2023, 15:45</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary font-bold text-[10px]">BM</div>
                            <span class="text-body-md font-semibold">Budi Mulia</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-body-md font-medium">Samsung S23 Ultra (1x)</p>
                    </td>
                    <td class="px-6 py-4 text-body-md font-bold">Rp 18.200.000</td>
                    <td class="px-6 py-4 text-body-md">QRIS</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-amber-100 text-amber-700 text-label-md font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-700 mr-2 animate-pulse"></span>
                            Proses
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <button class="p-2 hover:bg-surface-container rounded-lg text-primary-fixed-dim"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
                            <button class="p-2 hover:bg-surface-container rounded-lg text-on-surface-variant"><span class="material-symbols-outlined text-[20px]">print</span></button>
                            <button class="p-2 hover:bg-error-container/20 rounded-lg text-error"><span class="material-symbols-outlined text-[20px]">delete</span></button>
                        </div>
                    </td>
                </tr>
                <!-- Row 3 -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="px-6 py-4">
                        <span class="text-body-md font-bold text-primary">INV/20231011/089</span>
                    </td>
                    <td class="px-6 py-4 text-body-md text-on-surface-variant">11 Okt 2023, 10:12</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary font-bold text-[10px]">DA</div>
                            <span class="text-body-md font-semibold">Dewi Anggraini</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-body-md font-medium">Macbook Air M2 (1x)</p>
                    </td>
                    <td class="px-6 py-4 text-body-md font-bold">Rp 16.500.000</td>
                    <td class="px-6 py-4 text-body-md">Tunai</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-error-container text-on-error-container text-label-md font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-error mr-2"></span>
                            Batal
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <button class="p-2 hover:bg-surface-container rounded-lg text-primary-fixed-dim"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
                            <button class="p-2 hover:bg-surface-container rounded-lg text-on-surface-variant"><span class="material-symbols-outlined text-[20px]">print</span></button>
                            <button class="p-2 hover:bg-error-container/20 rounded-lg text-error"><span class="material-symbols-outlined text-[20px]">delete</span></button>
                        </div>
                    </td>
                </tr>
                <!-- Row 4 -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="px-6 py-4">
                        <span class="text-body-md font-bold text-primary">INV/20231011/088</span>
                    </td>
                    <td class="px-6 py-4 text-body-md text-on-surface-variant">11 Okt 2023, 09:30</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-bold text-[10px]">RP</div>
                            <span class="text-body-md font-semibold">Rian Pratama</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-body-md font-medium">Sony WH-1000XM5 (2x)</p>
                    </td>
                    <td class="px-6 py-4 text-body-md font-bold">Rp 11.200.000</td>
                    <td class="px-6 py-4 text-body-md">Cicilan Kredivo</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-700 text-label-md font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-700 mr-2"></span>
                            Berhasil
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <button class="p-2 hover:bg-surface-container rounded-lg text-primary-fixed-dim"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
                            <button class="p-2 hover:bg-surface-container rounded-lg text-on-surface-variant"><span class="material-symbols-outlined text-[20px]">print</span></button>
                            <button class="p-2 hover:bg-error-container/20 rounded-lg text-error"><span class="material-symbols-outlined text-[20px]">delete</span></button>
                        </div>
                    </td>
                </tr>
                <!-- Row 5 -->
                <tr class="hover:bg-surface-container-low transition-colors group">
                    <td class="px-6 py-4">
                        <span class="text-body-md font-bold text-primary">INV/20231011/087</span>
                    </td>
                    <td class="px-6 py-4 text-body-md text-on-surface-variant">11 Okt 2023, 08:15</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary font-bold text-[10px]">SF</div>
                            <span class="text-body-md font-semibold">Siti Fatimah</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-body-md font-medium">iPad Air 5th Gen (1x)</p>
                    </td>
                    <td class="px-6 py-4 text-body-md font-bold">Rp 9.800.000</td>
                    <td class="px-6 py-4 text-body-md">QRIS</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-700 text-label-md font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-700 mr-2"></span>
                            Berhasil
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <button class="p-2 hover:bg-surface-container rounded-lg text-primary-fixed-dim"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
                            <button class="p-2 hover:bg-surface-container rounded-lg text-on-surface-variant"><span class="material-symbols-outlined text-[20px]">print</span></button>
                            <button class="p-2 hover:bg-error-container/20 rounded-lg text-error"><span class="material-symbols-outlined text-[20px]">delete</span></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Pagination -->
    <div class="px-6 py-4 border-t border-outline-variant flex flex-col sm:flex-row items-center justify-between gap-4">
        <p class="text-body-md text-on-surface-variant">Menampilkan <span class="font-bold text-on-surface">1 - 10</span> dari <span class="font-bold text-on-surface">1.284</span> transaksi</p>
        <div class="flex items-center gap-2">
            <button class="p-2 border border-outline-variant rounded-lg hover:bg-surface-container transition-colors disabled:opacity-50" disabled="">
                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
            </button>
            <div class="flex items-center gap-1">
                <button class="w-10 h-10 bg-primary text-white font-bold rounded-lg transition-transform active:scale-95">1</button>
                <button class="w-10 h-10 hover:bg-surface-container text-on-surface font-semibold rounded-lg transition-all">2</button>
                <button class="w-10 h-10 hover:bg-surface-container text-on-surface font-semibold rounded-lg transition-all">3</button>
                <span class="px-2 text-on-surface-variant">...</span>
                <button class="w-10 h-10 hover:bg-surface-container text-on-surface font-semibold rounded-lg transition-all">128</button>
            </div>
            <button class="p-2 border border-outline-variant rounded-lg hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
            </button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Micro-interaction for buttons
    document.querySelectorAll('button').forEach(btn => {
        btn.addEventListener('click', () => {
            if (btn.textContent.includes('Reset')) {
                const toast = document.getElementById('toast');
                toast.classList.remove('translate-y-24', 'opacity-0');
                toast.classList.add('translate-y-0', 'opacity-100');
                setTimeout(() => {
                    toast.classList.add('translate-y-24', 'opacity-0');
                    toast.classList.remove('translate-y-0', 'opacity-100');
                }, 3000);
            }
        });
    });
</script>
@endpush