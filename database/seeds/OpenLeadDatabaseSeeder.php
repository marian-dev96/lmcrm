<?php

use Illuminate\Database\Seeder;

class OpenLeadDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		
		DB::table('open_leads')->truncate();
		
		$today = date("d.m.y H:m:s"); 
		
		DB::table('open_leads')->insert([
			[
				'lead_id' => '2',
				'agent_id' => '2',
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'lead_id' => '3',
				'agent_id' => '2',
				'created_at' => $today,
				'updated_at' => $today
			]
		]);
		
		
		
    }
}
