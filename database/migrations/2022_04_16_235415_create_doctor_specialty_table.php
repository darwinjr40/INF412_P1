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
            
            // $table->id();
            // $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            // $table->foreignId('specialty_id')->constrained()->onDelete('cascade');//si eliminamos la categoria(se eliminaran los posts asociados ala categoria)
            
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('specialty_id');
            $table->date('fecha')->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('specialty_id')->references('id')->on('specialties');
            $table->primary(['doctor_id','specialty_id']);
            $table->timestamps();
            // $table->primary(['doctor_id', 'specialty_id']);
            /* $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories'); */
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
