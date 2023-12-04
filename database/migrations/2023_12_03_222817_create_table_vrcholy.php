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
        Schema::create('vrcholy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazov_vrcholu');
            $table->string('stat');
            $table->string('okres');
            $table->integer('nadmorska_vyska');
            $table->string('pohorie');
            $table->string('najlahsi_vystup_z');
            $table->string('typ_tury');
            $table->string('narocnost');
            $table->string('dostupne_v_zime');
            $table->string('dlzka_trasy');
            $table->string('dostupnost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vrcholy');
    }
};

//
//use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
//
//return new class extends Migration
//{
//    /**
//     * Run the migrations.
//     */
//    public function up(): void
//    {
//        Schema::create('vrcholy', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('nazov_vrcholu');
//            $table->string('stat');
//            $table->string('okres');
//            $table->integer('nadmorska_vyska_vrcholu');
//            $table->string('pohorie');
//            $table->string('najlahsi_vystup_z');
////            $table->string('typ_tury');
////            $table->string('narocnost');
////            $table->string('dostupne_v_zime');
////            $table->string('dlzka_trasy');
////            $table->string('dostupnost');
////            $table->timestamps();
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     */
//    public function down(): void
//    {
//        Schema::dropIfExists('vrcholy');
//    }
//};
