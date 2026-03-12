<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran - {{ $peserta->nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; padding: 0 !important; }
            .ticket-card { box-shadow: none !important; border: 2px solid #f1f5f9 !important; margin: 0 !important; width: 100% !important; border-radius: 0 !important; }
            .bg-slate-50 { background-color: white !important; }
        }
    </style>
</head>
<body class="bg-slate-50 py-10 md:py-16 min-h-screen">

    <div class="max-w-2xl mx-auto px-6">
        
        <div class="no-print mb-8 text-center">
            <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-800">Pendaftaran Berhasil!</h1>
            <p class="text-slate-500 text-sm">Simpan bukti ini dan kirim ke WhatsApp Admin untuk verifikasi.</p>
        </div>

        <div class="ticket-card bg-white rounded-[2.5rem] shadow-2xl overflow-hidden border-t-[12px] border-red-500 relative">
            
            <div class="hidden md:block absolute top-1/2 -left-4 w-8 h-8 bg-slate-50 rounded-full"></div>
            <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-8 bg-slate-50 rounded-full"></div>

            <div class="p-8 md:p-10">
                <div class="flex justify-between items-start mb-8 border-b border-slate-100 pb-6">
                    <div>
                        <h2 class="text-2xl font-black tracking-tighter uppercase text-slate-800">RUN<span class="text-red-500">FEST</span> 2026</h2>
                        <p class="text-slate-400 text-[9px] font-bold uppercase tracking-[0.2em]">Official Alumni Registration Pass</p>
                    </div>
                    <div class="text-right">
                        <p class="text-[9px] font-bold text-slate-400 uppercase">ID Registrasi</p>
                        <p class="font-mono font-bold text-red-600 text-sm">#RF26-{{ str_pad($peserta->id, 4, '0', STR_PAD_LEFT) }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-y-6 gap-x-6">
                    <div class="col-span-2">
                        <label class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Nama Lengkap</label>
                        <p class="text-xl font-black text-slate-800 leading-tight uppercase">{{ $peserta->nama }}</p>
                    </div>

                    <div>
                        <label class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Nama di BIB</label>
                        <p class="text-lg font-black text-red-500 italic uppercase">{{ $peserta->bib_name }}</p>
                    </div>
                    <div>
                        <label class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Angkatan</label>
                        <p class="text-lg font-bold text-slate-800 uppercase">Ke-{{ $peserta->angkatan }}</p>
                    </div>

                    <div class="col-span-2 md:col-span-1">
                        <label class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Pekerjaan</label>
                        <p class="text-sm font-bold text-slate-700">{{ $peserta->pekerjaan ?? '-' }}</p>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Size Jersey</label>
                        <p class="text-sm font-bold text-slate-700">{{ $peserta->jersey ?? '-' }}</p>
                    </div>

                    <div class="col-span-2">
                        <label class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Lokasi Kerja / Instansi</label>
                        <p class="text-sm text-slate-600 font-medium uppercase">{{ $peserta->lokasi_kerja }}</p>
                    </div>

                    <div class="h-px bg-slate-100 col-span-2 my-2"></div>

                    <div>
                        <label class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Status</label>
                        <p class="text-xs font-black uppercase text-orange-500 italic">{{ $peserta->status }}</p>
                    </div>
                    <div class="text-right">
                        <label class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Waktu Daftar</label>
                        <p class="text-[11px] font-bold text-slate-700">{{ $peserta->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>

                <div class="mt-10 pt-8 border-t-2 border-dashed border-slate-100 flex justify-center">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-slate-100 rounded-2xl mx-auto mb-2 flex items-center justify-center border-2 border-slate-50">
                            <svg class="w-12 h-12 text-slate-300" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm15 0h3v3h-3v-3zm-2 2h2v2h-2v-2zm2 2h2v2h-2v-2zm-2 2h2v2h-2v-2zm2 0h3v3h-3v-3z"/></svg>
                        </div>
                        <p class="text-[8px] font-bold text-slate-300 uppercase tracking-[0.3em]">Check-in Code</p>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 p-5 text-center border-t border-slate-100">
                <p class="text-[8px] text-slate-400 leading-relaxed uppercase tracking-widest font-bold">
                    Tunjukkan tiket ini saat pengambilan Race Pack di SMK Telkom Banjarbaru.
                </p>
            </div>
        </div>

        <div class="no-print mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center">
            <button onclick="window.print()" class="w-full sm:w-auto bg-slate-800 text-white px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-slate-900 transition flex items-center justify-center shadow-xl shadow-slate-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                Cetak / Simpan PDF
            </button>
            <a href="/" class="w-full sm:w-auto text-slate-400 hover:text-red-500 font-black text-xs uppercase tracking-widest py-4 text-center">
                Kembali ke Beranda
            </a>
        </div>

    </div>

</body>
</html>