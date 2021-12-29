<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeletedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deleted_products', function (Blueprint $table) {
            $table->id();
            $table->string('idOnproductTable')->nullable();
            $table->string('deleted_name')->nullable();
            $table->string('deleted_price')->nullable();
            $table->string('deleted_description')->nullable();
            $table->string('deleted_quantity')->nullable();
            $table->string('deleted_image')->nullable();
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
        Schema::dropIfExists('deleted_products');
    }
}
