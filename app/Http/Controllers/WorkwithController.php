<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class WorkwithController extends Controller
{
    public function insertform(){
        return view('Dashboard/addworkwith');
        }
    public function insert(Request $request){

        $name=$request->input('name');
        $icon=$request->input('icon');



        $request->validate([

            'name' => 'required',
            'icon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg'


        ]);



    $data=array("name"=>$name,"icon"=>$icon);
    if($request->file('icon')){
        $file= $request->file('icon');
        $filename= $file->getClientOriginalName();
        $file-> move(public_path('/Image/brand'), $filename);
        $path = 'Image/brand/' . $filename;
        $data['icon']= $path;
    }

    DB::table('workwiths')->insert($data);
    Alert::success('Congrats', 'Record inserted successfully');

         return redirect('Dashboard/addworkwith');


    }
    public function showworkwith(){

      $workwiths = DB::select('select name,icon from workwiths');
        return view('Layout/layout',['workwith'=>$workwiths]);
    }
}
