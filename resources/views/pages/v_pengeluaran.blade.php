<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manajemen Pengeluaran - Pusat Gadget Indonesia</title>
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
                        "primary": "#3e40c3",
                        "surface-bright": "#fcf8ff",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed-dim": "#c0c1ff",
                        "on-primary": "#ffffff",
                        "secondary-fixed-dim": "#b9c7e0",
                        "tertiary-fixed": "#ffdcc6",
                        "surface-container-high": "#eae7f2",
                        "on-background": "#1b1b23",
                        "surface-variant": "#e4e1ec",
                        "on-primary-fixed": "#06006c",
                        "surface": "#fcf8ff",
                        "on-error": "#ffffff",
                        "on-primary-container": "#eeebff",
                        "inverse-surface": "#303038",
                        "on-secondary-container": "#57657b",
                        "background": "#fcf8ff",
                        "secondary": "#515f74",
                        "surface-dim": "#dbd8e4",
                        "on-tertiary-fixed-variant": "#723600",
                        "on-secondary-fixed-variant": "#3a485c",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#c0c1ff",
                        "secondary-container": "#d5e3fd",
                        "surface-container-highest": "#e4e1ec",
                        "outline": "#767585",
                        "on-error-container": "#93000a",
                        "on-surface": "#1b1b23",
                        "on-surface-variant": "#464554",
                        "tertiary": "#844000",
                        "primary-container": "#585bdd",
                        "surface-container-low": "#f5f2fd",
                        "on-tertiary-fixed": "#311400",
                        "on-tertiary-container": "#ffe9dd",
                        "tertiary-fixed-dim": "#ffb786",
                        "surface-tint": "#4a4dcf",
                        "primary-fixed": "#e1e0ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gap-normal": "16px",
                        "gap-compact": "8px",
                        "unit": "4px",
                        "margin-page": "32px",
                        "gutter": "24px",
                        "padding-card": "24px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "label-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "display-lg": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg": ["28px", {
                            "lineHeight": "36px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
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
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
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
                        "display-lg": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
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
            vertical-align: middle;
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

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid #e2e8f0;
        }
    </style>
</head>

<body class="bg-background text-on-surface">
    <!-- Sidebar Navigation -->
    <aside class="fixed left-0 top-0 h-full w-[280px] bg-surface-container-low border-r border-outline-variant flex flex-col z-50">
        <div class="px-6 py-8">
            <h1 class="text-headline-md font-headline-md font-bold text-primary">GadgetStore Pro</h1>
            <p class="text-label-md font-label-md text-on-surface-variant">Enterprise Edition</p>
        </div>
        <nav class="flex-1 overflow-y-auto px-4 custom-scrollbar space-y-1">
            <!-- Nav Items from JSON - Mapping "Pengeluaran" as active -->
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="text-body-md font-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">smartphone</span>
                <span class="text-body-md font-body-md">Data HP</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">branding_watermark</span>
                <span class="text-body-md font-body-md">Merek HP</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">category</span>
                <span class="text-body-md font-body-md">Kategori</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">inventory_2</span>
                <span class="text-body-md font-body-md">Supplier</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">groups</span>
                <span class="text-body-md font-body-md">Pelanggan</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="text-body-md font-body-md">Pembelian</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="text-body-md font-body-md">Penjualan</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">event_available</span>
                <span class="text-body-md font-body-md">Booking</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">build</span>
                <span class="text-body-md font-body-md">Servis</span>
            </a>
            <!-- ACTIVE TAB -->
            <a class="flex items-center gap-normal text-primary font-bold bg-primary-container text-on-primary-container border-l-4 border-primary px-4 py-3 rounded-r-lg scale-95 duration-75" href="#">
                <span class="material-symbols-outlined">account_balance_wallet</span>
                <span class="text-body-md font-body-md">Pengeluaran</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">assessment</span>
                <span class="text-body-md font-body-md">Laporan</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined">admin_panel_settings</span>
                <span class="text-body-md font-body-md">Manajemen</span>
            </a>
        </nav>
        <div class="p-4 border-t border-outline-variant">
            <button class="w-full bg-primary text-on-primary py-3 px-4 rounded-xl font-medium flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
                <span class="material-symbols-outlined">add_circle</span>
                New Transaction
            </button>
            <div class="mt-4 space-y-1">
                <a class="flex items-center gap-normal text-on-surface-variant px-4 py-2 hover:bg-surface-container-high rounded-lg transition-all" href="#">
                    <span class="material-symbols-outlined">help</span>
                    <span class="text-label-md">Help</span>
                </a>
                <a class="flex items-center gap-normal text-error px-4 py-2 hover:bg-error-container/20 rounded-lg transition-all" href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="text-label-md">Logout</span>
                </a>
            </div>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-[280px] min-h-screen flex flex-col">
        <!-- Top Bar -->
        <header class="h-16 flex justify-between items-center px-gutter bg-surface border-b border-outline-variant shadow-sm sticky top-0 z-40">
            <div class="flex items-center gap-4">
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline">search</span>
                    <input class="pl-10 pr-4 py-1.5 bg-surface-container-low border-none rounded-full w-64 text-body-md focus:ring-2 focus:ring-primary/20" placeholder="Cari transaksi..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2">
                    <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors relative">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-surface"></span>
                    </button>
                    <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors">
                        <span class="material-symbols-outlined">settings</span>
                    </button>
                </div>
                <div class="h-8 w-[1px] bg-outline-variant"></div>
                <div class="flex items-center gap-3">
                    <div class="text-right hidden sm:block">
                        <p class="text-label-md font-bold">Budi Santoso</p>
                        <p class="text-[10px] text-on-surface-variant leading-none">Store Manager</p>
                    </div>
                    <img class="w-10 h-10 rounded-full border-2 border-primary-container object-cover" data-alt="A professional headshot of a smiling Indonesian man in a clean business-casual outfit, set against a soft-focus office background with warm lighting, maintaining a clean corporate aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtIgpuflW0t8Km2smTuwdXel0mJoi3j2mONoKp-qaI6cEHrFEU8ZfkEaU1oDxSeVmbxYw_cBTMJMHqFKgHycpXA4JpbqTNrAo9KIHlh8kSiAjK8XicoNWhfQp9p2dI6svRIAhYRSvuVsbkvGWVLpXfdvfxAANSnIC2-N1__mdX5hTaOSRFCPLErw9jbC8lkJHR7kF4u0iTP2X5bnfwV-lOobgQx3Pj8ej5UxXhuv2jZAeJug172p7VEwRV0-TCc_de6p5UCyMcoD4" />
                </div>
            </div>
        </header>
        <!-- Content Body -->
        <div class="p-margin-page max-w-[1440px] mx-auto w-full">
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
        </div>
    </main>
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
</body>

</html>