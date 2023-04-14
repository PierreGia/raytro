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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->text('commentaire');
            $table->boolean('type');//si c'est 0 le feedback est positif si c'est 1 le feedback est négatif;
            $table->unsignedBigInteger("retro_id");
            $table->foreign("retro_id")->references("id")->on("retrospectives");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
