@extends('layouts.main')

@section('title', 'Pembelian - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari data pembelian...')

@section('content')
<!-- Header Section -->
<div class="flex justify-between items-end">
    <div>
        <h2 class="font-display-lg text-display-lg text-on-surface">Manajemen Pembelian</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant mt-1">Kelola pengadaan stok barang dan pelacakan pesanan dari supplier.</p>
    </div>
    <button class="bg-primary text-on-primary px-6 py-3 rounded-xl font-semibold flex items-center gap-2 shadow-lg shadow-primary/20 hover:bg-primary-container transition-all active:scale-95">
        <span class="material-symbols-outlined text-[20px]">add_shopping_cart</span>
        <span>Tambah Pembelian Baru</span>
    </button>
</div>
<!-- Dashboard Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-normal">
    <!-- Card 1 -->
    <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-all group">
        <div class="flex justify-between items-start mb-4">
            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
            </div>
            <span class="text-xs font-semibold px-2 py-1 bg-green-100 text-green-700 rounded-full">+12.5%</span>
        </div>
        <p class="text-on-surface-variant font-label-md">Total Pembelian Bulan Ini</p>
        <p class="text-headline-lg font-headline-lg mt-1">142 Pesanan</p>
    </div>
    <!-- Card 2 -->
    <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-all group">
        <div class="flex justify-between items-start mb-4">
            <div class="w-12 h-12 rounded-lg bg-tertiary-container/10 flex items-center justify-center text-tertiary">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">pending_actions</span>
            </div>
            <span class="text-xs font-semibold px-2 py-1 bg-amber-100 text-amber-700 rounded-full">8 Mendesak</span>
        </div>
        <p class="text-on-surface-variant font-label-md">Pesanan Menunggu</p>
        <p class="text-headline-lg font-headline-lg mt-1">24 Pesanan</p>
    </div>
    <!-- Card 3 -->
    <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-all group">
        <div class="flex justify-between items-start mb-4">
            <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center text-green-600">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            </div>
            <span class="text-xs font-semibold px-2 py-1 bg-green-100 text-green-700 rounded-full">94% Berhasil</span>
        </div>
        <p class="text-on-surface-variant font-label-md">Barang Diterima</p>
        <p class="text-headline-lg font-headline-lg mt-1">1,058 Unit</p>
    </div>
    <!-- Card 4 -->
    <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-all group">
        <div class="flex justify-between items-start mb-4">
            <div class="w-12 h-12 rounded-lg bg-error-container/10 flex items-center justify-center text-error">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
            </div>
            <span class="text-xs font-semibold px-2 py-1 bg-blue-100 text-blue-700 rounded-full">Budget Sesuai</span>
        </div>
        <p class="text-on-surface-variant font-label-md">Total Pengeluaran Stok</p>
        <p class="text-headline-lg font-headline-lg mt-1">Rp 1.42M</p>
    </div>
