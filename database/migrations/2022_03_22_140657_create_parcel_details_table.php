<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *

     * @return void
     */
    public function up()
    {
        Schema::create('parcel_details', function (Blueprint $table) {
            $table->id();
            $table->string('ship_id')->nullable();
            //$table->foreign('ship_id')->references('id')->on('destinations')->onDelete('restrict')->onUpdate('cascade');
            $table->string('parcel_name')->nullable();
            $table->string('weight')->nullable();
            $table->string('Dimension')->nullable();
            $table->string('category')->nullable();
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
        Schema::dropIfExists('parcel_details');
    }
}
