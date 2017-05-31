<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWizardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wizards', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email',100);
            $table->string('fname',100);
            $table->string('lname',100);
            $table->string('country',50);
            $table->string('city',50);
            $table->string('postal',50);
            $table->string('wphone',20);
            $table->string('hphone',20);
            $table->string('etc',100);

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
        Schema::drop('wizards');
    }
}
