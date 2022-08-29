<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class ServicesController extends Controller
{
    public function insertform(){
        return view('Dashboard/addservices');
        }
    public function insert(Request $request){
        $icon=$request->input('icon');
        $name=$request->input('name');
        $desc=$request->input('desc');
        $namear=$request->input('namear');
        $descar=$request->input('descar');

        $request->validate([
            'icon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
            'name' => 'required',
            'desc' => 'required',
            'namear' => 'required',
            'descar' => 'required'
        ]);



    $data=array("icon"=>$icon,"name"=>$name,'descraption'=>$desc,"namear"=>$namear,'descraptionar'=>$descar);
    if($request->file('icon')){
        $file= $request->file('icon');
        $filename= $file->getClientOriginalName();
        $file-> move(public_path('/Image/services'), $filename);
        $path = 'Image/services/' . $filename;
        $data['icon']= $path;
    }

    DB::table('services')->insert($data);
    Alert::success('Congrats', 'Record inserted successfully');

         return redirect('Dashboard/addservices');


    }
    public function showservices(){

      $services = DB::select('select * from services');
        return view('Layout/layout',['service'=>$services]);
    }
}
