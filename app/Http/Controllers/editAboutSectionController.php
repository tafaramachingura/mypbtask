<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class editAboutSectionController extends Controller
{
    //
    public function index(){
        $data=DB::table('about')->get();
        $imagedata=DB::table('about_images')->get();
        return view('editAbout',compact('data','imagedata'));
    }

    public function edit($id){
        $datas=DB::table('about')->where('id',$id)->first();
        $imageid=DB::table('about_images')->where('id',$id)->first();
        return view('updateSection/updateAbout',compact('datas','imageid'));
    }

    public function store(request $request){
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);
        
      
       $title=$request->input('title');
         $id=$request->input('tableId');
        $body=$request->input('body');
    
       DB::update("update about set title='$title', body='$body' where id=$id");
    
        return redirect()->back()->with('status', 'Edited Section successfull');
    
    
    }
}
