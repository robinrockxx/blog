<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form;
use DB;

class FormController extends Controller
{

    public function delete($id)
    {
        
        $data=form::find($id);
        $deleted=$data->delete();
        if($deleted)
        {
            return redirect('adminbloglist')->with('message','post deleted sucessfully');

        }
    }

    public function add_blog (Request $Request)
    {

        $data =new form;

         $data->title = $Request->title;
        $data->is_featured = $Request->is_featured;
        $data->is_active = $Request->is_active;
        $data->category = $Request->category;
        
        

        $file = $Request->file('image'); 
        $filename='image' . time().'.'.$Request->image->extension();
        $file->move("upload/",$filename);
         $data->image=$filename;
        $data->description = $Request->description;

         $is_save=$data->save();
        $data->save();
        // $data->regno=2;

         if($is_save){
        	$num_padded=sprintf("%04s",$data->id);
        	DB::table('forms')
        	->where('id',$data->id)
        	->update(["regno" => "Ape2020".$num_padded]);
   			 }
   			 return redirect('adminbloglist')->with('message','data sucessfully updated!');

   			}

   	public function editblog ($id)	
   	{
   		$data=form::find($id);
        return view('editblog',compact('data'));
   	}

   

   	public function update_blog( Request $req)
    {
        if($req->hasFile('image'))
        {
            $file = $req->file('image');
            $filename="image".time().'.'.$req->image->extension();
            $destination = public_path('upload');
            $file->move($destination,$filename);
            $path = "".$filename;
            form::where('id',$req->id)->update([
            // 'regno'=>$req->regno,
            'title'=>$req->title,
            'is_featured'=>$req->is_featured,
            'is_active'=>$req->is_active,
            'category'=>$req->category,
            
            'image'=>$path,
            'description'=>$req->description,

            ]);
             return redirect('adminbloglist')->with('message','data sucessfully updated!');



        }
        else{
            form::where('id',$req->id)->update
            ([
                // 'regno'=>$req->regno,
              'title'=>$req->title,
            'is_featured'=>$req->is_featured,
            'is_active'=>$req->is_active,
            'category'=>$req->category,
            
         //   'image'=>$path,
            'description'=>$req->description,


            ]);	
            return redirect('adminbloglist')->with('message','data sucessfully updated!');

        }
    }
}
