<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('bike_name')->nullable();
            $table->string('url')->nullable();
            $table->string('bike_model')->nullable();
            $table->string('bike_color')->nullable();
            $table->string('engine')->nullable();
            $table->string('mileage')->nullable();
            $table->longText('description')->nullable();
            $table->string('price')->nullable();
            $table->string('price_comma')->nullable();
            $table->string('image')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->text('youtube_link')->nullable();

            //Full Specs
            $table->string('engine_type')->nullable();
            //$table->string('displacement')->nullable();
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
        Schema::dropIfExists('bikes');
    }
}
