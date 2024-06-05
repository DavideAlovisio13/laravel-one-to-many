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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('data_science_projects', 255);
            $table->string('web-design_projects', 255);
            $table->string('ui-ux_projects', 255);
            $table->string('mobile_projects', 255);
            $table->string('game_projects', 255);
            $table->string('machine_learning_projects', 255);
            $table->string('other_projects', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
