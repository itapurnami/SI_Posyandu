<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balitas', function (Blueprint $table) {
            //primary key
            $table->id('id_anak');
            //foreign Key tabel ibu
            $table->foreignId('id_ibu');
            $table->string('nama_anak');
            $table->string('tempat_lahir_anak',75);
            $table->string('tgl_lahir',11);
            $table->string('alamat',200);
            //default length 45
            $table->string('foto',100);
            //defaul created date
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
        Schema::dropIfExists('balitas');
    }
}
