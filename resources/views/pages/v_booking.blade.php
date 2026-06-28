<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pusat Gadget Indonesia - Booking &amp; Reservation</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-highest": "#e4e1ec",
                        "on-error": "#ffffff",
                        "on-background": "#1b1b23",
                        "primary": "#3e40c3",
                        "tertiary": "#844000",
                        "on-primary-fixed-variant": "#3131b7",
                        "on-secondary-fixed-variant": "#3a485c",
                        "on-surface-variant": "#464554",
                        "on-error-container": "#93000a",
                        "outline": "#767585",
                        "on-primary-container": "#eeebff",
                        "surface-container-high": "#eae7f2",
                        "surface-bright": "#fcf8ff",
                        "outline-variant": "#c7c5d6",
                        "primary-fixed-dim": "#c0c1ff",
                        "error": "#ba1a1a",
                        "surface-container": "#efecf8",
                        "on-secondary": "#ffffff",
                        "surface-variant": "#e4e1ec",
                        "tertiary-container": "#a95400",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed": "#0d1c2f",
                        "secondary-fixed-dim": "#b9c7e0",
                        "on-primary-fixed": "#06006c",
                        "on-primary": "#ffffff",
                        "secondary-container": "#d5e3fd",
                        "primary-container": "#585bdd",
                        "tertiary-fixed": "#ffdcc6",
                        "on-tertiary-fixed-variant": "#723600",
                        "on-tertiary-fixed": "#311400",
                        "surface-dim": "#dbd8e4",
                        "surface": "#fcf8ff",
                        "secondary": "#515f74",
                        "on-tertiary": "#ffffff",
                        "surface-container-low": "#f5f2fd",
                        "surface-tint": "#4a4dcf",
                        "inverse-surface": "#303038",
                        "inverse-primary": "#c0c1ff",
                        "inverse-on-surface": "#f2effb",
                        "primary-fixed": "#e1e0ff",
                        "on-secondary-container": "#57657b",
                        "background": "#fcf8ff",
                        "on-tertiary-container": "#ffe9dd",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-fixed-dim": "#ffb786",
                        "secondary-fixed": "#d5e3fd",
                        "on-surface": "#1b1b23"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-page": "32px",
                        "padding-card": "24px",
                        "gutter": "24px",
                        "gap-compact": "8px",
                        "unit": "4px",
                        "gap-normal": "16px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "500"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "22px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["20px", {
                            "lineHeight": "28px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["28px", {
                            "lineHeight": "36px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "26px",
                            "letterSpacing": "0.015em",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcf8ff;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .active-pill {
            box-shadow: 0 4px 12px rgba(62, 64, 195, 0.15);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e4e1ec;
            border-radius: 10px;
        }

        .card-elevation {
            box-shadow: 0 2px 4px rgba(27, 27, 35, 0.02), 0 4px 8px rgba(27, 27, 35, 0.04);
        }
    </style>
</head>

<body class="text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-screen w-[280px] bg-surface dark:bg-inverse-surface shadow-sm flex flex-col py-8 z-50 overflow-y-auto custom-scrollbar">
        <div class="px-8 mb-10 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">phone_android</span>
            </div>
            <div>
                <h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed leading-none">Pusat Gadget</h1>
                <p class="text-[10px] uppercase tracking-widest text-outline mt-1 font-bold">Operational System</p>
            </div>
        </div>
        <nav class="flex-1 px-4 space-y-1">
            <!-- Navigation Items Mapping -->
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">smartphone</span>
                <span class="font-body-md text-body-md">Data HP</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">branding_watermark</span>
                <span class="font-body-md text-body-md">Merek HP</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">category</span>
                <span class="font-body-md text-body-md">Kategori</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">inventory_2</span>
                <span class="font-body-md text-body-md">Supplier</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">groups</span>
                <span class="font-body-md text-body-md">Pelanggan</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="font-body-md text-body-md">Pembelian</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">sell</span>
                <span class="font-body-md text-body-md">Penjualan</span>
            </a>
            <!-- Active Navigation -->
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 relative text-primary dark:text-primary-fixed font-semibold border-l-4 border-primary dark:border-primary-fixed bg-primary-container/10 active-pill" href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">event_available</span>
                <span class="font-body-md text-body-md">Booking</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">build</span>
                <span class="font-body-md text-body-md">Servis</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="font-body-md text-body-md">Pengeluaran</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">assessment</span>
                <span class="font-body-md text-body-md">Laporan</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl transition-colors duration-200 text-on-surface-variant dark:text-outline-variant hover:bg-surface-container-low dark:hover:bg-surface-container-highest" href="#">
                <span class="material-symbols-outlined">manage_accounts</span>
                <span class="font-body-md text-body-md">Manajemen</span>
            </a>
        </nav>
        <div class="px-6 mt-auto">
            <div class="p-4 bg-surface-container rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 rounded-full overflow-hidden">
                    <img class="w-full h-full object-cover" data-alt="Professional portrait of a male store manager for a high-end electronics shop, wearing a smart casual polo shirt, soft studio lighting, high resolution photography with a clean professional office background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkv9uYyODgBQhzain_kqexT8zL_DqCCmncTJBsSfnl86C7EGsJHzHwUF87bq2w4qPCEt78lLkRR8wmWiHsP9ZrvRnzsulzrQEKJRmpE465Qo6agw1SOd-SKGdvaOIP-5iMixhcnrRBltHXHN88tu7uwpLIkA1NbMRmajxxfpWK-lroaj6R46kQ_ge2rRVz1b-Z6iQNC6USohnfx3YNM3IyCq8gRAkIb3dorEuVKx4qUT_IjJegBN20YZwnZs2V4GMPq5dBKoxDIIw" />
                </div>
                <div class="flex-1 overflow-hidden">
                    <p class="font-label-md text-label-md text-on-surface truncate">Admin Utama</p>
                    <p class="text-[10px] text-outline truncate">admin@pusatgadget.id</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- TopNavBar -->
    <header class="fixed top-0 right-0 left-[280px] h-16 bg-surface/80 dark:bg-inverse-surface/80 backdrop-blur-md border-b border-outline-variant dark:border-outline/30 flex justify-between items-center px-8 z-40">
        <div class="flex items-center gap-6 flex-1">
            <div class="relative w-full max-w-md group focus-within:ring-2 focus-within:ring-primary/20 rounded-full">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-full pl-12 pr-4 py-2 text-body-md focus:ring-0 placeholder:text-outline" placeholder="Cari booking, pelanggan, atau nomor seri..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-2">
            <button class="p-2 hover:bg-surface-variant/20 rounded-full transition-all text-on-surface-variant relative">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
            </button>
            <button class="p-2 hover:bg-surface-variant/20 rounded-full transition-all text-on-surface-variant">
                <span class="material-symbols-outlined">settings</span>
            </button>
            <div class="h-8 w-px bg-outline-variant/30 mx-2"></div>
            <p class="text-label-md font-label-md text-primary font-bold">Booking &amp; Reservasi</p>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-[280px] pt-16 min-h-screen">
        <div class="p-margin-page">
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
        </div>
    </main>
    <!-- Interactive Script for micro-interactions -->
    <script>
        document.querySelectorAll('button').forEach(button => {
                    button.addEventListener('mousedown', () => {
                        button.classList.add('scale-95');
                    });
                    button.addEventListener('mouseup', () => {
                        button.classList.remove('scale-95');
                    });
    </script>
</body>

</html>