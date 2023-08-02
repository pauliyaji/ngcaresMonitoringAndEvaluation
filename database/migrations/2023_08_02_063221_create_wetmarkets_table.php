<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWetmarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wetmarkets', function (Blueprint $table) {
            $table->id();
            $table->string('totalWm_upgraded');
            $table->string('wmSellers_f');
            $table->string('wmSellers_m');
            $table->string('wmSellers_total');
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
        Schema::dropIfExists('wetmarkets');
    }
}
