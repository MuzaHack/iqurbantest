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
            //$table->id();
            //$table->timestamps();

            $table->id()->startingValue(1000);
            //$table->increments('id');
            $table->string('package_amount')->nullable();
            $table->string('order_name')->nullable();
            $table->string('order_date')->nullable();
            $table->string('order_note')->nullable();
            $table->decimal('order_total', 7, 2)->nullable();
            $table->string('payment_proof')->nullable();

            //$table->integer('user_id')->unsigned()->nullable();
            //$table->foreign('user_id')->references('id')->on('user');
            $table->foreignId('user_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');

            //$table->integer('event_id')->unsigned()->nullable();
            //$table->foreign('event_id')->references('id')->on('event');
            $table->foreignId('event_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');

            $table->timestamp('date_created')->useCurrent();




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
