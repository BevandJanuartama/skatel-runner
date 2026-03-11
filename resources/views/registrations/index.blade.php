<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta - RunFest 2026</title>

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

        /* DataTables Custom Styling */
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 8px 12px;
            background-color: #f8fafc;
            outline: none;
            transition: all 0.2s;
        }
        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #E22631;
            box-shadow: 0 0 0 2px rgba(226, 38, 49, 0.1);
        }
        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 4px 8px;
        }
        table.dataTable { border-collapse: collapse !important; border-spacing: 0 !important; }
    </style>
</head>

<body class="antialiased text-[#3E3E3D]">

    <nav class="bg-white border-b border-slate-200 py-5 mb-8 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <h1 class="text-xl font-black text-navy uppercase tracking-tighter flex items-center">
                RUN<span class="text-red-main italic text-2xl">FEST</span>
                <span class="mx-3 h-6 w-px bg-slate-200 hidden md:block"></span>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] hidden md:block">Data Peserta Terdaftar</span>
            </h1>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-8">
            <div class="inline-block bg-white px-8 py-4 rounded-[2rem] border border-slate-100 shadow-xl shadow-slate-200/40">
                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Total Pendaftar</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-3xl font-black text-navy">{{ $registration->count() }}</span>
                    <span class="text-xs font-bold text-red-main uppercase italic">Orang</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200/50 border border-slate-100 p-2">
            <div class="overflow-x-auto p-4">
                <table id="pesertaTable" class="w-full text-left">
                    <thead>
                        <tr class="bg-slate-50/50">
                            <th class="p-5 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">No</th>
                            <th class="p-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Nama Lengkap</th>
                            <th class="p-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Informasi Kontak</th>
                            <th class="p-5 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">JK</th>
                            <th class="p-5 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">Ukuran</th>
                            <th class="p-5 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">Status</th>
                            <th class="p-5 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        @forelse($registration as $index => $peserta)
                        <tr class="group hover:bg-slate-50/80 transition-all">
                            <td class="p-5 text-center font-bold text-slate-400 text-xs">{{ $index + 1 }}</td>
                            <td class="p-5">
                                <p class="font-extrabold text-navy text-sm uppercase tracking-tight group-hover:text-red-main transition-colors">
                                    {{ $peserta->nama }}
                                </p>
                                <p class="text-[10px] font-bold text-slate-300 uppercase tracking-tighter italic">
                                    BIB: {{ $peserta->bib_name }}
                                </p>
                            </td>
                            <td class="p-5">
                                <p class="text-xs font-semibold text-slate-600 mb-1">{{ $peserta->email }}</p>
                                <p class="text-[10px] text-red-main font-black tracking-widest">{{ $peserta->telepon }}</p>
                            </td>
                            <td class="p-5 text-center">
                                <span class="px-3 py-1 rounded-lg text-[10px] font-black uppercase {{ $peserta->jk == 'L' ? 'bg-blue-50 text-blue-500' : 'bg-pink-50 text-pink-500' }}">
                                    {{ $peserta->jk }}
                                </span>
                            </td>
                            <td class="p-5 text-center">
                                <span class="inline-flex items-center justify-center w-8 h-8 bg-navy text-white text-[10px] font-black rounded-lg shadow-md shadow-navy/10">
                                    {{ $peserta->jersey ?? '-' }}
                                </span>
                            </td>

                            <td class="p-5 text-center">
                                <form action="{{ route('pendaftaran.update-status', $peserta->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    
                                    <div class="relative inline-block w-full min-w-[120px]">
                                        <select name="status" onchange="this.form.submit()" 
                                            class="block w-full appearance-none px-3 py-2 rounded-xl text-[10px] font-black uppercase tracking-wider border transition-all cursor-pointer focus:outline-none focus:ring-2 focus:ring-slate-200
                                            {{ $peserta->status == 'pending' ? 'bg-yellow-50 text-yellow-600 border-yellow-200' : '' }}
                                            {{ $peserta->status == 'dikonfirmasi' ? 'bg-green-50 text-green-600 border-green-200' : '' }}
                                            {{ $peserta->status == 'ditolak' ? 'bg-red-50 text-red-600 border-red-200' : '' }}">
                                            
                                            <option value="pending" {{ $peserta->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="dikonfirmasi" {{ $peserta->status == 'dikonfirmasi' ? 'selected' : '' }}>Dikonfirmasi</option>
                                            <option value="ditolak" {{ $peserta->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                        </select>
                                        
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                                            <svg class="h-3 w-3 fill-current" viewBox="0 0 20 20">
                                                <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                            </svg>
                                        </div>
                                    </div>
                                </form>
                            </td>

                            <td class="p-5 text-center">
                                <a href="{{ route('pendaftaran.show', $peserta->id) }}" 
                                class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-slate-50 text-navy hover:bg-red-main hover:text-white transition-all duration-300 shadow-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-20 text-center">
                                <p class="text-slate-300 font-black uppercase tracking-[0.3em] text-xs">Database Masih Kosong</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <footer class="mt-12 mb-8">
            <p class="text-center text-[10px] text-slate-400 font-black uppercase tracking-[0.4em]">
                &copy; 2026 RunFest Competition Dashboard • SMK Telkom Banjarbaru
            </p>
        </footer>
    </div>

    <script>
        $(document).ready(function(){
            $('#pesertaTable').DataTable({
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50],
                language: {
                    search: "",
                    searchPlaceholder: "Cari nama peserta...",
                    lengthMenu: "Tampilkan _MENU_",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ peserta",
                    paginate: {
                        next: "→",
                        previous: "←"
                    },
                    zeroRecords: "Data tidak ditemukan"
                }
            });

            // Styling Search Box biar lebih Tailwind-ish
            $('.dataTables_filter').addClass('mb-4');
            $('.dataTables_length').addClass('mb-4 text-xs font-bold text-slate-400 uppercase');
        });
    </script>
</body>
</html>