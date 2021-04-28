<?php

namespace App\Http\Controllers;
use App\Models\Participation;
use App\Models\Feedback;
use App\Models\Establishment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('AdminPanel.index');
    }


    public function participation(Request $request)
    {
        $filter = $request->query('filter');
        $participations = DB::table('participations')->join('establishments','participations.establishment_id','=','establishments.id')
        ->select('participations.id', 'participations.fullName', 'participations.email', 'participations.phone','participations.sex','establishments.shortName')
        ->where('participations.fullName', 'like', '%'.$filter.'%')
        ->paginate(7);
        
        //$participations = Participation::all();

       
        //$participations = Participation::all();
        /*if (!empty($filter)) {
            $participations
                ->where('participations.fullName', 'like', '%'.$filter.'%');
        } 
        */
    
        return view('participation.index',['participations'=>$participations, 'filter'=>$filter]);
        //return view('participation.index',['participations'=>$participations]);
    }


    public function feedback()
    {
        $feedbacks = Feedback::all();
        return view('feedback.index',['feedbacks'=>$feedbacks]);
    }
    public function feedbackShow($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.show',['feedback'=>$feedback]);
    }

    
    public function establishment()
    {
        $etablishments = Establishment::all();
        return view('etablishment.etablishment',['etablishments'=>$etablishments]);
    }

    public function establishmentCreate()
    {
        return view('etablishment.create');
    }

    public function establishmentStore(Request $request)
    {
        $request->validate(['shortName'=>'required|min:3|max:50']);
        $request->validate(['fullName'=> 'required|min:4|max:100']);

        $etablishment = new Establishment();
        $etablishment->shortName = $request->input('shortName');
        $etablishment->fullName = $request->input('fullName');

        $etablishment->save();

        $request->session()->flash('status', 'Adding new Etablishment is done');
        return redirect('establishments');
    }

    public function establishmentEdit($id)
    {
        $etablishment = Establishment::findOrFail($id);
        return view('etablishment.edit',['etablishment'=>$etablishment]);
    }

    public function establishmentUpdate(Request $request,$id)
    {
        $request->validate(['shortName'=>'required|min:3|max:50']);
        $request->validate(['fullName'=>'required|min:4|max:100']);

        $etablishment = Establishment::findOrFail($id);
        $etablishment->shortName = $request->input('shortName');
        $etablishment->fulName = $request->input('fullName');
        return redirect('establishments');
    }

    public function destroy(Request $request, $id)
    {
        $etablishment = Establishment::findOrFail($id);
        $etablishment->delete();
        $request->session()->flash('status', 'Deleting the etablishment is done');
        return redirect('establishments');
    }
}
