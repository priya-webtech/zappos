<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid');
            $table->Integer('user_id');
            $table->string('transactionid');
            $table->bigInteger('netamout');
            $table->enum('paymentstatus', ['success', 'pending', 'failed'])->default('failed');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->string('unit_number');
            $table->string('city');
            $table->string('country');
            $table->Integer('pincode');
            $table->bigInteger('mobile');   
            $table->enum('billing_type', ['yes', 'no']);
            $table->enum('new_address', ['yes', 'no']);
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
        Schema::dropIfExists('orders');
    }
}
