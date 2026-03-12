<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
            Schema::create('registrations', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('email')->unique();
                $table->string('telepon');
                $table->enum('jk', ['L', 'P']);
                $table->date('ttl');
                $table->string('bib_name', 12);
                $table->integer('angkatan')->unsigned();
                $table->string('pekerjaan')->nullable();
                $table->text('lokasi_kerja');
                $table->string('jersey')->nullable();
                $table->string('status')->default('pending');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
