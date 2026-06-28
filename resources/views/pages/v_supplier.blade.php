@extends('layouts.main')

@section('title', 'Manajemen Supplier - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari supplier, produk, atau kontak...')

@section('content')
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
    <div>
        <h2 class="font-headline-lg text-headline-lg text-on-surface">Manajemen Supplier</h2>
        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Kelola mitra bisnis dan rantai pasokan perangkat Anda</p>
    </div>
    <button class="flex items-center gap-2 bg-primary text-on-primary px-6 py-3 rounded-lg font-semibold hover:bg-primary/90 transition-all shadow-md active:scale-95">
        <span class="material-symbols-outlined" data-icon="add">add</span>
        Tambah Supplier Baru
    </button>
</div>
<div class="grid grid-cols-12 gap-gutter">
    <!-- Left Content Column -->
    <div class="col-span-12 xl:col-span-9 space-y-gutter">
        <!-- Stat Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gap-normal">
            <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-primary-container/10 rounded-lg text-primary">
                        <span class="material-symbols-outlined" data-icon="group">group</span>
                    </div>
                    <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">Active</span>
                </div>
                <p class="font-label-md text-label-md text-on-surface-variant">Total Supplier</p>
                <h3 class="font-display-lg text-display-lg text-on-surface mt-1">24 <span class="text-headline-md font-medium">Mitra</span></h3>
            </div>
            <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-secondary-container/30 rounded-lg text-secondary">
                        <span class="material-symbols-outlined" data-icon="local_shipping">local_shipping</span>
                    </div>
                    <div class="flex items-center text-green-600 text-xs font-bold">
                        <span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
                        5%
                    </div>
                </div>
                <p class="font-label-md text-label-md text-on-surface-variant">Pengiriman Bulan Ini</p>
                <h3 class="font-display-lg text-display-lg text-on-surface mt-1">12 <span class="text-headline-md font-medium">Kiriman</span></h3>
            </div>
            <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-tertiary-container/10 rounded-lg text-tertiary">
                        <span class="material-symbols-outlined" data-icon="payments">payments</span>
                    </div>
                </div>
                <p class="font-label-md text-label-md text-on-surface-variant">Total Pembelian</p>
                <h3 class="font-headline-lg text-headline-lg text-on-surface mt-1">Rp 850jt</h3>
            </div>
            <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-amber-100 rounded-lg text-amber-600">
                        <span class="material-symbols-outlined" data-icon="verified">verified</span>
                    </div>
                    <span class="bg-amber-100 text-amber-700 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">Gold</span>
                </div>
                <p class="font-label-md text-label-md text-on-surface-variant">Supplier Terpercaya</p>
                <h3 class="font-display-lg text-display-lg text-on-surface mt-1">18 <span class="text-headline-md font-medium">Mitra</span></h3>
            </div>
        </div>
        <!-- Supplier Table -->
        <div class="bg-surface-container-lowest rounded-xl border border-outline-variant/30 shadow-sm overflow-hidden">
            <div class="p-gutter border-b border-outline-variant/30 flex justify-between items-center">
                <h4 class="font-headline-md text-headline-md text-on-surface">Daftar Rekanan Supplier</h4>
                <div class="flex gap-2">
                    <button class="p-2 border border-outline-variant/30 rounded-lg hover:bg-surface-container-low transition-colors">
                        <span class="material-symbols-outlined" data-icon="filter_list">filter_list</span>
                    </button>
                    <button class="p-2 border border-outline-variant/30 rounded-lg hover:bg-surface-container-low transition-colors">
                        <span class="material-symbols-outlined" data-icon="download">download</span>
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-surface-container-low border-b border-outline-variant/30">
                        <tr>
                            <th class="px-gutter py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Nama Supplier</th>
                            <th class="px-gutter py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Kategori</th>
                            <th class="px-gutter py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Kontak</th>
                            <th class="px-gutter py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Alamat</th>
                            <th class="px-gutter py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Status</th>
                            <th class="px-gutter py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/20">
                        <!-- Row 1 -->
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-gutter py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center overflow-hidden border border-outline-variant/30">
                                        <img class="w-full h-full object-contain p-1" data-alt="A minimalist logo for a global electronics brand like Samsung, featuring high-contrast blue and white elements on a clean, professional background. The style is flat, modern corporate, fitting perfectly into a high-end tech supply chain management interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCy0mVTXUq2lpWEfVkN4zeeVdeb0AcFTQieujmukEVy-_0xZ9R9DlD-tpE6FB_260JnbBcLroSrQrwVpMlnxwVBNNpgYl0yi9twYUE5BpWqGB2Gt9wOt5MdJAKU2dqv0c0g4UrAnypY1ca3CHr1ZVu_Wu9Z9fK4Q2etsqFZ9Zw72PnEzh_QKg8xjlXyMu_S050uwZyEN3xaQ98wwRJt7fUS_cpwUusH0K9JVZWEIRRYxvtRT66g6NII1B7Qll_uMEsyXsXyq_xA_RM" />
                                    </div>
                                    <span class="font-body-md text-body-md font-semibold text-on-surface">PT. Samsung Electronics</span>
                                </div>
                            </td>
                            <td class="px-gutter py-4">
                                <span class="bg-primary-container/10 text-primary px-3 py-1 rounded-full text-xs font-medium">Smartphone</span>
                            </td>
                            <td class="px-gutter py-4">
                                <p class="text-body-md text-on-surface font-medium">+62 21 555 1234</p>
                                <p class="text-[11px] text-on-surface-variant">corp@samsung.co.id</p>
                            </td>
                            <td class="px-gutter py-4">
                                <p class="text-body-md text-on-surface-variant truncate max-w-[150px]">Sudirman Central Business District, Jakarta</p>
                            </td>
                            <td class="px-gutter py-4">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Aktif</span>
                            </td>
                            <td class="px-gutter py-4 text-right">
                                <button class="text-primary hover:underline font-bold text-xs">Edit</button>
                                <span class="mx-2 text-outline-variant">|</span>
                                <button class="text-on-surface-variant hover:text-on-surface font-bold text-xs">Detail</button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-gutter py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center overflow-hidden border border-outline-variant/30">
                                        <img class="w-full h-full object-contain p-1" data-alt="A professional logo of a major Chinese smartphone distributor, featuring a vibrant orange and white color scheme. The aesthetic is modern, tech-focused, and clean, designed to look like a high-end supplier profile icon in a corporate database." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDqxKfluhlKZhLG1DaB_nxTQ400CmmNUchvrrfpE05U1N8EwW9h75DGb8uV7EwfMeSzsL_h_ijeTJy4AC5r8-MRW6JuxW5MLQK-Uh6k4WJ2cMOnfUsV5QiblZ16zunNJVicunZIQacoXBMEerrXh2CGvM1CaWLPZypdfipM6g9wMXcTFStYjag_J-dRhqE-5Lqz2xjFHPRLewjTqHJwPT_smSVKCwtQPUIi3EGBV0Ii7i1-ZNNePXceGI_0QHDAPxWw7gDJHhpPNk" />
                                    </div>
                                    <span class="font-body-md text-body-md font-semibold text-on-surface">Xiaomi Official Disti</span>
                                </div>
                            </td>
                            <td class="px-gutter py-4">
                                <span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-medium">IoT &amp; Aksesori</span>
                            </td>
                            <td class="px-gutter py-4">
                                <p class="text-body-md text-on-surface font-medium">+62 811 999 888</p>
                                <p class="text-[11px] text-on-surface-variant">sales@xiaomidisti.id</p>
                            </td>
                            <td class="px-gutter py-4">
                                <p class="text-body-md text-on-surface-variant truncate max-w-[150px]">Kawasan Industri Jababeka, Bekasi</p>
                            </td>
                            <td class="px-gutter py-4">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Aktif</span>
                            </td>
                            <td class="px-gutter py-4 text-right">
                                <button class="text-primary hover:underline font-bold text-xs">Edit</button>
                                <span class="mx-2 text-outline-variant">|</span>
                                <button class="text-on-surface-variant hover:text-on-surface font-bold text-xs">Detail</button>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-gutter py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center overflow-hidden border border-outline-variant/30">
                                        <img class="w-full h-full object-contain p-1" data-alt="A minimalist logo for a mobile technology brand, emphasizing a clean green and white color palette. The style is modern, scalable, and representative of a global gadget supply chain partner, perfectly suited for a logistics and procurement dashboard." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEgzNuBXy4OCH5hN3HZPXPZUjCrzLTF9h9wEY-1fsIE7euNPIs-ltUzoS_U-3EuO-a8P083IZxPOGSGvRVBElFwC9WxD1EqD_-3_1nlU6iXbFgi_u-5mwnJKiySBVEdHZJigTf3VDoGdwPohio_ukdDdsrnxbFL4BgxVveuy1N1d7D4Hh_f3NFSO1vNTQ6Q7GptHlwGpNQ6po3Um0CN77lIM4j1a8xygrS8ffrtGpGteZCYp3_O9_LQFjy8qUKO6kZPs3s87LB4X4" />
                                    </div>
                                    <span class="font-body-md text-body-md font-semibold text-on-surface">Oppo Global Center</span>
                                </div>
                            </td>
                            <td class="px-gutter py-4">
                                <span class="bg-primary-container/10 text-primary px-3 py-1 rounded-full text-xs font-medium">Smartphone</span>
                            </td>
                            <td class="px-gutter py-4">
                                <p class="text-body-md text-on-surface font-medium">+62 21 444 777</p>
                                <p class="text-[11px] text-on-surface-variant">support@oppoglobal.com</p>
                            </td>
                            <td class="px-gutter py-4">
                                <p class="text-body-md text-on-surface-variant truncate max-w-[150px]">Gading Serpong, Tangerang</p>
                            </td>
                            <td class="px-gutter py-4">
                                <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-xs font-bold">Masa Percobaan</span>
                            </td>
                            <td class="px-gutter py-4 text-right">
                                <button class="text-primary hover:underline font-bold text-xs">Edit</button>
                                <span class="mx-2 text-outline-variant">|</span>
                                <button class="text-on-surface-variant hover:text-on-surface font-bold text-xs">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-gutter border-t border-outline-variant/30 flex justify-between items-center bg-surface-container-low/30">
                <p class="text-label-md text-on-surface-variant font-medium">Menampilkan 3 dari 24 Supplier</p>
                <div class="flex gap-1">
                    <button class="px-3 py-1 rounded border border-outline-variant/30 text-xs font-bold hover:bg-surface-container-high transition-colors">Prev</button>
                    <button class="px-3 py-1 rounded bg-primary text-on-primary text-xs font-bold">1</button>
                    <button class="px-3 py-1 rounded border border-outline-variant/30 text-xs font-bold hover:bg-surface-container-high transition-colors">2</button>
                    <button class="px-3 py-1 rounded border border-outline-variant/30 text-xs font-bold hover:bg-surface-container-high transition-colors">3</button>
                    <button class="px-3 py-1 rounded border border-outline-variant/30 text-xs font-bold hover:bg-surface-container-high transition-colors">Next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Sidebar Content -->
    <div class="col-span-12 xl:col-span-3 space-y-gutter">
        <!-- Analisis Kinerja Card -->
        <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 shadow-sm">
            <h4 class="font-headline-md text-headline-md text-on-surface mb-6 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary" data-icon="analytics">analytics</span>
                Analisis Kinerja
            </h4>
            <div class="space-y-6">
                <div>
                    <div class="flex justify-between items-end mb-2">
                        <p class="font-label-md text-label-md text-on-surface font-bold">Samsung Electronics</p>
                        <p class="text-[11px] text-green-600 font-bold">98% Lead Time</p>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                        <div class="bg-primary h-full rounded-full" style="width: 98%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between items-end mb-2">
                        <p class="font-label-md text-label-md text-on-surface font-bold">Xiaomi Official</p>
                        <p class="text-[11px] text-green-600 font-bold">92% Quality</p>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                        <div class="bg-primary h-full rounded-full" style="width: 92%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between items-end mb-2">
                        <p class="font-label-md text-label-md text-on-surface font-bold">Oppo Global</p>
                        <p class="text-[11px] text-amber-600 font-bold">85% Accuracy</p>
                    </div>
                    <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                        <div class="bg-primary h-full rounded-full" style="width: 85%"></div>
                    </div>
                </div>
            </div>
            <button class="w-full mt-8 py-3 text-primary font-bold border-2 border-primary/10 rounded-lg hover:bg-primary-container/5 transition-all text-xs">
                Lihat Laporan Lengkap
            </button>
        </div>
        <!-- Pesanan Aktif Card -->
        <div class="bg-surface-container-lowest p-padding-card rounded-xl border border-outline-variant/30 shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h4 class="font-headline-md text-headline-md text-on-surface">Pesanan Aktif</h4>
                <span class="bg-primary-container text-on-primary-container px-2 py-0.5 rounded-full text-[10px] font-bold">3 BARU</span>
            </div>
            <div class="space-y-4">
                <div class="flex gap-4 p-3 hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer">
                    <div class="p-2 bg-secondary-container/30 rounded-lg text-secondary h-fit">
                        <span class="material-symbols-outlined text-lg" data-icon="inventory">inventory</span>
                    </div>
                    <div>
                        <p class="text-body-md font-bold text-on-surface">150x Galaxy S24 Ultra</p>
                        <p class="text-[11px] text-on-surface-variant">Samsung Electronics • Transit</p>
                        <p class="text-[10px] text-primary mt-1 font-semibold italic">Estimasi: Besok, 10:00</p>
                    </div>
                </div>
                <div class="flex gap-4 p-3 hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer border-t border-outline-variant/10">
                    <div class="p-2 bg-secondary-container/30 rounded-lg text-secondary h-fit">
                        <span class="material-symbols-outlined text-lg" data-icon="inventory">inventory</span>
                    </div>
                    <div>
                        <p class="text-body-md font-bold text-on-surface">500x Redmi Note 13</p>
                        <p class="text-[11px] text-on-surface-variant">Xiaomi Official • Packing</p>
                        <p class="text-[10px] text-on-surface-variant mt-1 font-semibold">Estimasi: 24 Oct</p>
                    </div>
                </div>
                <div class="flex gap-4 p-3 hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer border-t border-outline-variant/10">
                    <div class="p-2 bg-secondary-container/30 rounded-lg text-secondary h-fit">
                        <span class="material-symbols-outlined text-lg" data-icon="inventory">inventory</span>
                    </div>
                    <div>
                        <p class="text-body-md font-bold text-on-surface">100x Oppo Reno 11</p>
                        <p class="text-[11px] text-on-surface-variant">Oppo Global • Ordered</p>
                        <p class="text-[10px] text-on-surface-variant mt-1 font-semibold">Estimasi: 26 Oct</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Hover effects and micro-interactions
    document.querySelectorAll('button').forEach(btn => {
        btn.addEventListener('mousedown', () => btn.classList.add('scale-95'));
        btn.addEventListener('mouseup', () => btn.classList.remove('scale-95'));
        btn.addEventListener('mouseleave', () => btn.classList.remove('scale-95'));
    });

    // Search bar focus simulation
    const searchInput = document.querySelector('input[type="text"]');
    const searchContainer = searchInput.parentElement;
    searchInput.addEventListener('focus', () => {
        searchContainer.classList.add('ring-2', 'ring-primary-container/50', 'bg-surface-container-lowest');
    });
    searchInput.addEventListener('blur', () => {
        searchContainer.classList.remove('ring-2', 'ring-primary-container/50', 'bg-surface-container-lowest');
    });
</script>
@endpush