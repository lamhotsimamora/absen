<?php

namespace App\Http\Controllers;

use App\Models\Absens;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function uploadAbsen(Request $request){
        $file = $request->file('imageAbsenMasuk');
        $path = $file->store('absen', 'public');

        $absen = new Absens();

        $absen->latitude = $request->latitude;
        $absen->longitude = $request->longitude;
        $absen->admin_id  = $request->admin_id;
        $absen->image     = $path;
        $absen->date = date('Y-m-d');
        $absen->time_in   = date('H:i:s');
        $absen->time_out  = '00:00:00';

        return $absen->save() ? response()->json(['result'=>true]) : response()->json(['result'=>false]);
    }

    public function getAbsen(){
        return Absens::all();
    }
}
