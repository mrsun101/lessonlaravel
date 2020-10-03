<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\SaleFactory;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saleFactory = new SaleFactory();
        for($i=0;$i<5000;$i++)
            DB::table("nomenclaturesale")->insert($saleFactory->definition());
        
    }
}
