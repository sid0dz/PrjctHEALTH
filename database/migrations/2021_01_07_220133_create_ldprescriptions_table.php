<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLdprescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ldprescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prescription')->constrained('prescriptions')->onDelete('cascade');
            $table->string('medicament');
            $table->string('dose');
            $table->string('prise');
            $table->string('duree');
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
        Schema::dropIfExists('ldprescriptions');
    }
}
