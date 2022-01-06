<?php

namespace Database\Seeders;

use App\Models\Pharmacy;
use Illuminate\Database\Seeder;

class PharmacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pharmacy::query()->insert([
            [
                'name' => 'сбер',
                'url' => 'test2.com',
                'logo_path' => 'test'
            ],
            [
                'name' => 'test',
                'url' => 'test.com',
                'logo_path' => 'test'
            ]
        ]);
    }
}
