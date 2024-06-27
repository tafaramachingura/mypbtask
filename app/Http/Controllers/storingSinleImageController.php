<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;use Illuminate\Support\Facades\DB;
use App\Models\Post;



class storingSinleImageController extends Controller
{
    //

    public function edit($id){
        $datas=DB::table('about_images')->where('id',$id)->first();
        return view('updateSection/updateImage',compact('datas'));
    }
    public function store(request $request){
        $this->validate($request, [
            'image'=>'required |image'
        ]);
        $id=$request->input('tableId');
       $imagePath='storage/'.$request->file('image')->store('imageStorage','public');

DB::update("update about_images set imagePath='$imagePath' where id=$id");

return redirect()->back()->with('status', 'Edited Section successfull');
    }
}
