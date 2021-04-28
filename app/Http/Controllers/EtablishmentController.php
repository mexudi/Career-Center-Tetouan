<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establishment;

class EtablishmentController extends Controller
{
    public function index()
    {
        $etablishments = Establishment::all();
        return view('etablishment.etablishment',['etablishments'=>$etablishments]);
    }

    public function create()
    {
        return view('etablishment.create');
    }

    public function store(Request $request)
    {
        $request->validate(['shortName'=>'required|min:3|max:50']);
        $request->validate(['fullName'=> 'required|min:4|max:100']);

        $etablishment = new Establishment();
        $etablishment->shortName = $request->input('shortName');
        $etablishment->fullName = $request->input('fullName');

        $etablishment->save();

        $request->session()->flash('status', 'Adding new Etablishment is done');
        return redirect('etablishments');
    }

    public function edit($id)
    {
        $etablishment = Establishment::findOrFail($id);
        return view('etablishment.edit',['etablishment'=>$etablishment]);
    }

    public function update(Request $request,$id)
    {
        $request->validate(['shortName'=>'required|min:3|max:50']);
        $request->validate(['fullName'=>'required|min:4|max:100']);

        $etablishment = Establishment::findOrFail($id);
        $etablishment->shortName = $request->input('shortName');
        $etablishment->fulName = $request->input('fullName');
        $etablishment->update();
        return redirect('etablishments');
    }

    public function destroy(Request $request, $id)
    {
        $etablishment = Establishment::findOrFail($id);
        $etablishment->delete();
        $request->session()->flash('status', 'Deleting the etablishment is done');
        return redirect('etablishments');
    }
}
