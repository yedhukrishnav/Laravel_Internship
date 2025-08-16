<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newcontroller extends Controller
{
     function userLogin(Request $req)
    {
       $req->validate(['user'=>'required|max:10',
        'password'=>'required|min:5']);
      
        $data= $req->input();
        $req->session()->put('user',$data['user']);
        return redirect('profile');
    }
    
}
