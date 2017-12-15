<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('per_id');
            $table->timestamps('per_nome');
        });
    }
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}

?>