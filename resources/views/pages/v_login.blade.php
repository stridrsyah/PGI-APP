<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login — Planet Gadget Indonesia</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#3e40c3",
                        "on-primary": "#ffffff",
                        "primary-container": "#585bdd",
                        "on-primary-container": "#eeebff",
                        "primary-fixed": "#e1e0ff",
                        "primary-fixed-dim": "#c0c1ff",
                        "on-primary-fixed": "#06006c",
                        "on-primary-fixed-variant": "#3131b7",
                        "inverse-primary": "#c0c1ff",
                        "secondary": "#515f74",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#d5e3fd",
                        "on-secondary-container": "#57657b",
                        "secondary-fixed": "#d5e3fd",
                        "secondary-fixed-dim": "#b9c7e0",
                        "on-secondary-fixed": "#0d1c2f",
                        "on-secondary-fixed-variant": "#3a485c",
                        "tertiary": "#844000",
                        "on-tertiary": "#ffffff",
                        "tertiary-container": "#a95400",
                        "on-tertiary-container": "#ffe9dd",
                        "tertiary-fixed": "#ffdcc6",
                        "tertiary-fixed-dim": "#ffb786",
                        "on-tertiary-fixed": "#311400",
                        "on-tertiary-fixed-variant": "#723600",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "surface": "#fcf8ff",
                        "on-surface": "#1b1b23",
                        "surface-variant": "#e4e1ec",
                        "on-surface-variant": "#464554",
                        "surface-dim": "#dbd8e4",
                        "surface-bright": "#fcf8ff",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f5f2fd",
                        "surface-container": "#efecf8",
                        "surface-container-high": "#eae7f2",
                        "surface-container-highest": "#e4e1ec",
                        "surface-tint": "#4a4dcf",
                        "background": "#fcf8ff",
                        "on-background": "#1b1b23",
                        "outline": "#767585",
                        "outline-variant": "#c7c5d6",
                        "inverse-surface": "#303038",
                        "inverse-on-surface": "#f2effb",
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        full: "9999px",
                    },
                    spacing: {
                        "gutter": "24px",
                        "padding-card": "24px",
                        "gap-normal": "16px",
                        "gap-compact": "8px",
                    },
                    fontFamily: {
                        sans: ["Inter", "ui-sans-serif", "system-ui"],
                        "display-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "label-md": ["Inter"],
                    },
                    fontSize: {
                        "display-lg": ["36px", {
                            lineHeight: "44px",
                            letterSpacing: "-0.02em",
                            fontWeight: "700"
                        }],
                        "headline-lg": ["28px", {
                            lineHeight: "36px",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],
                        "headline-md": ["20px", {
                            lineHeight: "28px",
                            letterSpacing: "0.01em",
                            fontWeight: "600"
                        }],
                        "body-lg": ["16px", {
                            lineHeight: "26px",
                            letterSpacing: "0.015em",
                            fontWeight: "400"
                        }],
                        "body-md": ["14px", {
                            lineHeight: "22px",
                            letterSpacing: "0.01em",
                            fontWeight: "400"
                        }],
                        "label-md": ["12px", {
                            lineHeight: "16px",
                            letterSpacing: "0.05em",
                            fontWeight: "500"
                        }],
                    },
                },
            },
        }
    </script>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcf8ff;
            color: #1b1b23;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        /* Animated gradient background on left panel */
        .brand-panel {
            background: linear-gradient(135deg, #3e40c3 0%, #585bdd 40%, #3131b7 70%, #06006c 100%);
            background-size: 300% 300%;
            animation: gradientShift 8s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Floating orbs on brand panel */
        .orb {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.06);
            animation: floatOrb 6s ease-in-out infinite;
        }

        .orb-1 {
            width: 320px;
            height: 320px;
            top: -80px;
            left: -80px;
            animation-delay: 0s;
        }

        .orb-2 {
            width: 200px;
            height: 200px;
            bottom: 60px;
            right: -40px;
            animation-delay: 2s;
        }

        .orb-3 {
            width: 140px;
            height: 140px;
            top: 45%;
            left: 55%;
            animation-delay: 4s;
        }

        @keyframes floatOrb {

            0%,
            100% {
                transform: translateY(0px) scale(1);
            }

            50% {
                transform: translateY(-20px) scale(1.05);
            }
        }

        /* Card shadow */
        .login-card {
            box-shadow:
                0 4px 6px -1px rgba(62, 64, 195, 0.06),
                0 20px 60px -10px rgba(62, 64, 195, 0.12);
        }

        /* Input focus ring */
        .input-field {
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .input-field:focus {
            border-color: #3e40c3;
            box-shadow: 0 0 0 3px rgba(62, 64, 195, 0.15);
            outline: none;
        }

        /* Button press */
        .btn-primary:active {
            transform: scale(0.98);
        }

        /* Alert shake */
        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            20% {
                transform: translateX(-6px);
            }

            40% {
                transform: translateX(6px);
            }

            60% {
                transform: translateX(-4px);
            }

            80% {
                transform: translateX(4px);
            }
        }

        .shake {
            animation: shake 0.4s ease;
        }

        /* Spinner */
        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .spinner {
            animation: spin 0.8s linear infinite;
        }

        /* Feature badge pulse */
        @keyframes badgePulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .badge-live {
            animation: badgePulse 2s ease infinite;
        }
    </style>
</head>

<body class="bg-background text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">

    <div class="min-h-screen flex">

        {{-- =====================================================
         LEFT — Brand Panel (hidden on mobile)
    ====================================================== --}}
        <div class="brand-panel hidden lg:flex lg:w-[52%] xl:w-[55%] relative flex-col justify-between p-12 overflow-hidden">

            {{-- Decorative orbs --}}
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>

            {{-- Brand mark --}}
            <div class="relative z-10">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center border border-white/20">
                        <span class="material-symbols-outlined text-white text-[26px]"
                            style="font-variation-settings:'FILL' 1;">devices</span>
                    </div>
                    <div>
                        <h1 class="text-white font-bold text-xl leading-tight tracking-tight">Planet Gadget Indonesia</h1>
                        <p class="text-white/60 text-[12px] uppercase tracking-widest font-medium mt-0.5">Management System</p>
                    </div>
                </div>
            </div>

            {{-- Center copy --}}
            <div class="relative z-10 space-y-6">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-sm">
                        <span class="badge-live w-2 h-2 rounded-full bg-green-300 inline-block"></span>
                        <span class="text-white/80 text-[11px] font-semibold uppercase tracking-widest">Sistem Aktif</span>
                    </div>
                    <h2 class="text-white font-bold leading-tight"
                        style="font-size:clamp(28px,3vw,42px); line-height:1.15; letter-spacing:-0.02em;">
                        Kelola Seluruh<br>Operasional Toko<br>
                        <span class="text-primary-fixed-dim">Dalam Satu Tempat</span>
                    </h2>
                    <p class="text-white/65 text-body-lg max-w-sm leading-relaxed">
                        Platform manajemen terpadu untuk stok, penjualan, servis, dan laporan bisnis Anda secara real-time.
                    </p>
                </div>

                {{-- Feature chips --}}
                <div class="flex flex-wrap gap-2 pt-2">
                    @foreach([
                    ['inventory_2', 'Manajemen Stok'],
                    ['sell', 'Transaksi POS'],
                    ['build', 'Servis & Booking'],
                    ['assessment', 'Laporan Bisnis'],
                    ] as [$icon, $label])
                    <div class="flex items-center gap-2 px-3 py-2 rounded-xl bg-white/10 border border-white/15 backdrop-blur-sm">
                        <span class="material-symbols-outlined text-white/80 text-[16px]"
                            style="font-variation-settings:'FILL' 1;">{{ $icon }}</span>
                        <span class="text-white/80 text-[12px] font-medium">{{ $label }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Bottom credit --}}
            <div class="relative z-10">
                <p class="text-white/40 text-[11px]">
                    &copy; {{ date('Y') }} Planet Gadget Indonesia &mdash; Sistem Internal. Akses Terbatas.
                </p>
            </div>
        </div>

        {{-- =====================================================
         RIGHT — Login Form
    ====================================================== --}}
        <div class="flex-1 flex flex-col items-center justify-center px-6 py-12 lg:px-16 xl:px-24 bg-background">

            {{-- Mobile brand (shown only on small screens) --}}
            <div class="flex lg:hidden items-center gap-3 mb-10">
                <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-[22px]"
                        style="font-variation-settings:'FILL' 1;">devices</span>
                </div>
                <div>
                    <p class="font-bold text-primary text-base leading-tight">Planet Gadget Indonesia</p>
                    <p class="text-on-surface-variant text-[11px] uppercase tracking-widest">Management System</p>
                </div>
            </div>

            <div class="w-full max-w-[420px]">

                {{-- Card --}}
                <div class="login-card bg-surface-container-lowest rounded-3xl border border-outline-variant/40 p-8 md:p-10">

                    {{-- Header --}}
                    <div class="mb-8">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mb-5">
                            <span class="material-symbols-outlined text-primary text-[28px]"
                                style="font-variation-settings:'FILL' 1;">lock</span>
                        </div>
                        <h2 class="text-headline-lg font-headline-lg text-on-surface tracking-tight">Masuk ke Sistem</h2>
                        <p class="text-body-md text-on-surface-variant mt-1.5">
                            Gunakan kredensial akun staf yang diberikan administrator.
                        </p>
                    </div>

                    {{-- Session / Error Alert --}}
                    @if(session('error'))
                    <div id="alert-error"
                        class="flex items-start gap-3 px-4 py-3.5 rounded-xl bg-error-container/20 border border-error/20 mb-6 shake">
                        <span class="material-symbols-outlined text-error text-[20px] mt-0.5 shrink-0"
                            style="font-variation-settings:'FILL' 1;">error</span>
                        <p class="text-body-md text-error font-medium">{{ session('error') }}</p>
                    </div>
                    @endif

                    @if($errors->any())
                    <div id="alert-validation"
                        class="flex items-start gap-3 px-4 py-3.5 rounded-xl bg-error-container/20 border border-error/20 mb-6 shake">
                        <span class="material-symbols-outlined text-error text-[20px] mt-0.5 shrink-0"
                            style="font-variation-settings:'FILL' 1;">error</span>
                        <ul class="text-body-md text-error font-medium space-y-0.5">
                            @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session('status'))
                    <div class="flex items-start gap-3 px-4 py-3.5 rounded-xl bg-primary/5 border border-primary/20 mb-6">
                        <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0"
                            style="font-variation-settings:'FILL' 1;">check_circle</span>
                        <p class="text-body-md text-primary font-medium">{{ session('status') }}</p>
                    </div>
                    @endif

                    {{-- Form --}}
                    <form id="login-form" method="POST" action="{{ route('login.post') }}" novalidate>
                        @csrf

                        {{-- Email / Username --}}
                        <div class="mb-5">
                            <label for="email" class="block text-label-md font-semibold text-on-surface-variant uppercase tracking-wider mb-2">
                                Email / Username
                            </label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-[20px] pointer-events-none">
                                    person
                                </span>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    autocomplete="email"
                                    value="{{ old('email') }}"
                                    placeholder="nama@planetgadget.id"
                                    required
                                    class="input-field w-full bg-surface-container-low border border-outline-variant rounded-xl pl-11 pr-4 py-3 text-body-md text-on-surface placeholder:text-on-surface-variant/40
                                       @error('email') border-error bg-error-container/5 @enderror" />
                            </div>
                            @error('email')
                            <p class="mt-1.5 text-label-md text-error flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">error</span>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="mb-6">
                            <div class="flex items-center justify-between mb-2">
                                <label for="password" class="block text-label-md font-semibold text-on-surface-variant uppercase tracking-wider">
                                    Password
                                </label>
                                {{-- Lupa password: bisa diarahkan ke admin --}}
                                <span class="text-label-md text-on-surface-variant/50 italic">
                                    Hubungi administrator jika lupa
                                </span>
                            </div>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-[20px] pointer-events-none">
                                    lock
                                </span>
                                <input
                                    id="password"
                                    name="password"
                                    type="password"
                                    autocomplete="current-password"
                                    placeholder="••••••••"
                                    required
                                    class="input-field w-full bg-surface-container-low border border-outline-variant rounded-xl pl-11 pr-12 py-3 text-body-md text-on-surface placeholder:text-on-surface-variant/40
                                       @error('password') border-error bg-error-container/5 @enderror" />
                                {{-- Toggle show/hide password --}}
                                <button type="button" id="toggle-password"
                                    class="absolute right-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant/50 hover:text-on-surface-variant transition-colors p-1 rounded-lg"
                                    aria-label="Tampilkan password">
                                    <span id="toggle-icon" class="material-symbols-outlined text-[20px]">visibility</span>
                                </button>
                            </div>
                            @error('password')
                            <p class="mt-1.5 text-label-md text-error flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">error</span>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        {{-- Remember me --}}
                        <div class="flex items-center gap-3 mb-7">
                            <input
                                id="remember"
                                name="remember"
                                type="checkbox"
                                class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary/30 focus:ring-2 cursor-pointer" />
                            <label for="remember" class="text-body-md text-on-surface-variant cursor-pointer select-none">
                                Ingat saya di perangkat ini
                            </label>
                        </div>

                        {{-- Submit button --}}
                        <button
                            id="submit-btn"
                            type="submit"
                            class="btn-primary w-full bg-primary hover:bg-on-primary-fixed-variant active:bg-on-primary-fixed text-on-primary font-semibold py-3.5 px-6 rounded-xl text-body-lg flex items-center justify-center gap-2.5 transition-all duration-200 shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/30">
                            <span id="btn-icon" class="material-symbols-outlined text-[20px]"
                                style="font-variation-settings:'FILL' 1;">login</span>
                            <span id="btn-text">Masuk ke Sistem</span>
                        </button>
                    </form>
                </div>

                {{-- Footer note --}}
                <div class="mt-6 flex items-center justify-center gap-2 text-on-surface-variant/60">
                    <span class="material-symbols-outlined text-[16px]">shield</span>
                    <p class="text-label-md text-center">
                        Akses terbatas untuk staf Planet Gadget Indonesia.
                    </p>
                </div>

                <p class="text-center text-label-md text-on-surface-variant/40 mt-4">
                    &copy; {{ date('Y') }} Planet Gadget Indonesia
                </p>
            </div>
        </div>
    </div>

    {{-- =====================================================
     Scripts
====================================================== --}}
    <script>
        /* ── Toggle show/hide password ── */
        const toggleBtn = document.getElementById('toggle-password');
        const toggleIcon = document.getElementById('toggle-icon');
        const pwdInput = document.getElementById('password');

        toggleBtn.addEventListener('click', () => {
            const isHidden = pwdInput.type === 'password';
            pwdInput.type = isHidden ? 'text' : 'password';
            toggleIcon.textContent = isHidden ? 'visibility_off' : 'visibility';
        });

        /* ── Loading state on submit ── */
        const form = document.getElementById('login-form');
        const submitBtn = document.getElementById('submit-btn');
        const btnIcon = document.getElementById('btn-icon');
        const btnText = document.getElementById('btn-text');

        form.addEventListener('submit', () => {
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-80', 'cursor-not-allowed');
            btnIcon.classList.add('spinner');
            btnIcon.textContent = 'progress_activity';
            btnText.textContent = 'Memverifikasi...';
        });

        /* ── Auto-dismiss alerts after 6 s ── */
        ['alert-error', 'alert-validation'].forEach(id => {
            const el = document.getElementById(id);
            if (el) setTimeout(() => el.style.transition = 'opacity 0.5s', 5500);
            if (el) setTimeout(() => el.style.opacity = '0', 6000);
            if (el) setTimeout(() => el.remove(), 6500);
        });
    </script>

</body>

</html>