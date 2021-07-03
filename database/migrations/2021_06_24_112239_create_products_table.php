<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('p_desc')->nullable();
            $table->text('sku');
            $table->foreignId('category_id')->constrained();
            $table->integer('price');
            $table->string('first_image');
            $table->string('second_image');
            $table->string('third_image');
            $table->boolean('isStock')->default(true);
            $table->string('gender');
            $table->string('sizes');
            $table->string('colors');
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
        Schema::dropIfExists('products');
    }
}
