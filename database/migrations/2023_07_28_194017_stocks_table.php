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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('Active'); 
            $table->integer('type_quantity');
            $table->foreignId('armstype_id')->constrained('armstypes')->cascadeOnDelete(); 
            $table->integer('setup_quantity');
            $table->foreignId('armsetup_id')->constrained('armsetups')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};