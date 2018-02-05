<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\OpenLeads;

use App\Models\SphereAttr;

class TestController extends Controller
{
    //
	public function data(Request $request) {
/*
		$leads = Lead::get(['id','date','name', 'email']);
		
		foreach($leads as $lead) {

			$phone = Lead::find($lead->id);
			

				$array[] = [
					'date' => $lead->date,
					'name' => $lead->name,
					'email' => $lead->email,
					'phone' => $phone->phone['phone']
				];
			
		}

		//dump($array);
		
		*/
		
		
		$id_active_user = '2';
		$ddd = OpenLeads::where('agent_id',$id_active_user)->get();

		foreach($ddd as $d) {
			
			$tgh = OpenLeads::find($d->id);
			$g = $tgh->lead;
			
			
			
			foreach($g as $val) {
		
				$array[] = [
					'id' => $val->id,
					'date' => $val->date,
					'name' => $val->name,
					'email' => $val->email,
					'phone' => $val->phone['phone']
				];
		
			}
		}
		

		
		$id_info = NULL;
		
		$array_request = $request->query('id');

		
		
		//Request
		if(!empty($array_request)){
			//return $request->query('id');
			$id_info = $request->query('id');

			
			$leads = Lead::find($id_info);
			//dump($leads);
			
			$spheres = $leads->sphere_label;
						
			$sphere_bitmask = $leads->sphere_bitmask;
			
			$spheres_attrs= array();
			$sphere_label= array();
			foreach($spheres as $sphere){
				
				$sphere_array[$sphere->id] = $sphere->options->pluck('id');

				//dump($sphere->options);
			}

			//dump($sphere_array);
			
			foreach($sphere_array as $key => $values){
				
				foreach($values as $value){
					$fb_arrays[$value] = 'fb_'.$key.'_'.$value;
					
				}

			}
			//dump($fb_arrays);
			
			
			foreach($fb_arrays as $fb_array_key => $fb_array_val){

				if($sphere_bitmask->$fb_array_val == 1){
					
					$array_key_id[] = $fb_array_key;

					foreach($spheres as $sphere){

						$mores[$sphere->label] = $sphere->options->whereIn('id',$array_key_id)->pluck('value')->all();

					}

				}
			}
			
			//dump($mores);
				
			
			$data_info = [
			
				'lead' => $leads,
				'phone' => $leads->phone['phone'],
				'mores' => $mores
			
			];

			return view('test.info',$data_info);

		}
		
		
		$data = [
			'leads' => $array
		];
		

		return view('test.index',$data);

	}

}
