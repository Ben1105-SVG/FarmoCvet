<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Seeder;

class SyncSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicine = Medicine::query()->find(1);
        $medicine->plants()->sync([1, 2, 3, 4]);
        $medicine->pharmacies()->sync([1, 2]);
        $medicine->pharmoAgents()->sync([2, 3]);
    }
}
