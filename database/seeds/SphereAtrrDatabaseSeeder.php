<?php

use Illuminate\Database\Seeder;

class SphereAtrrDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create SphereAttributes
		
		DB::table('sphere_attributes')->truncate();
		
		$today = date("d.m.y H:m:s"); 
		
		DB::table('sphere_attributes')->insert([
			[
				'sphere_id' => '3',
				'_type' => 'radio',
				'label' => 'Radio',
				'icon' => '',
				'required' => '',
				'default_value' => '111',
				'position' => '1',
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'sphere_id' => '3',
				'_type' => 'checkbox',
				'label' => 'CheckBox',
				'icon' => '',
				'required' => '',
				'default_value' => '111',
				'position' => '1',
				'created_at' => $today,
				'updated_at' => $today
			]
		]);
    }
}
