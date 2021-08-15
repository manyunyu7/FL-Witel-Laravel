<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSERVICENODEDataIntegrationNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_node_data_integration_nodes', function (Blueprint $table) {
            $table->id();
            $table->string('mgw_node')->nullable();
            $table->string('stm_no')->nullable();
            $table->string('logical_e1')->nullable();
            $table->string('tid_start')->nullable();
            $table->string('tid_end')->nullable();
            $table->string('destination')->nullable();
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
        Schema::dropIfExists('service_node_data_integration_nodes');
    }
}
