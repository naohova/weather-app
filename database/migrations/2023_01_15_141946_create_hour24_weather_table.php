<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hour24_weather', function (Blueprint $table) {
            $table->id();
            $table->string('kind');
            $table->integer('tod');
            $table->integer('dateUnix');
            $table->float('temperatureAir')->nullable();
            $table->float('temperatureComfort')->nullable();
            $table->float('temperatureWater')->nullable();
            $table->string('description');
            $table->integer('humidity');
            $table->integer('pressure');
            $table->integer('cloudinessPercent');
            $table->integer('cloudinessType');
            $table->boolean('storm');
            $table->integer('precipitationType');
            $table->float('precipitationAmount')->nullable();
            $table->integer('precipitationIntensity');
            $table->integer('phenominon')->nullable();
            $table->string('icon');
            $table->integer('gm');
            $table->integer('windScale_8');
            $table->integer('windDegree');
            $table->float('windSpeed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hour24_weather');
    }
};
