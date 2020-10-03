<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nomenclature = DB::table("nomenclature")->select("id","price")->get()->random();
        $contractor   = DB::table("contractingparties")->select("id")->get()->random();
        
  
        $count = random_int(5, 1000);
        $day = random_int(1, 200);
        
        
        return [
            "contractingparty_id" => $contractor->id,
            "nomenclature_id"     => $nomenclature->id,
            "created_at"           => date("Y-m-d",strtotime("-$day days")),
            "updated_at"           => date("Y-m-d",strtotime("-$day days")),
            "count"                => $count,
            "sum"                  => $count*$nomenclature->price
        ];
    }
}
