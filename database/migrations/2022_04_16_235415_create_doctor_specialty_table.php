<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorSpecialtyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_specialty', function (Blueprint $table) {
            $table->id();
            // $table->primary(['doctor_id', 'specialty_id']);
            /* $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories'); */
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            $table->foreignId('specialty_id')->constrained()->onDelete('cascade');//si eliminamos la categoria(se eliminaran los posts asociados ala categoria)
            $table->date('fecha')->nullable();
            

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
        Schema::dropIfExists('doctor_specialty');
    }
}
