<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul')->unique();
            $table->integer('jumlah_halaman')->default(50);
            $table->string('penerbit')->nullable();
            $table->text('synopsis')->nullable();
           
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
        Schema::dropIfExists('perpuses');
    }
}
