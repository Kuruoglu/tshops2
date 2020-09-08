<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anons', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('short_desc', 200);
            $table->foreignId('category_id')->constrained();
            $table->string('url');
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->string('service_tax')->nullable();
            $table->string('price_off');
            $table->string('additional_off');
            $table->string('need_cart');
            $table->string('need_qty')->nullable();
            $table->string('img')->nullable();
            $table->date('date_purchase');
            ('d.m.Y');
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
        Schema::dropIfExists('anons');
    }
}
