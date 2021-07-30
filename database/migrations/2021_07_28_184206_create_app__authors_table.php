<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('authors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id');
            $table->string('email')->comment('Comentario');
            $table->string('names')->comment('Comentario');
            $table->string('identificacion')->comment('Comentario');
            $table->string('phone')->comment('Comentario');
            $table->integer('age')
                ->unsigned();
            $table->softDeletes();
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('authors');
    }
}
