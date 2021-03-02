<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('shopmall_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('phone')->lenght(15);
            $table->string('enterpreneur_type');
            $table->string('logo');
            $table->text('slider_image');
            $table->string('cover_image');
            $table->string('offer_image')->nullable();
            $table->string('floor');
            $table->string('shop_no');
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
        Schema::dropIfExists('shops');
    }
}
