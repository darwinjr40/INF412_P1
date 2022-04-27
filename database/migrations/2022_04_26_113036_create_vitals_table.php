<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitals', function (Blueprint $table) {
            $table->id();
            $table->string('presion')->nullable();
            $table->string('pulso')->nullable();
            $table->string('peso')->nullable();
            $table->string('estatura')->nullable();
            $table->string('temperatura')->nullable();
            $table->string('fre_cardiaca')->nullable();
            $table->string('fre_respiratoria')->nullable();
            $table->string('imc')->nullable();
            $table->string('estado')->nullable();
            $table->string('saturacion')->nullable();
            $table->unsignedBigInteger('inquiry_id')->nullable();
            $table->foreign('inquiry_id')->references('id')->on('inquiries')->onDelete('cascade');
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
        Schema::dropIfExists('vitals');
    }
}
