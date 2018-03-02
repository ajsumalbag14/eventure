<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->integer('party_id')->unsigned();
            $table->integer('solo_id')->unsigned();
            $table->string('status');
            $table->datetime('confirmed_date')->nullable();
            $table->integer('confirmed_by')->nullable();
            $table->datetime('cancelled_date')->nullable();
            $table->integer('cancelled_by')->nullable();
            $table->integer('transferred_fr')->nullable();
            $table->datetime('transferred_date')->nullable();
            $table->integer('transferred_by')->nullable();
            $table->datetime('completed_date')->nullable();
            $table->integer('completed_by')->nullable();
            $table->text('Remarks')->nullable();
            $table->foreign('event_id')->references('id')->on('tbl_events')->onDelete('cascade');
            $table->foreign('party_id')->references('id')->on('reg_parties')->onDelete('cascade');
            $table->foreign('solo_id')->references('id')->on('reg_solos')->onDelete('cascade');
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
        Schema::dropIfExists('monitorings');
    }
}
