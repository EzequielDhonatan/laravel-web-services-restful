<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');

            $table->integer('category_id')->unsigned(); // CATEGORY
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // CATEGORY

            $table->string('name', 100)->unique(); // NAME
            $table->text('description', 100)->nullable(); // DESCRIPTION
            $table->string('image')->nullable(); // IMAGE

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
