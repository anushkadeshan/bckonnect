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
            
            $table->bigIncrements('id');
            $table->string('order_number');
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['pending','processing','completed','decline'])->default('pending');
            $table->float('grand_total');
            $table->integer('item_count');
            $table->boolean('is_paid')->default(false);
            $table->enum('payment_method', ['cash_on_delivery', 'paypal','stripe','card'])->default('cash_on_delivery');

            $table->string('country');
            $table->string('fullname');
            $table->string('company_name')->nullable();
            $table->string('street_address');
            $table->string('apartment')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('email');
            $table->string('phone');

            $table->string('shipping_country');
            $table->string('shipping_fullname');
            $table->string('shipping_company_name')->nullable();
            $table->string('shipping_street_address');
            $table->string('shipping_apartment')->nullable();
            $table->string('shipping_city');
            $table->string('shipping_state');
            $table->string('shipping_zip_code');
            $table->string('shipping_email');
            $table->string('shipping_phone');
            $table->string('notes')->nullable();

            $table->timestamps();
            
        });

        Schema::table('orders', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
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
