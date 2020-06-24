<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genuses', function (Blueprint $table) {
            $table->id();
            $table->string('name_latin',35);
            $table->string('name_latvian',35)->nullable();
            $table->foreignId('family_id')->nullable()->constrained();
            $table->foreignId('subfamily_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genuses');
    }
}
