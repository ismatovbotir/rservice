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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('val')->unique();
            $table->foreignUuid('location_id')->nullable()->constrained();
            $table->foreignUuid('company_id')->nullable()->contrained();
            $table->foreignUuid('client_id')->nullable()->constrained();
            $table->enum('status',['new','active','inactive'])->default('new');
            $table->foreignUuid('user_id')->constrained();
            $table->date('activated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
