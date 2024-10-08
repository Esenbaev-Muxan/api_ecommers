<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->json('attributes')->nullable();
            $table->integer('quantity')->default(1);
            $table->unsignedBigInteger('added_price')->default(0)->nullable();
            $table->timestamps();
        });
    }



    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
