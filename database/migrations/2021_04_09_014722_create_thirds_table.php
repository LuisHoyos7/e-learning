<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('photo');
            $table->string('mobile');
            $table->string('address');
            $table->string('identification');
            $table->string('profession');
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('thirds');
    }
}
