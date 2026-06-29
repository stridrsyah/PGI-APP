<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-screen w-[280px] bg-surface shadow-sm flex flex-col py-8 z-50 border-r border-outline-variant">
    {{-- Logo --}}
    <div class="px-gutter mb-8">
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

    {{-- Nav Items --}}
    <nav class="flex-1 px-4 space-y-1 overflow-y-auto custom-scrollbar">

        {{-- MENU BERSAMA (owner + admin) --}}
        <p class="px-4 mb-2 text-[10px] font-bold text-on-surface-variant/50 uppercase tracking-widest">Menu Utama</p>

        @php
        $menus = [
        ['route' => 'dashboard', 'icon' => 'dashboard', 'label' => 'Dashboard'],
        ['route' => 'datahp.index', 'icon' => 'smartphone', 'label' => 'Data HP'],
        ['route' => 'merek.index', 'icon' => 'branding_watermark', 'label' => 'Merek HP'],
        ['route' => 'supplier.index', 'icon' => 'inventory_2', 'label' => 'Supplier'],
        ['route' => 'pelanggan.index', 'icon' => 'groups', 'label' => 'Pelanggan'],
        ['route' => 'pembelian.index', 'icon' => 'shopping_cart', 'label' => 'Pembelian'],
        ['route' => 'penjualan.index', 'icon' => 'sell', 'label' => 'Penjualan'],
        ['route' => 'booking.index', 'icon' => 'event_available', 'label' => 'Booking'],
        ['route' => 'servis.index', 'icon' => 'build', 'label' => 'Servis'],
        ['route' => 'pengeluaran.index','icon' => 'payments', 'label' => 'Pengeluaran'],
        ];
        @endphp

        @foreach($menus as $item)
        @php $isActive = request()->routeIs($item['route']); @endphp
        <a href="{{ route($item['route']) }}"
            class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200
                   {{ $isActive
                       ? 'text-primary font-semibold border-l-4 border-primary bg-primary-container/10'
                       : 'text-on-surface-variant hover:bg-surface-container-low' }}">
            <span class="material-symbols-outlined"
                @if($isActive) style="font-variation-settings: 'FILL' 1;" @endif>
                {{ $item['icon'] }}
            </span>
            <span class="text-body-md">{{ $item['label'] }}</span>
        </a>
        @endforeach

        {{-- MENU EKSKLUSIF OWNER --}}
        @if(auth()->user()->isOwner())
        <div class="pt-4">
            <p class="px-4 mb-2 text-[10px] font-bold text-on-surface-variant/50 uppercase tracking-widest">Owner</p>

            @php
            $ownerMenus = [
            ['route' => 'laporan.index', 'icon' => 'assessment', 'label' => 'Laporan Omzet'],
            ['route' => 'manajemen.pengguna.index', 'icon' => 'admin_panel_settings', 'label' => 'Manajemen'],
            ];
            @endphp

            @foreach($ownerMenus as $item)
            @php $isActive = request()->routeIs($item['route']); @endphp
            <a href="{{ route($item['route']) }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200
                       {{ $isActive
                           ? 'text-primary font-semibold border-l-4 border-primary bg-primary-container/10'
                           : 'text-on-surface-variant hover:bg-surface-container-low' }}">
                <span class="material-symbols-outlined"
                    @if($isActive) style="font-variation-settings: 'FILL' 1;" @endif>
                    {{ $item['icon'] }}
                </span>
                <span class="text-body-md">{{ $item['label'] }}</span>
            </a>
            @endforeach
        </div>
        @endif

    </nav>

    {{-- User Info & Logout --}}
    <div class="px-4 mt-4 pt-4 border-t border-outline-variant/30">
        <div class="flex items-center gap-3 px-2 mb-3">
            <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-primary text-[18px]">person</span>
            </div>
            <div>
                <p class="text-label-md font-semibold text-on-surface">{{ auth()->user()->name }}</p>
                <p class="text-[10px] text-on-surface-variant uppercase tracking-wider">
                    {{ auth()->user()->isOwner() ? 'Owner' : 'Admin' }}
                </p>
            </div>
        </div>

        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-error-container/10 hover:text-error transition-colors">
            <span class="material-symbols-outlined">logout</span>
            <span class="text-body-md">Logout</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</aside>