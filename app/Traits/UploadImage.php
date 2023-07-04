<?php

namespace App\Traits;


use Illuminate\Http\Request;

trait UploadImage
{
    public function uploadImage(Request $request,$folderName){
        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs($folderName,$image,'save');
        return $path;
    }

    public function uploadVedio(Request $request,$folderName){
        $video = $request->file('video')->getClientOriginalName();
        $path = $request->file('video')->storeAs($folderName,$video,'save');
        return $path;
    }
}
