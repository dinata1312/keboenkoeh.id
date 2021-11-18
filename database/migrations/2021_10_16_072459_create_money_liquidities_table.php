<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyLiquiditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_liquidities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->nullable();
            $table->foreignId('partner_id')->nullable();
            $table->text('notes');
            $table->enum('type', ['expense','income']);
            $table->integer('amount')->unsigned();
            $table->integer('price')->unsigned();
            $table->string('image');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('partner_id')->references('id')->on('partners')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        });
        
        // Insert some stuff
        DB::table('money_liquidities')->insert(
            array(
                'name'      => 'Pembelian multivitamin',
                'category_id'      => null,
                'partner_id'      => 1,
                'notes'      => 'Pembelian dilakukan melalui marketplace',
                'type'      => 'expense',
                'amount'      => 2000,
                'price'     => 200000,
                'image'     => 'https://cf.shopee.co.id/file/e78f2f49e3d2fe6732470a42f7e94cff',
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
        Schema::dropIfExists('money_liquidities');
    }
}
