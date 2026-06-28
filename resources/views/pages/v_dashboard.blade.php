<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pusat Gadget Indonesia - Management System</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed": "#0d1c2f",
                        "surface-dim": "#dbd8e4",
                        "secondary-fixed": "#d5e3fd",
                        "on-secondary-fixed-variant": "#3a485c",
                        "on-secondary": "#ffffff",
                        "primary-fixed": "#e1e0ff",
                        "inverse-surface": "#303038",
                        "on-tertiary": "#ffffff",
                        "primary-fixed-dim": "#c0c1ff",
                        "tertiary": "#844000",
                        "error": "#ba1a1a",
                        "surface-container-low": "#f5f2fd",
                        "on-tertiary-container": "#ffe9dd",
                        "tertiary-container": "#a95400",
                        "inverse-primary": "#c0c1ff",
                        "surface-tint": "#4a4dcf",
                        "on-error": "#ffffff",
                        "primary-container": "#585bdd",
                        "on-primary-fixed": "#06006c",
                        "on-secondary-container": "#57657b",
                        "surface-bright": "#fcf8ff",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-fixed": "#ffdcc6",
                        "surface-container-highest": "#e4e1ec",
                        "on-tertiary-fixed": "#311400",
                        "background": "#fcf8ff",
                        "inverse-on-surface": "#f2effb",
                        "surface-variant": "#e4e1ec",
                        "on-primary-container": "#eeebff",
                        "secondary-fixed-dim": "#b9c7e0",
                        "primary": "#3e40c3",
                        "tertiary-fixed-dim": "#ffb786",
                        "secondary-container": "#d5e3fd",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#723600",
                        "secondary": "#515f74",
                        "outline": "#767585",
                        "on-surface-variant": "#464554",
                        "outline-variant": "#c7c5d6",
                        "error-container": "#ffdad6",
                        "surface-container-high": "#eae7f2",
                        "surface-container": "#efecf8",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#3131b7",
                        "surface": "#fcf8ff",
                        "on-background": "#1b1b23",
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
                        "gap-normal": "16px",
                        "padding-card": "24px",
                        "gap-compact": "8px",
                        "unit": "4px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
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
                        "headline-lg": ["28px", {
                            "lineHeight": "36px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
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
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .sidebar-scroll::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar-scroll::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #e4e1ec;
            border-radius: 10px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid #E2E8F0;
        }
    </style>
</head>

<body class="bg-background text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-[280px] bg-surface border-r border-outline-variant flex flex-col z-50 transition-all duration-300">
        <div class="px-gutter py-8">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-on-primary">
                    <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">devices</span>
                </div>
                <div>
                    <h1 class="text-headline-md font-headline-md font-bold text-primary">Pusat Gadget</h1>
                    <p class="text-label-md font-label-md text-on-surface-variant opacity-70">Management System</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 px-4 sidebar-scroll overflow-y-auto space-y-1">
            <!-- Navigation Items Mapping from JSON -->
            <a class="flex items-center gap-normal text-primary font-bold border-l-4 border-primary bg-primary-container/10 px-4 py-3 hover:bg-surface-container-high transition-all translate-x-1 duration-200" href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
                <span class="text-body-md font-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">smartphone</span>
                <span class="text-body-md font-body-md">Data HP</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">branding_watermark</span>
                <span class="text-body-md font-body-md">Merek HP</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">category</span>
                <span class="text-body-md font-body-md">Kategori</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">inventory</span>
                <span class="text-body-md font-body-md">Supplier</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">groups</span>
                <span class="text-body-md font-body-md">Pelanggan</span>
            </a>
            <div class="py-2 px-4">
                <hr class="border-outline-variant" />
            </div>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="text-body-md font-body-md">Pembelian</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">sell</span>
                <span class="text-body-md font-body-md">Penjualan</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">event_available</span>
                <span class="text-body-md font-body-md">Booking</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">build</span>
                <span class="text-body-md font-body-md">Servis</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="text-body-md font-body-md">Pengeluaran</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">assessment</span>
                <span class="text-body-md font-body-md">Laporan</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-surface-container-high transition-colors group" href="#">
                <span class="material-symbols-outlined">admin_panel_settings</span>
                <span class="text-body-md font-body-md">Manajemen</span>
            </a>
        </nav>
        <div class="p-padding-card">
            <a class="flex items-center gap-normal text-on-surface-variant px-4 py-3 hover:bg-error-container/10 hover:text-error transition-colors rounded-xl" href="#">
                <span class="material-symbols-outlined">logout</span>
                <span class="text-body-md font-body-md">Logout</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-[280px] min-h-screen">
        <!-- TopNavBar -->
        <header class="sticky top-0 w-full z-40 bg-surface border-b border-outline-variant shadow-sm h-16 flex justify-between items-center px-gutter">
            <div class="flex items-center gap-4 w-full max-w-xl">
                <div class="relative w-full group">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant/60 group-focus-within:text-primary transition-colors">search</span>
                    <input class="w-full bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 text-body-md focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-on-surface-variant/40" placeholder="Cari data, transaksi, atau pelanggan..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button class="hover:bg-surface-container dark:hover:bg-inverse-surface rounded-full p-2 transition-all">
                    <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                </button>
                <button class="hover:bg-surface-container dark:hover:bg-inverse-surface rounded-full p-2 transition-all">
                    <span class="material-symbols-outlined text-on-surface-variant">dark_mode</span>
                </button>
                <div class="h-8 w-[1px] bg-outline-variant mx-2"></div>
                <div class="flex items-center gap-3 pl-2 group cursor-pointer">
                    <div class="text-right hidden sm:block">
                        <p class="text-label-md font-bold text-on-surface">Admin Utama</p>
                        <p class="text-[10px] text-on-surface-variant uppercase tracking-wider">Super Administrator</p>
                    </div>
                    <img class="w-10 h-10 rounded-full border-2 border-primary/10 object-cover" data-alt="A professional headshot of a smiling young Indonesian tech professional wearing a clean white shirt, soft studio lighting, high-end corporate photography style, background is a blurred modern office setting with warm tones and soft indigo accents, extremely high detail." src="https://lh3.googleusercontent.com/aida-public/AB6AXuByzONSp-hifi8txfmEkgeasDJY9YKmDwpVyer3KQSwSfJY9a7H1WStqicxV_gDsvdlpB-RSpmzflgDazjJfya7tIUgFlIRuTzCoRD18fDadqMaM83YONVylWIISr24LlFm-N5B9A1McYOKl8vBg58VzEKUSdpOwjYG4h9G8JUl5jQ-1PMJDMLfw2mdIMN-39AChF0a8WcT_QsbixF2pdHkKvTEht-mOWbw_Igx5K1ApT31XMYElL8pCZXeCwpYKYk4c6iGgJh7XfI" />
                </div>
            </div>
        </header>
        <!-- Page Canvas -->
        <div class="p-margin-page space-y-8 max-w-[1440px] mx-auto">
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
        </div>
    </main>
    <!-- Micro-interaction Scripts -->
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
</body>

</html>