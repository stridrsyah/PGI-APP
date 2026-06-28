@extends('layouts.main')

@section('title', 'Servis HP - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari servis, teknisi, atau pelanggan...')

@section('content')
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <h2 class="text-headline-lg font-headline-lg text-on-surface mb-1">Manajemen Servis</h2>
        <p class="text-body-md text-on-surface-variant">Pantau dan kelola antrean perbaikan perangkat pelanggan.</p>
    </div>
    <button class="flex items-center gap-2 bg-primary text-on-primary px-6 py-3 rounded-xl font-semibold shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all">
        <span class="material-symbols-outlined">add_circle</span>
        Tambah Antrean Servis
    </button>
</div>
<!-- Statistics Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-8">
    <div class="glass-card p-padding-card rounded-2xl border border-outline-variant flex flex-col gap-3">
        <div class="flex items-center justify-between">
            <div class="p-3 bg-primary/10 text-primary rounded-xl">
                <span class="material-symbols-outlined">home_repair_service</span>
            </div>
            <span class="text-label-md text-green-600 font-bold bg-green-50 px-2 py-1 rounded-lg">+12%</span>
        </div>
        <div>
            <p class="text-label-md text-on-surface-variant">Total Unit Servis</p>
            <p class="text-headline-lg font-bold">1,284</p>
        </div>
    </div>
    <div class="glass-card p-padding-card rounded-2xl border border-outline-variant flex flex-col gap-3">
        <div class="flex items-center justify-between">
            <div class="p-3 bg-amber-100 text-amber-700 rounded-xl">
                <span class="material-symbols-outlined">engineering</span>
            </div>
            <span class="text-label-md text-amber-600 font-bold bg-amber-50 px-2 py-1 rounded-lg">Aktif</span>
        </div>
        <div>
            <p class="text-label-md text-on-surface-variant">Sedang Dikerjakan</p>
            <p class="text-headline-lg font-bold text-amber-700">24</p>
        </div>
    </div>
    <div class="glass-card p-padding-card rounded-2xl border border-outline-variant flex flex-col gap-3">
        <div class="flex items-center justify-between">
            <div class="p-3 bg-secondary-container text-primary rounded-xl">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">hourglass_top</span>
            </div>
            <span class="text-label-md text-primary font-bold bg-primary/5 px-2 py-1 rounded-lg">Urgent</span>
        </div>
        <div>
            <p class="text-label-md text-on-surface-variant">Menunggu Suku Cadang</p>
            <p class="text-headline-lg font-bold text-primary">8</p>
        </div>
    </div>
    <div class="glass-card p-padding-card rounded-2xl border border-outline-variant flex flex-col gap-3">
        <div class="flex items-center justify-between">
            <div class="p-3 bg-emerald-100 text-emerald-700 rounded-xl">
                <span class="material-symbols-outlined">task_alt</span>
            </div>
            <span class="text-label-md text-emerald-600 font-bold bg-emerald-50 px-2 py-1 rounded-lg">Hari Ini</span>
        </div>
        <div>
            <p class="text-label-md text-on-surface-variant">Selesai Hari Ini</p>
            <p class="text-headline-lg font-bold text-emerald-700">15</p>
        </div>
    </div>
