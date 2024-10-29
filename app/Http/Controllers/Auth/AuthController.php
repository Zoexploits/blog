<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{


    public function register(){

              
        return route('auth.register');
     }


         public function login(){

              
            return route('posts.index');
         }




         public function logout(){

              
            return route('posts.index');
         }
}
