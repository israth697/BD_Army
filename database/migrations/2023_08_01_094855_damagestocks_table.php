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
        Schema::create('damagestocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('armstype_id')->constrained('armstypes')->cascadeOnDelete(); 
            $table->string('amount');
            $table->string('purpose');
            $table->string('submition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damagestocks');
    }
};
