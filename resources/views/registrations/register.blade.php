<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran - IKASTELBA FESTIVAL RUN 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FDF7F7; }
        .bg-skatel-gradient { background: linear-gradient(90deg, #E32626 0%, #F55353 100%); }
        .step-active { background-color: #D32F2F; color: white; border-color: #D32F2F; }
        .step-done { background-color: #D32F2F; color: white; border-color: #D32F2F; }
        .step-inactive { background-color: #E2E8F0; color: #94A3B8; border-color: #E2E8F0; }
        .footer-shape { clip-path: polygon(0 15%, 100% 0, 100% 100%, 0% 100%); }
        .hidden { display: none; }
    </style>
</head>
<body class="antialiased text-slate-800">

    <header class="relative h-[300px] flex flex-col justify-center items-center text-center text-white px-4 overflow-hidden mb-40">
        <img src="{{ asset('images/landing-bg.webp') }}" class="absolute inset-0 w-full h-full object-cover brightness-50 z-0" alt="bg">
        <div class="relative z-10">
            <h1 class="text-4xl md:text-6xl font-extrabold uppercase tracking-tighter">AYO! DAFTAR <br> IKASTELBA FESTIVAL RUN</h1>
        </div>
    </header>

    <div class="max-w-4xl mx-auto px-6 -mt-20 relative z-20 pb-20">
        <div class="bg-white rounded-[2.5rem] shadow-2xl overflow-hidden border border-slate-100">
            
            <div class="bg-skatel-gradient p-8 md:p-10 text-white flex justify-between items-center">
                <div class="max-w-[70%]">
                    <h2 class="text-2xl md:text-3xl font-bold">Formulir Pendaftaran</h2>
                    <p class="text-xs md:text-sm opacity-80 mt-1 uppercase tracking-wider font-semibold">Skatel Festival Run 2026</p>
                </div>
                <div class="text-2xl md:text-4xl font-black italic">Rp 150.000</div>
            </div>

            <div class="flex items-center justify-center py-10 px-10">
                <div class="flex items-center w-full max-w-sm">
                    <div id="circle-1" class="w-12 h-12 rounded-full flex items-center justify-center font-bold border-2 step-active transition-all duration-500">1</div>
                    <div class="flex-1 h-1 bg-slate-200 mx-2 rounded-full overflow-hidden">
                        <div id="progress-1" class="h-full bg-[#D32F2F] w-0 transition-all duration-500"></div>
                    </div>
                    <div id="circle-2" class="w-12 h-12 rounded-full flex items-center justify-center font-bold border-2 step-inactive transition-all duration-500">2</div>
                    <div class="flex-1 h-1 bg-slate-200 mx-2 rounded-full overflow-hidden">
                        <div id="progress-2" class="h-full bg-[#D32F2F] w-0 transition-all duration-500"></div>
                    </div>
                    <div id="circle-3" class="w-12 h-12 rounded-full flex items-center justify-center font-bold border-2 step-inactive transition-all duration-500">3</div>
                </div>
            </div>

            @if ($errors->any())
                <div class="px-8 md:px-16 mb-6">
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-xl">
                        <p class="text-sm text-red-700 font-bold">Mohon periksa kembali:</p>
                        <ul class="mt-1 list-disc list-inside text-xs text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form action="{{ route('pendaftaran.store') }}" method="POST" id="mainForm" class="px-8 md:px-16 pb-12">
                @csrf
                <input type="text" name="middle_name" class="hidden" tabindex="-1" autocomplete="off">

                <div id="step-1-content">
                    <div class="flex items-center gap-3 mb-8 text-xl font-bold">
                        <div class="p-2 bg-slate-100 rounded-xl"><svg class="w-6 h-6 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg></div>
                        Data Pribadi
                    </div>
                    <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold mb-2 text-slate-700">Nama Lengkap</label>
                        <input type="text" name="nama" value="{{ old('nama') }}" required 
                            class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-red-100 outline-none transition" 
                            placeholder="Masukkan nama lengkap sesuai KTP">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold mb-2 text-slate-700">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" required 
                                class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-red-100 outline-none transition" 
                                placeholder="contoh@gmail.com">
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2 text-slate-700">No. Telepon / WhatsApp</label>
                            <input type="tel" name="telepon" value="{{ old('telepon') }}" required 
                                class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-red-100 outline-none transition" 
                                placeholder="081234567890">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold mb-2 text-slate-700">Jenis Kelamin</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="group relative border-2 p-4 rounded-2xl flex items-center gap-3 cursor-pointer transition-all duration-300 has-[:checked]:border-[#D32F2F] has-[:checked]:bg-red-50 border-slate-100 bg-slate-50">
                                <input type="radio" name="jk" value="L" {{ old('jk') == 'L' || !old('jk') ? 'checked' : '' }} 
                                    class="w-5 h-5 accent-[#D32F2F] cursor-pointer">
                                <span class="font-semibold text-slate-600 group-has-[:checked]:text-[#D32F2F]">Laki-laki</span>
                            </label>
                            
                            <label class="group relative border-2 p-4 rounded-2xl flex items-center gap-3 cursor-pointer transition-all duration-300 has-[:checked]:border-[#D32F2F] has-[:checked]:bg-red-50 border-slate-100 bg-slate-50">
                                <input type="radio" name="jk" value="P" {{ old('jk') == 'P' ? 'checked' : '' }} 
                                    class="w-5 h-5 accent-[#D32F2F] cursor-pointer">
                                <span class="font-semibold text-slate-600 group-has-[:checked]:text-[#D32F2F]">Perempuan</span>
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold mb-2 text-slate-700">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required 
                                class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-red-100 outline-none transition" 
                                placeholder="Contoh: Banjarbaru">
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2 text-slate-700">Tanggal Lahir</label>
                            <input type="date" name="ttl" value="{{ old('ttl') }}" required 
                                class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-red-100 outline-none transition">
                        </div>
                    </div>
                </div>
                    <button type="button" onclick="goToStep(2)" class="w-full mt-12 bg-[#D32F2F] text-white py-5 rounded-3xl font-bold text-xl shadow-xl shadow-red-200 hover:scale-[1.01] transition-all">Lanjut &rarr;</button>
                </div>

                <div id="step-2-content" class="hidden">
                    <div class="flex items-center gap-3 mb-8 text-xl font-bold">
                        <div class="p-2 bg-slate-100 rounded-xl">
                            <svg class="w-6 h-6 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5" />
                            </svg>
                        </div>
                        Informasi Alumni
                    </div>

                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold mb-2 text-slate-700">Nama di BIB (Max 12 Karakter)</label>
                                <input type="text" name="bib_name" value="{{ old('bib_name') }}" maxlength="12" required 
                                    class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-red-100 outline-none transition " 
                                    placeholder="Agus Kencang">
                            </div>
                            <div>
                                <label class="block text-sm font-bold mb-2 text-slate-700">Angkatan Alumni (Angka)</label>
                                <input type="number" name="angkatan" value="{{ old('angkatan') }}" required 
                                    class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-red-100 outline-none transition" 
                                    placeholder="Contoh: 24">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold mb-2 text-slate-700">Pekerjaan</label>
                            <input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" 
                                class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-red-100 outline-none transition" 
                                placeholder="Software Engineer">
                        </div>

                        <div>
                            <label class="block text-sm font-bold mb-2 text-slate-700">Lokasi Kerja / Instansi</label>
                            <input type="text" name="lokasi_kerja" value="{{ old('lokasi_kerja') }}" required 
                                class="w-full px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-red-100 outline-none transition" 
                                placeholder="PT. Telkom Indonesia">
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-4 mt-12">
                        <button type="button" onclick="goToStep(1)" 
                            class="flex-1 bg-slate-100 text-slate-500 py-5 rounded-3xl font-bold text-lg hover:bg-slate-200 transition">
                            Kembali
                        </button>
                        <button type="button" onclick="goToStep(3)" 
                            class="flex-[2] bg-[#D32F2F] text-white py-5 rounded-3xl font-bold text-xl shadow-xl shadow-red-200 hover:scale-[1.01] active:scale-95 transition-all">
                            Lanjut &rarr;
                        </button>
                    </div>
                </div>

                <div id="step-3-content" class="hidden">
                    <div class="flex items-center gap-3 mb-8 text-xl font-bold">
                        <div class="p-2 bg-slate-100 rounded-xl"><svg class="w-6 h-6 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg></div>
                        Ukuran Jersey
                    </div>
                    <img src="{{ asset('images/chart.webp') }}" class="w-full rounded-[2rem] mb-10 border border-slate-100 shadow-lg" alt="Jersey">
                    <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-12">
                        @foreach(['S', 'M', 'L', 'XL', 'XXL'] as $size)
                            <label class="flex-1 min-w-[80px]">
                                <input type="radio" name="jersey" value="{{ $size }}" {{ $size == 'M' ? 'checked' : '' }} class="hidden peer">
                                <div class="py-4 border-2 rounded-2xl text-center font-bold text-slate-400 peer-checked:border-[#D32F2F] peer-checked:bg-red-50 peer-checked:text-[#D32F2F] cursor-pointer transition">{{ $size }}</div>
                            </label>
                        @endforeach
                    </div>
                    <div class="flex flex-col md:flex-row gap-4">
                        <button type="button" onclick="goToStep(2)" class="flex-1 bg-slate-100 text-slate-500 py-5 rounded-3xl font-bold text-lg">Kembali</button>
                        <button type="button" onclick="openQRIS()" class="flex-[2] bg-[#D32F2F] text-white py-5 rounded-3xl font-bold text-xl shadow-xl shadow-red-200 hover:scale-[1.01] transition-all">Selesaikan Pendaftaran</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="modalQRIS" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity"></div>
        <div class="relative bg-white w-full max-w-sm rounded-[2.5rem] overflow-hidden shadow-2xl animate-in fade-in zoom-in duration-300">
            
            <button onclick="closeModal('modalQRIS')" class="absolute top-4 right-6 text-white text-2xl font-bold z-50 hover:scale-110 transition">&times;</button>

            <div class="bg-[#D32F2F] p-6 text-white text-center">
                <h3 class="text-2xl font-bold leading-tight">Pendaftaran berhasil!</h3>
                <p class="text-sm opacity-90 mt-1">Silahkan lakukan pembayaran</p>
            </div>
            
            <div class="p-8 text-center">
                <div class="bg-white border-[12px] border-[#D32F2F] rounded-[2.5rem] p-4 mb-8 shadow-inner flex justify-center">
                    <img src="{{ asset('images/qris.webp') }}" class="w-full max-w-[200px]" alt="QRIS">
                </div>

                <div class="mb-10 text-center">
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-1">Total Pembayaran</p>
                    <h4 class="text-4xl font-black text-slate-900">Rp 150.000</h4>
                    <p class="text-slate-500 text-[10px] mt-2 font-bold uppercase tracking-widest">A/n Ikatan Alumni SMK Telkom BJB</p>
                </div>

                <button type="button" onclick="handlePaymentAction()" class="w-full bg-[#D32F2F] text-white py-5 rounded-3xl font-black text-lg mb-4 shadow-xl shadow-red-100 hover:bg-red-700 transition">
                    KONFIRMASI
                </button>
                
                <p class="text-[10px] text-slate-400 font-medium">Klik tombol di atas untuk konfirmasi & simpan data</p>
            </div>
        </div>
    </div>

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

    <script>
        /**
         * Fungsi untuk navigasi antar Step (1, 2, 3)
         */
        function goToStep(step) {
            // 1. Sembunyikan semua konten step
            document.querySelectorAll('[id^="step-"]').forEach(el => el.classList.add('hidden'));
            
            // 2. Tampilkan konten step yang dituju
            const targetStep = document.getElementById(`step-${step}-content`);
            if (targetStep) {
                targetStep.classList.remove('hidden');
            }

            // 3. Update Visual Stepper (Lingkaran & Garis Progress)
            for(let i = 1; i <= 3; i++) {
                const circle = document.getElementById(`circle-${i}`);
                const progress = document.getElementById(`progress-${i}`);
                
                if (i < step) {
                    // Step yang sudah selesai
                    circle.className = "w-12 h-12 rounded-full flex items-center justify-center font-bold border-2 step-done";
                    circle.innerHTML = "✓";
                    if (progress) progress.style.width = "100%";
                } else if (i === step) {
                    // Step yang sedang aktif
                    circle.className = "w-12 h-12 rounded-full flex items-center justify-center font-bold border-2 step-active";
                    circle.innerHTML = i;
                    if (progress) progress.style.width = "0%";
                } else {
                    // Step yang belum tercapai
                    circle.className = "w-12 h-12 rounded-full flex items-center justify-center font-bold border-2 step-inactive";
                    circle.innerHTML = i;
                    // Progress garis sebelumnya juga harus 0 jika kita balik ke step sebelumnya
                    const prevProgress = document.getElementById(`progress-${i-1}`);
                    if (prevProgress && i > step) prevProgress.style.width = "0%";
                }
            }

            // Scroll otomatis ke atas form agar user tidak bingung
            window.scrollTo({ top: 150, behavior: 'smooth' });
        }

        /**
         * Fungsi membuka Modal QRIS
         */
        function openQRIS() {
            const modal = document.getElementById('modalQRIS');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        /**
         * Fungsi menutup Modal apapun berdasarkan ID
         */
        function closeModal(id) {
            const modal = document.getElementById(id);
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        /**
         * Fungsi Inti: Handle klik "SUDAH BAYAR"
         * Alur: Ambil Data -> Buka WA -> Submit ke Database
         */
        function handlePaymentAction() {
            // Ambil data dari input untuk teks WA
            const nama = document.querySelector('input[name="nama"]').value;
            const bib = document.querySelector('input[name="bib_name"]').value;
            const tempat = document.querySelector('input[name="tempat_lahir"]').value;
            const tgl = document.querySelector('input[name="ttl"]').value;
            
            const phone = "6282344665167"; // Nomor WhatsApp Admin
            
            // Template pesan WhatsApp
            const text = `Halo Admin! Saya *${nama}* (Nama BIB: *${bib}*) 
    TTL: *${tempat}, ${tgl}* Telah membayar pendaftaran Skatel Festival Run. Berikut bukti transfer saya. Mohon verifikasi ya!`;

            // 1. Buka link WhatsApp di tab baru
            window.open(`https://wa.me/${phone}?text=${encodeURIComponent(text)}`, '_blank');

            // 2. Kirim form secara otomatis ke backend Laravel
            // Diberi delay 1 detik agar browser sempat memproses window.open
            setTimeout(() => {
                document.getElementById('mainForm').submit();
            }, 1000);
        }

        /**
         * Fungsi cadangan jika ingin submit manual tanpa lewat WA
         */
        function submitForm() {
            document.getElementById('mainForm').submit();
        }
    </script>
</body>
</html>