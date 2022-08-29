<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class ItemsController extends Controller
{
    public function insertform(){

        return view('Dashboard.additems');
        }

        public function insert(Request $request){


           // $catid=$request->input('category_filter');
            $type_services=$request->input('type_services');
            $image=$request->input('image');

            $request->validate([
                'type_services' => 'required',
                'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg'

            ]);



        $data=array("item_id"=>$type_services,"image"=>$image);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('/Image/protfolio'), $filename);
            $path = 'Image/protfolio/' . $filename;
            $data['image']= $path;
        }

        DB::table('portfolio_items')->insert($data);
        Alert::success('Congrats', 'Record inserted successfully');

             return redirect('Dashboard/additems');


        }
        public static function showitems(){

        }

}
