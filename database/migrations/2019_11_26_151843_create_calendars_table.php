<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('maintenance_id');
            $table->date('date');
            $table->text('to_repair');
            $table->text('to_use');
            $table->boolean('finished');
            $table->timestamps();

            $table->foreign('type_id')
                ->references('id')
                ->on('calendar_types');

            $table->foreign('company_id')
                ->references('id')
                ->on('company_details');

            $table->foreign('maintenance_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendars');
    }
}
