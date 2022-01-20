<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    
    use HasFactory;
    protected $fillable = ['author','title','content'];
    public function threads(){
        return $this->hasOne(User::class,'thread_id','id');
    }
    // public function users(){
    //     return $this->hasMany(User::class,'thread_id','id');
    // }
}
