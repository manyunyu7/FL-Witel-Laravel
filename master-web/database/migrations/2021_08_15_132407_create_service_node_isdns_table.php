<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSERVICENODEISDNSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_node_isdns', function (Blueprint $table) {
            $table->id();
            $table->string('tg_no')->nullable();
            $table->string('tg_name')->nullable();
            $table->string('sub_route_number')->nullable();
            $table->string('name')->nullable();
            $table->string('name_customers')->nullable();
            $table->string('signaling_link_number')->nullable();
            $table->string('telp')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('equipment_id')->nullable();
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
        Schema::dropIfExists('service_node_isdns');
    }
}
