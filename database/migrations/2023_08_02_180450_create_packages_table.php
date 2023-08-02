<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('packages_id');
            $table->string('slug');
            $table->string('packages_name');
            $table->string('packages_name_in');
            $table->string('packages_duration');
            $table->string('packages_duration_in');
            $table->string('minimun_order');
            $table->string('minimun_order_in');
            $table->string('price');
            $table->string('price_in');
            $table->text('description');
            $table->text('description_in');
            $table->text('image');

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
        Schema::dropIfExists('packages');
    }
}
