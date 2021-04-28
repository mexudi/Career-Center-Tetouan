<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

   


    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        /*
        $request->validate(['qs1'=>'required']);
        $request->validate(['qs2'=>'required']);
        $request->validate(['qs3'=>'required']);
        $request->validate(['qs4'=>'required']);
        $request->validate(['qs5'=>'required']);
        */

        $feedback = new Feedback();
        $feedback->qs1 = $request->input('qs1');
        $feedback->qs2 = $request->input('qs2');
        $feedback->qs3 = $request->input('qs3');
        $feedback->qs4 = $request->input('qs4');
        $feedback->qs5 = $request->input('qs5');

        $feedback->save();

        $request->session()->flash('status', 'Adding new feedback is done');

       return redirect('feedback');
    }

    public function destroy(Request $request ,$id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
        return redirect('feedback');
    }
}
