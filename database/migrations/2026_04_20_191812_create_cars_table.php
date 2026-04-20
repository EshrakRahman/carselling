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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maker_id')->constrained('makers');
            $table->foreignId('model_id')->constrained('models'); // Fixed typo here
            $table->integer('year');
            $table->integer('price');
            $table->integer('mileage');
            $table->string('vin');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('car_type_id')->constrained('car_types');
            $table->foreignId('fuel_type_id')->constrained('fuel_types');
            $table->foreignId('city_type_id')->constrained('cities_type');
            $table->string('address');
            $table->string('phone');
            $table->longText('description')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->softDeletes(); // This ensures deleted_at is NULLABLE
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
