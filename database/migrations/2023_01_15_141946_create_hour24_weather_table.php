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
            $table->integer('Precipitation_Intensity');
            $table->float('Precipitation_Amount')->nullable();
            $table->integer('Precipitation_Type')->nullable();
            $table->integer('Pressure_Max');
            $table->integer('Pressure_Min');
            $table->integer('Humidity_Max');
            $table->integer('Humidity_Min');
            $table->integer('Humidity_Avg');
            $table->integer('Geomgnetic_Field');
            $table->string('Description');
            $table->integer('Cloudiness_Type');
            $table->integer('Cloudiness_Percent');
            $table->dateTime('Date_Local');
            $table->integer('Date_Unix');
            $table->string('Kind')->nullable();
            $table->boolean('Storm');
            $table->float('Temperature_Comfort_Max')->nullable();
            $table->float('Temperature_Comfort_Min')->nullable();
            $table->float('Temperature_Water_Max')->nullable();
            $table->float('Temperature_Water_Min')->nullable();
            $table->float('Temperature_Air_Max')->nullable();
            $table->float('Temperature_Air_Min')->nullable();
            $table->float('Temperature_Air_Avg')->nullable();
            $table->float('Wind_Speed_Max')->nullable();
            $table->float('Wind_Speed_Min')->nullable();
            $table->float('Wind_Speed_Avg')->nullable();
            $table->integer('Wind_Degree_Max')->nullable();
            $table->integer('Wind_Scale_8_Max')->nullable();
            $table->integer('Wind_Degree_Min')->nullable();
            $table->integer('Wind_Scale_8_Min')->nullable();
            $table->integer('Wind_Degree_Avg')->nullable();
            $table->integer('Wind_Scale_8_Avg')->nullable();
            $table->string('Icon');
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
