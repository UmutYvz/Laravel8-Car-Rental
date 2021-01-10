<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',100)->nullable();
            $table->integer('category_id')->nullable();
            $table->text('detail')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('brand',50);
            $table->integer('brand_id');
            $table->string('model',50);
            $table->string('year',50);
            $table->string('price',100);
            $table->string('licance_plate',50);
            $table->integer('engine_power');
            $table->string('fuel_type',20);
            $table->string('color',20);
            $table->string('gear_type',20);            
            $table->string('slug',100);            
            $table->string('status',5)->nullable()->default('False');
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
        Schema::dropIfExists('cars');
    }
}
