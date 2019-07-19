<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WeatherData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('Weather_data', function (Blueprint $table) {
        $table->string('time');
        $table->string('lev');
        $table->string('hs');
        $table->string('hx');
        $table->string('tp');
        $table->string('tm01');
        $table->string('tm02');
        $table->string('dp');
        $table->string('dpm');
        $table->string('hs_sw1');
        $table->string('hs_sw8');
        $table->string('tp_sw1');
        $table->string('tp_sw8');
        $table->string('dpm_sw8');
        $table->string('dpm_sw1');
        $table->string('hs_sea8');
        $table->string('hs_sea');
        $table->string('tp_sea8');
        $table->string('tp_sea');
        $table->string('tm_sea');
        $table->string('dpm_sea8');
        $table->string('dpm_sea');
        $table->string('hs_ig');
        $table->string('hs_fig');
        $table->string('wsp');
        $table->string('gst');
        $table->string('wd');
        $table->string('wsp100');
        $table->string('wsp50');
        $table->string('wsp80');
        $table->string('precip');
        $table->string('tmp');
        $table->string('rh');
        $table->string('vis');
        $table->string('cld');
        $table->string('cb');
        $table->string('csp0');
        $table->string('cd0');
        $table->string('ss');
        $table->string('sst');
        });

      
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather_data');
    }
}
