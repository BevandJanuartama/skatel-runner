<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - RunFest 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F7F7F7; }
        .text-navy { color: #384651; }
        .text-red-main { color: #E22631; }
        .bg-red-main { background-color: #E22631; }
        .bg-navy { background-color: #384651; }
    </style>
</head>
<body class="antialiased flex items-center justify-center min-h-screen p-6">

    <div class="w-full max-w-[400px]">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-black text-navy uppercase tracking-tighter italic">
                RUN<span class="text-red-main">FEST</span>
            </h1>
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mt-2">
                Administrative Access
            </p>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200/60 border border-slate-100 p-8 md:p-10">
            <div class="mb-6">
                <h2 class="text-xl font-extrabold text-navy leading-tight">Verifikasi Keamanan</h2>
                <p class="text-xs font-semibold text-slate-500 mt-1">Masukkan password untuk mengakses database alumni.</p>
            </div>

            @if(session('error'))
            <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-main rounded-r-2xl">
                <p class="text-[11px] font-bold text-red-700 uppercase tracking-wide">{{ session('error') }}</p>
            </div>
            @endif

            <form action="{{ url('/admin/login') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="text-[9px] font-black text-slate-400 uppercase tracking-widest ml-4 mb-2 block">Password Panel</label>
                    <input type="password" name="password" required autofocus
                        class="w-full px-6 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl text-navy font-bold focus:border-red-main focus:bg-white outline-none transition-all placeholder:text-slate-300"
                        placeholder="••••••••">
                </div>

                <button type="submit" 
                    class="w-full bg-navy text-white font-black py-4 rounded-2xl shadow-xl shadow-navy/20 hover:bg-red-main hover:-translate-y-1 transition-all duration-300 uppercase tracking-widest text-xs">
                    Buka Akses Data
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <a href="{{ route('home') }}" class="text-[10px] font-bold text-slate-400 hover:text-navy transition-colors uppercase tracking-widest">
                    &larr; Kembali ke Beranda
                </a>
            </div>
        </div>

        <p class="text-center mt-10 text-[9px] text-slate-400 font-black uppercase tracking-[0.4em]">
            &copy; 2026 RunFest • IKASTELBA
        </p>
    </div>

</body>
</html>