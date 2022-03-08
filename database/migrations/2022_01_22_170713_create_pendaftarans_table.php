<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('nomor_layanan');
            $table->string('tanggal_layanan');
            $table->string('pengguna_id');
            $table->string('nomor_urut');
            $table->string('keterangan_pendaftaran');
            $table->string('status_transaksi');
            $table->string('keterangan_tambah_status');
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
        Schema::dropIfExists('pendaftarans');
    }
}
