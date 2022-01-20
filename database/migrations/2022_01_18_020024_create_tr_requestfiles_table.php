<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrRequestfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_requestfiles', function (Blueprint $table) {
            $table->id('intidrequestfile');
            $table->foreignId('intidrequest')->constrained('m_requests','intidrequest')->onDelete('cascade');
            $table->string('txtnamafile');
            $table->string('txtsize');
            $table->string('txtextension');
            $table->string('txtfilepath');
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
        Schema::dropIfExists('tr_requestfiles');
    }
}
