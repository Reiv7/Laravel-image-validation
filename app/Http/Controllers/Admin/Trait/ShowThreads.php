<?php
namespace App\Http\Controllers\Admin\Trait;
use App\Models\User;
trait ShowThreads{
    public function showThreads($id){
        $threads=User::findOrFail($id)->threads;
        return view('admin.threads.all', compact('threads'));
    }
}






?>