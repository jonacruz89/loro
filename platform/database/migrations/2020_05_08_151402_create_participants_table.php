<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('last_name', 100);
            $table->string('identity', 20);
            $table->unsignedBigInteger('department_id')->default(149);
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('citie_id')->default(149);
            $table->foreign('citie_id')->references('id')->on('cities');
            $table->string('phone', 10);
            $table->string('email', 255)->unique();
            $table->boolean('winner')->default(false);
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
        Schema::dropIfExists('participants');
    }
}
