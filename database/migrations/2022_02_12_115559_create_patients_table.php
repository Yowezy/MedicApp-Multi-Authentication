<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('national_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->on('users')->references('id')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->integer('age');
            $table->string('gender');
            $table->string('nationality');
            $table->integer('phone');
            $table->string('state');
            $table->string('notes')->nullable();
            $table->enum('isVaccinated', ['yes', 'no'])->default('no');
            $table->string('isPositive')->default(false);
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
        Schema::dropIfExists('patients');
    }
};
