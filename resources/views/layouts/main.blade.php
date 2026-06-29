<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'Pusat Gadget Indonesia - Management System')</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

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
                        "gutter": "24px",
                        "spacing-margin-page": "32px"
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
            background-color: #fcf8ff;
            color: #1b1b23;
            overflow-x: hidden;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        /* Sidebar scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e4e1ec;
            border-radius: 10px;
        }

        /* Glass card utility */
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid #E2E8F0;
        }

        /* Card elevation utility */
        .card-elevation {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02), 0 4px 12px rgba(0, 0, 0, 0.02);
        }
    </style>

    {{-- Slot for page-specific styles --}}
    @stack('styles')
</head>

<body class="bg-background text-on-surface selection:bg-primary-container selection:text-on-primary-container">

    {{-- Sidebar --}}
    @include('layouts.sidebar')

    {{-- TopNavBar --}}
    <header class="fixed top-0 right-0 left-[280px] h-16 bg-surface/80 backdrop-blur-md flex justify-between items-center px-gutter border-b border-outline-variant/30 z-40">
        <div class="flex items-center gap-4 flex-1">
            <div class="relative w-full max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant/60">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 text-body-md focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-on-surface-variant/40"
                    placeholder="@yield('search-placeholder', 'Cari data, transaksi, atau pelanggan...')"
                    type="text" />
            </div>
        </div>
        <div class="flex items-center gap-2">
            <button class="p-2 hover:bg-surface-variant/20 rounded-full transition-all text-on-surface-variant">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="p-2 hover:bg-surface-variant/20 rounded-full transition-all text-on-surface-variant">
                <span class="material-symbols-outlined">dark_mode</span>
            </button>
            <div class="w-px h-6 bg-outline-variant/50 mx-2"></div>
            <div class="flex items-center gap-3 pl-2">
                <div class="text-right hidden sm:block">
                    <p class="text-label-md font-bold text-on-surface">{{ auth()->user()->name }}</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-wider">
                        {{ auth()->user()->isOwner() ? 'Owner' : 'Admin' }}
                    </p>
                </div>
                <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center border-2 border-primary/10">
                    <span class="material-symbols-outlined text-primary text-[18px]">person</span>
                </div>
            </div>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="ml-[280px] pt-16 min-h-screen">
        <div class="p-margin-page max-w-[1440px] mx-auto">
            @yield('content')
        </div>
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Slot for page-specific scripts --}}
    @stack('scripts')

</body>

</html>