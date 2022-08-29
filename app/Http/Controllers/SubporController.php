<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class SubporController extends Controller
{
    public function insertform(){

        return view('Dashboard.addsubpor');
        }

        public function insert(Request $request){


           $catid=$request->input('category_filter');
            $type_services=$request->input('type_services');
            //$image=$request->input('image');

            $request->validate([
                'type_services' => 'required',
                'category_filter' => 'required'

            ]);



        $data=array("por_id"=>$catid,"type_services"=>$type_services,"image"=>'');

        DB::table('portfolio_detials')->insert($data);
        Alert::success('Congrats', 'Record inserted successfully');

             return redirect('Dashboard/addsubpor');


        }}
