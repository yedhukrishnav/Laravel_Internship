<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
   
    function addData(Request $req)
    {
        $member=new Details;
        $member->name=$req->name;
        $member->class=$req->class;
        $member->subject=$req->subject;
        $member->save();
        
        return redirect('view');
       
    }
    function view()
    {
       
       $data=Details::all();
       return view('view',['mem'=>$data]);
    }
    function delete($id)
    {
        $data=Details::find($id);
        $data->delete($id);
        return redirect('view');
    }
    function showData($id)
    {
        $data=Details::find($id);
        return view('update',['data'=>$data]);
    }
    function update(Request $req)
    {
        //return $req->input();
        $data=Details::find($req->id);
        $data->name=$req->name;
        $data->class=$req->class;
        $data->subject=$req->subject;
        $data->save();
        return redirect('view');
    }
}
