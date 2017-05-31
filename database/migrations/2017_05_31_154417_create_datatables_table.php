<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatatablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatables', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name',100);
            $table->string('phone',100);
            $table->string('company',100);
            $table->string('zip',50);
            $table->string('city',50);
            $table->date('date');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('datatables');
    }
}
