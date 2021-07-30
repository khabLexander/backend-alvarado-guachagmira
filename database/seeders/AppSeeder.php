<?php

namespace Database\Seeders;

use App\Models\Produtc;
use App\Models\Winery;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    public function run()
    {
        $this->createData();
    }

    function createData () {
        // $wineries = Winery::factory(10)->create();
        // foreach($wineries as $winery) {
        //     Product::factory()
        //     ->count(3)
        //     ->for($winery)
        //     ->create();
        // }
        
        // Winery::factory(10)
        // ->has(Product::factory()->count(3), 'products')
        // ->create();

        Winery::factory(10)
        ->hasProducts(3)
        ->create();
    }
}
