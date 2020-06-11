<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\dashboard;
use App\form;
use DB;

class blog extends Controller
{
     public function readmore ($id)  
    {
        $data=form::all();
        $robin=form::find([$id]);
        return view('detail',compact('robin','data'));
    }



     public function about()
    {
    	return view('about');
    }
     public function error()
    {
    	return view('404');
    }
    public function update()
    {
        $data=dashboard::all();
        //print_r($datas);
        return view('update',compact('data'));
        // return view('update');
    }

 public function adminbloglist()
    {
    	//return view('adminbloglist');
        $data=form::all();
        //print_r($datas);
        return view('adminbloglist',compact('data'));
    }

 public function blogform()
    {
    	return view('blogform');
    }

 public function bloglist()
    {
    	$data=form::all();
        //print_r($datas);
        return view('bloglist',compact('data'));
        // return view('update');
    }

 public function contact()
    {
    	return view('contact');
    }

 public function dashboard()
    {
    	return view('dashboard');
    }

 public function detail()
    {
    	return view('detail');
    }

 public function index()

    {
    	//return view('index');
      //  $data=dashboard::all();
        $data=form::all();
        //print_r($datas);
        return view('index',compact('data'));
    }

 public function login()
    {
    	return view('login');
    }
     public function save(Request $Request)
    {
        $data =new dashboard;
        $data->nav1 = $Request->nav1;
        $data->nav2 = $Request->nav2;
        $data->nav3 = $Request->nav3;
        $data->nav4 = $Request->nav4;
        $data->nav5 = $Request->nav5;
        $data->nav6 = $Request->nav6;
        $data->save();
    }


}
