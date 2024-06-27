<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //
    public function index(){
        $headerdata=DB::table('headers')->get();
        $servicesdata=DB::table('services')->get();
        $aboutdata=DB::table('about')->get();
        $aboutimage=DB::table('about_images')->get();
        $pricingData=DB::table('pricing')->get();
        $footer=DB::table('footers')->get();
      return view('welcome',compact('servicesdata','pricingData','aboutdata','aboutimage','headerdata','footer'));
    }
}
