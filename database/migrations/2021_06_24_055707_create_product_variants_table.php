<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->integer('varient1')->nullable();
            $table->text('attribute1')->nullable();
            $table->integer('varient2')->nullable();
            $table->text('attribute2')->nullable();
            $table->integer('varient3')->nullable();
            $table->text('attribute3')->nullable();
            $table->integer('varient4')->nullable();
            $table->text('attribute4')->nullable();
            $table->integer('varient5')->nullable();
            $table->text('attribute5')->nullable();
            $table->integer('varient6')->nullable();
            $table->text('attribute6')->nullable();
            $table->integer('varient7')->nullable();
            $table->text('attribute7')->nullable();
            $table->integer('varient8')->nullable();
            $table->text('attribute8')->nullable();
            $table->integer('varient9')->nullable();
            $table->text('attribute9')->nullable();
            $table->integer('varient10')->nullable();
            $table->text('attribute10')->nullable();
            $table->text('photo')->nullable();
            $table->bigInteger('price')->nullable();
            $table->float('selling_price', 8, 2)->nullable();
            $table->bigInteger('cost')->nullable();
            $table->bigInteger('margin')->nullable();
            $table->bigInteger('profit')->nullable();
            $table->text('sku')->nullable();
            $table->enum('trackqtn',['0','1'])->default('1');
            $table->enum('outofstock',['0','1'])->default('1');
            $table->string('barcode')->nullable();
            $table->string('location')->nullable();
            $table->string('hscode')->nullable();
            $table->string('weight')->nullable();
            $table->string('weight_lable')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('product_variants');
    }
}
