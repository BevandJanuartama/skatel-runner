<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKASTELBA Festival Run 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #ffffff; 
            overflow: hidden; 
        }
        .text-navy { color: #384651; }
        .text-red-main { color: #E22631; }
        .bg-red-main { background-color: #E22631; }
        .bg-navy { background-color: #384651; }
    </style>
</head>
<body class="antialiased text-[#3E3E3D]">

    <main class="h-screen w-full flex items-center justify-center p-6 md:p-12 lg:p-20">
        
        <div class="max-w-7xl w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="space-y-8">
                <div class="inline-block">
                    <span class="px-5 py-2 rounded-full border-2 border-slate-100 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">
                        Pendaftaran telah dibuka!
                    </span>
                </div>

                <div class="space-y-2">
                    <h1 class="text-6xl lg:text-8xl font-black text-navy uppercase tracking-tighter leading-[0.85]">
                        IKASTELBA<br>
                        <span class="text-red-main italic">FESTIVAL</span><br>
                        RUN 2026
                    </h1>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-[0.3em] pl-1">
                        Banjarbaru, Kalimantan Selatan
                    </p>
                </div>

                <div class="max-w-md">
                    <div class="h-1 w-20 bg-navy mb-6"></div>
                    <p class="text-sm leading-relaxed text-slate-500 font-medium">
                        IKASTELBA Festival Run 2026 adalah momen untuk kembali terhubung, mengenang masa di Skatel, dan mempererat persaudaraan antar alumni SMK Telkom Banjarbaru. Dengan semangat <span class="text-navy font-bold italic">"Connecting Memories, Imagining the Future"</span>, mari melangkah bersama.
                    </p>
                </div>

                <div class="flex items-center gap-4 pt-4">
                    <a href="{{ route('pendaftaran.registration') }}" 
                       class="bg-navy text-white px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-red-main transition-all duration-300 shadow-2xl shadow-navy/20 active:scale-95">
                        Daftar Sekarang
                    </a>
                    <a href="/about" class="px-10 py-5 rounded-2xl font-black text-xs uppercase tracking-widest text-navy border-2 border-slate-600 hover:bg-slate-50 transition-all">
                        Tentang Kami
                    </a>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute -top-10 -right-10 w-64 h-64 bg-red-main/5  blur-3xl"></div>
                
                <div class="relative z-10 bg-white rounded-[1rem] shadow-[0_50px_100px_-20px_rgba(0,0.1,0.1,0.3)] border border-slate-100">
                    
                    <div class="relative h-80 overflow-hidden rounded-t-[1.3rem] bg-slate-200">
                        <img src="{{ asset('images/jersey.jpeg') }}" 
                            alt="Racepack Preview" 
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-1000">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                    </div>

                    <div class="relative p-4 flex flex-col md:flex-row items-center gap-10">
                        
                        <div class="relative z-20 md:-ml-32 w-full md:w-auto">
                            <div class="bg-white p-8 rounded-[1.3rem] shadow-[0_35px_70px_-15px_rgba(56,70,81,0.3)] border-2 border-slate-200 min-w-[240px]">
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] leading-none mb-2">Biaya Pendaftaran</p>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-4xl font-black text-navy uppercase tracking-tighter leading-none">Rp 150.000</span>
                                </div>
                                <p class="text-[10px] font-black text-red-main mt-3 uppercase tracking-widest leading-none">Include All Benefits</p>
                            </div>
                        </div>

                        <div class="flex-grow py-6 pl-12"> {{-- Spasi diatur agar proporsional dengan card harga --}}
                            <ul class="space-y-6">
                                
                                <li class="flex items-center gap-5 group">
                                    <div class="w-6 h-6 rounded-full bg-red-main flex items-center justify-center flex-shrink-0 shadow-lg shadow-red-500/40 transition-transform group-hover:scale-110">
                                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4">
                                            <path d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[14px] font-extrabold text-navy tracking-tight leading-none">Jersey Finisher Bahan Dry-Fit</span>
                                    </div>
                                </li>

                                <li class="flex items-center gap-5 group">
                                    <div class="w-6 h-6 rounded-full bg-red-main flex items-center justify-center flex-shrink-0 shadow-lg shadow-red-500/40 transition-transform group-hover:scale-110">
                                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4">
                                            <path d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[14px] font-extrabold text-navy tracking-tight leading-none">Medali Finisher Desain Eksklusif</span>
                                    </div>
                                </li>

                                <li class="flex items-center gap-5 group">
                                    <div class="w-6 h-6 rounded-full bg-red-main flex items-center justify-center flex-shrink-0 shadow-lg shadow-red-500/40 transition-transform group-hover:scale-110">
                                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="4">
                                            <path d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[14px] font-extrabold text-navy tracking-tight leading-none">Refreshment & BIB Number</span>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>

</body>
</html>