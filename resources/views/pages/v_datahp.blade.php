@extends('layouts.main')

@section('title', 'Data HP - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari data HP, merek, atau model...')

@section('content')
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <nav class="flex items-center gap-2 text-label-md text-on-surface-variant mb-2">
            <a class="hover:text-primary transition-colors" href="#">Dashboard</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <a class="hover:text-primary transition-colors" href="#">Master Data</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Data HP</span>
        </nav>
        <h2 class="text-display-lg font-display-lg text-on-surface">Data HP</h2>
    </div>
    <button class="flex items-center justify-center gap-2 bg-primary text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:brightness-110 active:scale-95 transition-all">
        <span class="material-symbols-outlined">add</span>
        <span>Tambah Perangkat Baru</span>
    </button>
</div>
<!-- Filters Section -->
<div class="bg-white rounded-2xl p-6 card-shadow border border-outline-variant mb-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4">
        <!-- Search Bar -->
        <div class="lg:col-span-5 relative">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
            <input class="w-full h-12 pl-12 pr-4 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:border-primary focus:ring-0 transition-colors" placeholder="Cari berdasarkan nama HP, SKU, atau IMEI..." type="text" />
        </div>
        <!-- Dropdowns -->
        <div class="lg:col-span-2">
            <select class="w-full h-12 px-4 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:border-primary focus:ring-0 appearance-none">
                <option value="">Semua Merek</option>
                <option>Apple</option>
                <option>Samsung</option>
                <option>Xiaomi</option>
                <option>Oppo</option>
            </select>
        </div>
        <div class="lg:col-span-2">
            <select class="w-full h-12 px-4 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:border-primary focus:ring-0 appearance-none">
                <option value="">Semua Kategori</option>
                <option>Flagship</option>
                <option>Mid-range</option>
                <option>Entry-level</option>
            </select>
        </div>
        <div class="lg:col-span-2">
            <select class="w-full h-12 px-4 bg-surface-container-low border border-outline-variant rounded-xl text-body-md focus:border-primary focus:ring-0 appearance-none">
                <option value="">Status Stok</option>
                <option>Tersedia</option>
                <option>Menipis</option>
                <option>Habis</option>
            </select>
        </div>
        <!-- Reset Button -->
        <div class="lg:col-span-1 flex items-center">
            <button class="w-full h-12 flex items-center justify-center text-primary font-semibold hover:bg-primary-container/10 rounded-xl transition-colors">
                Reset
            </button>
        </div>
    </div>
