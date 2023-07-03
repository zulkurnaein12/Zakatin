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
        Schema::create('mustahiqs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->enum('jenkel', ['LAKI-LAKI', 'PEREMPUAN']);
            $table->string('no_tlp')->nullable();
            $table->enum('kategori', ['Fakir', 'Miskin', 'Amil', 'Muallaf', 'Gharim', 'Riqab', 'Fisabilillah', 'Ibnu Sabil']);
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
        Schema::dropIfExists('mustahiqs');
    }
};
