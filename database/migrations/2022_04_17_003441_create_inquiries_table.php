<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('doctorSpecialty_id')->nullable();
            // $table->unsignedBigInteger('speciality_id')->nullable(); 
            $table->unsignedBigInteger('patient_id')->nullable(); 
            $table->foreign('doctorSpecialty_id')->references('id')->on('doctor_specialty')->onDelete('cascade'); 
            // $table->foreign('speciality_id')->references('speciality_id')->on('doctor_specialty')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

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
        Schema::dropIfExists('inquiries');
    }
}
