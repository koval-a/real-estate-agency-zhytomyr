<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function insertFeedbck(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->commnet = $request->commnet;
        $feedback->stars = $request->stars;
        $feedback->date = date('d-m-Y');
        $feedback->public = 0;

        $feedback->save();

        return back()->with('success', 'Коментар додано успішно!');
    }
}
