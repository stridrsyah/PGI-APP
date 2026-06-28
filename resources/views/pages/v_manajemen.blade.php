@extends('layouts.main')

@section('title', 'Manajemen - Pusat Gadget Indonesia')

@section('search-placeholder', 'Cari pengguna, akses, atau pengaturan...')

@section('content')
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
@endsection

@push('scripts')
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
@endpush