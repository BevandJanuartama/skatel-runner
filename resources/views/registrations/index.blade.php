<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Peserta - RunFest 2026</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.tailwindcss.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.tailwindcss.min.js"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F7F7F7; }
        .text-navy { color: #384651; }
        .bg-navy { background-color: #384651; }
        .text-red-main { color: #E22631; }
        .bg-red-main { background-color: #E22631; }

        .dataTables_wrapper .dataTables_filter input {
            border: 2px solid #e2e8f0; border-radius: 12px; padding: 8px 12px;
            background-color: #ffffff; outline: none; transition: all 0.2s; color: #384651; font-weight: 600;
        }
        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #E22631; box-shadow: 0 0 0 2px rgba(226, 38, 49, 0.1);
        }
        table.dataTable { border-collapse: collapse !important; border-spacing: 0 !important; }
    </style>
</head>

<body class="antialiased text-[#3E3E3D]">

    <nav class="bg-white border-b-2 border-slate-100 py-5 mb-8 sticky top-0 z-50 shadow-sm">
        <div class="max-w-[98%] mx-auto px-6 flex justify-between items-center">
            <h1 class="text-xl font-black text-navy uppercase tracking-tighter flex items-center">
                RUN<span class="text-red-main italic text-2xl">FEST</span>
                <span class="mx-3 h-6 w-px bg-slate-200 hidden md:block"></span>
                <span class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] hidden md:block">Database Alumni Terdaftar</span>
            </h1>
            <div class="flex gap-4">
                <a href="{{ route('pendaftaran.registration') }}" class="text-[10px] font-black border-2 border-red-main text-red-main px-4 py-2 rounded-xl hover:bg-red-main hover:text-white transition-all uppercase tracking-widest">Tambah Peserta</a>
                <button onclick="window.print()" class="text-[10px] font-black bg-navy text-white px-4 py-2 rounded-xl shadow-lg shadow-navy/20 uppercase tracking-widest">Cetak Laporan</button>
                <a href="{{ route('admin.logout') }}" 
                class="text-[10px] font-black border-2 border-slate-200 text-slate-400 px-4 py-2 rounded-xl hover:bg-slate-100 hover:text-navy transition-all uppercase tracking-widest">
                Keluar
                </a>
            </div>
        </div>
        
    </nav>

    <div class="max-w-[98%] mx-auto px-6">
        <div class="mb-8">
            <div class="inline-block bg-white px-8 py-4 rounded-[2rem] border border-slate-200 shadow-xl shadow-slate-200/40">
                <p class="text-[9px] font-black text-slate-500 uppercase tracking-[0.2em] mb-1">Total Pendaftar</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-black text-navy">{{ $registration->count() }}</span>
                    <span class="text-xs font-bold text-red-main uppercase italic">Peserta</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200/50 border border-slate-200 p-2 overflow-hidden">
            <div class="overflow-x-auto p-4">
                <table id="pesertaTable" class="w-full text-left">
                    <thead>
                        <tr class="bg-slate-50">
                            <th class="p-5 text-[10px] font-black text-navy uppercase tracking-widest text-center">No</th>
                            <th class="p-5 text-[10px] font-black text-navy uppercase tracking-widest">Nama & BIB</th>
                            <th class="p-5 text-[10px] font-black text-navy uppercase tracking-widest">Email & WhatsApp</th>
                            <th class="p-5 text-[10px] font-black text-navy uppercase tracking-widest text-center">JK</th>
                            <th class="p-5 text-[10px] font-black text-navy uppercase tracking-widest text-center">Angkatan</th>
                            <th class="p-5 text-[10px] font-black text-navy uppercase tracking-widest">Profil Karier</th>
                            <th class="p-5 text-[10px] font-black text-navy uppercase tracking-widest text-center">Size</th>
                            <th class="p-5 text-[10px] font-black text-navy uppercase tracking-widest text-center">Status</th>
                            <th class="p-5 text-[10px] font-black text-navy uppercase tracking-widest text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($registration as $index => $peserta)
                        <tr class="group hover:bg-red-50/30 transition-all">
                            <td class="p-5 text-center font-bold text-navy text-xs">{{ $index + 1 }}</td>
                            
                            <td class="p-5">
                                <p class="font-extrabold text-navy text-sm uppercase tracking-tight group-hover:text-red-main transition-colors">
                                    {{ $peserta->nama }}
                                </p>
                                <p class="text-[10px] font-black text-red-main/60 uppercase tracking-tighter italic">
                                    BIB: {{ $peserta->bib_name }}
                                </p>
                            </td>

                            <td class="p-5">
                                <p class="text-xs font-bold text-navy mb-1">{{ $peserta->email }}</p>
                                <p class="text-[11px] text-red-main font-black tracking-widest">{{ $peserta->telepon }}</p>
                            </td>

                            <td class="p-5 text-center">
                                <span class="px-3 py-1 rounded-lg text-[10px] font-black uppercase {{ $peserta->jk == 'L' ? 'bg-blue-100 text-blue-700' : 'bg-pink-100 text-pink-700' }}">
                                    {{ $peserta->jk }}
                                </span>
                            </td>

                            <td class="p-5 text-center">
                                <span class="text-sm font-black text-navy">
                                    {{ $peserta->angkatan }}
                                </span>
                            </td>

                            <td class="p-5">
                                <p class="text-xs font-bold text-navy mb-1 uppercase tracking-tighter">
                                    {{ $peserta->pekerjaan ?? '-' }}
                                </p>
                                <p class="text-[10px] text-red-main font-black tracking-widest uppercase">
                                    {{ Str::limit($peserta->lokasi_kerja, 25) }}
                                </p>
                            </td>

                            <td class="p-5 text-center">
                                <span class="inline-flex items-center justify-center w-9 h-9 bg-navy text-white text-[11px] font-black rounded-xl shadow-md">
                                    {{ $peserta->jersey ?? '-' }}
                                </span>
                            </td>

                            <td class="p-5 text-center">
                                <form action="{{ route('pendaftaran.updateStatus', $peserta->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="relative inline-block w-full min-w-[135px]">
                                        <select name="status" onchange="this.form.submit()" 
                                            class="block w-full appearance-none px-3 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-wider border-2 transition-all cursor-pointer focus:outline-none
                                            {{ $peserta->status == 'pending' ? 'bg-yellow-50 text-yellow-700 border-yellow-200' : '' }}
                                            {{ $peserta->status == 'dikonfirmasi' ? 'bg-green-50 text-green-700 border-green-200' : '' }}
                                            {{ $peserta->status == 'ditolak' ? 'bg-red-50 text-red-700 border-red-200' : '' }}">
                                            
                                            <option value="pending" {{ $peserta->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="dikonfirmasi" {{ $peserta->status == 'dikonfirmasi' ? 'selected' : '' }}>Sukses</option>
                                            <option value="ditolak" {{ $peserta->status == 'ditolak' ? 'selected' : '' }}>Batal</option>
                                        </select>
                                    </div>
                                </form>
                            </td>

                            <td class="p-5 text-center">
                                <a href="{{ route('pendaftaran.show', $peserta->id) }}" 
                                   class="inline-flex items-center justify-center w-11 h-11 rounded-2xl bg-slate-100 text-navy hover:bg-red-main hover:text-white transition-all duration-300 shadow-sm border border-slate-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="p-20 text-center">
                                <p class="text-slate-400 font-black uppercase tracking-[0.3em] text-xs">Belum ada pendaftar</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <footer class="mt-12 mb-8">
            <p class="text-center text-[10px] text-slate-500 font-black uppercase tracking-[0.4em]">
                &copy; 2026 RunFest Competition • IKASTELBA SKATEL BJB
            </p>
        </footer>
    </div>

    <script>
        $(document).ready(function(){
            $('#pesertaTable').DataTable({
                pageLength: 10,
                lengthMenu: [10, 25, 50, 100],
                language: {
                    search: "", searchPlaceholder: "Cari data alumni...",
                    lengthMenu: "Show _MENU_",
                    info: "Menampilkan _START_ s/d _END_ dari _TOTAL_ alumni",
                    paginate: { next: "→", previous: "←" }
                }
            });
            $('.dataTables_filter').addClass('mb-4');
            $('.dataTables_length').addClass('mb-4 text-[10px] font-black text-navy uppercase tracking-widest');
        });
    </script>
</body>
</html>