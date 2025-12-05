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
    Schema::create('borrowings', function (Blueprint $table) {
    $table->id();
    $table->foreignId('mahasiswa_id')->constrained('mahasiswas')->onDelete('cascade');
    $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
    $table->date('tgl_pinjam');
    $table->date('tgl_kembali')->nullable();
    $table->boolean('kembali')->default(false);
    $table->timestamps();
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
