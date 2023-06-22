<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->string('type');
            $table->string('area');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('flat_translations', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('locale');
            $table->unsignedBigInteger('flat_id');
            $table->unique(['locale', 'flat_id']);
            $table->foreign('flat_id')->references('id')->on('flats')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flat_translations');
        Schema::dropIfExists('flats');
    }
}
