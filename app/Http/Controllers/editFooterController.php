<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;


class editFooterController extends Controller
{
    //
    
    public function index(){
        $data=DB::table('footers')->get();
        return view('editFooter',compact('data'));
    }

    public function edit($id){
        $datas=DB::table('footers')->where('id',$id)->first();
        return view('updateSection/updateFooter',compact('datas'));
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
   
    DB::update("update footers set title='$title', body='$body' where id=$id");

    return redirect()->back()->with('status', 'Edited Section successfull');


}
}
