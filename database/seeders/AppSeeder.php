<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Winery;
use App\Models\Produtc;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Winery::factory()
        ->has(Product::factory()->count(3), 'products')
        ->create();
        

    }

    // function createWinery () {

    // }
}
