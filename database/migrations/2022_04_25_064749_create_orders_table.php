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
            $table->integer('cart_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name')->nullable();;
            $table->string('company')->nullable();
            $table->string('country');
            $table->string('province');
            $table->text('address');
            $table->string('postcode')->nullable();;
            $table->string('whatsapp');
            $table->integer('not_whatsapp')->default(0);
            $table->string('email');
            $table->text('notes')->nullable();
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
