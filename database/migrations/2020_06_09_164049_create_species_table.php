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
            $table->id();
            $table->string('name_latin',35);
            $table->string('name_latvian',35);
            $table->text('description')->nullable();
            $table->text('biology')->nullable();
            $table->decimal('size',4,2)->nullable();
            $table->decimal('weight',7,3)->nullable();
            $table->text('reproduction')->nullable();
            $table->text('prevalence')->nullable();
            $table->foreignId('family_id')->nullable()->constrained();
            $table->foreignId('subfamily_id')->nullable()->constrained();
            $table->bigInteger('genus_id')->unsigned()->nullable();
            $table->foreign('genus_id')->references('id')->on('genuses');
            $table->tinyInteger('lsg_id')->unsigned()->nullable();
            $table->foreign('lsg_id')->references('category')->on('lsg');
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
