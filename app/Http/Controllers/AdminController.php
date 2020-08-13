<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Slider;

class AdminController extends Controller
{
    public function index()
    {
    	$category=new Category();
        $result=$category->all();
    	return view('website.admin.home')->with('result',$result);
    }

    //show slider 
    public function sliderShow()
    {


    	$data=new Slider;
        $result=$data->all();
        if ($result) {
            return view('website.admin.showslider')->with("result",$result);
        }else{
            return view('website.admin.showslider')->with("msgError","Record Not Found");
        }
    }
}
