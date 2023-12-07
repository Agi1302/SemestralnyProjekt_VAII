<?php

use App\Models\Pouzivatel;
use App\Models\Vrchol;
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
        Schema::create('favourite_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function addFavouritePost(Pouzivatel $user, Vrchol $post) {
        $user->favouritePosts()->attach($post->id);
    }


    public function removeFavouritePost(Pouzivatel $user, Vrchol $post) {
        $user->favouritePosts()->detach($post->id);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
