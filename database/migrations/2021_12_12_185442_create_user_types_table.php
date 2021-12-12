<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (! Schema::hasTable('user_types'))
        {
            Schema::create('user_types', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->softDeletes();
                $table->timestamps();
            });

            DB::table('user_types')->insert([[
                'name' => 'Offering'
            ], [
                'name' => 'Seeking'
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
        Schema::dropIfExists('user_types');
    }
}
