<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

;

class editServicesSectionController extends Controller
{
    //
    public function index(){
        $data=DB::table('services')->get();
        return view('editServices',compact('data'));
    }

    public function edit($id){
        $datas=DB::table('services')->where('id',$id)->first();
        return view('updateSection/updateServices',compact('datas'));
    }
/*storing edited data from services section */
public function store(request $request){
    $this->validate($request, [
        'title'=>'required',
        'body'=>'required'
    ]);
    
   
    $title=$request->input('title');
     $id=$request->input('tableId');
    $body=$request->input('body');
   
    DB::update("update services set title='$title', body='$body' where id=$id");

    return redirect()->back()->with('status', 'Edited Section successfull');


}
}
