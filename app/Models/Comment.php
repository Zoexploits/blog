<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
      protected $fillable=['user_id','post_id','body'];




      function user(){
        return $this->belongsTo(User::class);
      }



      function post(){
        return $this->belongsTo(Post::class);
      }

}
