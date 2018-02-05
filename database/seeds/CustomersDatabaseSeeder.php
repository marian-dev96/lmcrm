<?php

use Illuminate\Database\Seeder;

class CustomersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('customers')->truncate();
		
		$today = date("d.m.y H:m:s"); 
		
		DB::table('customers')->insert([
			[
				'phone' => '0660383794',
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'phone' => '0637331004',
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'phone' => '111111111',
				'created_at' => $today,
				'updated_at' => $today
			]
		]);
    }
}
