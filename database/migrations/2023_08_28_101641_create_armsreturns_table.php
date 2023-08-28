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
        Schema::create('armsreturns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('armstype_id')->constrained('armstypes')->cascadeOnDelete(); 
            $table->foreignId('rank_id')->constrained('ranks')->cascadeOnDelete();
            $table->date('date');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armsreturns');
    }
};
