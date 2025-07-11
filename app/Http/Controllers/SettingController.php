<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function saveData(Request $request){
        $Settings = Settings::find(1);

        $Settings->latitude = $request->latitude;
        $Settings->longitude = $request->longitude;
        $Settings->radius = $request->radius;
        $Settings->name_company = $request->name;

       return $Settings->save() ? response()->json(['result'=>true]) : response()->json(['result'=>false]);
    }

     public function getData(){
        $data = Settings::find(1)->get();

        return $data[0];
    }
}
