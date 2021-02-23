<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorsToClconfigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clconfigs', function (Blueprint $table) {
            
		$table->string('debDegr')->default("#4e73df");
		$table->string('finDegr')->default("#224abe");
//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clconfigs', function (Blueprint $table) {
            //
        });
    }
}
