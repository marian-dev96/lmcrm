<?php

use Illuminate\Database\Seeder;

class SphereAtrrOptionsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		DB::table('sphere_attribute_options')->truncate();
		
		$today = date("d.m.y H:m:s"); 
		
		DB::table('sphere_attribute_options')->insert([
			[
				'sphere_attr_id' => '1',
				'ctype' => 'agent',
				'_type' => 'option',
				'name' => 'r1',
				'value' => 'r1',
				'position' => '',
				'created_at' => $today,
				'updated_at' => $today
			],
			
			[
				'sphere_attr_id' => '1',
				'ctype' => 'agent',
				'_type' => 'option',
				'name' => 'r2',
				'value' => 'r2',
				'position' => '',
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'sphere_attr_id' => '1',
				'ctype' => 'agent',
				'_type' => 'option',
				'name' => 'r3',
				'value' => 'r3',
				'position' => '',
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'sphere_attr_id' => '2',
				'ctype' => 'agent',
				'_type' => 'option',
				'name' => 'c1',
				'value' => 'c1',
				'position' => '',
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'sphere_attr_id' => '2',
				'ctype' => 'agent',
				'_type' => 'option',
				'name' => 'c2',
				'value' => 'c2',
				'position' => '',
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'sphere_attr_id' => '2',
				'ctype' => 'agent',
				'_type' => 'option',
				'name' => 'c3',
				'value' => 'c3',
				'position' => '',
				'created_at' => $today,
				'updated_at' => $today
			],
		]);
    }
}
