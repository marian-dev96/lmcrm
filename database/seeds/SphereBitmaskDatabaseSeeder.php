<?php

use Illuminate\Database\Seeder;

class SphereBitmaskDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		DB::table('sphere_bitmask_3')->truncate();
		
		$today = date("d.m.y H:m:s"); 
		
		DB::table('sphere_bitmask_3')->insert([
			[
				'user_id' => '1',
				'type' => 'agent',
				'status' => '1',
				'lead_price' => '37',
				'updated_at' => $today,
				'fb_1_1' => '1',
				'fb_1_2' => '0',
				'fb_1_3' => '1',
				'fb_2_4' => NULL,
				'fb_2_5' => NULL,
				'fb_2_6' => NULL
			],
			[
				'user_id' => '14',
				'type' => 'agent',
				'status' => '1',
				'lead_price' => '35',
				'updated_at' => $today,
				'fb_1_1' => '1',
				'fb_1_2' => '1',
				'fb_1_3' => '0',
				'fb_2_4' => NULL,
				'fb_2_5' => NULL,
				'fb_2_6' => NULL
			],
			[
				'user_id' => '2',
				'type' => 'lead',
				'status' => '0',
				'lead_price' => NULL,
				'updated_at' => $today,
				'fb_1_1' => '1',
				'fb_1_2' => '0',
				'fb_1_3' => '0',
				'fb_2_4' => NULL,
				'fb_2_5' => NULL,
				'fb_2_6' => NULL
			],
			[
				'user_id' => '3',
				'type' => 'lead',
				'status' => '0',
				'lead_price' => NULL,
				'updated_at' => $today,
				'fb_1_1' => '1',
				'fb_1_2' => '0',
				'fb_1_3' => '0',
				'fb_2_4' => NULL,
				'fb_2_5' => NULL,
				'fb_2_6' => NULL
			],
		]);
    }
}
