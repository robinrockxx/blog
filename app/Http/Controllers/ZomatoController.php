<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\zomato;
//use Validator;

class ZomatoController extends Controller
{
     public function login()
    {
    	return view('login');
    }

    public function register()
    {
    	return view('register');
    }

    public function view()
    {
    	$datas=zomato::all();
    	//print_r($datas);
    	return view('view',compact('datas'));
    }
    public function save(Request $Request)
    {
    	$data =new zomato;
    	$data->restaurant_name = $Request->restaurant_name;
    	$data->address = $Request->address;
    	$data->city = $Request->city;
    	$data->restaurant_email = $Request->restaurant_email;
    	$data->number = $Request->number;
    	$data->serve =implode(',', $Request->serve);
    	$data->image = $Request->image;
    	$data->discount = $Request->discount;
    	$data->delivery_time = $Request->delivery_time;
    	$data->opening_time = implode(':',$Request->opening_time);
    	$data->closing_time = implode(':',$Request->closing_time);
    	$data->working_days = implode(',',$Request->working_days);
    	$data->bank_name = $Request->bank_name;
    	$data->account_holder = $Request->account_holder;
    	$data->account_number = $Request->account_number;
    	$data->ifsc_code = $Request->ifsc_code;
    	$data->Password = $Request->Password;
    	$data->save();
    }
 		public function delete($id)
    {
        
        $data=zomato::find($id);
        $deleted=$data->delete();
        if($deleted)
        {
            return redirect('/view')->with('message','post deleted sucessfully');

        }
    }

}
