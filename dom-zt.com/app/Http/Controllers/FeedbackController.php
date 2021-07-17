<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function getFeedbck()
    {
        $feedback = Feedback::paginate(10);

        return view('admin.feedback', compact('feedback'));
    }

    public function setPublic($id)
    {
        $feedback = Feedback::find($id);
        $feedback->public = 1;
        if($feedback->save()){
            return redirect('manage/admin/feedback')->with('success', 'Коментар опубліковано.');
        }else{
            return redirect('manage/admin/feedback')->with('error', 'WFT');
        }
    }

    public function setPrivate($id)
    {
        $feedback = Feedback::find($id);
        $feedback->public = 0;

        if($feedback->save()){
            return redirect('manage/admin/feedback')->with('success', 'Коментар приховано.');
        }else{
            return redirect('manage/admin/feedback')->with('error', 'WFT');
        }

    }

    public function deleteFeedback($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();

        return redirect('manage/admin/feedback')->with('success', 'Коментар видалено.');
    }

    public function insertFeedback(Request $request)
    {
        $feedback = new Feedback();

        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->commnet = $request->commnet;
        $feedback->starts = $request->starts;
        $feedback->date = date('d-m-Y');
        $feedback->public = 0;

        $feedback->save();

        return redirect('manage/admin/feedback')->with('success', 'Коментар додано успішно!');
    }
}
