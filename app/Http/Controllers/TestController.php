<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    function testTable(Request $request){
       $search = $request->search ?? "";

       if($search != "" ){
           $test = Test::where('name','Like',"%$search%")->orwhere('email','Like',"%$search%")->get();
            // dd($test);
       }else{
        $test = Test::all();
       }

        return view('search',compact('test'));
    }
    function testMail(){
        // dd(112);
        $mail = Mail::to('umairuafmcs300@gmail.com')->send(new TestMail());
        if($mail){
            return 'your email is send';
        }
        else{
            return "issue in mail";
        }
    }
}
