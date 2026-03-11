<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    // Halaman List Admin
    public function index()
    {
        $registration = Registration::latest()->get();
        return view('registrations.index', compact('registration'));
    }

    public function show($id)
    {
        // 1. Cari data peserta berdasarkan ID yang diklik
        $peserta = Registration::findOrFail($id);
        
        // 2. Kirim data ke view 'show' (bukan index)
        return view('registrations.show', compact('peserta'));
    }

    // Halaman Form Pendaftaran
    public function registration()
    {
        return view('registrations.register');
    }

    public function store(Request $request)
    {
        // 1. Proteksi Honeypot (Tetap pertahankan untuk anti-bot ringan)
        if ($request->filled('middle_name')) return abort(403);

        // 2. Validasi (HAPUS bagian 'captcha' => 'required|in:X9K2P')
        $request->validate([
            'nama'      => 'required|string|max:255',
            'email'     => 'required|email|unique:registrations,email',
            'telepon'   => 'required|numeric',
            'jk'        => 'required|in:L,P',
            'ttl'       => 'required|date',
            'bib_name'  => 'required|string|max:12',
            'emergency' => 'required|numeric',
            'gol_darah' => 'required',
            'alamat'    => 'required|string',
            // 'captcha' SUDAH DIHAPUS DARI SINI
        ], [
            'email.unique' => 'Email ini sudah terdaftar sebagai peserta!',
        ]);

        // 3. Simpan (HAPUS 'captcha' dari array except)
        $peserta = Registration::create($request->except(['middle_name']));

        return redirect()->route('pendaftaran.sukses', $peserta->id)
                        ->with('status', 'Pendaftaran Berhasil!');
    }

    public function sukses($id)
    {
        $peserta = Registration::findOrFail($id);
        return view('registrations.sukses', compact('peserta'));
    }

    public function updateStatus(Request $request, $id)
    {
        // 1. Validasi status yang masuk
        $request->validate([
            'status' => 'required|in:pending,dikonfirmasi,ditolak'
        ]);

        // 2. Cari data peserta
        $peserta = Registration::findOrFail($id);

        // 3. Update status
        $peserta->update([
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Status pendaftaran berhasil diperbarui menjadi ' . $request->status);
    }
}