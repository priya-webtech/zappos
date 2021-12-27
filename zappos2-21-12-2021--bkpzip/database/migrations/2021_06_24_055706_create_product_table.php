<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->char('uuid')->nullable();
            $table->string('title')->nullable();
            $table->text('descripation')->nullable();
            $table->string('image')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->float('compare_price', 8, 2)->nullable();
            $table->float('cost', 8, 2)->nullable();
            $table->float('margin', 8, 2)->nullable();
            $table->float('profit', 8, 2)->nullable();
            $table->integer('selling_price');
            $table->integer('compare_selling_price');
            $table->integer('discount');
            $table->enum('tax',['true','false'])->default('false');
            $table->string('sku')->nullable();
            $table->string('weight')->nullable();
            $table->string('weight_lable')->nullable();
            $table->string('country')->nullable();
            $table->string('hscode')->nullable();
            $table->string('barcode')->nullable();
            $table->enum('trackqtn',['true','false'])->default('false');
            $table->enum('outofstock',['true','false'])->default('false');
            $table->string('stock')->nullable();
            $table->string('location')->nullable();
            $table->string('product_new')->nullable();
            $table->enum('online_store',['true','false'])->default('true');
            $table->enum('point_of_sale',['true','false'])->default('true');
            $table->string('product_type')->nullable();
            $table->string('vender')->nullable();
            $table->text('collection')->nullable();
            $table->string('tags')->nullable();
            $table->enum('status',['active','disabled','invited','declined'])->default('disabled');
            $table->string('variant')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('seo_descripation')->nullable();
            $table->string('seo_utl')->nullable();
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
        Schema::dropIfExists('product');
    }
}
