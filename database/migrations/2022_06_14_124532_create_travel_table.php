<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('travel_title', 100);
            $table->decimal('price', 6 , 2, true); 
            $table->string('image');
            $table->tinyInteger('traveler_number')->unsigned()->default(1);
            $table->string('departure_aeroport',100);
            $table->string('departure_country',100);
            $table->string('arrival_aeroport',100);
            $table->string('arrival_country',100);
            $table->dateTimeTz('departure_date', 0);
            $table->dateTimeTz('arrival_date', 0);
            $table->boolean('transfert')->nullable();
            $table->string('hotel',50);
            $table->string('hotel_services')->nullable();
            $table->string('flight_company',100)->nullable();
            $table->text('description')->nullable();
            $table->text('note')->nullable();
            $table->boolean('children_allowed')->default(true);
            $table->boolean('pets_allowed')->default(false);
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
        Schema::dropIfExists('travel');
    }
}
