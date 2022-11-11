<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kelas', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('fakultas', 50);
            $table->string('prodi', 50);
            $table->string('kelas', 50);
            $table->integer('isi');
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
        Schema::dropIfExists('table_kelas');
    }
};
