<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_shippings', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->string('transactionid');
            $table->bigInteger('netamout');
            $table->enum('paymentstatus', ['success', 'pending', 'failed'])->default('failed');
            $table->Integer('addr_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('address')->nullable();
            $table->string('company')->nullable();
            $table->string('unit_number')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->Integer('pincode')->nullable();
            $table->bigInteger('mobile')->nullable();   
            $table->enum('billing_type', ['yes', 'no'])->nullable();
            $table->enum('new_address', ['yes', 'no'])->nullable();
            $table->Integer('b_addr_id')->nullable();
            $table->string('b_first_name')->nullable();
            $table->string('b_last_name')->nullable();
            $table->text('b_address')->nullable();
            $table->string('b_company')->nullable();
            $table->string('b_unit_number')->nullable();
            $table->string('b_city')->nullable();
            $table->string('b_country')->nullable();
            $table->Integer('b_pincode')->nullable();
            $table->bigInteger('b_mobile')->nullable();   
            $table->enum('b_billing_type', ['yes', 'no'])->nullable();
            $table->enum('b_new_address', ['yes', 'no'])->nullable();
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
        Schema::dropIfExists('order_shippings');
    }
}
