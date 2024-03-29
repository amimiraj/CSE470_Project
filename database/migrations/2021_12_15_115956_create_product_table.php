<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('product', function (Blueprint $table) {

            $table->id('product_id');
            $table->string('product_name');
            $table->string('product_description')->nullable();
            $table->string('product_category');
            $table->string('product_code');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('product');
    }

}