</div>
<div class="flex flex-col lg:flex-row gap-gutter">
    <!-- Main Table Section -->
    <div class="flex-1 space-y-normal">
        <div class="bg-white rounded-xl border border-outline-variant shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-outline-variant flex justify-between items-center">
                <h3 class="font-headline-md text-headline-md text-on-surface">Daftar Pesanan Pembelian</h3>
                <div class="flex gap-2">
                    <button class="flex items-center gap-1.5 px-3 py-1.5 text-label-md font-label-md border border-outline-variant rounded-lg hover:bg-surface-container-low transition-colors">
                        <span class="material-symbols-outlined text-[18px]">filter_list</span>
                        Filter
                    </button>
                    <button class="flex items-center gap-1.5 px-3 py-1.5 text-label-md font-label-md border border-outline-variant rounded-lg hover:bg-surface-container-low transition-colors">
                        <span class="material-symbols-outlined text-[18px]">download</span>
                        Ekspor
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-surface-container-low text-on-surface-variant font-label-md">
                        <tr>
                            <th class="px-6 py-4 font-semibold uppercase tracking-wider text-[11px]">ID Pesanan</th>
                            <th class="px-6 py-4 font-semibold uppercase tracking-wider text-[11px]">Nama Supplier</th>
                            <th class="px-6 py-4 font-semibold uppercase tracking-wider text-[11px]">Tanggal</th>
                            <th class="px-6 py-4 font-semibold uppercase tracking-wider text-[11px]">Item</th>
                            <th class="px-6 py-4 font-semibold uppercase tracking-wider text-[11px]">Total Harga</th>
                            <th class="px-6 py-4 font-semibold uppercase tracking-wider text-[11px]">Status</th>
                            <th class="px-6 py-4 text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/30 text-body-md font-body-md">
                        <!-- Row 1 -->
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-6 py-4 font-bold text-primary">#PO-240501</td>
                            <td class="px-6 py-4">PT Erajaya Swasembada</td>
                            <td class="px-6 py-4 text-on-surface-variant">12 Mei 2024</td>
                            <td class="px-6 py-4">10x iPhone 15 Pro Max</td>
                            <td class="px-6 py-4 font-semibold">Rp 215.400.000</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Selesai
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1 hover:bg-surface-container-high rounded-full"><span class="material-symbols-outlined">more_vert</span></button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-6 py-4 font-bold text-primary">#PO-240502</td>
                            <td class="px-6 py-4">Samsung Electronics Indonesia</td>
                            <td class="px-6 py-4 text-on-surface-variant">14 Mei 2024</td>
                            <td class="px-6 py-4">25x Galaxy S24 Ultra</td>
                            <td class="px-6 py-4 font-semibold">Rp 485.000.000</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Dikirim
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1 hover:bg-surface-container-high rounded-full"><span class="material-symbols-outlined">more_vert</span></button>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-6 py-4 font-bold text-primary">#PO-240503</td>
                            <td class="px-6 py-4">Xiaomi Strategic Partner</td>
                            <td class="px-6 py-4 text-on-surface-variant">15 Mei 2024</td>
                            <td class="px-6 py-4">50x Redmi Note 13</td>
                            <td class="px-6 py-4 font-semibold">Rp 125.000.000</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                    Menunggu
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1 hover:bg-surface-container-high rounded-full"><span class="material-symbols-outlined">more_vert</span></button>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-6 py-4 font-bold text-primary">#PO-240504</td>
                            <td class="px-6 py-4">OPPO Indonesia Distribusi</td>
                            <td class="px-6 py-4 text-on-surface-variant">16 Mei 2024</td>
                            <td class="px-6 py-4">15x OPPO Reno 11 Pro</td>
                            <td class="px-6 py-4 font-semibold">Rp 134.800.000</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Dikirim
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1 hover:bg-surface-container-high rounded-full"><span class="material-symbols-outlined">more_vert</span></button>
                            </td>
                        </tr>
                        <!-- Row 5 -->
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-6 py-4 font-bold text-primary">#PO-240505</td>
                            <td class="px-6 py-4">Global Teknologi Jaya</td>
                            <td class="px-6 py-4 text-on-surface-variant">17 Mei 2024</td>
                            <td class="px-6 py-4">30x iPad Air Gen 5</td>
                            <td class="px-6 py-4 font-semibold">Rp 297.000.000</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                    Menunggu
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-1 hover:bg-surface-container-high rounded-full"><span class="material-symbols-outlined">more_vert</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t border-outline-variant bg-surface-container-low flex justify-between items-center">
                <p class="text-label-md text-on-surface-variant">Menampilkan 5 dari 142 pesanan</p>
                <div class="flex gap-1">
                    <button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant bg-white text-on-surface-variant hover:bg-surface-container-high">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded border border-transparent bg-primary text-on-primary">2</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant bg-white text-on-surface-variant hover:bg-surface-container-high">3</button>
                    <span class="px-2 text-on-surface-variant">...</span>
                    <button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant bg-white text-on-surface-variant hover:bg-surface-container-high">24</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Sidebar Panel -->
    <aside class="w-full lg:w-[320px] space-y-gutter">
        <!-- Supplier Terpopuler -->
        <section class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant shadow-sm">
            <div class="flex items-center gap-2 mb-6">
                <span class="material-symbols-outlined text-primary">verified</span>
                <h4 class="font-headline-md text-[18px] text-on-surface">Supplier Terpopuler</h4>
            </div>
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center font-bold text-primary">E</div>
                    <div class="flex-1">
                        <p class="font-label-md text-on-surface font-semibold">PT Erajaya Swasembada</p>
                        <div class="w-full bg-surface-container-low h-1.5 rounded-full mt-1">
                            <div class="bg-primary h-full rounded-full w-[85%]"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-on-surface-variant">42x</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center font-bold text-primary">S</div>
                    <div class="flex-1">
                        <p class="font-label-md text-on-surface font-semibold">Samsung Electronics</p>
                        <div class="w-full bg-surface-container-low h-1.5 rounded-full mt-1">
                            <div class="bg-primary h-full rounded-full w-[70%]"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-on-surface-variant">35x</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center font-bold text-primary">X</div>
                    <div class="flex-1">
                        <p class="font-label-md text-on-surface font-semibold">Xiaomi Strategic Partner</p>
                        <div class="w-full bg-surface-container-low h-1.5 rounded-full mt-1">
                            <div class="bg-primary h-full rounded-full w-[45%]"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-on-surface-variant">22x</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center font-bold text-primary">O</div>
                    <div class="flex-1">
                        <p class="font-label-md text-on-surface font-semibold">OPPO Indonesia</p>
                        <div class="w-full bg-surface-container-low h-1.5 rounded-full mt-1">
                            <div class="bg-primary h-full rounded-full w-[30%]"></div>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-on-surface-variant">15x</span>
                </div>
            </div>
            <button class="w-full mt-6 py-2.5 text-label-md font-semibold text-primary border border-primary/20 rounded-lg hover:bg-primary/5 transition-colors">Lihat Semua Supplier</button>
        </section>
        <!-- Pesanan Aktif Tracker -->
        <section class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant shadow-sm relative overflow-hidden">
            <!-- Decorative glow -->
            <div class="absolute -top-12 -right-12 w-24 h-24 bg-primary/5 blur-3xl rounded-full"></div>
            <div class="flex items-center gap-2 mb-6">
                <span class="material-symbols-outlined text-primary">local_shipping</span>
                <h4 class="font-headline-md text-[18px] text-on-surface">Pesanan Aktif</h4>
            </div>
            <div class="space-y-6">
                <!-- Track 1 -->
                <div class="relative pl-6 border-l-2 border-primary/20">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary ring-4 ring-primary-fixed"></div>
                    <div class="flex justify-between items-start mb-1">
                        <p class="font-label-md font-bold text-on-surface">Samsung Galaxy S24 Ultra</p>
                        <span class="text-[10px] bg-blue-100 text-blue-700 px-1.5 py-0.5 rounded font-bold uppercase">Transit</span>
                    </div>
                    <p class="text-[12px] text-on-surface-variant">#PO-240502 • Dari Jakarta</p>
                    <div class="mt-3 flex items-center gap-2">
                        <div class="flex-1 bg-surface-container h-1 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[75%]"></div>
                        </div>
                        <span class="text-[10px] font-bold text-on-surface-variant">75%</span>
                    </div>
                </div>
                <!-- Track 2 -->
                <div class="relative pl-6 border-l-2 border-primary/20">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-outline-variant ring-4 ring-surface"></div>
                    <div class="flex justify-between items-start mb-1">
                        <p class="font-label-md font-bold text-on-surface">OPPO Reno 11 Pro</p>
                        <span class="text-[10px] bg-secondary-container text-secondary-fixed-variant px-1.5 py-0.5 rounded font-bold uppercase">Processing</span>
                    </div>
                    <p class="text-[12px] text-on-surface-variant">#PO-240504 • Pengemasan</p>
                    <div class="mt-3 flex items-center gap-2">
                        <div class="flex-1 bg-surface-container h-1 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[30%]"></div>
                        </div>
                        <span class="text-[10px] font-bold text-on-surface-variant">30%</span>
                    </div>
                </div>
            </div>
            <div class="mt-8 bg-surface p-4 rounded-lg border border-outline-variant/50">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-amber-500">info</span>
                    <p class="text-[11px] leading-snug text-on-surface-variant">
                        3 pesanan terdeteksi mengalami keterlambatan cuaca. <a class="text-primary font-bold hover:underline" href="#">Detail logistik →</a>
                    </p>
                </div>
            </div>
        </section>
    </aside>
</div>
@endsection

@push('scripts')
<script>
    // Micro-interactions and simple state handling
    document.querySelectorAll('button, a').forEach(el => {
                el.addEventListener('click', (e) => {
                            const circle = document.createElement('span');
                            const diameter = Math.max(el.clientWidth, el.clientHeight);
                            const radius = diameter / 2;

                            circle.style.width = circle.style.height = `${diameter}px`;
                            circle.style.left = `${e.clientX - el.getBoundingClientRect().left - radius}
</script>
@endpush