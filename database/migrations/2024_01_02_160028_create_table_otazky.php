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
        Schema::create('table_otazky', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPouzivatela');
            $table->text('textOtazky');
            $table->text('textOdpovede')->nullable();;
            $table->timestamps();
            $table->foreign('idPouzivatela')->references('id')->on('pouzivatelia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_otazky');
    }
};
