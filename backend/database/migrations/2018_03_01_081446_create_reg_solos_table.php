<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegSolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_solos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender', 10);
            $table->string('civil_status', 10);
            $table->date('birthdate');
            $table->string('email');
            $table->string('mobile');
            $table->string('affiliation');
            $table->integer('ticket_id');
            $table->integer('activity_1');
            $table->integer('activity_2')->nullable();
            $table->integer('party_id')->unsigned();
            $table->foreign('party_id')->references('id')->on('reg_parties')->onDelete('cascade')->nullable();
            $table->integer('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('tbl_events')->onDelete('cascade');
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
        Schema::dropIfExists('reg_solos');
    }
}
