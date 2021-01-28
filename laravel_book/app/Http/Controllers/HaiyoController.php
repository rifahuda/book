<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HaiyoController extends Controller
{
 
	public function haiyo(){
     
		return view('haiyo');
    }
    public function beranda(){
     
		return view('beranda');
	}
 

 
}