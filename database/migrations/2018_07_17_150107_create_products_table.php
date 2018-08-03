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
            $table->increments('id');
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('product_code')->nullable();
            $table->string('sku')->nullable();
            $table->string('color')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('price')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->date('date_on_sale_from')->nullable();
            $table->date('date_on_sale_to')->nullable();
            $table->boolean('manage_stock')->nullable();
            $table->integer('stock_quantity')->nullable();
            $table->string('stock_status')->nullable();
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
