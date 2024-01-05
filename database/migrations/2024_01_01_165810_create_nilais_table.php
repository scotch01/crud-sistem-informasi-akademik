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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();

            $table->string('nama_mhs');
            $table->foreign('nama_mhs')
            ->references('nama')
            ->on('mahasiswas')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->string('nim_mhs');
            $table->foreign('nim_mhs')
            ->references('nim')
            ->on('mahasiswas')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->string('matkul');
            $table->foreign('matkul')
            ->references('nama_matkul')
            ->on('matkul')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->string('nama_dosen');
            $table->foreign('nama_dosen')
            ->references('nama')
            ->on('dosens')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->string('nilai');

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
        Schema::dropIfExists('nilais');
    }
};
