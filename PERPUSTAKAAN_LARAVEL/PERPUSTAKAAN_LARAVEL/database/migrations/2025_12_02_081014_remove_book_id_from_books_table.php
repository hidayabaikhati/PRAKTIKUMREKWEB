<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // Hapus UNIQUE INDEX terlebih dahulu
        DB::statement('DROP INDEX IF EXISTS books_book_id_unique');

        // Lanjut hapus kolom
        Schema::table('books', function (Blueprint $table) {
            if (Schema::hasColumn('books', 'book_id')) {
                $table->dropColumn('book_id');
            }
        });
    }

    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            if (!Schema::hasColumn('books', 'book_id')) {
                $table->string('book_id')->unique()->nullable();
            }
        });
    }
};
