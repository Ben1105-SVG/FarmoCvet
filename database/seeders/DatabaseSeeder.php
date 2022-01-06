<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(MedicineSeeder::class);
       $this->call(PharmacySeeder::class);
       $this->call(PharmoAgentSeeder::class);
       $this->call(PlantSeeder::class);
       $this->call(SyncSeeder::class);
    }
}
