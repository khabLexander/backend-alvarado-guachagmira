<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppWineriesTable extends Migration
{

    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('wineries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->comment('codigo de la bodega');
            $table->string('color');
            $table->string('description');
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('wineries');
    }
}
