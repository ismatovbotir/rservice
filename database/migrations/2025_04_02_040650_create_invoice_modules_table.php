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
        Schema::create('invoice_modules', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('invoice_id')->constrained();
            $table->foreignId('module_id')->contrained();
            $table->float('total')->default(100000);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_modules');
    }
};
