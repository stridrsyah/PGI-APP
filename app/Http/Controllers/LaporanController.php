<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pembelian;
use App\Models\Pengeluaran;
use App\Models\Servis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Dashboard laporan — ringkasan semua omzet.
     * Hanya bisa diakses oleh Owner (dijaga di route).
     */
    public function index(Request $request)
    {
        $bulan = $request->integer('bulan', now()->month);
        $tahun = $request->integer('tahun', now()->year);

        // Total omzet penjualan bulan ini
        $omzetPenjualan = Penjualan::whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->where('status', 'selesai')
            ->sum('total');

        // Total pembelian (modal) bulan ini
        $totalPembelian = Pembelian::whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->where('status', 'diterima')
            ->sum('total_harga');

        // Total pengeluaran bulan ini
        $totalPengeluaran = Pengeluaran::whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->sum('nominal');

        // Pendapatan servis bulan ini
        $omzetServis = Servis::whereMonth('tanggal_masuk', $bulan)
            ->whereYear('tanggal_masuk', $tahun)
            ->whereIn('status', ['selesai', 'diambil'])
            ->sum('biaya_akhir');

        // Laba bersih
        $labaBersih = ($omzetPenjualan + $omzetServis) - $totalPembelian - $totalPengeluaran;

        // Grafik omzet 6 bulan terakhir
        $grafikOmzet = Penjualan::selectRaw('MONTH(tanggal) as bulan, YEAR(tanggal) as tahun, SUM(total) as total')
            ->where('status', 'selesai')
            ->where('tanggal', '>=', now()->subMonths(5)->startOfMonth())
            ->groupByRaw('YEAR(tanggal), MONTH(tanggal)')
            ->orderByRaw('YEAR(tanggal), MONTH(tanggal)')
            ->get();

        return view('pages.v_laporan', compact(
            'omzetPenjualan',
            'totalPembelian',
            'totalPengeluaran',
            'omzetServis',
            'labaBersih',
            'grafikOmzet',
            'bulan',
            'tahun'
        ));
    }

    /** Laporan detail penjualan. */
    public function penjualan(Request $request)
    {
        $bulan = $request->integer('bulan', now()->month);
        $tahun = $request->integer('tahun', now()->year);

        $penjualans = Penjualan::with('pelanggan', 'user')
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->latest()
            ->paginate(20);

        $totalOmzet = $penjualans->sum('total');

        return view('pages.v_laporan', compact('penjualans', 'totalOmzet', 'bulan', 'tahun'));
    }

    /** Laporan detail pembelian. */
    public function pembelian(Request $request)
    {
        $bulan = $request->integer('bulan', now()->month);
        $tahun = $request->integer('tahun', now()->year);

        $pembelians = Pembelian::with('supplier')
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->latest()
            ->paginate(20);

        $totalModal = $pembelians->sum('total_harga');

        return view('pages.v_laporan', compact('pembelians', 'totalModal', 'bulan', 'tahun'));
    }

    /** Laporan detail pengeluaran. */
    public function pengeluaran(Request $request)
    {
        $bulan = $request->integer('bulan', now()->month);
        $tahun = $request->integer('tahun', now()->year);

        $pengeluarans = Pengeluaran::with('user')
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->latest()
            ->paginate(20);

        $totalPengeluaran = $pengeluarans->sum('nominal');

        // Per-kategori
        $perKategori = Pengeluaran::selectRaw('kategori, SUM(nominal) as total')
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->groupBy('kategori')
            ->get();

        return view('pages.v_laporan', compact('pengeluarans', 'totalPengeluaran', 'perKategori', 'bulan', 'tahun'));
    }

    /** Laporan detail servis. */
    public function servis(Request $request)
    {
        $bulan = $request->integer('bulan', now()->month);
        $tahun = $request->integer('tahun', now()->year);

        $servis = Servis::with('pelanggan')
            ->whereMonth('tanggal_masuk', $bulan)
            ->whereYear('tanggal_masuk', $tahun)
            ->latest()
            ->paginate(20);

        $totalPendapatan = $servis->whereIn('status', ['selesai', 'diambil'])->sum('biaya_akhir');

        return view('pages.v_laporan', compact('servis', 'totalPendapatan', 'bulan', 'tahun'));
    }
}
