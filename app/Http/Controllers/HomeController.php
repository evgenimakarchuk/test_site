<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Auth;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $obg=Profile::where('user_id',Auth::user()->id)->first();
        if(!$obg){
            $obg = new Profile;
        }
                    
        return view('home',compact('obg'));
    }
    
    public function postindex(ProfileRequest $r){
        $pic=\App::make('App\Libs\Imag')
                        ->url($_FILES['picture1']['tmp_name']);
            if($pic){
                $r['picture']=$pic;
            }else{
                $r['picture']='';
            }
       $r['user_id']=(Auth::guest())?0:Auth::user()->id;
    //    Profile::create($r->all());
    Profile::updateOrCreate(['user_id'=>Auth::user()->id],$r->all());
       return redirect()->back();
    }
    
}
