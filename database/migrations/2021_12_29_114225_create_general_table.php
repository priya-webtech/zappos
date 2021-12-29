<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general', function (Blueprint $table) {
            $table->id();
            $table->string('store_name')->nullable();
            $table->string('favicon_logo')->nullable();
            $table->string('backend_logo')->nullable();
            $table->string('_email')->nullable();
            $table->string('sender_email')->nullable();
            $table->enum('status',['active','disabled','invited','declined'])->default('disabled');
            $table->string('industry')->nullable();
            $table->string('company')->nullable();
            $table->text('address')->nullable();
            $table->string('apartment')->nullable();
            $table->bigInteger('mobile_number')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('pincode')->nullable();
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
        Schema::dropIfExists('general');
    }
}
