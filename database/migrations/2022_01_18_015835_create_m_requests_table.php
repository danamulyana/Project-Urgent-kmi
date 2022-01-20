<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_requests', function (Blueprint $table) {
            $table->id('intidrequest');
            $table->string('txtslug');
            $table->string('txtnorequest');
            $table->foreignId('intiduser')->constrained('users')->onDelete('cascade');
            $table->string('txtmumberpr');
            $table->string('txtreason');
            $table->string('dtmtanggalkebutuhan');
            $table->enum('intalur',[1,2,3,4,5]);
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
        Schema::dropIfExists('m_requests');
    }
}
