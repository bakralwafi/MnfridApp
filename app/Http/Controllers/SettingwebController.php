<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Settingwebsite;

class SettingwebController extends Controller
{
    public function insertform(){
        return view('Dashboard.settingswebsite');
        }

        public function update(Request $request){

            $logo=$request->input('logo');
            $email=$request->input('email');
            $phone=$request->input('phone');
            $address=$request->input('address');
            $instagram=$request->input('instagram');
            $twitter=$request->input('twitter');
            $linkedin=$request->input('linkedin');
            $request->validate([
                'email' => 'required',
                'phone' => 'required|regex:/(01)[0-9]{9}/',
                'address' => 'required',
                'instagram' => 'required',
                'twitter' => 'required',
                'linkedin' => 'required'
            ]);



        $data=array("Logo"=>$logo,'email'=>$email,"phone"=>$phone,"Address"=>$address,"insta"=>$instagram,"twitt"=>$twitter,"linked"=>$linkedin);
        if($request->file('logo')){
            $file= $request->file('logo');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('/Image'), $filename);
            $path = 'Image/' . $filename;
            $data['Logo']= $path;
        }

        DB::table('settingwebsites')->update($data);
        Alert::success('Congrats', 'Record updated successfully');

             return redirect('Dashboard/settingswebsite');


        }
     public function showsettingsweb(){

            $setting = DB::select('select * from settingwebsites');
            return view('Layout/layout',['setting'=>$setting]);
        }
}
