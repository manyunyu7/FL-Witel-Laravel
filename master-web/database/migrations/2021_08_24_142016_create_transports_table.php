<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('parent')->nullable();
            $table->string('lambda')->nullable();
            $table->string('link')->nullable();
            $table->string('modul')->nullable();
            $table->string('sop2')->nullable();
            $table->string('main')->nullable();
            $table->string('protection')->nullable();
            $table->string('restorasi')->nullable();
            $table->string('otb_tline')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('transports');
    }
}
