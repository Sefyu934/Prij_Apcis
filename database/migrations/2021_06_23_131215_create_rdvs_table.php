<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('heure');
            $table->dateTime('debut_heure');
            $table->dateTime('fin_heure');
            $table->text('rapport');
            $table->integer('depot');
            $table->string('intervenant');
            $table->unsignedBigInteger('jeune_id');
            $table->foreign('jeune_id')->references('id')->on('jeunes')->onDelete('cascade');
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
        Schema::dropIfExists('rdvs');
    }
}
