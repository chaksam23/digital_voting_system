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
    // {
    //     Schema::create('voter_id', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('voter_name');
    //         $table->string('voter_phone')->unique();
    //         $table->string('voter_password');
    //         $table->string('group')->default('voter');
    //         $table->timestamps();
    //     });
    // }
    {
        Schema::create('voter_id', function (Blueprint $table) {
            $table->id();
            $table->string('voter_name');
            $table->string('voter_phone')->unique();
            $table->string('voter_password');
            $table->string('group')->default('voter');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voter_id');
    }
};
