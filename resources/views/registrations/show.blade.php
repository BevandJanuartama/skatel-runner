<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - {{ $peserta->nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; color: #334155; }
        @media print { .no-print { display: none; } }
    </style>
</head>
<body class="py-10">

    <div class="max-w-3xl mx-auto px-6">
        <div class="mb-6 no-print">
            <a href="{{ route('pendaftaran.index') }}" class="text-sm font-bold text-blue-600 flex items-center gap-2">
                ← Kembali ke Daftar
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            
            <div class="p-8 border-b border-slate-100 bg-slate-50/50">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-slate-900">{{ $peserta->nama }}</h1>
                        <p class="text-sm text-slate-500 font-medium">ID Registrasi: #RF26-{{ str_pad($peserta->id, 4, '0', STR_PAD_LEFT) }}</p>
                    </div>
                    <div class="text-right">
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider 
                            {{ $peserta->status == 'dikonfirmasi' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' }}">
                            {{ $peserta->status }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="p-8">
                
                <div class="grid grid-cols-2 gap-8 mb-10">
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Email</label>
                        <p class="text-slate-800 font-semibold">{{ $peserta->email }}</p>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">WhatsApp</label>
                        <p class="text-slate-800 font-semibold">{{ $peserta->telepon }}</p>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Angkatan</label>
                        <p class="text-slate-800 font-semibold">Angkatan {{ $peserta->angkatan }}</p>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Ukuran Jersey</label>
                        <p class="text-slate-800 font-semibold">{{ $peserta->jersey ?? '-' }}</p>
                    </div>
                </div>

                <hr class="mb-8 border-slate-100">

                <div class="grid grid-cols-2 gap-8 mb-10">
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Pekerjaan</label>
                        <p class="text-slate-800 font-semibold uppercase">{{ $peserta->pekerjaan ?? '-' }}</p>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">BIB Name</label>
                        <p class="text-red-600 font-bold uppercase tracking-widest italic">{{ $peserta->bib_name }}</p>
                    </div>
                    <div class="col-span-2">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Lokasi Kerja / Instansi</label>
                        <p class="text-slate-800 font-semibold">{{ $peserta->lokasi_kerja }}</p>
                    </div>
                </div>

                <hr class="mb-8 border-slate-100">

                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Jenis Kelamin</label>
                        <p class="text-slate-800 font-semibold">{{ $peserta->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Tanggal Lahir</label>
                        <p class="text-slate-800 font-semibold">{{ $peserta->ttl->format('d F Y') }}</p>
                    </div>
                    <div class="col-span-2">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Terdaftar Pada</label>
                        <p class="text-slate-600 text-sm italic">{{ $peserta->created_at->format('d/m/Y H:i') }} WITA</p>
                    </div>
                </div>

            </div>

            <div class="bg-slate-50 p-6 flex justify-center no-print border-t border-slate-100">
                <button onclick="window.print()" class="bg-slate-800 text-white px-6 py-2 rounded-xl text-sm font-bold hover:bg-slate-900 transition">
                    Cetak Laporan
                </button>
            </div>
        </div>
    </div>

</body>
</html>