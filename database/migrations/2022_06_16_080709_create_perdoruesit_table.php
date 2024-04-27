<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('perdoruesit', function (Blueprint $table) {
            $table->id();
            $table->string("perdoruesi_umtk");
            $table->string("oferta_umtk");
            $table->string("numriTelefonit_umtk");
     
        });
    }


    public function down()
    {
        Schema::dropIfExists('perdoruesit');
    }
};