<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Trait\ImageValidate;
use App\Models\Role;
use App\Models\User;
use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    use ImageValidate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $threads = Thread::all();
        return view("admin.threads.all", compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $user1s = User::all();

        // return view("admin.users.create" , compact('users'));


        $threads = Thread::all();

        return view("admin.threads.create" , compact('threads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $rules = [];

        // $image_max_size = 256 * 2;

        // foreach($request->file('file') as $index => $file){
        //     if(in_array($file->getMimeType(), ['image/jpg', 'image/jpeg', 'image/png','image/gif']) {
        //   $rules["file.$index"] = ["max:$image_max_size"];
        //     } else {

        //   // Always non-validating => returns error
        //   $rules["file.$index"] = ['bail', 'mimes:jpg,jpeg,png'];
        //     }
        // }

        // $request->validate($rules);
        //
        
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:512|',],['image.required'=>'Image extentions must be " Jpg , Png , Jpeg , Gif , Svg "']);
        $Image=$request->file('image');
        $PostImage=time()."_".$Image->getClientOriginalName();
        $Image->move('img',$PostImage);
       
        // $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|min:512|',
        // ]);
        

        Thread::create([
            'title'=> $request->title,
            'content'=> $request->description,
            'author'=>Auth::user()->name,
            'user_id'=> Auth::user()->id,
            'image'=>$PostImage,

        ]);
        return redirect('/admin/threads');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function rules()
    // {
    //     return [
    //             'image' => ['required|mimes:png,jpeg,jpg,gif','image|min:512'],
    //         ];
    // }
    public function show($id)
    {
        //
        $thread = Thread::findOrFail($id);
        return view('admin.threads.show',compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
