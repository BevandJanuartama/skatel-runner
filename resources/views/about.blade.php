<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKASTELBA Festival Run 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F7F7F7; }
        .text-navy { color: #384651; }
        .bg-navy { background-color: #384651; }
        .text-red-main { color: #E22631; }
        .bg-red-main { background-color: #E22631; }
        .bg-gold { background-color: #E3B35F; }
    </style>
</head>
<body class="antialiased text-[#3E3E3D]">

    <header class="bg-white py-16 md:py-24 border-b-8 border-navy">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-navy uppercase tracking-tighter leading-none mb-4">
                IKASTELBA<br>
                <span class="text-red-main italic">FESTIVAL RUN 2026</span>
            </h1>
            <p class="text-sm md:text-lg font-bold text-slate-400 uppercase tracking-[0.3em]">
                Mempererat Tali Silaturahmi Alumni Melalui Semangat Olahraga
            </p>
        </div>
    </header>

    <section id="tentang" class="py-20 max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-black text-navy leading-tight mb-8">
                    Lebih Dari Sekedar<br>
                    <span class="text-red-main">Festival Lari</span>
                </h2>
                <div class="space-y-6 text-slate-600 leading-relaxed text-sm md:text-base">
                    <p>Selamat datang di halaman registrasi Skatel Festival Run 2026, sebuah kegiatan kebersamaan yang diinisiasi oleh Ikatan Alumni SMK Telkom Banjarbaru sebagai wadah silaturahmi dan kolaborasi bagi seluruh alumni SMK Telkom Banjarbaru dari berbagai angkatan.</p>
                    <p>Melalui kegiatan ini, kami mengajak seluruh alumni untuk kembali terhubung, mengenang perjalanan masa sekolah yang penuh cerita, serta mempererat persaudaraan yang telah terjalin sejak di bangku Skatel. Skatel Festival Run 2026 bukan sekadar ajang olahraga, tetapi juga momentum kebersamaan untuk merajut kembali kenangan dan membangun semangat baru bagi masa depan komunitas alumni.</p>
                    <p class="font-bold text-navy">Dengan semangat "Connecting Memories, Imagining the Future," mari kita melangkah bersama—menghubungkan kenangan masa lalu, memperkuat jaringan alumni hari ini, dan membayangkan masa depan yang lebih besar bagi keluarga besar alumni Skatel Banjarbaru.</p>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -top-4 -left-4 w-full h-full bg-gold/10 rounded-[3rem]"></div>
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo RunFest" class="relative z-10 w-full rounded-[3rem] shadow-2xl  hover:grayscale-0 transition-all duration-700">
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-center text-3xl font-black text-navy mb-12 uppercase tracking-tight">Kata dari Ketua Alumni</h2>
            <div class="bg-[#F7F7F7] rounded-[3rem] overflow-hidden flex flex-col md:flex-row shadow-xl">
                <div class="md:w-1/3">
                    <img src="{{ asset('images/ketua.jpeg') }}" alt="Ketua IKASTELBA" class="h-full w-full object-cover">
                </div>
                <div class="md:w-2/3 p-8 md:p-16 text-sm text-slate-600 leading-relaxed italic">
                    <p class="mb-4">Assalamu'alaikum warahmatullahi wabarakatuh, <br> Salam hangat untuk seluruh alumni SMK Telkom Banjarbaru di mana pun berada.</p>
                    <p class="mb-4">Dengan penuh rasa syukur dan kebanggaan, kami dari Ikatan Alumni SMK Telkom Banjarbaru (IKASTELBA) mempersembahkan Skatel Festival Run 2026 sebagai momentum kebersamaan bagi seluruh alumni lintas angkatan. Kegiatan ini kami hadirkan bukan hanya sebagai ajang olahraga, tetapi juga sebagai ruang silaturahmi untuk mempertemukan kembali sahabat, kenangan, serta semangat kebersamaan yang pernah kita bangun di lingkungan Skatel Banjarbaru.</p>
                    <p class="mb-6">Kami mengundang seluruh alumni untuk berpartisipasi dan meramaikan kegiatan ini. Semoga Skatel Festival Run 2026 menjadi langkah awal yang semakin mempererat persaudaraan serta memperkuat peran alumni dalam memberikan kontribusi positif bagi almamater dan masyarakat.</p>
                    <div class="mt-8 not-italic">
                        <p class="font-black text-navy uppercase tracking-widest">Ketua IKASTELBA</p>
                        <p class="text-xs font-bold text-red-main uppercase">Ikatan Alumni SMK Telkom Banjarbaru</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-black text-navy mb-12 uppercase tracking-tighter">Momen Berkesan</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            
            <div class="overflow-hidden rounded-3xl h-64 md:col-span-2 group">
                <img src="{{ asset('images/dok3.JPG') }}" alt="Momen 1" 
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>

            <div class="overflow-hidden rounded-3xl h-64 group">
                <img src="{{ asset('images/dok2.JPG') }}" alt="Momen 2" 
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>

            <div class="overflow-hidden rounded-3xl h-64 group">
                <img src="{{ asset('images/dok1.JPG') }}" alt="Momen 3" 
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>

            <div class="overflow-hidden rounded-3xl h-64 group">
                <img src="{{ asset('images/dok4.JPG') }}" alt="Momen 4" 
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>

            <div class="overflow-hidden rounded-3xl h-64 group">
                <img src="{{ asset('images/dok5.JPG') }}" alt="Momen 5" 
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>

            <div class="overflow-hidden rounded-3xl h-64 md:col-span-2 group">
                <img src="{{ asset('images/dok6.JPG') }}" alt="Momen 6" 
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>

        </div>
    </section>

    <footer class="bg-navy py-20 text-center text-white">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-4">Jadilah Bagian dari Kami</h2>
            <p class="text-white/60 mb-10 font-medium uppercase tracking-widest text-xs">Daftarkan diri Anda dan jadilah bagian dari IKASTELBA Festival Run 2026!</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="{{ route('pendaftaran.registration') }}" class="bg-red-main px-10 py-4 rounded-full font-black uppercase tracking-widest text-sm shadow-xl shadow-red-500/20 hover:bg-white hover:text-red-main transition-all">
                    Daftar Sekarang
                </a>
            </div>
            <p class="mt-20 text-[10px] text-white/20 font-bold uppercase tracking-[0.5em]">
                © 2026 Skatel Runner • Alumni Banjarbaru
            </p>
        </div>
    </footer>

</body>
</html>