</div>
<!-- Filters & Table Section -->
<div class="glass-card rounded-2xl border border-outline-variant overflow-hidden">
    <div class="p-6 border-b border-outline-variant flex flex-wrap items-center justify-between gap-4">
        <div class="flex flex-wrap items-center gap-3">
            <div class="flex items-center gap-2 px-3 py-2 bg-surface-container-low rounded-lg border border-outline-variant">
                <span class="text-label-md text-on-surface-variant font-medium">Status:</span>
                <select class="bg-transparent border-none text-label-md font-bold focus:ring-0 cursor-pointer">
                    <option>Semua Status</option>
                    <option>Antre</option>
                    <option>Proses</option>
                    <option>Menunggu Part</option>
                    <option>Selesai</option>
                </select>
            </div>
            <div class="flex items-center gap-2 px-3 py-2 bg-surface-container-low rounded-lg border border-outline-variant">
                <span class="text-label-md text-on-surface-variant font-medium">Teknisi:</span>
                <select class="bg-transparent border-none text-label-md font-bold focus:ring-0 cursor-pointer">
                    <option>Semua Teknisi</option>
                    <option>Budi Santoso</option>
                    <option>Ani Wijaya</option>
                    <option>Rizky Pratama</option>
                </select>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <button class="p-2 hover:bg-surface-container rounded-lg border border-outline-variant">
                <span class="material-symbols-outlined">file_download</span>
            </button>
            <button class="p-2 hover:bg-surface-container rounded-lg border border-outline-variant">
                <span class="material-symbols-outlined">filter_list</span>
            </button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-surface-container-low">
                <tr>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">ID Servis</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Pelanggan</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Perangkat</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Keluhan</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Teknisi</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-wider text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/30">
                <!-- Row 1: Proses -->
                <tr class="hover:bg-surface-container-lowest transition-colors group">
                    <td class="px-6 py-4 text-body-md font-bold text-primary">#SRV-2023001</td>
                    <td class="px-6 py-4">
                        <p class="text-body-md font-semibold">Ahmad Subarjo</p>
                        <p class="text-xs text-on-surface-variant">0812-3456-XXXX</p>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-body-md">iPhone 14 Pro Max</p>
                        <p class="text-xs text-on-surface-variant">Space Black, 256GB</p>
                    </td>
                    <td class="px-6 py-4 max-w-xs truncate text-body-md">Layar bergaris hijau (LCD Repair)</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-surface-container-high overflow-hidden">
                                <img class="w-full h-full object-cover" data-alt="Close-up portrait of a skilled male technician in a blue uniform, focused expression, studio lighting, professional clean background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3rFkTCDdDPZRvnitBX--yXwarZyD0L7VGz3mbVrB138ur57_IQ8m_GQgNnQ9YF6WNEOeWmJBOwRsVzML9Sh5HsEPPwBEUMr3D10CmGPTbQcUaZFFgVsoY1q5SUAq-sAhTRPOvtsqU_0uAl4Jm5RpyQDpBcUBh__OOVfG2ijscLrq1Ks_-zxPWHlgJc7LDBVEEYLNIGESr1FDgdVHpY1vV9GaSXA8YyEB3RNa6j9vUxZWUY1QVdakIl8ANcVNtNyImHvHna9uBxDk" />
                            </div>
                            <span class="text-body-md">Budi Santoso</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs font-bold rounded-full bg-amber-100 text-amber-700 uppercase">Proses</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="p-2 text-primary hover:bg-primary/5 rounded-lg"><span class="material-symbols-outlined">visibility</span></button>
                            <button class="p-2 text-secondary hover:bg-secondary/5 rounded-lg"><span class="material-symbols-outlined">edit</span></button>
                        </div>
                    </td>
                </tr>
                <!-- Row 2: Antre -->
                <tr class="hover:bg-surface-container-lowest transition-colors group">
                    <td class="px-6 py-4 text-body-md font-bold text-primary">#SRV-2023002</td>
                    <td class="px-6 py-4">
                        <p class="text-body-md font-semibold">Siska Amelia</p>
                        <p class="text-xs text-on-surface-variant">0857-9876-XXXX</p>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-body-md">Samsung S23 Ultra</p>
                        <p class="text-xs text-on-surface-variant">Phantom Black</p>
                    </td>
                    <td class="px-6 py-4 max-w-xs truncate text-body-md">Mati total setelah kena air</td>
                    <td class="px-6 py-4 text-on-surface-variant italic text-xs">Belum ditentukan</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs font-bold rounded-full bg-surface-container-highest text-on-surface-variant uppercase">Antre</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="p-2 text-primary hover:bg-primary/5 rounded-lg"><span class="material-symbols-outlined">visibility</span></button>
                            <button class="p-2 text-secondary hover:bg-secondary/5 rounded-lg"><span class="material-symbols-outlined">edit</span></button>
                        </div>
                    </td>
                </tr>
                <!-- Row 3: Menunggu Part -->
                <tr class="hover:bg-surface-container-lowest transition-colors group">
                    <td class="px-6 py-4 text-body-md font-bold text-primary">#SRV-2023003</td>
                    <td class="px-6 py-4">
                        <p class="text-body-md font-semibold">Dewi Lestari</p>
                        <p class="text-xs text-on-surface-variant">0819-2233-XXXX</p>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-body-md">MacBook Pro M2 14"</p>
                        <p class="text-xs text-on-surface-variant">Space Gray</p>
                    </td>
                    <td class="px-6 py-4 max-w-xs truncate text-body-md">Keyboard macet (Butuh replacement)</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-surface-container-high overflow-hidden">
                                <img class="w-full h-full object-cover" data-alt="Professional portrait of a female electronics technician, neat appearance, neutral grey background, high-end commercial aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCHIufn7cIauqB8NAX1-2HyUPRAuW6OGworGN4jsZvNGsA04WNmw2qaDyM6eIyXEJIirPBub9ypdYr_XL9ViOp4YKTuIM8L3_5GxGtN-Z7ZL2blOyqONFrk02n19XEa33J2TcVrX6LurX2yT8UV8lYGKFKAlAoYid_JmFVNgDabTxT3Acc7XAYxtTxyRQJn8O2OOUDQ4Kr5VCa_nF17HPS5J733l7F5SDcTyI2EGvQJZKRFwoWcGAqVA_iYmvngxpN0TPiN4XQP2I" />
                            </div>
                            <span class="text-body-md">Ani Wijaya</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs font-bold rounded-full bg-secondary-container text-primary uppercase">Menunggu Part</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="p-2 text-primary hover:bg-primary/5 rounded-lg"><span class="material-symbols-outlined">visibility</span></button>
                            <button class="p-2 text-secondary hover:bg-secondary/5 rounded-lg"><span class="material-symbols-outlined">edit</span></button>
                        </div>
                    </td>
                </tr>
                <!-- Row 4: Selesai -->
                <tr class="hover:bg-surface-container-lowest transition-colors group">
                    <td class="px-6 py-4 text-body-md font-bold text-primary">#SRV-2023004</td>
                    <td class="px-6 py-4">
                        <p class="text-body-md font-semibold">Hadi Kurniawan</p>
                        <p class="text-xs text-on-surface-variant">0877-4455-XXXX</p>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-body-md">Asus ROG Phone 7</p>
                        <p class="text-xs text-on-surface-variant">Storm White</p>
                    </td>
                    <td class="px-6 py-4 max-w-xs truncate text-body-md">Baterai drop (Ganti Baterai)</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-surface-container-high overflow-hidden">
                                <img class="w-full h-full object-cover" data-alt="Young energetic male IT professional, friendly smile, tech-focused environment, sharp focus, professional lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDx9IzbrBuEVZRatNzaYTUT1iiIBaBbjHYqE9HDymbajyETqdYNIYKMyGZXwzSacMa4dImgUwGhrsSjz0YaRTWthEDQd773hbbulruiOA6VZiR3Uw15J5j9Xp2NRHH07upytrrf-6-NhpnL6smnQE9174_cJNis7HVZzKiKoKvjOrL_KZClnr_LllDLGPIJ-1xaAH8jGSMF9bMjoM_djHFzEBLeklySuu9F_dQnIAQ-ObbC0K9XxDKdVSbeNNhnzeh1wkFzQE-NgFI" />
                            </div>
                            <span class="text-body-md">Rizky Pratama</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs font-bold rounded-full bg-emerald-100 text-emerald-700 uppercase">Selesai</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="p-2 text-primary hover:bg-primary/5 rounded-lg"><span class="material-symbols-outlined">visibility</span></button>
                            <button class="p-2 text-secondary hover:bg-secondary/5 rounded-lg"><span class="material-symbols-outlined">edit</span></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Pagination -->
    <div class="p-6 bg-surface-container-low flex items-center justify-between">
        <p class="text-body-md text-on-surface-variant">Menampilkan 1-10 dari 48 entri</p>
        <div class="flex items-center gap-2">
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container text-on-surface-variant transition-colors disabled:opacity-50" disabled="">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-on-primary font-bold shadow-md">1</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-surface-container-high font-medium">2</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-surface-container-high font-medium">3</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container text-on-surface-variant transition-colors">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
        </div>
    </div>
