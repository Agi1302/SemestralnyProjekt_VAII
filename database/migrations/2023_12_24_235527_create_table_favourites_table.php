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
        Schema::create('table_favourites', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vrchol_id');
            $table->foreign('user_id')->references('id')->on('pouzivatelia');
            $table->foreign('vrchol_id')->references('id')->on('vrcholy');
            $table->timestamps();
            $table->primary(['user_id', 'vrchol_id']); //kompozitny PK
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_favourites');
    }
};
