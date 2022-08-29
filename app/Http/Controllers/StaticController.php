<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class StaticController extends Controller
{
public function index(){

    return view('index');
}
public function about(){
    return view('about');
}
public function contact(){
    return view('contact');
}
public function services(){
    return view('services');
}
public function portfolio($var){
 /*   $protfoliosD = DB::table('portfolio_detials')
    ->join('portfolios', 'portfolio_detials.por_id', '=', 'portfolios.id')

   ->select('portfolio_detials.*', 'portfolios.titel')
   ->get();*/
   $protfoliosD = DB::table('portfolios')
   ->join('portfolio_detials', 'portfolio_detials.por_id', '=', 'portfolios.id')
  ->select('portfolio_detials.*')
  ->where('portfolios.type_services', '=',$var)

  ->get();

  $protfoliosI = DB::select( 'SELECT image FROM portfolio_items  ');
    return view('portfolio',['Type'=>$var,'protfoliosi'=>$protfoliosI,'protfoliosd'=>$protfoliosD]);
}
public function indexar(){

    return view('ar.index_ar');
}
public function aboutar(){
    return view('ar.about_ar');
}
public function contactar(){
    return view('ar.contact_ar');
}
public function servicesar(){
    return view('ar.services_ar');
}
}
