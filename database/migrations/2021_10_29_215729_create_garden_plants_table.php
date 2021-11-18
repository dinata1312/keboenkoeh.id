<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGardenPlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garden_plants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plant_id');
            $table->unsignedInteger('amount');
            $table->unsignedInteger('price')->nullable();
            $table->date('started');
            $table->date('harvest')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('plant_id')->references('id')->on('plant_types')->onUpdate('cascade')->onDelete('cascade');
        });

        // Insert some stuff
        DB::table('garden_plants')->insert(
            array(
                'plant_id'      => 1,
                'amount'        => 2000,
                'price'         => null,
                'started'       => DB::raw('CURRENT_TIMESTAMP'),
                'harvest'       => null,
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garden_plants');
    }
}
