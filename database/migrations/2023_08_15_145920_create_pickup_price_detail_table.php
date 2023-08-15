<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupPriceDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickup_price_detail', function (Blueprint $table) {
            $table->increments('pickup_price_detail_id');

            $table->integer('pickup_price_id');
            $table->string('from');
            $table->string('destination');
            $table->string('price');
            $table->string('notes');
            $table->string('from_in');
            $table->string('destination_in');
            $table->string('price_in');
            $table->string('notes_in');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pickup_price_detail');
    }
}
