<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFullSpacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('full_spacs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bike_id')->nullable();

            //Engine Specs
            $table->string('engine_type')->nullable();
            $table->string('displacement')->nullable();
            $table->string('max_power')->nullable();
            $table->string('max_torque')->nullable();
            $table->string('top_speed')->nullable();
            $table->string('bore')->nullable();
            $table->string('stroke')->nullable();
            $table->string('carburetor')->nullable();
            $table->string('compression_ratio')->nullable();
            $table->string('cooling')->nullable();
            $table->string('start_method')->nullable();
            $table->string('ignition')->nullable();
            $table->string('gears')->nullable();
            $table->string('clutch')->nullable();

            //Body Spacs
            $table->string('overall_length')->nullable();
            $table->string('overall_width')->nullable();
            $table->string('overall_height')->nullable();
            $table->string('saddle_height')->nullable();
            $table->string('wheel_base')->nullable();
            $table->string('ground_clearance')->nullable();
            $table->string('fuel_tank_cap')->nullable();
            $table->string('kerb_weight')->nullable();

            //Suspension & break
            $table->string('front_suspension')->nullable();
            $table->string('back_suspension')->nullable();
            $table->string('front_break')->nullable();
            $table->string('rear_break')->nullable();
            $table->string('abs')->nullable();

            //Tyres
            $table->string('front_tyre')->nullable();
            $table->string('back_tyre')->nullable();
            $table->string('front_wheel')->nullable();
            $table->string('rear_wheel')->nullable();


            //Electronics
            $table->string('battery')->nullable();
            $table->string('head_lamp')->nullable();
            $table->string('tail_lamp')->nullable();
            $table->string('turn_signal_lamp')->nullable();
            $table->string('pilot_lamp')->nullable();

            //others
            $table->string('pass_light')->nullable();
            $table->string('odometer')->nullable();
            $table->string('speedometer')->nullable();
            $table->string('signal_light')->nullable();


            //About, General description
            $table->longText('gen_description')->nullable();
            $table->longText('disclaimer')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('full_spacs');
    }
}
