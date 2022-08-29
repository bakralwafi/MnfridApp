<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon;

class PortfoltoController extends Controller
{
    public function insertform(){
        return view('Dashboard.addprotfolio');
        }

        public function insert(Request $request){
            $mytime = Carbon\Carbon::now();

            $type_services=$request->input('type_services');
            $titel=$request->input('titel');
            $descraption=$request->input('descraption');
            $type_servicesar=$request->input('type_servicesar');
            $titelar=$request->input('titelar');
            $descraptionar=$request->input('descraptionar');
            $image=$request->input('image');

            $request->validate([
                'type_services' => 'required',
                'titel' => 'required',
                'descraption' => 'required',
                'type_servicesar' => 'required',
                'titelar' => 'required',
                'descraptionar' => 'required',
                'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg'

            ]);



        $data=array("type_services"=>$type_services,'titel'=>$titel,"descraption"=>$descraption,"type_servicesar"=>$type_servicesar,'titelar'=>$titelar,"descraptionar"=>$descraptionar,"image"=>$image,"created_at"=>$mytime);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('/Image/protfolio'), $filename);
            $path = 'Image/protfolio/' . $filename;
            $data['image']= $path;
        }

        DB::table('portfolios')->insert($data);
        Alert::success('Congrats', 'Record inserted successfully');

             return redirect('Dashboard/addprotfolio');


        }
     public function showprotfolios(){

            $protfolios = DB::select('select * from portfolios order by created_at DESC LIMIT 3');
            return view('Layout/layout',['protfolio'=>$protfolios]);
        }
     /*   public function showProtfoliosDetials(){

            $protfoliosD = DB::table('portfolio_detials')
            ->join('portfolios', 'portfolio_detials.por_id', '=', 'portfolios.id')
           ->select('portfolio_detials.*', 'portfolios.titel')
           ->get();
            return view('Layout/layout',['protfolioD'=>$protfoliosD]);
        }*/


}
