<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        // Insert some stuff
        DB::table('roles')->insert(
            array(
                'name'      => 'admin'
            )
        );
        DB::table('roles')->insert(
            array(
                'name'      => 'owner'
            )
        );
        DB::table('roles')->insert(
            array(
                'name'      => 'accountant'
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
        Schema::dropIfExists('roles');
    }
}
