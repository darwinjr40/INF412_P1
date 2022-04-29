<?php

use App\Models\Inquiry;
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
            $table->unsignedBigInteger('patient_id')->nullable(); 
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('specialty_id')->nullable();
            $table->string('descripcion')->nullable();
            $table->enum('tipo', [Inquiry::P, Inquiry::F ])->default(Inquiry::P);
            $table->date('fecha')->nullable();
            $table->text('url')->nullable();
            $table->text('name_file')->nullable();

            
            
            $table->foreign(['doctor_id','specialty_id'])->references(['doctor_id','specialty_id'])->on('doctor_specialty')->onDelete('cascade'); 
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            
            $table->timestamps();
            // $table->unsignedBigInteger('speciality_id')->nullable(); 
            // $table->foreign('speciality_id')->references('speciality_id')->on('doctor_specialty')->onDelete('cascade');
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
