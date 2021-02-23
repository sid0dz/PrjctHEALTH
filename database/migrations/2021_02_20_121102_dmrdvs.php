<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dmrdvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  Schema::create('dmrdvs', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->date('date');
        $table->integer('heure');
	    $table->string('departement');
		$table->string('medecin')->nullable();
		$table->string('name');
		$table->date('birthday');
		$table->string('phone');
		$table->string('email')->nullable();
		$table->integer('dejap');
	    $table->string('motif')->nullable();
		
	});		
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
