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
        Schema::create('retrospective_user', function (Blueprint $table) {
            $table->string("user_email");
            $table->unsignedBigInteger("retro_id");
            
            $table->foreign("user_email")->references('email')->on('users');
            $table->foreign("retro_id")->references('id')->on('retrospectives');
            $table->primary(["user_email", "retro_id"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retrospective_user');
    }
};


