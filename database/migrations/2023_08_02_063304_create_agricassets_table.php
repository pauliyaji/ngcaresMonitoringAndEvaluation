<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgricassetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agricassets', function (Blueprint $table) {
            $table->id();
            $table->string('aA_f');
            $table->string('aA_m');
            $table->string('aA_total');
            $table->integer('state_id');
            $table->integer('user_id');
            $table->integer('quarter_id');
            $table->integer('year');
            $table->integer('sccuID');
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
        Schema::dropIfExists('agricassets');
    }
}
