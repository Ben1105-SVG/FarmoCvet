<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plant::query()->insert([
            [
                'name' => 'Зверобоя трава'
            ],
            [
                'name' => 'Брусники листья'
            ],
            [
                'name' => 'Шиповника плоды'
            ],
            [
                'name' => 'Череды трава'
            ],
            [
                'name' => 'Ромашки цветки'
            ]
        ]);
    }
}
