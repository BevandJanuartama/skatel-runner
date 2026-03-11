<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    /**
     * Nama tabel di database (opsional jika nama tabelnya jamak/plural 'registrations')
     */
    protected $table = 'registrations';

    /**
     * Kolom yang boleh diisi (Mass Assignable)
     * Sesuaikan dengan input dari form pendaftaranmu
     */
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'jk',
        'ttl',
        'bib_name',
        'emergency',
        'gol_darah',
        'komunitas',
        'alamat',
        'jersey',
        'status',
    ];

    /**
     * Casting data agar lebih mudah dikelola di Carbon (Tanggal)
     */
    protected $casts = [
        'ttl' => 'date',
    ];
}