<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('code')->comment('Comentario');
            $table->text('description')
                ->comment('Comentario')
                ->nullable();
            $table->string('title')->comment('Comentario');
            $table->date('date')->comment('Comentario');
            $table->boolean('approved')
                ->comment('Comentario')
                ->default(true);
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('projects');
    }
}
