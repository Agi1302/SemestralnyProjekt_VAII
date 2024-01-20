<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::table('pouzivatelia', function ($table) {
            $table->unsignedBigInteger('id_role')->default(2);
            $table->foreign('id_role')->references('id')->on('table_role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::table('pouzivatelia', function ($table) {
            $table->dropColumn('id_role');
        });
    }

};
