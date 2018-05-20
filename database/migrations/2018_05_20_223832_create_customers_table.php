<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fist_name');
            $table->string('last_name');
            $table->bigInteger('dni');
            $table->bigInteger('cellphone');
            $table->string('address');
            $table->integer('banc_id')->unsigned()->default(0);
            $table->integer('company_id')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('banc_id')->references('id')->on('bancs');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
