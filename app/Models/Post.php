<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    protected $fillable=['content','excerpt','user_id','title', 'photo'];


                 public function user(){
                    return $this->belongsTo(User::class);
                 }

                 public function getExcerpt($length = 100){
            // Limit the number of characters in the content field
               return Str::limit(strip_tags($this->content), $length);
            }



                 public function comments(){
                    return $this->hasMany(Comment::class);
                 }



}
