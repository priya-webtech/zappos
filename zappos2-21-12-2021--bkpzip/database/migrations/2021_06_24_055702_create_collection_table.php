<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('collection_type')->nullable();
            $table->enum('condition_match',['1','2'])->default('1');
            $table->text('condition_check')->nullable();
            $table->enum('online_store',['true','false'])->default('true');
            $table->enum('point_of_sale',['true','false'])->default('true');
            $table->string('image')->nullable();
            $table->enum('status',['active','disabled','invited','declined'])->default('active');
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_url')->nullable();
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
        Schema::dropIfExists('collection');
    }
}
