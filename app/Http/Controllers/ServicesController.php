<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function index(){
        return view('services')->with(["services"=>Service::get()]);
    }
}
