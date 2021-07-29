<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateAppWineriesTable extends Migration
// {
//     public function up()
//     {
//         Schema::connection(env('DB_CONNECTION_APP'))->create('wineries', function (Blueprint $table) {
//             $table->id();
//             $table->string('name')->comment('Precio del producto');
//             $table->string('code')->comment('Codigo del producto');
//             $table->text('color')->comment('Descripcion del producto');
//             $table->string('business')->comment('Id de la empresa a la que pertenece');
//             $table->text('description')->comment('Descripcion del producto');
//             $table->boolean('status')->comment('Estado del producto')->default(true);
//             $table->timestamps();
//         });
//     }

//     public function down()
//     {
//         Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('wineries');
//     }
// }


// <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateAppProductsTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::connection(env('DB_CONNECTION_APP'))->create('products', function (Blueprint $table) {
//             $table->id();
//             $table->foreignId('winery_id')->constrained('authentication.wineries');
//             $table->string('code')->comment('Codigo del producto');
//             $table->text('description')->comment('Descripcion del producto');
//             $table->string('price')->comment('Precio del producto');
//             $table->string('business')->comment('Id de la empresa a la que pertenece');
//             $table->boolean('actived')->comment('Estado del producto')->default(true);
//             $table->date('date')->comment('Fecha prueba');
//             // $table->sofDeletes();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('products');
//     }
// }