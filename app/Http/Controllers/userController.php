<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
   function insert()
   {
   	 $request->validate([
       'name'                  => 'required',
       'email'                 => 'required',
       'password'              => 'required|min:6|confirmed',
       'address'               => 'required',
     ]);
   }
}
