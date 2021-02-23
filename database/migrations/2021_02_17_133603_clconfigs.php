<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clconfigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clconfigs', function (Blueprint $table) {

        $table->string('sitename');
		$table->string('siteadress');
		$table->string('siteadress2')->nullable();
		$table->string('sitenumber');
		$table->string('siteemail');
	});		
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
