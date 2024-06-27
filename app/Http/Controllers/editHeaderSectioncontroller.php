<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

class editHeaderSectioncontroller extends Controller
{
    //
    public function index(){
        $headerdata=DB::table('headers')->get();
        return view('editHeader',compact('headerdata'));
    }

    public function edit($id){
        $datas=DB::table('headers')->where('id',$id)->first();
        return view('updateSection/updateHeader',compact('datas'));
    }
/*storing edited data from services section */
public function store(request $request){
    $this->validate($request, [
        'title'=>'required',
        'body'=>'required',
        'image'=>'required |image'
    ]);
    
    $imagePath='storage/'.$request->file('image')->store('imageStorage','public');
    $title=$request->input('title');
     $id=$request->input('tableId');
    $body=$request->input('body');

   
    DB::update("update headers set title='$title', body='$body', imagePath='$imagePath' where id=$id");

    return redirect()->back()->with('status', 'Edited Section successfull');



    
}

}
