<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dashboard;

class DashboardController extends Controller
{
     public function dashboard_update(Request $req)
    {
    // 	$data=dashboard::all();
    // 	//print_r($datas);
    // 	return view('update',compact('data'));
     dashboard::where('id',$req->id)->update
            ([
                // 'regno'=>$req->regno,
            'nav1'=>$req->nav1,
            'nav2'=>$req->nav2,
            'nav3'=>$req->nav3,
            'nav4'=>$req->nav4,
            'nav5'=>$req->nav5,
            'nav6'=>$req->nav6,
            


            ]);

     }
}
