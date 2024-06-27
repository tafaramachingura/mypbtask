<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DateTime;
class editPricingSectionController extends Controller
{
    //
    public function index(){
        $data=DB::table('pricing')->get();
        return view('editPricing',compact('data'));
    }

    public function edit($id){
        $datas=DB::table('pricing')->where('id',$id)->first();
        return view('updateSection/updatePricing',compact('datas'));
    }

    public function store(request $request){
        $this->validate($request, [
            'plan'=>'required',
            'title'=>'required',
            'price'=>'required',
            'features'=>'required'
            
        ]);
        
        $plan=$request->input('plan');
        $title=$request->input('title');
         $id=$request->input('tableId');
         $price=$request->input('price');
         $features=$request->input('features');
         $date=new Datetime();

      // dd($date);
        DB::update("update pricing set package_plan='$plan', package_title='$title', package_price='$price',package_features='$features' where id=$id");
    
       return redirect()->back()->with('status', 'Edited Section successfull');
    
    
    }
}
