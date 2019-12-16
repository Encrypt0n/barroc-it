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
            $table->unsignedBigInteger('company_id');
            $table->string('companyname');
            $table->string('contactpersonname');
            $table->string('contactpersonemail');
            $table->string('contactpersonphone');
            $table->string('companyaddress');
            $table->integer('italian_light')->nullable();
            $table->integer('italian')->nullable();
            $table->integer('italian_deluxe')->nullable();
            $table->integer('italian_deluxe_special')->nullable();
            $table->integer('espresso_beneficio')->nullable();
            $table->integer('yellow_bourbon_brasil')->nullable();
            $table->integer('espresso_roma')->nullable();
            $table->integer('red_honey_honduras')->nullable();
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
