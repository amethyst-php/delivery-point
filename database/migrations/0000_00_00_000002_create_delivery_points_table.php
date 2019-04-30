<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryPointsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.delivery-point.data.delivery-point.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->integer('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on(Config::get('amethyst.delivery-point.data.delivery-point-vendor.table'));
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on(Config::get('amethyst.address.data.address.table'));
            $table->string('address_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.delivery-point.data.delivery-point.table'));
    }
}
