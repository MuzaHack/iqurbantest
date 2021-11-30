<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();

            $table->id()->startingValue(1000);
            //$table->increments('id');
            $table->string('organization_name');
            $table->string('organization_type');
            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_no');
            $table->string('event_type');
            $table->string('event_date')->nullable();
            $table->string('event_title');
            $table->string('event_description');
            $table->string('event_location');
            $table->string('event_contact');
            $table->string('event_image')->nullable();
            $table->string('livestock_type');
            $table->decimal('livestock_price', 7, 2);
            $table->timestamp('date_created')->useCurrent();

            $table->foreignId('user_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
