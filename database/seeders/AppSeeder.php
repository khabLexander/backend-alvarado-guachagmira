<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Winery;
use App\Models\Produtc;

class AppSeeder extends Seeder
{
    public function run()
    {
        $this->createData();
    }

    function createData () {
        $wineries = Winery::factory(10)->create();
        foreach($wineries as $winery) {
            Product::factory()
            ->count(3)
            ->for($winery)
            ->create();
        }
    }
}
