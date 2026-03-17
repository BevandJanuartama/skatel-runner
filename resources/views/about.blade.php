<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - IKASTELBA Festival Run 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .header-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url("{{ asset('images/landing-bg.webp') }}");
            background-size: cover;
            background-position: center;
        }
        .footer-shape {
            /* Responsif clip-path */
            clip-path: polygon(0 5%, 100% 0, 100% 100%, 0% 100%);
        }
        @media (min-width: 768px) {
            .footer-shape {
                clip-path: polygon(0 15%, 100% 0, 100% 100%, 0% 100%);
            }
        }
    </style>
</head>
<body class="bg-white font-sans antialiased text-gray-900">

    <header class="header-bg h-[300px] md:h-[400px] flex flex-col justify-center items-center text-center text-white px-6">
        <h1 class="text-3xl md:text-6xl font-black uppercase tracking-tighter leading-tight">
            IKASTELBA FESTIVAL<br>RUN 2026
        </h1>
        <p class="mt-4 text-xs md:text-lg font-medium text-gray-200">
            Ikatan Alumni SMK Telkom Banjarbaru - 25 April 2026
        </p>
    </header>

    <section class="relative py-16 md:py-32 px-6 md:px-24 overflow-hidden min-h-screen flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/landing-bg.webp') }}" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/90 md:bg-white/80"></div> 
        </div>

        <div class="hidden md:block absolute inset-0 z-10 h-[80%] mt-28">
            <img src="{{ asset('images/traps.webp') }}" 
                alt="Dekorasi Traps" 
                class="w-full h-full object-cover object-center opacity-100">
        </div>

        <div class="relative z-20 max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row gap-8 md:gap-16 items-center">
                
                <div class="w-full md:w-[55%]">
                    <div class="relative">
                        <img src="{{ asset('images/landing-bg.webp') }}" 
                            alt="Skatel Festival Run" 
                            class="rounded-3xl md:rounded-[2.5rem] shadow-2xl w-full h-auto aspect-video object-cover border-4 md:border-8 border-white">
                    </div>
                </div>
                
                <div class="w-full md:w-[45%] text-center md:text-left">
                    <h2 class="text-5xl md:text-[clamp(45px,6vw,85px)] font-black text-[#1a1a1a] leading-[0.9] tracking-tighter uppercase">
                        Lebih Dari <br class="hidden md:block"> 
                        Sekedar <br class="hidden md:block"> 
                        <span class="text-[#D32F2F]">Festival <br class="hidden md:block"> Lari</span>
                    </h2>
                </div>
            </div>

            <div class="mt-12 md:mt-16 text-gray-800 space-y-6 text-base md:text-lg leading-relaxed font-medium">
                <p>
                    Selamat datang di halaman registrasi Skatel Festival Run 2026, sebuah kegiatan kebersamaan yang diinisiasi oleh Ikatan Alumni SMK Telkom Banjarbaru sebagai wadah silaturahmi dan kolaborasi bagi seluruh alumni SMK Telkom Banjarbaru dari berbagai angkatan.
                </p>
                <p>
                    Skatel Festival Run 2026 bukan sekadar ajang olahraga, tetapi juga momentum kebersamaan untuk merajut kembali kenangan dan membangun semangat baru bagi masa depan komunitas alumni.
                </p>
                <p>
                    Dengan semangat <strong>"Connecting Memories, Inspiring the Future,"</strong> mari kita melangkah bersama—menghubungkan kenangan masa lalu, memperkuat jaringan alumni hari ini.
                </p>
                <p class="font-bold pt-4 text-[#D32F2F] text-lg md:text-xl">
                    Daftarkan diri Anda sekarang dan meriahkan Skatel Festival Run 2026 bersama alumni Skatel Banjarbaru dari berbagai generasi!
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 md:px-24 bg-[#FFF5F5]">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12">
            
            <div class="w-full md:w-3/5 text-gray-800 order-2 md:order-1">
                <h2 class="text-3xl md:text-6xl font-black text-[#D32F2F] mb-8 md:mb-10 tracking-tight leading-tight">
                    Kata dari Ketua IKASTELBA
                </h2>
                
                <div class="space-y-4 md:space-y-6 text-lg md:text-xl leading-relaxed font-medium text-justify md:text-left">
                    <p class="font-bold">Assalamu’alaikum warahmatullahi wabarakatuh,</p>
                    <p>
                        Dengan penuh rasa syukur dan kebanggaan, kami dari Ikatan Alumni SMK Telkom Banjarbaru (IKASTELBA) mempersembahkan Skatel Festival Run 2026 sebagai momentum kebersamaan bagi seluruh alumni lintas angkatan.
                    </p>
                    <p>
                        Semangat yang kami usung adalah <strong>“Connecting Memories, Inspiring the Future”</strong> — menghubungkan kembali kenangan masa lalu, sekaligus bersama-sama membangun masa depan yang lebih baik bagi komunitas alumni Skatel.
                    </p>
                    <p>Akhir kata, kami mengucapkan terima kasih atas dukungan dan partisipasi seluruh alumni.</p>
                </div>
            </div>

            <div class="w-full md:w-2/5 relative flex justify-center items-center order-1 md:order-2 mb-12 md:mb-0">
                <div class="absolute w-[260px] h-[260px] md:w-[400px] md:h-[400px] border-[12px] md:border-[24px] border-[#D32F2F] rounded-full opacity-100 z-0 md:translate-x-10"></div>
                
                <div class="relative z-10">
                    <img src="{{ asset('images/ketua-removebg-preview.webp') }}" 
                        alt="Abdul Hamid" 
                        class="w-full max-w-[280px] md:max-w-[450px] object-contain drop-shadow-2xl">
                    
                    <div class="absolute -bottom-4 md:bottom-1/3 -right-2 md:-right-10 bg-white shadow-xl rounded-xl md:rounded-2xl p-4 md:p-6 border-l-4 md:border-l-8 border-[#D32F2F] min-w-[160px] md:min-w-[200px]">
                        <h4 class="text-lg md:text-2xl font-black text-gray-900 leading-none">Abdul Hamid</h4>
                        <p class="text-[10px] md:text-sm text-gray-500 font-bold uppercase tracking-widest mt-1 md:mt-2">Ketua IKASTELBA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 md:px-24 bg-white">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-black text-[#D32F2F] italic uppercase tracking-tighter">Galeri</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-6 max-w-6xl mx-auto">
            <div class="col-span-2 overflow-hidden rounded-xl md:rounded-2xl shadow-lg bg-gray-200 aspect-[16/7] md:aspect-[894/307]">
                <img src="{{ asset('images/dok3.webp') }}" class="w-full h-full object-cover hover:scale-105 transition duration-700 cursor-pointer">
            </div>
            <div class="overflow-hidden rounded-xl md:rounded-2xl shadow-md aspect-square md:aspect-[435/307] bg-gray-200">
                <img src="{{ asset('images/dok2.webp') }}" class="w-full h-full object-cover hover:scale-110 transition duration-500 cursor-pointer">
            </div>
            <div class="overflow-hidden rounded-xl md:rounded-2xl shadow-md aspect-square md:aspect-[435/307] bg-gray-200">
                <img src="{{ asset('images/dok4.webp') }}" class="w-full h-full object-cover hover:scale-110 transition duration-500 cursor-pointer">
            </div>
            <div class="overflow-hidden rounded-xl md:rounded-2xl shadow-md aspect-square md:aspect-[435/307] bg-gray-200">
                <img src="{{ asset('images/dok1.webp') }}" class="w-full h-full object-cover hover:scale-110 transition duration-500 cursor-pointer">
            </div>
            <div class="overflow-hidden rounded-xl md:rounded-2xl shadow-md aspect-square md:aspect-[435/307] bg-gray-200">
                <img src="{{ asset('images/dok6.webp') }}" class="w-full h-full object-cover hover:scale-110 transition duration-500 cursor-pointer">
            </div>
        </div>
    </section>

    <footer class="bg-[#D32F2F] text-white pt-20 pb-10 px-6 md:px-24 footer-shape mt-10">
        <div class="flex flex-col md:flex-row justify-between items-center gap-10 border-t border-red-400 pt-10">
            <div class="flex flex-col items-center md:items-start">
                <img src="{{ asset('images/logoo.webp') }}" alt="Logo IKASTELBA" class="h-24 md:h-32 mb-4 object-contain">
                <p class="text-xs md:text-base text-red-100 max-w-xs font-bold uppercase tracking-wide text-center md:text-left leading-tight">
                    Festival lari ikatan alumni SMK <br class="hidden md:block"> Telkom Banjarbaru
                </p>
            </div>
            <div class="flex gap-4">
                <a href="https://wa.me/6282344665167" 
                target="_blank" 
                class="inline-flex items-center justify-center bg-white text-[#D32F2F] p-3 rounded-full hover:bg-green-500 hover:text-white transition duration-300 shadow-lg"
                title="Chat with us on WhatsApp">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.886.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                </a>
                <a href="#" class="bg-white text-[#D32F2F] p-3 rounded-full hover:bg-gray-200 transition duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                </a>
            </div>
        </div>
        <div class="mt-16 text-center text-[10px] md:text-xs text-red-200 uppercase tracking-widest opacity-60 font-semibold">
            &copy; 2026 IKASTELBA Festival Run. All Rights Reserved.
        </div>
    </footer>

</body>
</html>