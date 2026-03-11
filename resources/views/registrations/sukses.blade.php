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
        /* CSS Khusus saat dicetak/Save PDF */
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; padding: 0 !important; }
            .ticket-card { box-shadow: none !important; border: 2px solid #f1f5f9 !important; margin: 0 !important; width: 100% !important; }
            .bg-slate-50 { background-color: white !important; }
        }
    </style>
</head>
<body class="bg-slate-50 py-10 md:py-20 min-h-screen">

    <div class="max-w-2xl mx-auto px-6">
        
        <div class="no-print mb-8 text-center">
            <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-800">Pendaftaran Berhasil!</h1>
            <p class="text-slate-500">Simpan atau cetak bukti ini untuk pengambilan race pack.</p>
        </div>

        <div class="ticket-card bg-white rounded-3xl shadow-2xl overflow-hidden border-t-[12px] border-red-500 relative">
            
            <div class="hidden md:block absolute top-1/2 -left-4 w-8 h-8 bg-slate-50 rounded-full shadow-inner"></div>
            <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-8 bg-slate-50 rounded-full shadow-inner"></div>

            <div class="p-8 md:p-12">
                <div class="flex justify-between items-start mb-10 border-b border-slate-100 pb-6">
                    <div>
                        <h2 class="text-2xl font-black tracking-tighter uppercase">RUN<span class="text-red-500">FEST</span> 2026</h2>
                        <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.2em]">Official Registration Pass</p>
                    </div>
                    <div class="text-right">
                        <p class="text-[10px] font-bold text-slate-400 uppercase">ID Registrasi</p>
                        <p class="font-mono font-bold text-red-600">#RF26-{{ str_pad($peserta->id, 4, '0', STR_PAD_LEFT) }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-y-8 gap-x-6">
                    <div class="col-span-2 md:col-span-1">
                        <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Nama Lengkap</label>
                        <p class="text-lg font-extrabold text-slate-800 leading-tight">{{ $peserta->nama }}</p>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Nama di BIB (Nomor Dada)</label>
                        <p class="text-lg font-black text-red-500 italic uppercase">{{ $peserta->bib_name }}</p>
                    </div>
                    
                    <div>
                        <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Kategori/Jersey</label>
                        <p class="font-bold text-slate-700">{{ $peserta->jersey ?? 'Tanpa Jersey' }}</p>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Golongan Darah</label>
                        <p class="font-bold text-slate-700">{{ $peserta->gol_darah }}</p>
                    </div>

                    <div>
                        <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">WhatsApp</label>
                        <p class="text-sm text-slate-600">{{ $peserta->telepon }}</p>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Kontak Darurat</label>
                        <p class="text-sm text-slate-600">{{ $peserta->emergency }}</p>
                    </div>

                    <div class="col-span-2">
                        <label class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Alamat</label>
                        <p class="text-sm text-slate-600 leading-relaxed">{{ $peserta->alamat }}</p>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t-2 border-dashed border-slate-100 flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="text-center md:text-left">
                        <p class="text-[10px] text-slate-400 uppercase font-bold mb-1">Terdaftar Pada</p>
                        <p class="text-sm font-semibold text-slate-700">{{ $peserta->created_at->format('d F Y - H:i') }} WITA</p>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 p-4 text-center border-t border-slate-100">
                <p class="text-[9px] text-slate-400 leading-relaxed uppercase tracking-widest">
                    Harap bawa kartu identitas (KTP/Kartu Pelajar) saat pengambilan race pack di SMK Telkom Banjarbaru.
                </p>
            </div>
        </div>

        <div class="no-print mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center">
            <button onclick="window.print()" class="w-full sm:w-auto bg-slate-800 text-white px-8 py-3 rounded-2xl font-bold hover:bg-slate-900 transition flex items-center justify-center shadow-lg shadow-slate-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Download PDF / Cetak
            </button>
            <a href="/" class="w-full sm:w-auto text-slate-500 hover:text-red-500 font-bold py-3 text-center">
                Kembali ke Beranda
            </a>
        </div>

    </div>

</body>
</html>