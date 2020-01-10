<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
// use App;

class BaseController extends Controller
{
    public function getIndex(Request $request){
        // echo App::getLocale();
        // echo $request->ur_name;
        $ur_name=$request->ur_name;
        $objs=Category::with('products')->get();
        return view('welcome',compact('objs','ur_name'));
    }
}
