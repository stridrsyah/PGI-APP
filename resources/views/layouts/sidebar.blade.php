<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-screen w-[280px] bg-surface shadow-sm flex flex-col py-8 z-50 border-r border-outline-variant">
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

    <nav class="flex-1 px-4 space-y-1 overflow-y-auto custom-scrollbar">
        @php
        $navItems = [
        ['route' => '/', 'icon' => 'dashboard', 'label' => 'Dashboard'],
        ['route' => '/DataHp', 'icon' => 'smartphone', 'label' => 'Data HP'],
        ['route' => '/Merek', 'icon' => 'branding_watermark', 'label' => 'Merek HP'],
        ['route' => '/Kategori', 'icon' => 'category', 'label' => 'Kategori'],
        ['route' => '/Supplier', 'icon' => 'inventory_2', 'label' => 'Supplier'],
        ['route' => '/Pelanggan', 'icon' => 'groups', 'label' => 'Pelanggan'],
        ['route' => '/Pembelian', 'icon' => 'shopping_cart', 'label' => 'Pembelian'],
        ['route' => '/Penjualan', 'icon' => 'sell', 'label' => 'Penjualan'],
        ['route' => '/Booking', 'icon' => 'event_available', 'label' => 'Booking'],
        ['route' => '/Servis', 'icon' => 'build', 'label' => 'Servis'],
        ['route' => '/Pengeluaran', 'icon' => 'payments', 'label' => 'Pengeluaran'],
        ['route' => '/Laporan', 'icon' => 'assessment', 'label' => 'Laporan'],
        ['route' => '/Manajemen', 'icon' => 'admin_panel_settings', 'label' => 'Manajemen'],
        ];
        $currentPath = request()->getPathInfo();
        @endphp

        @foreach($navItems as $item)
        @php
        $isActive = ($item['route'] === '/' && $currentPath === '/') || ($item['route'] !== '/' && str_starts_with($currentPath, $item['route']));
        @endphp
        <a href="{{ $item['route'] }}"
            class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200
                      {{ $isActive
                          ? 'text-primary font-semibold border-l-4 border-primary bg-primary-container/10'
                          : 'text-on-surface-variant hover:bg-surface-container-low' }}">
            <span class="material-symbols-outlined"
                @if($isActive) style="font-variation-settings: 'FILL' 1;" @endif>
                {{ $item['icon'] }}
            </span>
            <span class="text-body-md font-body-md">{{ $item['label'] }}</span>
        </a>
        @endforeach
    </nav>

    <div class="px-4 mt-4 pt-4 border-t border-outline-variant/30">
        <div class="flex items-center gap-3 px-2 mb-2">
            <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-primary text-[18px]">person</span>
            </div>
            <div>
                <p class="text-label-md font-semibold text-on-surface">Admin Utama</p>
                <p class="text-[10px] text-on-surface-variant uppercase tracking-wider">Super Administrator</p>
            </div>
        </div>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-error-container/10 hover:text-error transition-colors">
            <span class="material-symbols-outlined">logout</span>
            <span class="text-body-md font-body-md">Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</aside>