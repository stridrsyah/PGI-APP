<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('pelanggan')->latest()->paginate(10);
        return view('pages.v_booking', compact('bookings'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::orderBy('nama')->get();
        return view('pages.v_booking', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pelanggan_id'    => 'required|exists:pelanggans,id',
            'model_perangkat' => 'required|string|max:150',
            'tipe_layanan'    => 'required|string|max:100',
            'jadwal'          => 'required|date',
            'keluhan'         => 'nullable|string',
            'catatan'         => 'nullable|string',
        ]);
        $data['status'] = 'menunggu';

        Booking::create($data);
        return redirect()->route('booking.index')->with('success', 'Booking berhasil dibuat.');
    }

    public function show(Booking $booking)
    {
        $booking->load('pelanggan');
        return view('pages.v_booking', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $pelanggans = Pelanggan::orderBy('nama')->get();
        return view('pages.v_booking', compact('booking', 'pelanggans'));
    }

    public function update(Request $request, Booking $booking)
    {
        $data = $request->validate([
            'pelanggan_id'    => 'required|exists:pelanggans,id',
            'model_perangkat' => 'required|string|max:150',
            'tipe_layanan'    => 'required|string|max:100',
            'jadwal'          => 'required|date',
            'keluhan'         => 'nullable|string',
            'catatan'         => 'nullable|string',
        ]);
        $booking->update($data);
        return redirect()->route('booking.index')->with('success', 'Booking berhasil diperbarui.');
    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:menunggu,dikonfirmasi,selesai,dibatalkan',
        ]);
        $booking->update(['status' => $request->status]);
        return back()->with('success', 'Status booking diperbarui.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index')->with('success', 'Booking berhasil dihapus.');
    }
}
