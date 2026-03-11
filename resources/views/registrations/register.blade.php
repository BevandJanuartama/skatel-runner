<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran - RunFest 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-gradient-custom {
            background: linear-gradient(135deg, #EF4444 0%, #F97316 100%);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen pb-20">

    <div class="bg-white border-b border-slate-100 py-6 mb-10">
        <div class="max-w-3xl mx-auto px-6 flex justify-between items-center">
            <a href="/" class="text-xl font-extrabold tracking-tighter">
                RUN<span class="text-red-500">FEST</span>
            </a>
            <span class="text-sm font-semibold text-slate-400 uppercase tracking-widest">Form Registrasi</span>
        </div>
    </div>

    <div class="max-w-3xl mx-auto px-6">
        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/60 overflow-hidden">
            <div class="h-2 w-full bg-slate-100">
                <div class="h-full bg-gradient-custom w-full"></div>
            </div>

            @if ($errors->any())
                <div class="max-w-3xl mx-auto px-6 mb-4">
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-xl">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700 font-bold">Terjadi kesalahan pendaftaran:</p>
                                <ul class="mt-1 list-disc list-inside text-sm text-red-600">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <form action="/register" method="POST" class="p-8 md:p-12 space-y-8">
                @csrf
                
                <div class="hidden">
                    <input type="text" name="middle_name" tabindex="-1" autocomplete="off">
                </div>

                <div>
                    <h2 class="text-xl font-bold mb-6 flex items-center">
                        <span class="w-8 h-8 bg-red-100 text-red-600 rounded-lg flex items-center justify-center mr-3 text-sm">01</span>
                        Identitas Diri
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap (Sesuai KTP)</label>
                            <input type="text" name="nama" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition" placeholder="Contoh: Bepann Prasetyo">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Email</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition" placeholder="bepann@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nomor Telepon (WhatsApp)</label>
                            <input type="tel" name="telepon" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition" placeholder="0812xxxxxxxx">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Jenis Kelamin</label>
                            <select name="jk" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 outline-none transition appearance-none bg-white">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Tanggal Lahir</label>
                            <input type="date" name="ttl" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 outline-none transition">
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100">

                <div>
                    <h2 class="text-xl font-bold mb-6 flex items-center">
                        <span class="w-8 h-8 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center mr-3 text-sm">02</span>
                        Atribut & Komunitas
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nama di BIB (Max 12 Karakter)</label>
                            <input type="text" name="bib_name" maxlength="12" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 outline-none transition" placeholder="Nama Panggilan">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Ukuran Jersey (Opsional)</label>
                            <select name="jersey" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 outline-none transition appearance-none bg-white">
                                <option value="">Pilih Ukuran</option>
                                <option value="S">S - Small</option>
                                <option value="M">M - Medium</option>
                                <option value="L">L - Large</option>
                                <option value="XL">XL - Xtra Large</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nama Komunitas (Isi '-' jika tidak ada)</label>
                            <input type="text" name="komunitas" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 outline-none transition" placeholder="Contoh: Banjarbaru Runners">
                        </div>
                    </div>
                </div>

                <hr class="border-slate-100">

                <div>
                    <h2 class="text-xl font-bold mb-6 flex items-center">
                        <span class="w-8 h-8 bg-slate-100 text-slate-600 rounded-lg flex items-center justify-center mr-3 text-sm">03</span>
                        Medis & Alamat
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Golongan Darah</label>
                            <select name="gol_darah" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 outline-none transition bg-white">
                                <option value="">Pilih</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Kontak Darurat (No HP)</label>
                            <input type="tel" name="emergency" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 outline-none transition" placeholder="No Telp Keluarga">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Alamat Lengkap</label>
                            <textarea name="alamat" rows="3" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-red-500 outline-none transition" placeholder="Alamat untuk pengiriman medali/jersey..."></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full bg-gradient-custom text-white py-5 rounded-2xl font-bold text-xl shadow-xl shadow-red-200 hover:shadow-red-300 hover:-translate-y-1 transition duration-200">
                    Selesaikan Pendaftaran
                </button>

                <p class="text-center text-xs text-slate-400">
                    Dengan mendaftar, Anda menyetujui Syarat & Ketentuan serta kebijakan privasi RunFest 2026.
                </p>
            </form>
        </div>
    </div>

    <div id="qrisModal" class="fixed inset-0 z-[100] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity"></div>

        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-[2.5rem] bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                
                <div class="bg-white px-8 pt-8 pb-4 text-center">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-red-50 mb-4">
                        <svg class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.546 1.16 3.743 1.16 5.289 0m-5.289-8l5.289 8m-5.289-8a9 9 0 11-9 9 9 9 0 019-9z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 uppercase tracking-tighter" id="modal-title">Pembayaran Registrasi</h3>
                    <p class="text-sm text-slate-500 font-medium">Silakan scan kode QRIS di bawah ini untuk menyelesaikan pendaftaran.</p>
                </div>

                <div class="px-8 py-4">
                    <div class="bg-slate-50 p-4 rounded-3xl border-2 border-dashed border-slate-200">
                        <img src="{{ asset('storage/qris.jpeg') }}" alt="QRIS Payment" class="w-full h-auto rounded-xl shadow-inner">
                    </div>
                    <div class="mt-4 text-center">
                        <p class="text-[10px] font-black text-red-500 uppercase tracking-[0.2em]">Nominal: Rp. 50.000,-</p>
                    </div>
                </div>

                <div class="px-8 pb-10 pt-4 flex flex-col gap-3">
                   <button type="button" id="confirmPayment" class="w-full bg-gradient-custom text-white py-4 rounded-2xl font-black text-lg uppercase tracking-widest shadow-xl shadow-red-200 hover:scale-[1.02] transition-all">
                        Konfirmasi Pembayaran
                    </button>
                    <button type="button" id="closeModal" class="text-xs font-bold text-slate-400 hover:text-slate-600 uppercase tracking-widest transition">
                        Nanti Saja
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="waModal" class="fixed inset-0 z-[110] hidden overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/90 backdrop-blur-md transition-opacity"></div>
        <div class="flex min-h-full items-center justify-center p-4 text-center">
            <div class="relative transform overflow-hidden rounded-[2.5rem] bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-md">
                <div class="bg-white px-8 pt-10 pb-6 text-center">
                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-green-100 mb-6">
                        <svg class="h-10 w-10 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.411-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 uppercase tracking-tighter">Satu Langkah Lagi!</h3>
                    <p class="mt-4 text-sm text-slate-500 leading-relaxed">
                        Data Anda telah tersimpan. Silakan kirimkan **Bukti Pembayaran** ke WhatsApp Admin untuk proses verifikasi status.
                    </p>
                </div>
                <div class="px-8 pb-10 flex flex-col gap-3">
                    <button type="button" id="sendWA" class="w-full bg-[#25D366] text-white py-4 rounded-2xl font-black text-lg uppercase tracking-widest shadow-xl shadow-green-200 hover:scale-[1.02] transition-all flex items-center justify-center gap-2">
                        Kirim Bukti ke WA
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
       const registrationForm = document.querySelector('form');
        const qrisModal = document.getElementById('qrisModal');
        const waModal = document.getElementById('waModal');
        const confirmPayment = document.getElementById('confirmPayment');
        const sendWA = document.getElementById('sendWA');
        const closeModal = document.getElementById('closeModal');

        // 1. Submit form pertama kali (Muncul QRIS)
        registrationForm.addEventListener('submit', function(e) {
            if (this.checkValidity()) {
                e.preventDefault();
                qrisModal.classList.remove('hidden');
            }
        });

        // 2. Klik Konfirmasi Pembayaran (Ganti ke Modal WA)
        confirmPayment.addEventListener('click', function() {
            qrisModal.classList.add('hidden');
            waModal.classList.remove('hidden');
        });

        // 3. Klik Kirim Bukti ke WA (Submit Data ke Laravel & Buka WA)
        sendWA.addEventListener('click', function() {
            const nama = document.querySelector('input[name="nama"]').value;
            const phone = "6281528297789";
            const text = `Halo Admin RunFest! Saya *${nama}* telah melakukan pembayaran. Berikut adalah bukti transfer saya. Mohon segera diverifikasi. Terima kasih!`;
            
            // Buka WhatsApp di tab baru
            window.open(`https://wa.me/${phone}?text=${encodeURIComponent(text)}`, '_blank');

            // Beri sedikit delay sebelum submit agar proses window.open tidak terblokir
            setTimeout(() => {
                registrationForm.submit();
            }, 500);
        });

        // Tutup modal
        closeModal.addEventListener('click', () => qrisModal.classList.add('hidden'));
    </script>

</body>
</html>