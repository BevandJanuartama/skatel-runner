<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RunFest 2026 - Challenge Your Limit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-gradient-custom {
            background: linear-gradient(135deg, #EF4444 0%, #F97316 100%);
        }
        .text-gradient {
            background: linear-gradient(135deg, #EF4444 0%, #F97316 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="text-2xl font-extrabold tracking-tighter">
                RUN<span class="text-red-500">FEST</span>
            </div>
            <div class="hidden md:flex space-x-8 font-medium">
                <a href="#about" class="hover:text-red-500 transition">Tentang</a>
                <a href="#categories" class="hover:text-red-500 transition">Kategori</a>
                <a href="#schedule" class="hover:text-red-500 transition">Jadwal</a>
            </div>
            <a href="/register" class="bg-gradient-custom text-white px-6 py-2.5 rounded-full font-bold hover:shadow-lg hover:scale-105 transition transform duration-200">
                Daftar Sekarang
            </a>
        </div>
    </nav>

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 z-10 text-center lg:text-left">
                <span class="inline-block py-1 px-4 rounded-full bg-red-50 text-red-600 font-bold text-sm mb-6 border border-red-100">
                    Satu Langkah, Beribu Makna 🏃‍♂️
                </span>
                <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight mb-6">
                    Lari Untuk <br>
                    <span class="text-gradient">Masa Depan</span>
                </h1>
                <p class="text-lg text-slate-600 mb-10 max-w-lg mx-auto lg:mx-0">
                    Bergabunglah bersama ribuan pelari lainnya di event lari terbesar tahun ini. Rasakan sensasi rute terbaik dengan pemandangan kota yang memukau.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="/register" class="bg-gradient-custom text-white px-8 py-4 rounded-2xl font-bold text-lg shadow-xl shadow-red-200 hover:shadow-red-300 transition-all flex items-center justify-center">
                        Ikut Pendaftaran
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </a>
                    <a href="#categories" class="px-8 py-4 rounded-2xl font-bold text-lg border-2 border-slate-100 hover:bg-slate-50 transition text-center">
                        Lihat Rute
                    </a>
                </div>
            </div>
            
            <div class="lg:w-1/2 mt-16 lg:mt-0 relative">
                <div class="w-72 h-72 md:w-96 md:h-96 bg-red-500/10 rounded-full blur-3xl absolute -top-10 -right-10"></div>
                <div class="w-64 h-64 bg-orange-500/10 rounded-full blur-3xl absolute -bottom-10 -left-10"></div>
                <img src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5?auto=format&fit=crop&q=80&w=800" alt="Runner" class="relative z-10 rounded-3xl shadow-2xl rotate-2 hover:rotate-0 transition duration-500">
            </div>
        </div>
    </section>


</body>
</html>