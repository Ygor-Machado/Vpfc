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
        Schema::create('departures', function (Blueprint $table) {
            $table->id();

            $table->string('away_team_name');
            $table->string('home_team_name');

            $table->string('away_abreviation');
            $table->string('home_abreviation');

            $table->string('match_date');
            $table->string('location');

            $table->string('home_team_logo');
            $table->string('away_team_logo');

            $table->integer('home_team_score')->nullable();
            $table->integer('away_team_score')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departures');
    }
};
