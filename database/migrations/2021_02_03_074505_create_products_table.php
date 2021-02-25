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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shop_id');
            $table->string('name');
            $table->unsignedBigInteger('brand_id');
            $table->string('image');//coverimg
            $table->unsignedBigInteger('product_category_id');
            $table->unsignedBigInteger('product_subcategory_id');
            $table->float('product_price');
            $table->float('product_price_discount'->nullable());
            $table->string('product_small_description');
            $table->string('product_full_description');
            $table->string('product_shipping_and_return');
            $table->string('code');
            $table->integer('status')->default(1);
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
