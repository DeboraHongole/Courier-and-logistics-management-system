<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
           // $table->string('inc_id')->nullable();
            $table->string('shipping_id')->nullable();
            $table->bigInteger('from_country')->unsigned();
            $table->foreign('from_country')->references('id')->on('countries')->onDelete('restrict')->onUpdate('cascade');
            $table->bigInteger('to_country')->unsigned();
            $table->foreign('to_country')->references('id')->on('countries')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('destinations');
    }
}
