<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCMEPotensiPerangkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_m_e__potensi_perangkats', function (Blueprint $table) {
            $table->id();
            $table->string('divisi_cme')->nullable();
            $table->string('jenis_perangkat')->nullable();
            $table->string('merk')->nullable();
            $table->string('type')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('kap_tps')->nullable();
            $table->string('kap_tpk')->nullable();
            $table->string('beban')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('thn_ope')->nullable();
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
        Schema::dropIfExists('c_m_e__potensi_perangkats');
    }
}
