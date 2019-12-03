<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supply_categories_id');
            $table->string('name');
            $table->decimal('price');
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
            $table->smallInteger('amount');
            $table->timestamps();

            $table->foreign('supply_categories_id')
                ->references('id')
                ->on('supply_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplies');
    }
}