</div>
<!-- Recent Activity Bento Style -->
<div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-gutter">
    <div class="lg:col-span-2 glass-card rounded-2xl p-padding-card">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-headline-md font-bold">Log Teknisi Terkini</h3>
            <a class="text-primary font-bold text-label-md flex items-center gap-1" href="#">Lihat Semua <span class="material-symbols-outlined text-sm">open_in_new</span></a>
        </div>
        <div class="space-y-4">
            <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-surface-container-low transition-all">
                <div class="w-2 h-10 bg-primary rounded-full"></div>
                <div class="flex-1">
                    <p class="text-body-md"><span class="font-bold">Budi Santoso</span> memperbarui status <span class="font-bold text-primary">#SRV-2023001</span> ke "Proses Pembongkaran"</p>
                    <p class="text-xs text-on-surface-variant mt-1">15 menit yang lalu • iPhone 14 Pro Max</p>
                </div>
            </div>
            <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-surface-container-low transition-all">
                <div class="w-2 h-10 bg-emerald-500 rounded-full"></div>
                <div class="flex-1">
                    <p class="text-body-md"><span class="font-bold">Rizky Pratama</span> menyelesaikan servis <span class="font-bold text-emerald-600">#SRV-2023004</span></p>
                    <p class="text-xs text-on-surface-variant mt-1">1 jam yang lalu • Asus ROG Phone 7</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary text-on-primary rounded-2xl p-padding-card flex flex-col justify-between relative overflow-hidden">
        <!-- Decorative background elements -->
        <div class="absolute -top-12 -right-12 w-32 h-32 bg-on-primary/10 rounded-full"></div>
        <div class="absolute bottom-1/4 -left-8 w-24 h-24 bg-on-primary/5 rounded-full blur-xl"></div>
        <div>
            <h3 class="text-headline-md font-bold mb-2">Ingat Service Level!</h3>
            <p class="text-body-md text-on-primary/80">Rata-rata waktu perbaikan perangkat minggu ini meningkat 15%. Pastikan stok suku cadang LCD selalu tersedia.</p>
        </div>
        <div class="mt-8 flex items-center justify-between">
            <div>
                <p class="text-xs uppercase tracking-widest text-on-primary/60 font-bold mb-1">Target Mingguan</p>
                <p class="text-display-lg font-bold">84%</p>
            </div>
            <div class="w-16 h-16 rounded-full border-4 border-on-primary/20 flex items-center justify-center">
                <span class="material-symbols-outlined text-headline-lg">trending_up</span>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Micro-interactions and Tab Logic
    document.addEventListener('DOMContentLoaded', () => {
        console.log('Servis management system initialized');

        // Example active state toggle simulation
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            row.addEventListener('click', () => {
                // Logic to open detail view could go here
                row.classList.add('bg-primary/5');
                setTimeout(() => row.classList.remove('bg-primary/5'), 300);
            });
        });
    });
</script>
@endpush