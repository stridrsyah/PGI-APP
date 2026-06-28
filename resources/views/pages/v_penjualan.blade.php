<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Transaksi Penjualan - Pusat Gadget Indonesia</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcf8ff;
            /* background token */
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-error-container": "#93000a",
                        "surface-container-lowest": "#ffffff",
                        "surface-container": "#efecf8",
                        "inverse-surface": "#303038",
                        "on-surface": "#1b1b23",
                        "surface-variant": "#e4e1ec",
                        "tertiary": "#844000",
                        "primary": "#3e40c3",
                        "on-secondary-fixed-variant": "#3a485c",
                        "on-background": "#1b1b23",
                        "on-tertiary": "#ffffff",
                        "on-error": "#ffffff",
                        "outline": "#767585",
                        "on-tertiary-fixed-variant": "#723600",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#a95400",
                        "on-primary-container": "#eeebff",
                        "background": "#fcf8ff",
                        "surface-tint": "#4a4dcf",
                        "tertiary-fixed-dim": "#ffb786",
                        "surface-bright": "#fcf8ff",
                        "on-secondary-container": "#57657b",
                        "surface-container-low": "#f5f2fd",
                        "on-primary-fixed-variant": "#3131b7",
                        "on-primary-fixed": "#06006c",
                        "on-primary": "#ffffff",
                        "surface-container-highest": "#e4e1ec",
                        "on-surface-variant": "#464554",
                        "secondary": "#515f74",
                        "primary-fixed": "#e1e0ff",
                        "outline-variant": "#c7c5d6",
                        "secondary-fixed-dim": "#b9c7e0",
                        "tertiary-fixed": "#ffdcc6",
                        "secondary-fixed": "#d5e3fd",
                        "error": "#ba1a1a",
                        "inverse-primary": "#c0c1ff",
                        "primary-container": "#585bdd",
                        "surface": "#fcf8ff",
                        "on-tertiary-container": "#ffe9dd",
                        "on-secondary": "#ffffff",
                        "primary-fixed-dim": "#c0c1ff",
                        "on-secondary-fixed": "#0d1c2f",
                        "inverse-on-surface": "#f2effb",
                        "secondary-container": "#d5e3fd",
                        "on-tertiary-fixed": "#311400",
                        "surface-dim": "#dbd8e4",
                        "surface-container-high": "#eae7f2"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit": "4px",
                        "gutter": "24px",
                        "padding-card": "24px",
                        "gap-normal": "16px",
                        "margin-page": "32px",
                        "gap-compact": "8px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Inter"]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-background text-on-surface">
    <!-- SideNavBar (Desktop) -->
    <aside class="fixed left-0 top-0 bottom-0 w-[280px] bg-surface-container-low border-r border-outline-variant flex flex-col p-4 z-50 hidden lg:flex">
        <div class="mb-8 px-4 flex items-center gap-3">
            <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">smartphone</span>
            </div>
            <div>
                <h1 class="text-headline-md font-extrabold text-primary tracking-tight">Pusat Gadget</h1>
                <p class="text-label-md text-on-surface-variant leading-none">Inventory System</p>
            </div>
        </div>
        <nav class="flex-1 space-y-1 overflow-y-auto custom-scrollbar pr-2">
            <!-- Manually Mapping Labels from JSON -->
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="text-label-md font-label-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">smartphone</span>
                <span class="text-label-md font-label-md">Data HP</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">branding_watermark</span>
                <span class="text-label-md font-label-md">Merek HP</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">category</span>
                <span class="text-label-md font-label-md">Kategori</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">inventory_2</span>
                <span class="text-label-md font-label-md">Supplier</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">groups</span>
                <span class="text-label-md font-label-md">Pelanggan</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="text-label-md font-label-md">Pembelian</span>
            </a>
            <!-- Active State: Penjualan -->
            <a class="flex items-center gap-4 px-4 py-3 text-primary bg-secondary-container rounded-xl border-l-4 border-primary translate-x-1 transition-transform duration-200" href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">sell</span>
                <span class="text-label-md font-label-md font-semibold">Penjualan</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">event_available</span>
                <span class="text-label-md font-label-md">Booking</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">build</span>
                <span class="text-label-md font-label-md">Servis</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="text-label-md font-label-md">Pengeluaran</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">assessment</span>
                <span class="text-label-md font-label-md">Laporan</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">manage_accounts</span>
                <span class="text-label-md font-label-md">Manajemen</span>
            </a>
        </nav>
        <div class="mt-auto pt-4 space-y-1 border-t border-outline-variant">
            <a class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-surface-container-high rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="text-label-md font-label-md">Settings</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-on-error-container hover:bg-error-container/20 rounded-xl transition-all duration-200" href="#">
                <span class="material-symbols-outlined">logout</span>
                <span class="text-label-md font-label-md">Logout</span>
            </a>
        </div>
    </aside>
    <!-- TopNavBar -->
    <header class="fixed top-0 right-0 left-0 lg:left-[280px] h-16 bg-surface shadow-sm z-40 flex justify-between items-center px-gutter">
        <div class="flex items-center gap-4">
            <button class="lg:hidden p-2 hover:bg-surface-container rounded-full">
                <span class="material-symbols-outlined text-primary">menu</span>
            </button>
            <h2 class="text-headline-md font-bold text-primary">Transaksi Penjualan</h2>
        </div>
        <div class="flex items-center gap-4">
            <div class="hidden md:flex items-center bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant focus-within:border-primary transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant text-[20px] mr-2">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-body-md w-48" placeholder="Cari di sistem..." type="text" />
            </div>
            <button class="p-2 hover:bg-surface-container transition-colors rounded-full relative">
                <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
            </button>
            <button class="p-2 hover:bg-surface-container transition-colors rounded-full">
                <span class="material-symbols-outlined text-on-surface-variant">dark_mode</span>
            </button>
            <div class="flex items-center gap-3 ml-2 pl-4 border-l border-outline-variant">
                <div class="text-right hidden sm:block">
                    <p class="text-label-md font-bold text-on-surface leading-tight">Admin Pusat</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-widest">Super Admin</p>
                </div>
                <img class="w-10 h-10 rounded-full border-2 border-primary-fixed shadow-sm" data-alt="A professional headshot of a young Southeast Asian male administrative professional, wearing a clean white shirt, against a soft blurred office background. The lighting is bright and professional, following a modern corporate SaaS aesthetic with soft shadows and high clarity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAc4P_DeBgsdB294JDGTuru8KodmB641lAM6nkf6jdZmyyW6ze61szNrz83gLxueMlr4YfbolLtduCJEt6TcLKwPMXkmZoFLen4Zn8vGzi-IFJpjMa8Y0MQrLADrQGK5AeIWfbotMNQ_Wn-0xR9V5HINh0viO14t25QFZ22-UHAHFt_jVR3yedFmXnU_PqEubXEIbq3QagFAAVMMf8H0-iuxYGA6enTUNCqb98B1_EcXRF60KpVobcYlDMjYSPUy58DwI-QJgltmUI" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="pt-24 pb-12 px-gutter lg:ml-[280px] min-h-screen">
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
    </main>
    <!-- FAB for Mobile (Implicitly defined as useful on Dashboard/Home-like screens) -->
    <button class="lg:hidden fixed bottom-6 right-6 w-14 h-14 bg-primary text-white rounded-full shadow-2xl flex items-center justify-center z-50 active:scale-95 transition-transform">
        <span class="material-symbols-outlined text-3xl">add</span>
    </button>
    <!-- Success Toast Notification (Simulated interaction) -->
    <div class="fixed bottom-8 left-1/2 -translate-x-1/2 flex items-center gap-3 bg-inverse-surface text-inverse-on-surface px-6 py-3 rounded-full shadow-2xl z-[100] transform translate-y-24 opacity-0 transition-all duration-300" id="toast">
        <span class="material-symbols-outlined text-green-400">check_circle</span>
        <span class="text-body-md font-medium">Data berhasil diperbarui</span>
    </div>
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
</body>

</html>