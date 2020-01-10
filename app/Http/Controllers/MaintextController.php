<?php

namespace App\Http\Controllers;

use App\Maintext; 

class MaintextController extends Controller
{
    public function getIndex($url=null){
        $obg = Maintext::status($url)->first();
        return view('contact', compact('obg'));
        
    }
}
