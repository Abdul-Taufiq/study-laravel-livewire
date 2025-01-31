<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_data_diri', function (Blueprint $table) {
            $table->id();

            // untuk relasi dengan table kelas
            // $table->unsignedBigInteger('kelas_id');
            // $table->foreign('kelas_id')->references('id')->on('tb_kelas');

            // Alternatif relasi dengan table kelas
            // Relasi dengan table tb_kelas dengan onUpdate dan onDelete cascade
            $table->foreignId('kelas_id')
                ->constrained('tb_kelas') // Nama tabel referensi
                ->onUpdate('cascade')    // Jika data diubah di tabel referensi
                ->onDelete('cascade');   // Jika data dihapus di tabel referensi


            $table->string('nama', 100);
            $table->enum('jns_kelamin', ['Laki-laki', 'Perempuan']);
            $table->longText('alamat');
            $table->enum('goldar', ['A', 'B', 'AB', 'O']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_data_diri');
    }
};
