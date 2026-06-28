<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manajemen Kategori &amp; Merek - Pusat Gadget Indonesia</title>
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
                        "inverse-primary": "#c0c1ff",
                        "on-tertiary-fixed": "#311400",
                        "surface": "#fcf8ff",
                        "on-error-container": "#93000a",
                        "tertiary-container": "#a95400",
                        "on-error": "#ffffff",
                        "on-primary-fixed": "#06006c",
                        "secondary-container": "#d5e3fd",
                        "on-tertiary-fixed-variant": "#723600",
                        "on-secondary-container": "#57657b",
                        "on-primary-fixed-variant": "#3131b7",
                        "on-surface-variant": "#464554",
                        "secondary": "#515f74",
                        "error": "#ba1a1a",
                        "outline": "#767585",
                        "primary-fixed": "#e1e0ff",
                        "tertiary-fixed-dim": "#ffb786",
                        "on-secondary-fixed-variant": "#3a485c",
                        "on-secondary-fixed": "#0d1c2f",
                        "on-tertiary-container": "#ffe9dd",
                        "on-primary-container": "#eeebff",
                        "primary-container": "#585bdd",
                        "tertiary-fixed": "#ffdcc6",
                        "inverse-surface": "#303038",
                        "error-container": "#ffdad6",
                        "outline-variant": "#c7c5d6",
                        "surface-dim": "#dbd8e4",
                        "primary-fixed-dim": "#c0c1ff",
                        "surface-container-highest": "#e4e1ec",
                        "inverse-on-surface": "#f2effb",
                        "surface-container-low": "#f5f2fd",
                        "secondary-fixed-dim": "#b9c7e0",
                        "on-primary": "#ffffff",
                        "surface-bright": "#fcf8ff",
                        "on-background": "#1b1b23",
                        "primary": "#3e40c3",
                        "surface-container": "#efecf8",
                        "surface-container-high": "#eae7f2",
                        "background": "#fcf8ff",
                        "on-tertiary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed": "#d5e3fd",
                        "on-surface": "#1b1b23",
                        "on-secondary": "#ffffff",
                        "tertiary": "#844000",
                        "surface-variant": "#e4e1ec",
                        "surface-tint": "#4a4dcf"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gap-compact": "8px",
                        "gap-normal": "16px",
                        "unit": "4px",
                        "padding-card": "24px",
                        "margin-page": "32px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
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
                        "headline-lg": ["28px", {
                            "lineHeight": "36px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcf8ff;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .sidebar-scroll::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #c7c5d6;
            border-radius: 10px;
        }
    </style>
</head>

<body class="text-on-surface">
    <!-- Sidebar Navigation -->
    <aside class="fixed left-0 top-0 h-full w-[280px] bg-surface border-r border-outline-variant flex flex-col z-50">
        <div class="p-6 flex flex-col gap-2">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">Pusat Gadget</h1>
            <p class="font-label-md text-label-md text-on-surface-variant">Indonesia Store</p>
        </div>
        <nav class="flex-1 overflow-y-auto sidebar-scroll py-4">
            <ul class="space-y-1">
                <!-- Dashboard -->
                <li>
                    <a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors" href="#">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="font-body-md text-body-md">Dashboard</span>
                    </a>
                </li>
                <!-- Data HP -->
                <li>
                    <a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors" href="#">
                        <span class="material-symbols-outlined">devices</span>
                        <span class="font-body-md text-body-md">Data HP</span>
                    </a>
                </li>
                <!-- Merek HP (Active State Example) -->
                <li>
                    <a class="flex items-center gap-normal px-6 py-3 border-l-4 border-primary text-primary font-bold bg-primary-fixed" href="#">
                        <span class="material-symbols-outlined">branding_watermark</span>
                        <span class="font-body-md text-body-md">Merek HP</span>
                    </a>
                </li>
                <!-- Kategori -->
                <li>
                    <a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors" href="#">
                        <span class="material-symbols-outlined">category</span>
                        <span class="font-body-md text-body-md">Kategori</span>
                    </a>
                </li>
                <!-- Remaining Nav Items -->
                <li><a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high" href="#"><span class="material-symbols-outlined">inventory_2</span><span class="text-body-md">Supplier</span></a></li>
                <li><a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high" href="#"><span class="material-symbols-outlined">groups</span><span class="text-body-md">Pelanggan</span></a></li>
                <li><a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high" href="#"><span class="material-symbols-outlined">shopping_cart</span><span class="text-body-md">Pembelian</span></a></li>
                <li><a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high" href="#"><span class="material-symbols-outlined">sell</span><span class="text-body-md">Penjualan</span></a></li>
                <li><a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high" href="#"><span class="material-symbols-outlined">event_available</span><span class="text-body-md">Booking</span></a></li>
                <li><a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high" href="#"><span class="material-symbols-outlined">build</span><span class="text-body-md">Servis</span></a></li>
                <li><a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high" href="#"><span class="material-symbols-outlined">payments</span><span class="text-body-md">Pengeluaran</span></a></li>
                <li><a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high" href="#"><span class="material-symbols-outlined">assessment</span><span class="text-body-md">Laporan</span></a></li>
                <li><a class="flex items-center gap-normal px-6 py-3 text-on-surface-variant hover:text-primary hover:bg-surface-container-high" href="#"><span class="material-symbols-outlined">settings</span><span class="text-body-md">Manajemen</span></a></li>
            </ul>
        </nav>
    </aside>
    <!-- Topbar Navigation -->
    <header class="fixed top-0 left-[280px] w-[calc(100%-280px)] h-16 bg-surface/80 backdrop-blur-md flex justify-between items-center px-8 z-40 shadow-sm">
        <div class="flex items-center gap-4 bg-surface-container px-4 py-2 rounded-full w-96">
            <span class="material-symbols-outlined text-outline">search</span>
            <input class="bg-transparent border-none focus:ring-0 text-body-md w-full placeholder:text-outline-variant" placeholder="Cari data merek atau kategori..." type="text" />
        </div>
        <div class="flex items-center gap-6">
            <button class="relative text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full"></span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">settings</span>
            </button>
            <div class="flex items-center gap-3 border-l border-outline-variant pl-6">
                <div class="text-right">
                    <p class="font-label-md text-label-md font-bold">Admin Store</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-wider">Super Administrator</p>
                </div>
                <img class="w-10 h-10 rounded-full border-2 border-primary-fixed" data-alt="Professional headshot of a corporate administrator, clean lighting, studio background, smiling slightly, high-end photography style, consistent with a modern tech-focused business environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBX9Z6Yve_q4b66u6ZoiWEM0JIL9QBga2GEmiihfBUhCho_59vKARnxthvtslzsUbeL1LUro7K7heTrjzHef_tTUdXqYn23JKwtlEphbGut3tbnXrIiT6P80M5aZHh1Tu1B8uocWIVwnAbGYuLIbgT84Fwn4VM04eDANWi-hX75BdpsgJnXTORXbfnC23yq0LSP8oy2RvI72grmTvS8VuwLHX66uYs6JNQ74PjUmtaePiHCtrj_spKqK1K9yAUQq_0WmhxOcxO93Fk" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-[280px] mt-16 p-margin-page">
        <!-- Page Header -->
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Manajemen Kategori &amp; Merek</h2>
                <p class="text-body-md text-on-surface-variant max-w-2xl">Kelola ekosistem produk Anda mulai dari identitas merek global hingga klasifikasi kategori teknis untuk efisiensi inventaris.</p>
            </div>
            <button class="flex items-center gap-2 bg-primary text-on-primary px-6 py-3 rounded-xl font-bold hover:shadow-lg transition-all active:scale-[0.98]">
                <span class="material-symbols-outlined">add_circle</span>
                Tambah Kategori/Merek Baru
            </button>
        </div>
        <div class="bento-grid">
            <!-- Left Column: Tabs Content -->
            <div class="col-span-12 lg:col-span-9 space-y-gutter">
                <!-- Tab Headers -->
                <div class="flex gap-8 border-b border-outline-variant px-2">
                    <button class="pb-4 font-body-lg text-primary border-b-2 border-primary font-bold transition-all" id="tab-merek" onclick="switchTab('merek')">Merek Smartphone</button>
                    <button class="pb-4 font-body-lg text-on-surface-variant hover:text-primary transition-all" id="tab-kategori" onclick="switchTab('kategori')">Kategori Produk</button>
                </div>
                <!-- Section: Merek Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-gutter" id="content-merek">
                    <!-- Samsung -->
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card hover:shadow-md transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-blue-50 rounded-lg">
                                <span class="material-symbols-outlined text-primary text-3xl">smartphone</span>
                            </div>
                            <span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-label-md rounded-full">Global Brand</span>
                        </div>
                        <h4 class="font-headline-md text-headline-md mb-1">Samsung</h4>
                        <p class="text-body-md text-on-surface-variant mb-4">Elektronika konsumen &amp; seluler Korea Selatan.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/30">
                            <span class="text-label-md text-outline">Stok Unit</span>
                            <span class="font-bold text-primary">1,240 Unit</span>
                        </div>
                    </div>
                    <!-- Apple -->
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card hover:shadow-md transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-gray-50 rounded-lg">
                                <span class="material-symbols-outlined text-on-background text-3xl">laptop_mac</span>
                            </div>
                            <span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-label-md rounded-full">Premium</span>
                        </div>
                        <h4 class="font-headline-md text-headline-md mb-1">Apple</h4>
                        <p class="text-body-md text-on-surface-variant mb-4">Inovasi desain &amp; ekosistem iOS terpadu.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/30">
                            <span class="text-label-md text-outline">Stok Unit</span>
                            <span class="font-bold text-primary">850 Unit</span>
                        </div>
                    </div>
                    <!-- Xiaomi -->
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card hover:shadow-md transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-orange-50 rounded-lg text-orange-600">
                                <span class="material-symbols-outlined text-3xl">ad_units</span>
                            </div>
                            <span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-label-md rounded-full">Value</span>
                        </div>
                        <h4 class="font-headline-md text-headline-md mb-1">Xiaomi</h4>
                        <p class="text-body-md text-on-surface-variant mb-4">Teknologi tinggi dengan harga kompetitif.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/30">
                            <span class="text-label-md text-outline">Stok Unit</span>
                            <span class="font-bold text-primary">2,100 Unit</span>
                        </div>
                    </div>
                    <!-- Oppo -->
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card hover:shadow-md transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-green-50 rounded-lg text-green-600">
                                <span class="material-symbols-outlined text-3xl">camera_enhance</span>
                            </div>
                            <span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-label-md rounded-full">Cam-Centric</span>
                        </div>
                        <h4 class="font-headline-md text-headline-md mb-1">Oppo</h4>
                        <p class="text-body-md text-on-surface-variant mb-4">Fokus pada fotografi seluler &amp; pengisian cepat.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/30">
                            <span class="text-label-md text-outline">Stok Unit</span>
                            <span class="font-bold text-primary">945 Unit</span>
                        </div>
                    </div>
                    <!-- Vivo -->
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card hover:shadow-md transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-blue-50 rounded-lg text-blue-500">
                                <span class="material-symbols-outlined text-3xl">music_note</span>
                            </div>
                            <span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-label-md rounded-full">Lifestyle</span>
                        </div>
                        <h4 class="font-headline-md text-headline-md mb-1">Vivo</h4>
                        <p class="text-body-md text-on-surface-variant mb-4">Desain ramping &amp; inovasi audio Hi-Fi.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/30">
                            <span class="text-label-md text-outline">Stok Unit</span>
                            <span class="font-bold text-primary">780 Unit</span>
                        </div>
                    </div>
                    <!-- Realme -->
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card hover:shadow-md transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-yellow-50 rounded-lg text-yellow-600">
                                <span class="material-symbols-outlined text-3xl">bolt</span>
                            </div>
                            <span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-label-md rounded-full">Young Adult</span>
                        </div>
                        <h4 class="font-headline-md text-headline-md mb-1">Realme</h4>
                        <p class="text-body-md text-on-surface-variant mb-4">Inovasi berani untuk generasi muda.</p>
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/30">
                            <span class="text-label-md text-outline">Stok Unit</span>
                            <span class="font-bold text-primary">1,120 Unit</span>
                        </div>
                    </div>
                </div>
                <!-- Section: Kategori Table (Hidden by default in logic) -->
                <div class="hidden overflow-hidden bg-surface-container-lowest border border-outline-variant rounded-xl" id="content-kategori">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-low border-b border-outline-variant">
                            <tr>
                                <th class="p-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Kategori</th>
                                <th class="p-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Deskripsi</th>
                                <th class="p-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Item Unik</th>
                                <th class="p-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Status</th>
                                <th class="p-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/30">
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="p-4 flex items-center gap-3">
                                    <span class="material-symbols-outlined text-primary">smartphone</span>
                                    <span class="font-bold">Smartphone</span>
                                </td>
                                <td class="p-4 text-body-md text-on-surface-variant italic">Perangkat seluler cerdas...</td>
                                <td class="p-4 font-bold text-primary">245 Model</td>
                                <td class="p-4"><span class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded uppercase">Aktif</span></td>
                                <td class="p-4 text-right"><button class="material-symbols-outlined text-outline hover:text-primary">more_vert</button></td>
                            </tr>
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="p-4 flex items-center gap-3">
                                    <span class="material-symbols-outlined text-primary">tablet</span>
                                    <span class="font-bold">Tablet</span>
                                </td>
                                <td class="p-4 text-body-md text-on-surface-variant italic">Layar lebar untuk produktivitas...</td>
                                <td class="p-4 font-bold text-primary">42 Model</td>
                                <td class="p-4"><span class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded uppercase">Aktif</span></td>
                                <td class="p-4 text-right"><button class="material-symbols-outlined text-outline hover:text-primary">more_vert</button></td>
                            </tr>
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="p-4 flex items-center gap-3">
                                    <span class="material-symbols-outlined text-primary">headphones</span>
                                    <span class="font-bold">Aksesori</span>
                                </td>
                                <td class="p-4 text-body-md text-on-surface-variant italic">Audio, Case, Charger, dll...</td>
                                <td class="p-4 font-bold text-primary">1,120 SKU</td>
                                <td class="p-4"><span class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded uppercase">Aktif</span></td>
                                <td class="p-4 text-right"><button class="material-symbols-outlined text-outline hover:text-primary">more_vert</button></td>
                            </tr>
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="p-4 flex items-center gap-3">
                                    <span class="material-symbols-outlined text-primary">watch</span>
                                    <span class="font-bold">Wearables</span>
                                </td>
                                <td class="p-4 text-body-md text-on-surface-variant italic">Smartwatch &amp; Fitness Band...</td>
                                <td class="p-4 font-bold text-primary">88 Model</td>
                                <td class="p-4"><span class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded uppercase">Aktif</span></td>
                                <td class="p-4 text-right"><button class="material-symbols-outlined text-outline hover:text-primary">more_vert</button></td>
                            </tr>
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="p-4 flex items-center gap-3">
                                    <span class="material-symbols-outlined text-primary">memory</span>
                                    <span class="font-bold">Suku Cadang</span>
                                </td>
                                <td class="p-4 text-body-md text-on-surface-variant italic">Layar, Baterai, Komponen internal...</td>
                                <td class="p-4 font-bold text-primary">560 SKU</td>
                                <td class="p-4"><span class="px-2 py-1 bg-amber-100 text-amber-700 text-[10px] font-bold rounded uppercase">Restock Soon</span></td>
                                <td class="p-4 text-right"><button class="material-symbols-outlined text-outline hover:text-primary">more_vert</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Right Column: Statistics Sidebar -->
            <div class="col-span-12 lg:col-span-3 space-y-gutter">
                <!-- Most Popular Brand -->
                <div class="bg-primary text-on-primary rounded-xl p-padding-card shadow-lg relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="material-symbols-outlined text-xl">workspace_premium</span>
                            <span class="font-label-md text-label-md uppercase tracking-widest opacity-80">Merek Terlaris</span>
                        </div>
                        <h3 class="font-display-lg text-display-lg mb-2">Samsung</h3>
                        <p class="text-body-md opacity-90">Kontribusi penjualan sebesar 38% di Q3 2023.</p>
                        <div class="mt-6 flex gap-2">
                            <span class="bg-white/20 px-3 py-1 rounded-full text-xs font-bold">+12% vs last month</span>
                        </div>
                    </div>
                    <span class="material-symbols-outlined absolute -bottom-8 -right-8 text-[120px] opacity-10 rotate-12">trending_up</span>
                </div>
                <!-- Profit Contribution -->
                <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-padding-card">
                    <div class="flex items-center gap-2 mb-6">
                        <span class="material-symbols-outlined text-primary">payments</span>
                        <h3 class="font-headline-md text-headline-md">Laba Terbesar</h3>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-body-md">Aksesori</span>
                                <span class="font-bold text-primary">Rp 420M</span>
                            </div>
                            <div class="w-full bg-surface-container rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-body-md">Smartphone</span>
                                <span class="font-bold text-primary">Rp 310M</span>
                            </div>
                            <div class="w-full bg-surface-container rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-body-md">Suku Cadang</span>
                                <span class="font-bold text-primary">Rp 125M</span>
                            </div>
                            <div class="w-full bg-surface-container rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 25%"></div>
                            </div>
                        </div>
                    </div>
                    <button class="w-full mt-8 py-3 border border-outline text-outline rounded-lg text-label-md font-bold hover:bg-surface-container transition-colors">Lihat Laporan Detail</button>
                </div>
                <!-- Quick Insight Card -->
                <div class="bg-secondary-container text-on-secondary-container rounded-xl p-padding-card border border-outline-variant/20">
                    <div class="flex gap-4 items-start">
                        <div class="p-2 bg-white/50 rounded-lg">
                            <span class="material-symbols-outlined text-primary">lightbulb</span>
                        </div>
                        <div>
                            <p class="font-bold text-body-md mb-1">Insight Inventaris</p>
                            <p class="text-label-md leading-relaxed opacity-80">Kategori "Wearables" mengalami kenaikan permintaan 15% di wilayah Jabodetabek. Pertimbangkan penambahan unit Apple Watch.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Micro-interaction Scripts -->
    <script>
        function switchTab(type) {
            const tabMerek = document.getElementById('tab-merek');
            const tabKategori = document.getElementById('tab-kategori');
            const contentMerek = document.getElementById('content-merek');
            const contentKategori = document.getElementById('content-kategori');

            if (type === 'merek') {
                tabMerek.classList.add('text-primary', 'border-b-2', 'border-primary', 'font-bold');
                tabMerek.classList.remove('text-on-surface-variant');
                tabKategori.classList.remove('text-primary', 'border-b-2', 'border-primary', 'font-bold');
                tabKategori.classList.add('text-on-surface-variant');

                contentMerek.classList.remove('hidden');
                contentKategori.classList.add('hidden');
            } else {
                tabKategori.classList.add('text-primary', 'border-b-2', 'border-primary', 'font-bold');
                tabKategori.classList.remove('text-on-surface-variant');
                tabMerek.classList.remove('text-primary', 'border-b-2', 'border-primary', 'font-bold');
                tabMerek.classList.add('text-on-surface-variant');

                contentKategori.classList.remove('hidden');
                contentMerek.classList.add('hidden');
            }
        }

        // Search Bar Animation Focus
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('ring-2', 'ring-primary/20', 'border-primary');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('ring-2', 'ring-primary/20', 'border-primary');
        });
    </script>
</body>

</html>