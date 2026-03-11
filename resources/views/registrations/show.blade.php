<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peserta - {{ $peserta->nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F7F7F7; }
        .bg-navy { background-color: #384651; }
        .text-navy { color: #384651; }
        .bg-red-main { background-color: #E22631; }
        .text-red-main { color: #E22631; }
    </style>
</head>
<body class="antialiased text-[#3E3E3D] pb-20">

    <div class="bg-white border-b border-slate-200 py-6 mb-10 shadow-sm sticky top-0 z-50">
        <div class="max-w-4xl mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="{{ route('pendaftaran.index') }}" class="p-2 bg-slate-100 rounded-xl hover:bg-navy hover:text-white transition-all group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                </a>
                <h1 class="text-xl font-black text-navy uppercase tracking-tighter">Detail <span class="text-red-main italic">Peserta</span></h1>
            </div>
            <div class="flex gap-3">
                <button onclick="window.print()" class="text-[10px] font-black bg-navy text-white px-5 py-2.5 rounded-xl uppercase tracking-widest shadow-lg shadow-navy/20">Cetak Data</button>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="space-y-6">
                <div class="bg-white rounded-[2.5rem] p-8 shadow-xl shadow-slate-200/50 border border-slate-100 text-center">
                    <div class="w-24 h-24 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4 border-4 border-white shadow-inner">
                        <span class="text-3xl font-black text-navy">{{ substr($peserta->nama, 0, 1) }}</span>
                    </div>
                    <h2 class="font-black text-navy uppercase leading-tight mb-1">{{ $peserta->nama }}</h2>
                    <p class="text-[10px] font-bold text-red-main uppercase tracking-[0.2em] mb-4">#RF26-{{ str_pad($peserta->id, 4, '0', STR_PAD_LEFT) }}</p>
                    
                    <div class="flex justify-center gap-2">
                        <span class="px-3 py-1 bg-navy text-white text-[9px] font-black rounded-lg uppercase italic">{{ $peserta->bib_name }}</span>
                        <span class="px-3 py-1 bg-[#E3B35F] text-white text-[9px] font-black rounded-lg uppercase">{{ $peserta->jersey ?? '-' }}</span>
                    </div>
                </div>

                <div class="bg-navy rounded-[2rem] p-6 text-white shadow-xl shadow-navy/20">
                    <label class="text-[9px] font-bold text-white/40 uppercase tracking-[0.2em]">Terdaftar Pada</label>
                    <p class="text-sm font-bold italic">{{ $peserta->created_at->format('d F Y') }}</p>
                    <div class="h-px bg-white/10 my-4"></div>
                    <label class="text-[9px] font-bold text-white/40 uppercase tracking-[0.2em]">Pukul</label>
                    <p class="text-sm font-bold italic">{{ $peserta->created_at->format('H:i') }} WITA</p>
                </div>
            </div>

            <div class="md:col-span-2 space-y-6">
                
                <div class="bg-white rounded-[2.5rem] p-8 md:p-10 shadow-xl shadow-slate-200/50 border border-slate-100">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.3em] mb-8 flex items-center gap-3">
                        <span class="w-2 h-2 bg-red-main rounded-full"></span> Identitas Personal
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 gap-x-6">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Email</label>
                            <p class="font-bold text-navy">{{ $peserta->email }}</p>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">WhatsApp</label>
                            <p class="font-bold text-red-main tracking-wider">{{ $peserta->telepon }}</p>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Jenis Kelamin</label>
                            <p class="font-bold text-navy">{{ $peserta->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Tanggal Lahir</label>
                            <p class="font-bold text-navy">{{ \Carbon\Carbon::parse($peserta->ttl)->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2.5rem] p-8 md:p-10 shadow-xl shadow-slate-200/50 border border-slate-100">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.3em] mb-8 flex items-center gap-3">
                        <span class="w-2 h-2 bg-[#E3B35F] rounded-full"></span> Medis & Atribut
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 gap-x-6">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Golongan Darah</label>
                            <p class="inline-flex items-center justify-center w-10 h-10 bg-red-50 text-red-main font-black rounded-xl border border-red-100">{{ $peserta->gol_darah }}</p>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Kontak Darurat</label>
                            <p class="font-bold text-navy">{{ $peserta->emergency }}</p>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Komunitas</label>
                            <p class="font-bold text-navy italic uppercase">{{ $peserta->komunitas ?? '-' }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2.5rem] p-8 md:p-10 shadow-xl shadow-slate-200/50 border border-slate-100">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                        <span class="w-2 h-2 bg-navy rounded-full"></span> Alamat Pengiriman
                    </h3>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                        <p class="text-sm font-semibold text-navy leading-relaxed uppercase">{{ $peserta->alamat }}</p>
                    </div>
                </div>

            </div>
        </div>

        <footer class="mt-12 text-center">
            <p class="text-[9px] text-slate-400 font-bold uppercase tracking-[0.4em]">RunFest 2026 Admin Management System</p>
        </footer>
    </div>

</body>
</html>