<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrRequestbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_requestbarangs', function (Blueprint $table) {
            $table->id('intidrequestbarang');
            $table->foreignId('intidrequest')->constrained('m_requests','intidrequest')->onDelete('cascade');
            $table->string('txtnamabarang');
            $table->string('txtjumlah');
            $table->string('txtsatuan');
            $table->string('txtketerangan')->nullable();
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
        Schema::dropIfExists('tr_requestbarangs');
    }
}
