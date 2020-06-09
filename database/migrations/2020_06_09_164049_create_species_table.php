<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species', function (Blueprint $table) {
            $table->string('name_latin',35)->primary();
            $table->string('name_latvian',35);
            $table->text('description')->nullable();
            $table->text('biology')->nullable();
            $table->decimal('size',4,2)->nullable();
            $table->text('weight',7,3)->nullable();
            $table->text('reproduction')->nullable();
            $table->text('prevalence')->nullable();
            $table->string('family', 35)->nullable();
            $table->foreign('family')->references('name_latin')->on('family');
            $table->string('subfamily', 35)->nullable();
            $table->foreign('subfamily')->references('name_latin')->on('subfamily');
            $table->string('genus', 35)->nullable();
            $table->foreign('genus')->references('name_latin')->on('genus');
            $table->tinyInteger('lsg')->nullable();
            $table->foreign('lsg')->references('category')->on('lsg');
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
        Schema::dropIfExists('species');
    }
}
