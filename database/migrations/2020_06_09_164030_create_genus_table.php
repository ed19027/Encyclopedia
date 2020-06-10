<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genus', function (Blueprint $table) {
            $table->string('name_latin',35)->primary();
            $table->string('name_latvian',35)->nullable();
            $table->string('family', 35)->nullable();
            $table->foreign('family')->references('name_latin')->on('family');
            $table->string('subfamily', 35)->nullable();
            $table->foreign('subfamily')->references('name_latin')->on('subfamily');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genus');
    }
}
