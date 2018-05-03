<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id')->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title')->nullable();;
            $table->text('description')->nullable();;
            $table->string('img')->nullable();;
            $table->text('info')->nullable();;
            $table->string('manufacturer')->nullable();;
            $table->string('color')->nullable();;
            $table->string('manufactur_country')->nullable();;
            $table->text('manual')->nullable();;
            $table->string('weight')->nullable();;
            $table->text('mode_application')->nullable();;
            $table->integer('price')->nullable();;
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
        Schema::drop('apps');
    }
}
