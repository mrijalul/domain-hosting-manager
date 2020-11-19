<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatacustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datacustomers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_customer')->nullable();
            $table->string('email_customer')->nullable();
            $table->string('alamat_customer')->nullable();
            $table->string('notelp_customer')->nullable();
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
        Schema::dropIfExists('datacustomers');
    }
}