</div>
<!-- Table Container -->
<div class="bg-white rounded-2xl overflow-hidden card-shadow border border-outline-variant">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-low border-b border-outline-variant">
                    <th class="p-4 w-12">
                        <input class="rounded border-outline text-primary focus:ring-primary" type="checkbox" />
                    </th>
                    <th class="p-4 font-semibold text-label-md text-on-surface-variant uppercase tracking-wider">Perangkat</th>
                    <th class="p-4 font-semibold text-label-md text-on-surface-variant uppercase tracking-wider">Merek &amp; Kategori</th>
                    <th class="p-4 font-semibold text-label-md text-on-surface-variant uppercase tracking-wider">SKU/IMEI</th>
                    <th class="p-4 font-semibold text-label-md text-on-surface-variant uppercase tracking-wider">Stok</th>
                    <th class="p-4 font-semibold text-label-md text-on-surface-variant uppercase tracking-wider text-right">Harga Beli</th>
                    <th class="p-4 font-semibold text-label-md text-on-surface-variant uppercase tracking-wider text-right">Harga Jual</th>
                    <th class="p-4 font-semibold text-label-md text-on-surface-variant uppercase tracking-wider text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant">
                <!-- Row 1 -->
                <tr class="hover:bg-surface-container transition-colors">
                    <td class="p-4">
                        <input class="rounded border-outline text-primary focus:ring-primary" type="checkbox" />
                    </td>
                    <td class="p-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center overflow-hidden border border-outline-variant">
                                <img class="w-full h-full object-cover" data-alt="A high-quality studio product photo of a Titanium iPhone 15 Pro Max, showcasing its sleek metallic finish and premium design. The phone is angled slightly to show the triple-lens camera array and the brushed titanium edges. Lighting is soft and professional, with a clean white minimalist background that fits a high-end tech inventory UI." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhk_DBhijqmxZHDsnpUNcJ4yt3DDMN-bzah9jcD_A9qyim694lLL0bPZLN87Y_qzV6taL4iSeAm146_y4iqC6hoRUV4zdJJ1V0CCozxbhgIKaCJTQDZeYUz7ADC3YmSdyCP490dRhIvty6wj2MDvQfQEighTocQ4w8-KGfb_6TdL_VI4jqI8fx6eN1lYwH8E_j-UZhKIYVUs0qnnlH0_GOnKkj81pap55TZqfX5WkRQE9sBosCo90RJOWjYZPr0sHLb2Gbl7zU0nY" />
                            </div>
                            <div>
                                <p class="font-semibold text-on-surface">iPhone 15 Pro Max</p>
                                <p class="text-label-md text-on-surface-variant">Natural Titanium</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <div class="flex flex-col">
                            <span class="text-body-md text-on-surface">Apple</span>
                            <span class="text-label-md text-on-surface-variant">Flagship</span>
                        </div>
                    </td>
                    <td class="p-4 font-mono text-body-md text-on-surface">862340012938445</td>
                    <td class="p-4">
                        <div class="flex flex-col gap-1">
                            <span class="font-bold text-on-surface">12 Unit</span>
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-[#ECFDF5] text-[#065F46] uppercase w-fit border border-[#065F46]/10">
                                Aman
                            </span>
                        </div>
                    </td>
                    <td class="p-4 text-right font-medium text-on-surface">Rp 18.000.000</td>
                    <td class="p-4 text-right font-bold text-primary">Rp 21.500.000</td>
                    <td class="p-4">
                        <div class="flex items-center justify-center gap-2">
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-primary-container/20 text-on-surface-variant hover:text-primary transition-all">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-primary-container/20 text-on-surface-variant hover:text-primary transition-all">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-error-container/20 text-on-surface-variant hover:text-error transition-all">
                                <span class="material-symbols-outlined text-[20px]">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr class="hover:bg-surface-container transition-colors">
                    <td class="p-4">
                        <input class="rounded border-outline text-primary focus:ring-primary" type="checkbox" />
                    </td>
                    <td class="p-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center overflow-hidden border border-outline-variant">
                                <img class="w-full h-full object-cover" data-alt="Product photography of a Samsung Galaxy S24 Ultra in Titanium Gray. The image emphasizes the large flat screen and the signature S-Pen resting next to it. Professional lighting highlights the sleek premium finish and the distinctive camera rings. Clean studio background with a sophisticated atmosphere for a luxury mobile catalog." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXJbEA2aQWWR9KdMHDoZuDn3BR4H6MFPvy_DuJJ0NYGPBIyQXLRQBjKI9LAyHQZyRfMXg_Z5xJ80A_tWNaGUfB_Nxiy04giUboDldfdHSyWyv7EFIcMAfJHqWRZ3-yJgAw7IdONP78b5CDoleoQvOo7FoiFauiYC6SvV6s5VR0Nu6HSodqr43kAWjcJVZViiROn93xUTxYydg6U0ZJJ7RXTpd0szYQApQHmFdXP36mt_TFIA0fFqv-S42T2jF869X4UWE_c-P-CeA" />
                            </div>
                            <div>
                                <p class="font-semibold text-on-surface">Samsung S24 Ultra</p>
                                <p class="text-label-md text-on-surface-variant">Gray</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <div class="flex flex-col">
                            <span class="text-body-md text-on-surface">Samsung</span>
                            <span class="text-label-md text-on-surface-variant">Flagship</span>
                        </div>
                    </td>
                    <td class="p-4 font-mono text-body-md text-on-surface">869910223455112</td>
                    <td class="p-4">
                        <div class="flex flex-col gap-1">
                            <span class="font-bold text-on-surface">3 Unit</span>
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-[#FFFBEB] text-[#92400E] uppercase w-fit border border-[#92400E]/10">
                                Menipis
                            </span>
                        </div>
                    </td>
                    <td class="p-4 text-right font-medium text-on-surface">Rp 16.500.000</td>
                    <td class="p-4 text-right font-bold text-primary">Rp 19.900.000</td>
                    <td class="p-4">
                        <div class="flex items-center justify-center gap-2">
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-primary-container/20 text-on-surface-variant hover:text-primary transition-all">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-primary-container/20 text-on-surface-variant hover:text-primary transition-all">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-error-container/20 text-on-surface-variant hover:text-error transition-all">
                                <span class="material-symbols-outlined text-[20px]">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 3 -->
                <tr class="hover:bg-surface-container transition-colors">
                    <td class="p-4">
                        <input class="rounded border-outline text-primary focus:ring-primary" type="checkbox" />
                    </td>
                    <td class="p-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center overflow-hidden border border-outline-variant">
                                <img class="w-full h-full object-cover" data-alt="A detailed product shot of a Xiaomi 13T in Black, featuring its Leica-engineered camera module. The phone's back has a subtle gloss, reflecting soft studio lights. The image is clean and minimalist, highlighting the craftsmanship of the device against a neutral light-colored background, perfect for a high-end inventory management system dashboard." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfWNKFmD_6MrNG0GIL9ANKbZaVADMJCTvuJgPr-JwlA2rJJV7cxl-F_qgtOcfHm1arIH9ZC9K63LGOkHy1V_MzYgdIYcn0MscXns0La6F-pmfsVFynpKLwb3-cw-XeifLRuE73xxfsLqRW49aXXUesv6Ap4Xm7csUV7nYPH0JAtglZlcp6seJk6mR1dBz0xFPcXfFYciNhrY59haL4dNiZePfFa9Gm-n1oKIZQBqY9_BN4apMvey_1JeIO4vnT-TlXY8mrXw8OkEk" />
                            </div>
                            <div>
                                <p class="font-semibold text-on-surface">Xiaomi 13T</p>
                                <p class="text-label-md text-on-surface-variant">Black</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <div class="flex flex-col">
                            <span class="text-body-md text-on-surface">Xiaomi</span>
                            <span class="text-label-md text-on-surface-variant">Mid-range</span>
                        </div>
                    </td>
                    <td class="p-4 font-mono text-body-md text-on-surface">864421110992334</td>
                    <td class="p-4">
                        <div class="flex flex-col gap-1">
                            <span class="font-bold text-on-surface">0 Unit</span>
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-[#FEF2F2] text-[#991B1B] uppercase w-fit border border-[#991B1B]/10">
                                Habis
                            </span>
                        </div>
                    </td>
                    <td class="p-4 text-right font-medium text-on-surface">Rp 5.200.000</td>
                    <td class="p-4 text-right font-bold text-primary">Rp 6.499.000</td>
                    <td class="p-4">
                        <div class="flex items-center justify-center gap-2">
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-primary-container/20 text-on-surface-variant hover:text-primary transition-all">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-primary-container/20 text-on-surface-variant hover:text-primary transition-all">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-error-container/20 text-on-surface-variant hover:text-error transition-all">
                                <span class="material-symbols-outlined text-[20px]">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Pagination Footer -->
    <div class="p-6 bg-surface-container-low border-t border-outline-variant flex flex-col md:flex-row items-center justify-between gap-4">
        <p class="text-body-md text-on-surface-variant">
            Menampilkan <span class="font-semibold text-on-surface">1-10</span> dari <span class="font-semibold text-on-surface">150</span> data
        </p>
        <div class="flex items-center gap-2">
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-white transition-colors disabled:opacity-30" disabled="">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold">1</button>
        </div>
    </div>
</div>
@endsection