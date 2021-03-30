<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tapp', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->unique();
            $table->integer('state_id');
            $table->integer('status_id');
            $table->string('description',500);
            $table->string('db_name',100);
            $table->string('url_address',200);
            $table->string('url_icon',300);
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
        Schema::dropIfExists('tapp');
    }
}
