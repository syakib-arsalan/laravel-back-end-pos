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
        Schema::create('stock_opname_adjustments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_opname_detail_id')->constrained()->onDelete('cascade');
            $table->integer('adjustment_quantity');
            $table->string('reason');
            $table->integer('user_id'); //relasi?
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_opname_adjustments');
    }
};
