<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_dokters', function (Blueprint $table) {
            $table->bigIncrements('id_dokter');
            $table->string('nama_dokter');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('agama');
            $table->string('spesialisasi');
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
        Schema::dropIfExists('data_dokters');
    }
}
