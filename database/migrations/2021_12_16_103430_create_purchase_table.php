<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('purchase', function (Blueprint $table) {
            
            
            $table->id('purchase_id');
            $table->string('product_name');
            $table->string('brand_name');
            $table->string('supplier_name');
            $table->integer('product_quantity');
            $table->integer('purchase_price');
            $table->integer('sale_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('purchase');
    }

}
