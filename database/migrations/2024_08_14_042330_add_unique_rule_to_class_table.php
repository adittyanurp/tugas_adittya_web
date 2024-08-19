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
        Schema::table('class', function (Blueprint $table) {
            //membuat kolom nama pada table class menjadi unique
            $table->string('nama')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('class', function (Blueprint $table) {
            //
            schema::table('class',function(blueprint $table){
                $table->dropunique('class_name_unique');
            });
        });
    }
};
