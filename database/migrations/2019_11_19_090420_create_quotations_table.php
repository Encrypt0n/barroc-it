<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sales_id');
            $table->string('companyname');
            $table->string('contactpersonname');
            $table->string('contactpersonemail');
            $table->string('contactpersonphone');
            $table->string('companyaddress');
            $table->integer('italian_light');
            $table->integer('italian');
            $table->integer('italian_deluxe');
            $table->integer('italian_deluxe_special');
            $table->integer('espresso_beneficio');
            $table->integer('yellow_bourbon_brasil');
            $table->integer('espresso_roma');
            $table->integer('red_honey_honduras');

//            $table->integer('Rubbber(10mm)');
//            $table->integer('Rubber(14mm)');
//            $table->integer('Slang');
//            $table->integer('Voeding');
//            $table->integer('Ontkalker');
//            $table->integer('Waterfilter');
//            $table->integer('Reservoir sensor');
//            $table->integer('Druppelstop');
            $table->boolean('accepted');
            $table->timestamps();

//            $table->foreign('sales_id')
//                ->references('id')
//                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
