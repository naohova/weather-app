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
        Schema::create('current_weather', function (Blueprint $table)
        {
            $table->id();
            $table->integer('Precipitation_Intensity');
            $table->float('Precipitation_Amount')->nullable();
            $table->integer('Precipitation_Type')->nullable();
            $table->integer('Pressure');
            $table->integer('Humidity');
            $table->string('Icon');
            $table->integer('Geomagnetic_Field');
            $table->integer('Wind_Degree')->nullable();
            $table->integer('Wind_Scale_8')->nullable();
            $table->float('Wind_Speed');
            $table->integer('Cloudiness_Type');
            $table->integer('Cloudiness_Percent');
            $table->integer('Date_Unix');
            $table->string('Kind')->nullable();
            $table->boolean('Storm');
            $table->float('Temperature_Comfort')->nullable();
            $table->float('Temperature_Water')->nullable();
            $table->float('Temperature_Air')->nullable();
            $table->string('Description');
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
        Schema::dropIfExists('current_weather');
    }
};
