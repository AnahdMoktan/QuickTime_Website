<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintingFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printing_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product');
            $table->string('category');
            $table->string('size');
            $table->string('color');
            $table->string('paperweight');
            $table->string('lamination');
            $table->string('quantity');
            $table->string('name');
            $table->string('company_name');
            $table->string('address');
            $table->string('contact');
            $table->string('email');
            $table->string('message');
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
        Schema::dropIfExists('printing_forms');
    }
}
