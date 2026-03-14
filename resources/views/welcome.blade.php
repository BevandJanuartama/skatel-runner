<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKASTELBA Festival Run 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url("{{ asset('storage/landing-bg.png') }}");
            background-size: cover;
            background-position: center;
        }
        .footer-shape {
            clip-path: polygon(0 15%, 100% 0, 100% 100%, 0% 100%);
        }
    </style>
</head>
<body class="bg-white font-sans antialiased text-gray-900">

    <section class="hero-bg min-h-screen flex flex-col justify-center px-8 md:px-24 text-white">
        <div class="max-w-4xl">
            <p class="text-lg font-medium tracking-widest mb-4 uppercase">Pendaftaran Telah Dibuka</p>
            <h1 class="text-5xl md:text-8xl font-black leading-tight mb-6">
                IKASTELBA<br>FESTIVAL<br>RUN 2026
            </h1>
            <p class="text-sm md:text-lg mb-10 max-w-2xl text-gray-200">
                IKASTELBA Festival Run 2026 adalah momen untuk kembali terhubung, mengenang masa di Skatel, dan mempererat persaudaraan antar alumni SMK Telkom Banjarbaru. Dengan semangat "Connecting Memories, Imagining the Future", mari melangkah bersama dan jadilah bagian dari kebersamaan ini.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="register" class="bg-[#D32F2F] hover:bg-red-700 text-white px-10 py-3 rounded-full font-bold transition duration-300">
                    DAFTAR SEKARANG
                </a>
                <a href="about" class="border-2 border-white hover:bg-white hover:text-black text-white px-10 py-3 rounded-full font-bold transition duration-300">
                    Pelajari lebih lanjut
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 px-8 md:px-24 bg-white" x-data="{ activeSlide: 1 }">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2">
                <h2 class="text-6xl md:text-8xl font-black text-[#D32F2F] mb-6 italic uppercase tracking-tighter">RACEPACK</h2>
                <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                    Racepack IKASTELBA Festival Run 2026 mencerminkan energi, kebersamaan, dan kebanggaan alumni dengan tema <strong>"Connecting Memories, Imagining the Future"</strong>.
                </p>
                
                <ul class="space-y-4 mb-10">
                    <li class="flex items-center gap-3 font-bold text-lg">
                        <span class="bg-[#D32F2F] text-white rounded-full p-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></span> Medali Finisher
                    </li>
                    <li class="flex items-center gap-3 font-bold text-lg">
                        <span class="bg-[#D32F2F] text-white rounded-full p-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></span> Jersey Official
                    </li>
                    <li class="flex items-center gap-3 font-bold text-lg">
                        <span class="bg-[#D32F2F] text-white rounded-full p-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></span> BIB Number
                    </li>
                </ul>

                <div class="inline-block bg-[#D32F2F] text-white px-10 py-4 rounded-2xl font-black text-3xl italic shadow-lg">
                    Rp 150.000<span class="text-sm font-normal ml-1">/peserta</span>
                </div>
            </div>

            <div class="w-full md:w-1/2 flex items-center justify-center">
                <div class="relative w-full max-w-[686px] aspect-[13/8] flex items-center justify-center overflow-hidden"
                    x-init="setInterval(() => { activeSlide = activeSlide === 1 ? 2 : 1 }, 3000)">
                    
                    <div x-show="activeSlide === 1" 
                        x-transition:enter="transition ease-out duration-700" 
                        x-transition:enter-start="opacity-0 scale-95" 
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-700"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute inset-0 flex items-center justify-center">
                        <img src="{{ asset('storage/jerseyy.png') }}" 
                            alt="Jersey" 
                            class="w-full h-full object-contain">
                    </div>
                    
                    <div x-show="activeSlide === 2" 
                        x-transition:enter="transition ease-out duration-700" 
                        x-transition:enter-start="opacity-0 scale-95" 
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-700"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute inset-0 flex items-center justify-center">
                        <img src="{{ asset('storage/medal.jpeg') }}" 
                            alt="Medal" 
                            class="w-full h-full object-contain">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#D32F2F] text-white pt-24 pb-12 px-8 md:px-24 footer-shape mt-10">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-end gap-10 border-t border-red-400 pt-10">
            
            <div class="flex flex-col w-full md:w-auto items-center md:items-start">
                <div class="relative flex flex-col items-center md:items-start">
                    
                    <div class="relative left-16 md:left-20">
                        <img src="{{ asset('storage/logoo.png') }}" 
                            alt="Logo IKASTELBA" 
                            class="h-28 md:h-32 mb-4 object-contain">
                    </div>
                    
                    <p class="text-sm md:text-base text-red-100 max-w-xs md:max-w-sm font-bold uppercase tracking-wide text-center md:text-left leading-tight">
                        Festival lari ikatan alumni SMK <br class="hidden md:block"> Telkom Banjarbaru
                    </p>
                    
                </div>
            </div>
            
            <div class="flex gap-4 pb-2 mt-8 md:mt-0">
                <a href="https://wa.me/yournumber" class="bg-white text-[#D32F2F] p-3 rounded-full hover:bg-green-500 hover:text-white transition duration-300 shadow-md">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.886.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                </a>
                <a href="mailto:info@ikastelba.com" class="bg-white text-[#D32F2F] p-3 rounded-full hover:bg-gray-200 transition duration-300 shadow-md">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    </a>
            </div>
        </div>
        
        <div class="mt-16 text-center text-xs text-red-200 uppercase tracking-widest opacity-60 font-semibold">
            &copy; 2026 IKASTELBA Festival Run. All Rights Reserved.
        </div>
    </footer>

</body>
</html>