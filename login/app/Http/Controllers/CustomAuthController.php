<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.registration');
    }
    public function Registeruser(Request $request)
    {
        $request->validate(['name'=>'required|max:10',
                            'email'=>'required|email|unique:users',
                            'password'=>'required|min:5']);

        $member = new Member();
        $member->name = $request->name;
        $member->email= $request->email;
        $member->password =hash::make($request->password);
        $result = $member->save();


        if ($result) 
        {
            return redirect()->back()->with('message','Registration success');
        }
        else
        {
            return back()->with('failed','something wrong');
        }
    }
    public function Loginuser(Request $request)
    {
        $request->validate(
            ['email'=>'required|email',
            'password'=>'required|min:5']);

        $user = Member::where('email','=',$request->email)->first();
        if($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                $request->session()->put('loginid',$user->id);
                return redirect('dashboard');
            }
            else
            {
                return back()->with('fail','unmatched password');
            }
        }
        else
        {
            return back()->with('fail','unmatched email');
        }
    }


public function dashboard()
    {
        
        $data=array();
        if(Session::has('loginid'))
        {
            $data= Member::where('id','=',Session::get('loginid'))->first();
            return view('auth.dashboard',compact('data'));
        }

        
    }
    public function logout()
    {
        if(Session::has('loginid'))
        {
            Session::pull('loginid');
            return redirect('login');
        }
    }

}
