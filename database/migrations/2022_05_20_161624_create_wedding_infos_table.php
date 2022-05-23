<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_infos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('couplename')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('description')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->date('wedding_date')->nullable();
            $table->string('wedding_address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('bride_first_name')->nullable();
            $table->string('bride_last_name')->nullable();
            $table->string('groom_first_name')->nullable();
            $table->string('groom_last_name')->nullable();
            $table->unsignedBigInteger('couple_id');
            $table->foreign('couple_id')->references('id')->on('couples')->onDelete('cascade');
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
        Schema::dropIfExists('wedding_infos');
    }
}
