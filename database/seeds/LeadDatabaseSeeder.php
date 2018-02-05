<?php

use Illuminate\Database\Seeder;

class LeadDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Lead
		
		DB::table('leads')->truncate();
		
		$today = date("d.m.y H:m:s"); 
		
		DB::table('leads')->insert([
			[
				'agent_id' => '5',
				'sphere_id' => '2',
				'opened' => '1',
				'email' => 'elise@email.com',
				'customer_id' => '1',
				'name' => 'Elsie',
				'comment' => NULL,
				'bad' => '0',
				'date' => $today,
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'agent_id' => '10',
				'sphere_id' => '3',
				'opened' => '1',
				'email' => 'lily@email.com',
				'customer_id' => '1',
				'name' => 'Lily',
				'comment' => NULL,
				'bad' => '0',
				'date' => $today,
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'agent_id' => '3',
				'sphere_id' => '3',
				'opened' => '1',
				'email' => 'evs@email.com',
				'customer_id' => '3',
				'name' => 'Eva',
				'comment' => NULL,
				'bad' => '0',
				'date' => $today,
				'created_at' => $today,
				'updated_at' => $today
			],
			[
				'agent_id' => '4',
				'sphere_id' => '2',
				'opened' => '1',
				'email' => 'lexi@email.com',
				'customer_id' => '5',
				'name' => 'Lexi',
				'comment' => NULL,
				'bad' => '0',
				'date' => $today,
				'created_at' => $today,
				'updated_at' => $today
			]
		]);
		
		
		
		
    }
}
