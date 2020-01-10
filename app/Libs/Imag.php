<?php
namespace App\Libs;
use Auth;
use Image;
class Imag {
    public function __construct(){

    } 
    public function url($path,$dirrectory=null,$name=null){
        if($path !=null){
            if($dirrectory !=null){
                $dir = public_path().$dirrectory;
            }else{
                $dir = public_path().'/uploads/'.Auth::user()->id.'/'; 
            }
            if(! file_exists($dir)){
                mkdir($dir,0777,true);
            }
            if($name !=null){
                $filename=$name;
            }else{
                $filename=date('y_m_d_h_i_s').'.jpg';
            }
            $img=Image::make($path);
            $img->resize(900, null, function ($c) {
                $c->aspectRatio();
            });
            $img->save($dir.$filename);
            $img->resize(300, null, function ($c) {
                $c->aspectRatio();
            });
            $img->save($dir.'s_'.$filename);
            return $filename;

        }else{
            return false;
        }

    }
}