<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    // Halaman List Admin
    public function index()
    {
        $registration = Registration::latest()->get();
        return view('registrations.index', compact('registration'));
    }

    // Detail Peserta
    public function show($id)
    {
        $peserta = Registration::findOrFail($id);
        return view('registrations.show', compact('peserta'));
    }

    // Halaman Form Pendaftaran
    public function registration()
    {
        return view('registrations.register');
    }

    // Proses Simpan Data
    public function store(Request $request)
    {
        // 1. Proteksi Honeypot
        if ($request->filled('middle_name')) return abort(403);

        // 2. Validasi Data sesuai Migration terbaru
        $request->validate([
            'nama'         => 'required|string|max:255',
            'email'        => 'required|email|unique:registrations,email',
            'telepon'      => 'required|numeric',
            'jk'           => 'required|in:L,P',
            'ttl'          => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'bib_name'     => 'required|string|max:12',
            'angkatan'     => 'required|integer|min:1',
            'pekerjaan'    => 'nullable|string|max:255',
            'lokasi_kerja' => 'required|string',
            'jersey'       => 'nullable|string',
        ], [
            'email.unique' => 'Email ini sudah terdaftar sebagai peserta!',
            'telepon.numeric' => 'Nomor telepon harus berupa angka.',
        ]);

        // 3. Eksekusi Simpan
        $peserta = Registration::create($request->except(['middle_name']));

        return redirect()->route('pendaftaran.sukses', $peserta->id)
                        ->with('status', 'Pendaftaran Berhasil!');
    }

    // Halaman Ringkasan/Tiket
    public function sukses($id)
    {
        $peserta = Registration::findOrFail($id);
        return view('registrations.sukses', compact('peserta'));
    }

    // Update Status oleh Admin
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,dikonfirmasi,ditolak'
        ]);

        $peserta = Registration::findOrFail($id);
        $peserta->update([
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Status berhasil diperbarui!');
    }
}