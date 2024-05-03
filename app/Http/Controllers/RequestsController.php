<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\Service;
use Dotenv\Validator;
use Exception;
use Illuminate\Http\Request;

use Filament\Notifications\Notification;
use function Laravel\Prompts\info;


use Livewire\Component;

class RequestsController extends Controller
{
    function index($service_id)
    {
        return view("request.request_form")->with([
            "service" => Service::findOrFail($service_id),
            "user"=>Auth()->user(),
        ]);
    }

    function make_request(Request $request, $service_id){
        $service = Service::findorFail($service_id);
        $request->validate([
            'details' => 'required',
            'user_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
        ]);

        try {
            ModelsRequest::create([
                "total_cost" => $service->cost * 1.1,
                "details" => $request->details,
                "status" => "in_progress",
                "user_id" => $request->user_id,
                "service_id" => $request->service_id,
            ]);
            return redirect("/")->with("alert","service placed successfully");
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
