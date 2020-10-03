<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractingPartyFactory extends Factory
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
        return [
            "name" => $this->faker->company,
            "inn"  => $this->faker->regexify("[1-9]{1}[0-9]{11}"),
            "phone" => $this->faker->regexify("\+7[0-9]{10}"),
            "adress" => $this->faker->address,
            "created_at" => date("Y-m-d",time()),
            "updated_at" => date("Y-m-d",time())
        ];
    }
}
