<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class IndexpageController extends Controller
{
    public function insertform(){
        return view('Dashboard.settingindexpage');
        }

        public function update(Request $request){

            $titel=$request->input('titel');
            $aboutsection=$request->input('aboutsection');
            $message=$request->input('message');
            $T_portfolio=$request->input('T_portfolio');
            $T_worked=$request->input('T_worked');
            $T_service=$request->input('T_service');
            $titelar=$request->input('titelar');
            $aboutsectionar=$request->input('aboutsectionar');
            $messagear=$request->input('messagear');
            $T_portfolioar=$request->input('T_portfolioar');
            $T_workedar=$request->input('T_workedar');
            $T_servicear=$request->input('T_servicear');
            $request->validate([
                'titel' => 'required',
                'aboutsection' => 'required',
                'message' => 'required',
                'T_portfolio' => 'required',
                'T_worked' => 'required',
                'T_service' => 'required',
                'titelar' => 'required',
                'aboutsectionar' => 'required',
                'messagear' => 'required',
                'T_portfolioar' => 'required',
                'T_workedar' => 'required',
                'T_servicear' => 'required'
            ]);



        $data=array("titel"=>$titel,'aboutsection'=>$aboutsection,"message"=>$message,"T_portfolio"=>$T_portfolio,"T_worked"=>$T_worked,"T_service"=>$T_service ,"titel"=>$titelar,'aboutsectionar'=>$aboutsectionar,"messagear"=>$messagear,"T_portfolioar"=>$T_portfolioar,"T_workedar"=>$T_workedar,"T_servicear"=>$T_servicear);


        DB::table('indexpages')->update($data);
        Alert::success('Congrats', 'Record updated successfully');

             return redirect('Dashboard/settingindexpage');


        }
     public function showsettingindexpage(){

            $indexpage = DB::select('select * from indexpages');
            return view('Layout/layout',['indexpage'=>$indexpage]);
        }
}
