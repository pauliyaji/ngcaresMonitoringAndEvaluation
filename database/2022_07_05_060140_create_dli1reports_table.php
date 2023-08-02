<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDli1reportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dli1reports', function (Blueprint $table) {
            $table->id();
            $table->string('dli1_id');
            $table->string('dli');
            $table->string('desc');
            $table->string('monthyear');
            $table->string('Abia');
            $table->string('Adamawa');
            $table->string('Akwa Ibom');
            $table->string('Anambra');
            $table->string('Bauchi');
            $table->string('Bayelsa');
            $table->string('Benue');
            $table->string('Borno');
            $table->string('Cross River');
            $table->string('Delta');
            $table->string('Ebonyi');
            $table->string('Edo');
            $table->string('Ekiti');
            $table->string('Enugu');
            $table->string('Gombe');
            $table->string('Imo');
            $table->string('Jigawa');
            $table->string('Kaduna');
            $table->string('Kano');
            $table->string('Katsina');
            $table->string('Kebbi');
            $table->string('Kogi');
            $table->string('Kwara');
            $table->string('Lagos');
            $table->string('Nassarawa');
            $table->string('Niger');
            $table->string('Ogun');
            $table->string('Ondo');
            $table->string('Osun');
            $table->string('Oyo');
            $table->string('Plateau');
            $table->string('Rivers');
            $table->string('Sokoto');
            $table->string('Taraba');
            $table->string('Yobe');
            $table->string('Zamfara');
            $table->string('Abuja');
            $table->string('total');
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
        Schema::dropIfExists('dli1reports');
    }
}
