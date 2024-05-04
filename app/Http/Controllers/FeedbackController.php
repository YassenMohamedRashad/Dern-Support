<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    function index()
    {
        $feedbacks = Feedback::with('user')->get();
        return view('feedbacks')->with('feedbacks', $feedbacks);
    }

    function addfeedback(Request $request , $user_id){
        $request->validate([
            "message" => "required"
        ]);

        try {
            Feedback::create([
                "title" => Auth()->user()->name . " feedback",
                "user_id" => $user_id,
                "message" => $request->message
            ]);
            return redirect("/feedbacks")->with('alert', 'Feedback added successfully');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
