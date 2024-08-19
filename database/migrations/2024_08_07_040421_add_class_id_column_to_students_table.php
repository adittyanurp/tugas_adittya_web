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
        Schema::table('students', function (Blueprint $table) {
            //menambahkan class_id pada tabel students dan membuat foregeinkey antara table students dan class
            $table->unsignedBigInteger('class_id')->required()->after('nis');
            $table->foreign('class_id')->references('id')->on('class')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //foregein key class_id
            $table->dropForegn(['class_id']);
            //menghapus kolom
            $table->dropColumn('class_id');
        });
    }
};
