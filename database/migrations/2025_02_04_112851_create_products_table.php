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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id продукта
            $table->unsignedBigInteger('sku'); // SKU продукта
            $table->unsignedBigInteger('city_id'); // id города
            $table->timestamps(); // created_at и updated_at

            // Внешний ключ для связи с таблицей cities
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            // Индексы
            $table->index('sku');
            $table->index('city_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
