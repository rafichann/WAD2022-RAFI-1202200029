<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name', 255);
            $table->string('owner', 255);
            $table->string('brand', 255);
            $table->date('purchase_date');
            $table->text('description');
            $table->string('image', 255);
            $table->enum('status', ['Lunas', 'Belum Lunas']);
            $table->timestamps();
        });
        Schema::rename('shoms', 'showrooms');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       


    }
};
