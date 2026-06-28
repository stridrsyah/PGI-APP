@extends('layouts.main')

@section('title', 'Manajemen Pelanggan - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari pelanggan, transaksi, atau bantuan...')

@section('content')
<!-- Header Section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4 mb-8">
    <div>
        <h2 class="font-headline-lg text-headline-lg text-on-background">Manajemen Pelanggan</h2>
        <p class="text-body-lg text-on-surface-variant max-w-xl">Kelola database pelanggan dan program loyalitas Anda.</p>
    </div>
    <button class="bg-primary text-on-primary px-6 py-3 rounded-xl font-semibold flex items-center gap-2 hover:bg-primary-container transition-all active:scale-95 shadow-lg shadow-primary/10">
        <span class="material-symbols-outlined">person_add</span>
        <span>Tambah Pelanggan Baru</span>
    </button>
</div>
<!-- Statistik Utama (4 Kartu) -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-8">
    <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 card-elevation transition-transform hover:-translate-y-1">
        <div class="flex items-center justify-between mb-2">
            <span class="p-2 bg-primary/5 text-primary rounded-lg">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">groups</span>
            </span>
            <span class="text-xs font-semibold text-primary px-2 py-1 bg-primary/10 rounded-full">Aktif</span>
        </div>
        <p class="text-on-surface-variant font-label-md">Total Pelanggan</p>
        <h3 class="text-headline-lg font-bold">1,248</h3>
    </div>
    <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 card-elevation transition-transform hover:-translate-y-1">
        <div class="flex items-center justify-between mb-2">
            <span class="p-2 bg-tertiary/5 text-tertiary rounded-lg">
                <span class="material-symbols-outlined">trending_up</span>
            </span>
            <span class="text-xs font-semibold text-tertiary px-2 py-1 bg-tertiary/10 rounded-full">+12%</span>
        </div>
        <p class="text-on-surface-variant font-label-md">Pelanggan Baru Bulan Ini</p>
        <h3 class="text-headline-lg font-bold">142</h3>
    </div>
    <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 card-elevation transition-transform hover:-translate-y-1">
        <div class="flex items-center justify-between mb-2">
            <span class="p-2 bg-secondary/5 text-secondary rounded-lg">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
            </span>
        </div>
        <p class="text-on-surface-variant font-label-md">Total Poin Loyalitas</p>
        <h3 class="text-headline-lg font-bold">85.400 <span class="text-sm font-normal text-on-surface-variant">Poin</span></h3>
    </div>
    <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 card-elevation transition-transform hover:-translate-y-1">
        <div class="flex items-center justify-between mb-2">
            <span class="p-2 bg-error/5 text-error rounded-lg">
                <span class="material-symbols-outlined">favorite</span>
            </span>
            <div class="flex text-amber-500">
                <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
            </div>
        </div>
        <p class="text-on-surface-variant font-label-md">Rata-rata Kepuasan</p>
        <h3 class="text-headline-lg font-bold">4.8<span class="text-sm font-normal text-on-surface-variant">/5.0</span></h3>
    </div>
