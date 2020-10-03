<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\ContractingPartyFactory;

class ContractingpartiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = new ContractingPartyFactory();
        for($i=0;$i<5;$i++)
            DB::table("contractingparties")->insert($factory->definition());
        
    }
}
