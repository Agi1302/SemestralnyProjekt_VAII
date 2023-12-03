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
        Schema::create('pouzivatelia', function (Blueprint $tabulka) {
            $tabulka->id();
            $tabulka->string('meno');
            $tabulka->string('priezvisko');
            $tabulka->string('email')->unique();
            $tabulka->string('heslo');
            $tabulka->rememberToken();
            $tabulka->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pouzivatelia');
    }
};
