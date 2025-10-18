<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->nullable();
            $table->string('experience_level')->nullable();
            $table->string('favorite_artists')->nullable();
            $table->string('favorite_genre')->nullable();
            $table->string('equipment')->nullable();
            $table->string('music_mood')->nullable();
            $table->string('location')->nullable();
            $table->boolean('available_for_collaboration')->default(false);
            $table->string('tags')->nullable();
            $table->string('profile_picture')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'role', 'experience_level', 'favorite_artists', 
                'favorite_genre', 'equipment', 'music_mood', 
                'location', 'available_for_collaboration', 'tags', 'profile_picture'
            ]);
        });
    }
};