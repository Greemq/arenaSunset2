<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('progress_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->unsignedBigInteger('progress_id');
            $table->text('description');
            $table->string('link')->nullable();
            $table->string('img')->nullable();
            $table->unique(['progress_id', 'locale']);
            $table->foreign('progress_id')->references('id')->on('progress')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress_translations');
        Schema::dropIfExists('progress');
    }
}
