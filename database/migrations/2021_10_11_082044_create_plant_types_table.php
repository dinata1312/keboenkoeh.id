<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_types', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('garden_id');
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            // $table->foreign('garden_id')->references('id')->on('garden_owners')->onUpdate('cascade')->onDelete('cascade');
        });

        // Insert some stuff
        DB::table('plant_types')->insert(
            array(
                'name'        => 'Tembakau',
                'description' => 'Tembakau adalah tumbuhan',
                'image'       => 'https://www.jne.co.id/frontend/images/material/logo.jpg',
                'created_at'  => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at'  => DB::raw('CURRENT_TIMESTAMP'),
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
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('plant_types');
        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
