<?php

use CodeDelivery\Models\Cupom;
use CodeDelivery\Models\Product;
use Illuminate\Database\Seeder;
use CodeDelivery\Models\Category;

class CupomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cupom::class, 10)->create();
        
    }
}
