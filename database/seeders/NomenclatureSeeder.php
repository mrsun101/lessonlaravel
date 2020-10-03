<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NomenclatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y-m-d",time());
        DB::table("nomenclature")->insert([
            ['name' => 'Домашний хлеб',     'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Армянский лаваш',   'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Городская булка',   'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Литовский хлеб',    'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Рижский хлеб',      'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Российский батон',  'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Булка сдобная',     'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Булка слоеная',     'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Восточный бублик',  'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Яблочный хлеб',     'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Коржик праздничный',  'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Пончик городской',  'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Деревенская ватрушка', 'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Молочная булка',    'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Нарезной батон',    'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Булочка РОСТОВСКАЯ',  'price' => random_int(2500, 12000)/100, 'created_at' => $date, 'updated_at' => $date],
        ]);
    }
}
