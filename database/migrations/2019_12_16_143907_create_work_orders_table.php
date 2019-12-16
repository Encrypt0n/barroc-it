<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('calendar_id');
            $table->unsignedBigInteger('supply_id');
            $table->text('note');
            $table->boolean('finished');
            $table->timestamps();

            $table->foreign('calendar_id')
                    ->references('id')
                    ->on('calendars');
            
            $table->foreign('supply_id')
                    ->references('id')
                    ->on('supplies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_orders');
    }
}
