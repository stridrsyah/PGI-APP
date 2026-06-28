<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manajemen Pengguna &amp; Sistem - GadgetStore Pro</title>
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
                        "primary-container": "#585bdd",
                        "inverse-surface": "#303038",
                        "inverse-on-surface": "#f2effb",
                        "secondary": "#515f74",
                        "secondary-fixed": "#d5e3fd",
                        "on-secondary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#eae7f2",
                        "surface-container": "#efecf8",
                        "primary-fixed-dim": "#c0c1ff",
                        "surface-bright": "#fcf8ff",
                        "on-tertiary-fixed-variant": "#723600",
                        "on-primary": "#ffffff",
                        "on-background": "#1b1b23",
                        "on-secondary-fixed-variant": "#3a485c",
                        "error-container": "#ffdad6",
                        "surface-tint": "#4a4dcf",
                        "tertiary-fixed": "#ffdcc6",
                        "surface": "#fcf8ff",
                        "on-primary-container": "#eeebff",
                        "error": "#ba1a1a",
                        "secondary-fixed-dim": "#b9c7e0",
                        "inverse-primary": "#c0c1ff",
                        "surface-container-highest": "#e4e1ec",
                        "outline": "#767585",
                        "tertiary-fixed-dim": "#ffb786",
                        "tertiary-container": "#a95400",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#c7c5d6",
                        "tertiary": "#844000",
                        "on-surface-variant": "#464554",
                        "on-error": "#ffffff",
                        "primary-fixed": "#e1e0ff",
                        "surface-dim": "#dbd8e4",
                        "surface-variant": "#e4e1ec",
                        "on-surface": "#1b1b23",
                        "on-primary-fixed-variant": "#3131b7",
                        "on-tertiary-container": "#ffe9dd",
                        "on-secondary-container": "#57657b",
                        "secondary-container": "#d5e3fd",
                        "on-error-container": "#93000a",
                        "on-primary-fixed": "#06006c",
                        "primary": "#3e40c3",
                        "on-tertiary-fixed": "#311400",
                        "on-secondary-fixed": "#0d1c2f",
                        "surface-container-low": "#f5f2fd",
                        "background": "#fcf8ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "padding-card": "24px",
                        "unit": "4px",
                        "gap-normal": "16px",
                        "gap-compact": "8px",
                        "gutter": "24px",
                        "margin-page": "32px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-md": ["Inter"],
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
                        "body-lg": ["16px", {
                            "lineHeight": "26px",
                            "letterSpacing": "0.015em",
                            "fontWeight": "400"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "500"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
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
            display: inline-block;
            line-height: 1;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c7c5d6;
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-background text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-[280px] bg-surface-container-low border-r border-outline-variant flex flex-col py-margin-page overflow-y-auto custom-scrollbar z-50">
        <div class="px-6 mb-8 flex items-center gap-3">
            <div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center text-on-primary-container">
                <span class="material-symbols-outlined" data-icon="admin_panel_settings">admin_panel_settings</span>
            </div>
            <div>
                <h1 class="text-headline-md font-headline-md font-bold text-primary">GadgetStore Pro</h1>
                <p class="text-label-md font-label-md text-on-surface-variant opacity-70">Enterprise Edition</p>
            </div>
        </div>
        <nav class="flex-1 px-4 space-y-1">
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="text-body-md font-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="smartphone">smartphone</span>
                <span class="text-body-md font-body-md">Data HP</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="branding_watermark">branding_watermark</span>
                <span class="text-body-md font-body-md">Merek HP</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="category">category</span>
                <span class="text-body-md font-body-md">Kategori</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                <span class="text-body-md font-body-md">Supplier</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span>
                <span class="text-body-md font-body-md">Pelanggan</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                <span class="text-body-md font-body-md">Pembelian</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="payments">payments</span>
                <span class="text-body-md font-body-md">Penjualan</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="event_available">event_available</span>
                <span class="text-body-md font-body-md">Booking</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="build">build</span>
                <span class="text-body-md font-body-md">Servis</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span>
                <span class="text-body-md font-body-md">Pengeluaran</span>
            </a>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="assessment">assessment</span>
                <span class="text-body-md font-body-md">Laporan</span>
            </a>
            <!-- Active Tab -->
            <a class="flex items-center gap-normal text-primary font-bold bg-primary-container text-on-primary-container border-l-4 border-primary px-4 py-3 scale-95 duration-75" href="#">
                <span class="material-symbols-outlined" data-icon="admin_panel_settings">admin_panel_settings</span>
                <span class="text-body-md font-body-md">Manajemen</span>
            </a>
        </nav>
        <div class="mt-auto px-4 space-y-1">
            <button class="w-full mb-4 bg-primary text-on-primary rounded-xl py-3 font-medium flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
                <span class="material-symbols-outlined" data-icon="add">add</span>
                New Transaction
            </button>
            <a class="flex items-center gap-normal text-on-surface-variant hover:bg-surface-container-high transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span class="text-body-md font-body-md">Help</span>
            </a>
            <a class="flex items-center gap-normal text-error hover:bg-error-container transition-all px-4 py-3 rounded-lg" href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="text-body-md font-body-md">Logout</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-[280px] min-h-screen flex flex-col">
        <!-- TopNavBar -->
        <header class="h-16 w-full bg-surface border-b border-outline-variant flex justify-between items-center px-gutter sticky top-0 z-40 shadow-sm">
            <div class="flex items-center gap-4 flex-1">
                <div class="relative w-full max-w-md">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="search">search</span>
                    <input class="w-full bg-surface-container-low border-none rounded-full pl-10 pr-4 py-2 text-body-md focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Cari pengaturan atau staf..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors relative">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-surface"></span>
                </button>
                <button class="p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-colors">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                </button>
                <div class="h-8 w-[1px] bg-outline-variant mx-2"></div>
                <div class="flex items-center gap-3">
                    <div class="text-right hidden sm:block">
                        <p class="text-body-md font-bold leading-none">Budi Santoso</p>
                        <p class="text-label-md text-on-surface-variant">Administrator</p>
                    </div>
                    <img class="w-10 h-10 rounded-full border-2 border-primary-container object-cover" data-alt="A professional headshot of a smiling store manager in a clean, modern tech retail environment. The lighting is bright and professional, following a light-mode aesthetic with soft shadows and clear facial features. The background shows blurred electronics and high-end gadget displays." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdY3e6anhT0yphazrs0V_Qah1fYwYPQyHMuxvDrc4pvp54_eahUZudvODqwBYBws9TAN5OngKKZcaT97RprjmkKQDPcpV-nQdcLjY7YmI4zZLUy1Ws--Onw0v-0nWGd4kHE0vdAZ10RLR9jTajZ5selwHV_a-foUy8smYpGsir9uqP2uthXnDGxeUvKf813qc4A2yTuVQSXEtpJUxEoKC4LvIf-S4NMh4o7YhW9W4cqe0RZ20aijCJRu5rM5tTinytd4QTVjR7gUo" />
                </div>
            </div>
        </header>
        <!-- Content Page -->
        <div class="p-margin-page space-y-8 flex-1 max-w-[1440px] mx-auto w-full">
            <div class="flex justify-between items-end">
                <div>
                    <h2 class="text-headline-lg font-headline-lg text-on-surface">Manajemen Pengguna &amp; Sistem</h2>
                    <p class="text-body-md text-on-surface-variant mt-1">Kelola akses staf, peran, dan konfigurasi inti sistem toko.</p>
                </div>
                <div class="flex gap-3">
                    <button class="px-4 py-2 rounded-lg bg-surface border border-outline-variant text-on-surface-variant font-medium flex items-center gap-2 hover:bg-surface-container hover:shadow-sm transition-all">
                        <span class="material-symbols-outlined text-[20px]" data-icon="file_download">file_download</span>
                        Ekspor Log
                    </button>
                    <button class="px-4 py-2 rounded-lg bg-primary text-on-primary font-medium flex items-center gap-2 hover:opacity-90 transition-all shadow-md">
                        <span class="material-symbols-outlined text-[20px]" data-icon="person_add">person_add</span>
                        Tambah Pengguna
                    </button>
                </div>
            </div>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-12 gap-gutter">
                <!-- User Table Section (Col 8) -->
                <section class="col-span-12 lg:col-span-8 space-y-gutter">
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm">
                        <div class="px-padding-card py-4 border-b border-outline-variant bg-surface-container-low flex justify-between items-center">
                            <h3 class="text-headline-md font-headline-md text-on-surface flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary" data-icon="badge">badge</span>
                                Daftar Staf &amp; Akun
                            </h3>
                            <div class="flex gap-2">
                                <button class="p-2 hover:bg-surface-container-high rounded-lg transition-colors"><span class="material-symbols-outlined" data-icon="filter_list">filter_list</span></button>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead class="bg-surface-container-low/50">
                                    <tr>
                                        <th class="px-padding-card py-4 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Nama Pengguna</th>
                                        <th class="px-padding-card py-4 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Peran</th>
                                        <th class="px-padding-card py-4 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Status</th>
                                        <th class="px-padding-card py-4 text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Login Terakhir</th>
                                        <th class="px-padding-card py-4"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-outline-variant/30">
                                    <tr class="hover:bg-surface-container transition-colors group">
                                        <td class="px-padding-card py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">BS</div>
                                                <div>
                                                    <p class="text-body-md font-bold">Budi Santoso</p>
                                                    <p class="text-label-md text-on-surface-variant">budi.admin@pusatgadget.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-padding-card py-4">
                                            <span class="px-3 py-1 rounded-full bg-primary-container/20 text-primary text-label-md font-bold">Administrator</span>
                                        </td>
                                        <td class="px-padding-card py-4">
                                            <div class="flex items-center gap-2">
                                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                                <span class="text-body-md text-on-surface">Aktif</span>
                                            </div>
                                        </td>
                                        <td class="px-padding-card py-4 text-body-md text-on-surface-variant">2 menit yang lalu</td>
                                        <td class="px-padding-card py-4 text-right">
                                            <button class="p-2 opacity-0 group-hover:opacity-100 hover:bg-surface-container-highest rounded-lg transition-all">
                                                <span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-surface-container transition-colors group">
                                        <td class="px-padding-card py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary font-bold">AS</div>
                                                <div>
                                                    <p class="text-body-md font-bold">Ani Setiawati</p>
                                                    <p class="text-label-md text-on-surface-variant">ani.sales@pusatgadget.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-padding-card py-4">
                                            <span class="px-3 py-1 rounded-full bg-secondary-container/30 text-secondary text-label-md font-bold">Sales</span>
                                        </td>
                                        <td class="px-padding-card py-4">
                                            <div class="flex items-center gap-2">
                                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                                <span class="text-body-md text-on-surface">Aktif</span>
                                            </div>
                                        </td>
                                        <td class="px-padding-card py-4 text-body-md text-on-surface-variant">1 jam yang lalu</td>
                                        <td class="px-padding-card py-4 text-right">
                                            <button class="p-2 opacity-0 group-hover:opacity-100 hover:bg-surface-container-highest rounded-lg transition-all">
                                                <span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-surface-container transition-colors group">
                                        <td class="px-padding-card py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-full bg-tertiary-fixed-dim flex items-center justify-center text-tertiary font-bold">RN</div>
                                                <div>
                                                    <p class="text-body-md font-bold">Rizky Nugraha</p>
                                                    <p class="text-label-md text-on-surface-variant">rizky.tech@pusatgadget.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-padding-card py-4">
                                            <span class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant text-label-md font-bold">Technician</span>
                                        </td>
                                        <td class="px-padding-card py-4">
                                            <div class="flex items-center gap-2">
                                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                                <span class="text-body-md text-on-surface">Aktif</span>
                                            </div>
                                        </td>
                                        <td class="px-padding-card py-4 text-body-md text-on-surface-variant">Kemarin, 14:20</td>
                                        <td class="px-padding-card py-4 text-right">
                                            <button class="p-2 opacity-0 group-hover:opacity-100 hover:bg-surface-container-highest rounded-lg transition-all">
                                                <span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-surface-container transition-colors group">
                                        <td class="px-padding-card py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-full bg-error-container/30 flex items-center justify-center text-error font-bold">DW</div>
                                                <div>
                                                    <p class="text-body-md font-bold">Dian Wijaya</p>
                                                    <p class="text-label-md text-on-surface-variant">dian.off@pusatgadget.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-padding-card py-4">
                                            <span class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant text-label-md font-bold">Manager</span>
                                        </td>
                                        <td class="px-padding-card py-4">
                                            <div class="flex items-center gap-2">
                                                <span class="w-2 h-2 bg-outline rounded-full"></span>
                                                <span class="text-body-md text-on-surface-variant">Tidak Aktif</span>
                                            </div>
                                        </td>
                                        <td class="px-padding-card py-4 text-body-md text-on-surface-variant">3 minggu yang lalu</td>
                                        <td class="px-padding-card py-4 text-right">
                                            <button class="p-2 opacity-0 group-hover:opacity-100 hover:bg-surface-container-highest rounded-lg transition-all">
                                                <span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Role Permissions Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-lg bg-primary-container text-on-primary-container flex items-center justify-center">
                                    <span class="material-symbols-outlined" data-icon="security">security</span>
                                </div>
                                <h4 class="font-bold text-body-lg">Kontrol Akses Peran</h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant mb-6">Sesuaikan izin akses untuk setiap tingkat jabatan staf.</p>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center p-3 rounded-lg bg-surface-container-low border border-outline-variant/30">
                                    <span class="text-body-md font-medium">Administrator</span>
                                    <span class="text-label-md text-primary font-bold">Akses Penuh</span>
                                </div>
                                <div class="flex justify-between items-center p-3 rounded-lg bg-surface-container-low border border-outline-variant/30">
                                    <span class="text-body-md font-medium">Technician</span>
                                    <span class="text-label-md text-on-surface-variant">Modul Servis</span>
                                </div>
                                <div class="flex justify-between items-center p-3 rounded-lg bg-surface-container-low border border-outline-variant/30">
                                    <span class="text-body-md font-medium">Sales</span>
                                    <span class="text-label-md text-on-surface-variant">Modul POS &amp; Inventori</span>
                                </div>
                            </div>
                            <button class="w-full mt-6 py-2 rounded-lg border border-primary text-primary text-body-md font-bold hover:bg-primary-container/10 transition-colors">Kelola Izin</button>
                        </div>
                        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-lg bg-tertiary-container text-on-tertiary-container flex items-center justify-center">
                                    <span class="material-symbols-outlined" data-icon="history">history</span>
                                </div>
                                <h4 class="font-bold text-body-lg">Log Audit Keamanan</h4>
                            </div>
                            <p class="text-body-md text-on-surface-variant mb-6">Pantau aktivitas sensitif sistem dalam 24 jam terakhir.</p>
                            <div class="space-y-4">
                                <div class="flex gap-3">
                                    <div class="w-1 bg-green-500 rounded-full"></div>
                                    <div>
                                        <p class="text-body-md font-medium">Budi Santoso login sukses</p>
                                        <p class="text-label-md text-on-surface-variant">10:45 AM • 192.168.1.5</p>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <div class="w-1 bg-amber-500 rounded-full"></div>
                                    <div>
                                        <p class="text-body-md font-medium">Perubahan stok iPhone 15 Pro</p>
                                        <p class="text-label-md text-on-surface-variant">09:12 AM • Ani Setiawati</p>
                                    </div>
                                </div>
                                <div class="flex gap-3">
                                    <div class="w-1 bg-primary rounded-full"></div>
                                    <div>
                                        <p class="text-body-md font-medium">Pengaturan toko diupdate</p>
                                        <p class="text-label-md text-on-surface-variant">Kemarin • Budi Santoso</p>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full mt-6 py-2 rounded-lg border border-outline-variant text-on-surface-variant text-body-md font-bold hover:bg-surface-container transition-colors">Lihat Semua Log</button>
                        </div>
                    </div>
                </section>
                <!-- System Settings Section (Col 4) -->
                <section class="col-span-12 lg:col-span-4 space-y-gutter">
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card shadow-sm sticky top-24">
                        <h3 class="text-headline-md font-headline-md text-on-surface mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary" data-icon="settings_applications">settings_applications</span>
                            Konfigurasi Toko
                        </h3>
                        <div class="space-y-6">
                            <!-- Basic Info -->
                            <div class="space-y-4">
                                <div>
                                    <label class="text-label-md font-label-md text-on-surface-variant mb-1 block">Nama Toko</label>
                                    <input class="w-full bg-surface-container-low border-outline-variant rounded-lg px-4 py-2 text-body-md focus:ring-primary focus:border-primary" type="text" value="Pusat Gadget Indonesia" />
                                </div>
                                <div>
                                    <label class="text-label-md font-label-md text-on-surface-variant mb-1 block">Alamat Kantor Pusat</label>
                                    <textarea class="w-full bg-surface-container-low border-outline-variant rounded-lg px-4 py-2 text-body-md focus:ring-primary focus:border-primary" rows="3">Jl. Sudirman No. 45, Jakarta Pusat, DKI Jakarta 10110</textarea>
                                </div>
                                <div>
                                    <label class="text-label-md font-label-md text-on-surface-variant mb-1 block">Kontak WA Utama</label>
                                    <div class="flex">
                                        <span class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-outline-variant bg-surface-container text-on-surface-variant text-body-md">+62</span>
                                        <input class="flex-1 bg-surface-container-low border-outline-variant rounded-r-lg px-4 py-2 text-body-md focus:ring-primary focus:border-primary" type="text" value="81234567890" />
                                    </div>
                                </div>
                            </div>
                            <div class="h-[1px] bg-outline-variant/30"></div>
                            <!-- Operational Toggles -->
                            <div class="space-y-4">
                                <h4 class="text-label-md font-bold text-primary uppercase tracking-wider">Fitur Operasional</h4>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-body-md font-bold">Aktifkan Booking Online</p>
                                        <p class="text-label-md text-on-surface-variant">Izinkan pelanggan reservasi unit</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input checked="" class="sr-only peer" type="checkbox" />
                                        <div class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-body-md font-bold">Mode Gelap Otomatis</p>
                                        <p class="text-label-md text-on-surface-variant">Aktifkan setelah pukul 18:00</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input class="sr-only peer" type="checkbox" />
                                        <div class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-body-md font-bold">Notifikasi Email Staf</p>
                                        <p class="text-label-md text-on-surface-variant">Kirim laporan harian otomatis</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input checked="" class="sr-only peer" type="checkbox" />
                                        <div class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                                    </label>
                                </div>
                            </div>
                            <button class="w-full bg-primary-container text-on-primary-container py-3 rounded-lg font-bold flex items-center justify-center gap-2 hover:shadow-lg hover:bg-primary transition-all active:scale-95 duration-150 mt-4">
                                <span class="material-symbols-outlined" data-icon="save">save</span>
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Footer Info -->
        <footer class="mt-auto px-margin-page py-6 border-t border-outline-variant text-center">
            <p class="text-label-md text-on-surface-variant">© 2024 GadgetStore Pro - Pusat Gadget Indonesia. Versi Sistem 4.2.0-stable</p>
        </footer>
    </main>
    <!-- Overlay Mobile Menu Toggle (Simplified) -->
    <button class="fixed bottom-6 right-6 lg:hidden w-14 h-14 bg-primary text-on-primary rounded-full shadow-xl flex items-center justify-center z-50">
        <span class="material-symbols-outlined" data-icon="menu">menu</span>
    </button>
    <script>
        // Micro-interactions and simple logic
        document.querySelectorAll('input[type="checkbox"]').forEach(toggle => {
            toggle.addEventListener('change', (e) => {
                const label = e.target.closest('div').querySelector('p').innerText;
                console.log(`${label} diubah menjadi: ${e.target.checked}`);
                // Future integration: toast notification
            });
        });

        // Simple Search Filter logic for the table
        const searchInput = document.querySelector('input[placeholder="Cari pengaturan atau staf..."]');
        const tableRows = document.querySelectorAll('tbody tr');

        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            tableRows.forEach(row => {
                const text = row.innerText.toLowerCase();
                row.style.display = text.includes(term) ? '' : 'none';
            });
        });
    </script>
</body>

</html>