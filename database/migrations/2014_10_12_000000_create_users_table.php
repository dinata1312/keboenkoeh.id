<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('role_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
        
        // Insert some stuff
        DB::table('users')->insert(
            array(
                'name'      => 'Atta Gledek',
                'email'     => 'attacutes@gmail.com',
                'role_id'   => 1,
                'password'  => Hash::make('12345678'),
                'created_at'=> DB::raw('CURRENT_TIMESTAMP'),
                'updated_at'=> DB::raw('CURRENT_TIMESTAMP'),
            )
        );
        DB::table('users')->insert(
            array(
                'name'      => 'Michael Handoko',
                'email'     => 'handokoiscute@gmail.com',
                'role_id'   => 2,
                'password'  => Hash::make('12345678'),
                'created_at'=> DB::raw('CURRENT_TIMESTAMP'),
                'updated_at'=> DB::raw('CURRENT_TIMESTAMP'),
            ),
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
        Schema::dropIfExists('users');
        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
