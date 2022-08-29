<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index(){
        return view('Dashboard.index');
    }
    public function addser(){
        return view('Dashboard.addservices');
    }
    public function settingsp(){
        return view('Dashboard.settings_protfile');
    }
    public function settingsweb(){
        return view('Dashboard.settingswebsite');
    }
    public function addwork(){
        return view('Dashboard.addworkwith');
    }
    public function addprotflio(){
        return view('Dashboard.addprotfolio');
    }
    public function additems(){

        $ti = DB::table('portfolio_detials')
        ->select('portfolio_detials.type_services' ,'portfolio_detials.id')
        ->get();
        return view('Dashboard.additems',['tit'=>$ti]);


    }
    public function addsubpor(){
        $items = DB::table('portfolios')
        ->select('portfolios.type_services' ,'portfolios.id')
        ->get();

        return view('Dashboard.addsubpor',['item'=>$items]);


    }
    public function indexpage(){
        return view('Dashboard.settingindexpage');
    }
    public function contactpage(){
        return view('Dashboard.settingcontactpage');
    }
    public function aboutpage(){
        return view('Dashboard.settingaboutpage');
    }
    public function servicespage(){
        return view('Dashboard.settingservicespage');
    }
    public function portofliopage(){
        return view('Dashboard.settingportofliopage');
    }
}
