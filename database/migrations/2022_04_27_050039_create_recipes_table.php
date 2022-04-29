<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->nullable();
            $table->string('medicamento')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('dosis')->nullable();
            $table->string('duracion')->nullable();
            $table->string('cantidad')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}
