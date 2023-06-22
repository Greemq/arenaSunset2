<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order');
            $table->unsignedInteger('type');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('purchase_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->unsignedBigInteger('purchase_id');
            $table->string('title');
            $table->text('description');
            $table->string('btn_text');
            $table->foreign('purchase_id')->references('id')->on('purchases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_translations');
        Schema::dropIfExists('purchases');
    }
}
