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
        Schema::create('lecturas', function (Blueprint $table) {
            $table->id();
            $table->date('dt');
            $table->float('LandAverageTemperature');
            $table->float('LandAverageTemperatureUncertainty');
            $table->float('LandMaxTemperature');
            $table->float('LandMaxTemperatureUncertainty');
            $table->float('LandMinTemperature');
            $table->string('LandMinTemperatureUncertainty');
            $table->string('LandAndOceanAverageTemperature');
            $table->string('LandAndOceanAverageTemperatureUncertainty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturas');
    }
};
