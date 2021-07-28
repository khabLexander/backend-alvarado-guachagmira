<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('winery_id')->constrained('app.wineries');
            $table->string('code')->comment('Codigo del producto');
            $table->text('description')->comment('Descripcion del producto');
            $table->integer('price')->comment('Precio del producto');
            $table->string('business')->comment('Id de la empresa a la que pertenece');
            $table->boolean('is_actived')->comment('Estado del producto')->default(true);
            $table->date('date')->comment('Fecha prueba');
            // $table->sofDeletes();
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('products');
    }
}
