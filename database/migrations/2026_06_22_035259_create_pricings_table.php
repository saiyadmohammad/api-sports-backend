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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('tag')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->decimal('price', 8, 2);
            $table->string('currency', 10);
            $table->string('duration');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->json('features')->nullable();
            $table->string('button_text');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
