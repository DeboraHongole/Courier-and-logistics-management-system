<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusnessContactTosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busness_contact_tos', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('dest_id')->unsigned();
            //$table->foreign('dest_id')->references('id')->on('destinations')->onDelete('restrict')->onUpdate('cascade');
            //$table->string('inc_dest_id')->nullable();
            $table->string('country_id')->nullable();
            $table->string('region_id')->nullable();
            $table->string('full_name')->nullable();
            $table->string('company')->nullable();
            $table->string('to_email')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_type')->nullable();
            $table->string('code')->nullable();
            $table->string('phone')->nullable();
            $table->string('vat')->nullable();
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
        Schema::dropIfExists('busness_contact_tos');
    }
}
