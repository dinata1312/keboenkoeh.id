<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGardenOwners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garden_owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id');
            $table->enum('type',['kerjasama','sendiri']);
            $table->integer('large')->unsigned();
            $table->text('location');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            
            // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('partner_id')->references('id')->on('partners')->onUpdate('cascade')->onDelete('cascade');
            
        });
        
        // Insert some stuff
        DB::table('garden_owners')->insert(
            array(
                'partner_id'=> 1,
                'type'      => 'kerjasama',
                'large'     => 150,
                'location'  => 'Kebun Satu',
                'created_at'=> DB::raw('CURRENT_TIMESTAMP'),
                'updated_at'=> DB::raw('CURRENT_TIMESTAMP'),
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
        Schema::dropIfExists('garden_owners');
        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
