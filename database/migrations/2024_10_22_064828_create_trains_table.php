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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 64);
            $table->string('dep_station', 64);
            $table->string('arr_station', 64);
            $table->time('dep_time');
            $table->time('arr_time');
            $table->string('train_code', 16);
            $table->tinyInteger('carriages_number')->nullable()->unsigned();
            $table->boolean('on_time')->default(true);
            $table->boolean('canceled')->default(false);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
