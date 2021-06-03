<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanamans', function (Blueprint $table) {
            $table->id();
            $table->string('jenisTanaman');
            $table->string('kondisiAgroclimatic');
            $table->string('jenisPupuk');
            $table->foreignId('id_kategori')->references('id')->on('kategori_tanamans');
//            $table->foreignId('agency_id')->references('id')->on('agencies');
            $table->integer('sequence')->nullable()->default(null);
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
        Schema::dropIfExists('tanamans');
    }
}
