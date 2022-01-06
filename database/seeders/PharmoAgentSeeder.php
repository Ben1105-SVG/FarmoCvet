<?php

namespace Database\Seeders;

use App\Models\PharmoAgent;
use Illuminate\Database\Seeder;

class PharmoAgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PharmoAgent::query()->insert([
            [
                'name' => 'против диареи'
            ],
            [
                'name' => 'против цистита'
            ],
            [
                'name' => 'против простуды'
            ],
            [
                'name' => 'против грибов'
            ],
        ]);
    }
}
