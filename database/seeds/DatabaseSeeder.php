<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LeadDatabaseSeeder::class);
        $this->call(SphereAtrrDatabaseSeeder::class);
        $this->call(SphereAtrrOptionsDatabaseSeeder::class);
        $this->call(SphereBitmaskDatabaseSeeder::class);
        $this->call(OpenLeadDatabaseSeeder::class);
        $this->call(CustomersDatabaseSeeder::class);
    }
}
