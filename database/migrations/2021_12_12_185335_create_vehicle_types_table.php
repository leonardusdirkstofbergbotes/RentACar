<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('vehicle_types'))
        {
            Schema::create('vehicle_types', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->softDeletes();
                $table->timestamps();
            });

            DB::table('vehicle_types')->insert([[
                'name' => 'Sedan'
            ],[
                'name' => 'Coupe'
            ],[
                'name' => 'Sport'
            ],[
                'name' => 'Station Wagon'
            ],[
                'name' => 'Hatchback (2 seater)'
            ],[
                'name' => 'Hatchback (4+ seater)'
            ],[
                'name' => 'Convertible'
            ],[
                'name' => 'SUV (Sport Utility Vehicle)'
            ],[
                'name' => 'Mini Van'
            ],[
                'name' => 'Pickup Truck'
            ]]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_types');
    }
}