</div>
<!-- Content Grid: 2 Columns -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
    <!-- Left Column: Table (8/12) -->
    <div class="lg:col-span-8 space-y-gutter">
        <div class="bg-surface-container-lowest rounded-xl border border-outline-variant/30 card-elevation overflow-hidden">
            <div class="p-gutter border-b border-outline-variant/20 flex flex-col sm:flex-row justify-between items-center gap-4">
                <h4 class="font-headline-md">Daftar Pelanggan</h4>
                <div class="flex gap-2 w-full sm:w-auto">
                    <button class="flex items-center gap-2 px-3 py-2 border border-outline-variant/50 rounded-lg text-body-md hover:bg-surface-variant/10">
                        <span class="material-symbols-outlined text-sm">filter_list</span>
                        Filter
                    </button>
                    <button class="flex items-center gap-2 px-3 py-2 border border-outline-variant/50 rounded-lg text-body-md hover:bg-surface-variant/10">
                        <span class="material-symbols-outlined text-sm">file_download</span>
                        Ekspor
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-surface-container-low/50">
                        <tr>
                            <th class="px-6 py-4 font-label-md text-on-surface-variant">Nama Pelanggan</th>
                            <th class="px-6 py-4 font-label-md text-on-surface-variant">Kategori</th>
                            <th class="px-6 py-4 font-label-md text-on-surface-variant">Kontak</th>
                            <th class="px-6 py-4 font-label-md text-on-surface-variant">Transaksi</th>
                            <th class="px-6 py-4 font-label-md text-on-surface-variant">Poin</th>
                            <th class="px-6 py-4 font-label-md text-on-surface-variant">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/20">
                        <tr class="hover:bg-surface-container-low/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-container/20 text-primary flex items-center justify-center font-bold">AS</div>
                                    <div>
                                        <p class="font-semibold text-on-surface">Andi Saputra</p>
                                        <p class="text-xs text-on-surface-variant">ID: PG-9921</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-secondary-container/30 text-secondary font-label-md rounded-full">Gold</span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-body-md">0812-3456-7890</p>
                                <p class="text-[10px] text-on-surface-variant italic">andi.s@gmail.com</p>
                            </td>
                            <td class="px-6 py-4 text-body-md font-medium">Rp 12.450.000</td>
                            <td class="px-6 py-4 text-body-md">2,450 pts</td>
                            <td class="px-6 py-4">
                                <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity hover:bg-surface-variant/20 rounded-full">
                                    <span class="material-symbols-outlined text-on-surface-variant">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img class="w-10 h-10 rounded-full object-cover" data-alt="Close up portrait of a young Indonesian woman with a friendly smile, dressed in professional attire. The photo has a soft, high-key lighting aesthetic with a minimalist white office background. She has clear skin and subtle, natural makeup, representing a premium customer of Pusat Gadget. Cohesive indigo color accents are subtly present in her accessories." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBamXl4soBTuDJJoX4Q8No9KERgztWYOutVBT0jbt2aVLJIq0gxShraiP2j5YRcRgi_2cUKHPFUGPV7zbWB9pGPnrkwL56kxvTiAg89yxAhYXveLdOPWFkOyRuPt63VN13ApFi7LMuMg8V6tK4P3cGcnDXdg10TXKlgGke4tr2HjxFJ2RZAFC3BO8exp5yWttUaYroLIWgnXUoevNrIKU9qw4H1uiU_zeYR5L-hjqI5JSarKrqJ7gWe5whOsnzupY34SmsGd-BIdl8" />
                                    <div>
                                        <p class="font-semibold text-on-surface">Siti Rahma</p>
                                        <p class="text-xs text-on-surface-variant">ID: PG-8842</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-surface-variant text-on-surface-variant font-label-md rounded-full">Silver</span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-body-md">0877-1122-3344</p>
                                <p class="text-[10px] text-on-surface-variant italic">siti.r@outlook.com</p>
                            </td>
                            <td class="px-6 py-4 text-body-md font-medium">Rp 4.200.000</td>
                            <td class="px-6 py-4 text-body-md">840 pts</td>
                            <td class="px-6 py-4">
                                <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity hover:bg-surface-variant/20 rounded-full">
                                    <span class="material-symbols-outlined text-on-surface-variant">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-tertiary-container/20 text-tertiary flex items-center justify-center font-bold">BP</div>
                                    <div>
                                        <p class="font-semibold text-on-surface">Budi Pratama</p>
                                        <p class="text-xs text-on-surface-variant">ID: PG-7731</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-surface-container-high text-on-surface-variant font-label-md rounded-full">Regular</span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-body-md">0819-9988-7766</p>
                                <p class="text-[10px] text-on-surface-variant italic">budi_p@gmail.com</p>
                            </td>
                            <td class="px-6 py-4 text-body-md font-medium">Rp 1.150.000</td>
                            <td class="px-6 py-4 text-body-md">115 pts</td>
                            <td class="px-6 py-4">
                                <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity hover:bg-surface-variant/20 rounded-full">
                                    <span class="material-symbols-outlined text-on-surface-variant">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img class="w-10 h-10 rounded-full object-cover" data-alt="A portrait of a cheerful Indonesian man in his 30s, looking at the camera with confidence. He is wearing a minimalist, high-quality gray t-shirt. The background is a clean, bright white wall with soft side-lighting. He embodies a tech-savvy regular customer. The overall aesthetic is professional, clean, and in line with the Pusat Gadget branding." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0SBFh6AbvJS9H04Hg3wUnz58YyV_cRAfYXdbsV55q043Zy-0KoKr7Uaq_VI3-wZg7Df3eF_lxHI4sWTERnArN-M-EJiZmBzKb7pC1mwfem5hnO6F9vemGXX06aau4x7vtrIKxIutY0h45PSxBgDqghz7Ui1Ju1mx9mdWzOoxdHjfNnVUNkgNavPmx0DjOUXAR2XhOTdSqpyR9Mxk4NAiFqwJCX7o9quUm4AP0Ak8pwPkU7vk280SNR5Vadv41Y8tfYgMPU8YTqrc" />
                                    <div>
                                        <p class="font-semibold text-on-surface">Hendra Wijaya</p>
                                        <p class="text-xs text-on-surface-variant">ID: PG-6610</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-secondary-container/30 text-secondary font-label-md rounded-full">Gold</span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-body-md">0811-2233-4455</p>
                                <p class="text-[10px] text-on-surface-variant italic">h.wijaya@corporate.com</p>
                            </td>
                            <td class="px-6 py-4 text-body-md font-medium">Rp 28.900.000</td>
                            <td class="px-6 py-4 text-body-md">5,780 pts</td>
                            <td class="px-6 py-4">
                                <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity hover:bg-surface-variant/20 rounded-full">
                                    <span class="material-symbols-outlined text-on-surface-variant">more_vert</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-gutter border-t border-outline-variant/20 flex justify-between items-center">
                <p class="text-body-md text-on-surface-variant">Menampilkan 4 dari 1,248 pelanggan</p>
                <div class="flex gap-1">
                    <button class="w-8 h-8 flex items-center justify-center rounded bg-surface-variant/20 text-primary">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-variant/20">2</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-variant/20">3</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-variant/20">
                        <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Column: Panels (4/12) -->
    <div class="lg:col-span-4 space-y-gutter">
        <!-- Panel Segmen Pelanggan -->
        <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 card-elevation">
            <h4 class="font-headline-md mb-6">Segmen Pelanggan</h4>
            <div class="relative w-48 h-48 mx-auto mb-6">
                <!-- Simple Custom Pie Chart via CSS Gradients -->
                <div class="w-full h-full rounded-full" style="background: conic-gradient(#3e40c3 0% 55%, #b9c7e0 55% 80%, #ffdcc6 80% 100%);"></div>
                <div class="absolute inset-4 bg-surface-container-lowest rounded-full flex flex-center flex-col items-center justify-center">
                    <span class="text-body-md font-semibold text-on-surface-variant">Top Segmen</span>
                    <span class="text-headline-md font-bold text-primary">Smartphone</span>
                </div>
            </div>
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-primary"></div>
                        <span class="text-body-md">Smartphone</span>
                    </div>
                    <span class="font-semibold">55%</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-secondary-fixed-dim"></div>
                        <span class="text-body-md">Aksesori</span>
                    </div>
                    <span class="font-semibold">25%</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-tertiary-fixed"></div>
                        <span class="text-body-md">Tablet</span>
                    </div>
                    <span class="font-semibold">20%</span>
                </div>
            </div>
        </div>
        <!-- Panel Ulasan Terbaru -->
        <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 card-elevation">
            <div class="flex justify-between items-center mb-6">
                <h4 class="font-headline-md">Ulasan Terbaru</h4>
                <button class="text-primary font-semibold text-xs hover:underline">Lihat Semua</button>
            </div>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 rounded-full bg-secondary-container/50 text-secondary flex items-center justify-center text-xs font-bold">DP</div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <p class="font-semibold text-body-md truncate">Diana Putri</p>
                            <div class="flex text-amber-500">
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                        </div>
                        <p class="text-body-md text-on-surface-variant line-clamp-2 italic">"Layanan servis sangat cepat dan ramah. Program poinnya juga sangat membantu penghematan belanja aksesori."</p>
                        <p class="text-[10px] text-outline mt-1">2 Jam yang lalu • iPhone 15 Pro Max</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 rounded-full bg-primary-container/20 text-primary flex items-center justify-center text-xs font-bold">RW</div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <p class="font-semibold text-body-md truncate">Rudi Wahyudi</p>
                            <div class="flex text-amber-500">
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]">star</span>
                            </div>
                        </div>
                        <p class="text-body-md text-on-surface-variant line-clamp-2 italic">"Barang ori, garansi resmi. Cuma stok casing warna biru sering habis. Mohon ditambah ya."</p>
                        <p class="text-[10px] text-outline mt-1">Kemarin • Samsung S24 Ultra</p>
                    </div>
                </div>
                <div class="flex gap-4 opacity-75">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 rounded-full bg-tertiary-container/10 text-tertiary flex items-center justify-center text-xs font-bold">AK</div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <p class="font-semibold text-body-md truncate">Anita Kusuma</p>
                            <div class="flex text-amber-500">
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                        </div>
                        <p class="text-body-md text-on-surface-variant line-clamp-2 italic">"Sudah jadi langganan tetap di sini. Pelayanan gold member-nya luar biasa."</p>
                        <p class="text-[10px] text-outline mt-1">2 Hari yang lalu • iPad Pro M2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Micro-interactions and effects
    document.addEventListener('DOMContentLoaded', () => {
        // Shadow lift effect on cards
        const cards = document.querySelectorAll('.card-elevation');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-4px)';
                card.style.boxShadow = '0 10px 25px -5px rgba(62, 64, 195, 0.08), 0 8px 10px -6px rgba(62, 64, 195, 0.08)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
                card.style.boxShadow = '0 2px 4px rgba(0,0,0,0.02), 0 4px 12px rgba(0,0,0,0.02)';
            });
        });

        // Smooth fade in for table rows
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach((row, index) => {
            row.style.opacity = '0';
            row.style.transform = 'translateX(-10px)';
            setTimeout(() => {
                row.style.transition = 'all 0.4s ease-out';
                row.style.opacity = '1';
                row.style.transform = 'translateX(0)';
            }, 100 * index);
        });
    });
</script>
@endpush