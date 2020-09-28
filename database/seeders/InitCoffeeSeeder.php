<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coffee;

class InitCoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Coffee();
        $c->name = "macchiato";
        $c->counter = 0;
        $c->save();
    }
}
