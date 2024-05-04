<?php

namespace App\Http\Controllers;

use App\Models\Request;

class UserRequestsController extends Controller
{
    function index(){
        return view('user_requests')->with([
            "requests"=>Request::where("user_id",Auth()->user()->id)->get()
        ]);
    }
}
