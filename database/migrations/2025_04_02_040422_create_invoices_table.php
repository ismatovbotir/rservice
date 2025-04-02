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
        Schema::create('invoices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('price_type_id')->nullable();
            $table->foreignUuid('client_id')->nullable()->constrained();
            $table->foreignUuid('user_id')->nullable()->constrained();
            $table->decimal('discount_val',2)->default(0);
            $table->enum('discount_type',['%','$'])->default('$');
            $table->decimal('total',2)->default(0);
            $table->boolean('temp')->default('true');
            $table->enum('type',['module','item','service'])->default('ofd');
            $table->boolean('subscription')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
