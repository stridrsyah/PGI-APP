<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Laporan Bisnis - Pusat Gadget Indonesia</title>
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
                        "primary-fixed-dim": "#c0c1ff",
                        "primary-container": "#585bdd",
                        "error": "#ba1a1a",
                        "on-tertiary-container": "#ffe9dd",
                        "surface-variant": "#e4e1ec",
                        "surface": "#fcf8ff",
                        "surface-bright": "#fcf8ff",
                        "inverse-on-surface": "#f2effb",
                        "on-primary-fixed-variant": "#3131b7",
                        "on-primary-container": "#eeebff",
                        "secondary": "#515f74",
                        "on-secondary-fixed-variant": "#3a485c",
                        "inverse-surface": "#303038",
                        "tertiary-container": "#a95400",
                        "secondary-container": "#d5e3fd",
                        "on-secondary-fixed": "#0d1c2f",
                        "surface-container-low": "#f5f2fd",
                        "tertiary-fixed-dim": "#ffb786",
                        "on-surface": "#1b1b23",
                        "outline": "#767585",
                        "on-secondary-container": "#57657b",
                        "primary-fixed": "#e1e0ff",
                        "secondary-fixed": "#d5e3fd",
                        "on-tertiary-fixed": "#311400",
                        "surface-container-lowest": "#ffffff",
                        "tertiary": "#844000",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed": "#06006c",
                        "on-primary": "#ffffff",
                        "surface-container": "#efecf8",
                        "surface-tint": "#4a4dcf",
                        "surface-container-high": "#eae7f2",
                        "background": "#fcf8ff",
                        "on-error": "#ffffff",
                        "primary": "#3e40c3",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#c0c1ff",
                        "on-background": "#1b1b23",
                        "outline-variant": "#c7c5d6",
                        "on-tertiary-fixed-variant": "#723600",
                        "surface-container-highest": "#e4e1ec",
                        "on-surface-variant": "#464554",
                        "error-container": "#ffdad6",
                        "tertiary-fixed": "#ffdcc6",
                        "secondary-fixed-dim": "#b9c7e0",
                        "surface-dim": "#dbd8e4"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-page": "32px",
                        "gap-compact": "8px",
                        "padding-card": "24px",
                        "unit": "4px",
                        "gutter": "24px",
                        "gap-normal": "16px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "500"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "26px",
                            "letterSpacing": "0.015em",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["20px", {
                            "lineHeight": "28px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
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

        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }

        .custom-shadow {
            box-shadow: 0 2px 4px rgba(62, 64, 195, 0.02), 0 4px 12px rgba(62, 64, 195, 0.04);
        }
    </style>
</head>

<body class="text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-screen flex flex-col py-md bg-surface dark:bg-inverse-surface h-full w-64 left-0 border-r border-outline-variant shadow-sm z-50">
        <div class="px-6 mb-8">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-on-primary">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">devices_other</span>
                </div>
                <div>
                    <h1 class="font-title-md text-title-md font-bold text-primary dark:text-inverse-primary leading-tight">Pusat Gadget</h1>
                    <p class="text-xs text-secondary font-medium tracking-wider uppercase">Indonesia</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 px-4 space-y-1 overflow-y-auto">
            <!-- Navigation Items Mapping from JSON -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary dark:text-secondary-fixed-dim hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span> Dashboard
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="smartphone">smartphone</span> Data HP
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="branding_watermark">branding_watermark</span> Merek HP
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="category">category</span> Kategori
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span> Supplier
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span> Pelanggan
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span> Pembelian
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="payments">payments</span> Penjualan
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="event_available">event_available</span> Booking
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="build">build</span> Servis
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span> Pengeluaran
            </a>
            <a class="bg-primary-container/10 dark:bg-primary-container/20 text-primary dark:text-inverse-primary border-l-4 border-primary flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="assessment" style="font-variation-settings: 'FILL' 1;">assessment</span> Laporan
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors font-body-md text-body-md text-secondary hover:bg-surface-container-low active:scale-95 duration-150" href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span> Manajemen
            </a>
        </nav>
        <div class="px-4 mt-auto pt-4">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-error font-body-md text-body-md hover:bg-error-container/20 transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span> Keluar
            </a>
        </div>
    </aside>
    <!-- TopNavBar -->
    <header class="sticky top-0 z-40 flex justify-between items-center px-8 py-4 ml-64 bg-surface/80 backdrop-blur-md dark:bg-inverse-surface/80 border-b border-outline-variant transition-all">
        <div class="flex items-center gap-6 flex-1">
            <div class="relative w-full max-w-md group">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-body-md font-body-md outline-none transition-all" placeholder="Cari data laporan..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant" data-icon="notifications">notifications</span>
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant" data-icon="dark_mode">dark_mode</span>
            </button>
            <div class="h-8 w-px bg-outline-variant mx-2"></div>
            <div class="flex items-center gap-3 pl-2">
                <div class="text-right">
                    <p class="text-label-md font-bold text-on-surface">Admin Utama</p>
                    <p class="text-[10px] text-secondary">Super Admin</p>
                </div>
                <div class="w-10 h-10 rounded-full border-2 border-primary/20 p-0.5">
                    <img class="w-full h-full rounded-full object-cover" data-alt="A professional headshot of a modern corporate administrator, high-end studio lighting, soft neutral background, wearing a clean smart-casual attire. The image is crisp, professional, and fits a high-utility SaaS dashboard aesthetic with warm neutral tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQTZH6Ywh049rpPbBACsoix-3t60eynCsInUjeloiPYB6ErjXRskeddJpIl9eGRXybG_6kTQImbDrD5LM8GF-hCNVQK77eLtM-6yl2inIfdPE0aw4Is_T-w1bQ9_JKP_S2YBVokg7lo8XR1WQvOHho8caYZPny4LiMaX8xB2Xw3Jqvn77RznRKXkNzw1mFfbm1zZ44lX1eziC9CZTZsJMRY4vjNWE58ghjROYr3WFI_HVqGh6rP8_M_B3trp8efwA2XEwbZe-2eaw" />
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="ml-64 p-8">
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
    </main>
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
</body>

</html>