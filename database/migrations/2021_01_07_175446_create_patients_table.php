<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('npatient');
            $table->date('patient_birth_date');
            $table->string('phone');
            $table->string('email');
            $table->mediumText('maladies')->nullable();
            $table->mediumText('allergies')->nullable();
            $table->mediumText('antecedents')->nullable();
            $table->mediumText('commentaires')->nullable();

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
        Schema::dropIfExists('patients');
    }
}
