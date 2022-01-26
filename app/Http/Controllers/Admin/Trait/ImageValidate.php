<?php
namespace App\Http\Controllers\Admin\Trait;

use Illuminate\Http\Request;

trait ImageValidate{
    
        public function image()
        {
            return view('image');
        }
    
        public function imageStore(Request $request)
        {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|min:512'],['image.required'=>'Image extentions must be " Jpg , Png , Jpeg , Gif , Svg "']);
    
        }
    }









?>