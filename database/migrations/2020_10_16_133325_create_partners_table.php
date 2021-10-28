<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('middleman');
            $table->string('phone_number');
            $table->text('address');
            $table->string('image');
            $table->timestamps();
        });
        
        // Insert some stuff
        DB::table('partners')->insert(
            array(
                'name'          => 'PT Tanihub',
                'email'         => 'atta@gmail.com',
                'middleman'     => 'Atta Aja',
                'phone_number'  => '082239164646',
                'address'       => 'Malang',
                'image'         => 'https://res.cloudinary.com/tia-img/image/fetch/t_company_avatar/https%3A%2F%2Fcdn.techinasia.com%2Fdata%2Fimages%2F1c081e81df808dff8f0e830603788a66.jpg',
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
        Schema::dropIfExists('partners');
    }
}
