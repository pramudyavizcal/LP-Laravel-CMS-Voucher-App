<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 12, 2);
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->boolean('is_best_seller')->default(false);
            $table->boolean('is_promo')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
