<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('license_codes'))
        {
            Schema::create('license_codes', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description', 600);
                $table->string('state');
                $table->string('country');
                $table->softDeletes();
                $table->timestamps();
            });

            DB::table('license_codes')->insert([[
                'name' => 'A1',
                'description' => 'Motorcycles with an engine capacity of 125 cubic centimetres or less',
                'state' => 'All',
                'country' => 'South Africa'
            ],[
                'name' => 'A',
                'description' => 'Motorcycles with an engine capacity greater than 125 cc',
                'state' => 'All',
                'country' => 'South Africa'
            ],[
                'name' => 'B',
                'description' => 'Vehicles (except motorcycles) with tare weight of 3,500 kilograms or less; and minibuses, buses and goods vehicles with gross vehicle mass (GVM) of 3,500 kg or less. A trailer with GVM of 750 kg or less may be attached.',
                'state' => 'All',
                'country' => 'South Africa'
            ],[
                'name' => 'EB',
                'description' => 'Articulated vehicles with gross combination mass (GCM) of 3,500 kg or less; and vehicles allowed by Code B but with a trailer with GVM greater than 750 kg.',
                'state' => 'All',
                'country' => 'South Africa'
            ],[
                'name' => 'C1',
                'description' => 'In South Africa, driving licences are issued with various codes that indicate the types of vehicle that may be driven with that licence. To transport fare-paying passengers or tourists for a fee, you must have a professional driving permit (PrDP). For example, a Code EC1 licence includes codes B, EB and C1.',
                'state' => 'All',
                'country' => 'South Africa'
            ],[
                'name' => 'C',
                'description' => 'Buses and goods vehicles with GVM greater than 16,000 kg. A trailer with GVM of 750 kg or less may be attached.',
                'state' => 'All',
                'country' => 'South Africa'
            ],[
                'name' => 'EC1',
                'description' => 'Articulated vehicles with GCM between 3,500 kg and 16,000 kg; and vehicles allowed by Code C1 but with a trailer with GVM greater than 750 kg.',
                'state' => 'All',
                'country' => 'South Africa'
            ],[
                'name' => 'EC',
                'description' => 'Articulated vehicles with GCM greater than 18,000 kg; and vehicles allowed by Code C but with a trailer with GVM greater than 750 kg.',
                'state' => 'All',
                'country' => 'South Africa'
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
        Schema::dropIfExists('license_codes');
    }
}
