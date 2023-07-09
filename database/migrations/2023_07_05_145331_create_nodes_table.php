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
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->ipAddress('ip');
            $table->boolean('status')->default(true);
            $table->foreignId('partner_id')
                ->constrained('partners')->cascadeOnDelete();
            $table->string('disk_size')->nullable();
            $table->string('used_disk_size')->nullable();
            $table->string('free_disk_size')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nodes');
    }
};
