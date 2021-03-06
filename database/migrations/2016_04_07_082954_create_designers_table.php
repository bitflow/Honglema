<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designers', function (Blueprint $table) {
            $table->increments('designer_id');
            $table->string('designType');
            $table->string('username');
            $table->string('mobile');
            $table->string('weixinNo');
            $table->string('title');
            $table->string('company');
            $table->string('country');
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('address');
            $table->string('designExperience');
            $table->boolean('designTeam');
            $table->boolean('brand');
            $table->string('designBrand');
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('designers');
    }
}
