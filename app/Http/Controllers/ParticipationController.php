<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use App\Models\Establishment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ParticipationController extends Controller
{
    public function create()
    {
        $establishments  = Establishment::all();
        return view('participation.participation',['establishments'=>$establishments]);
    }

    public function store(Request $request)
   {
       $request->validate(['fullName'=>'required|min:10|max:50']);
       $request->validate(['email'=>'email|max:255']);
       $request->validate(['phone'=>'min:10|max:20']);
       //$request->validate(['sex'=>'required']);

       $participation = new Participation();
       $participation->fullName = $request->input('fullName');
       $participation->email = $request->input('email');
       $participation->phone = $request->input('phone');
       $participation->sex = $request->input('sex');
       $participation->establishment_id = $request->input('establishment_id');
       $participation->ddn = $request->input('ddn');

       $participation->save();

       $request->session()->flash('status', 'Adding new participate is done');

       return redirect('participation/create');
   }

   public function edit($id)
   {
        $participation = Participation::findorFail($id);
        $establishments  = Establishment::all();
        return view('participation.edit',['participation'=>$participation, 'establishments'=>$establishments]);
   }

   public function update(Request $request, $id)
   {
       $request->validate(['fullName'=>'required|min:10|max:50']);
       $request->validate(['email'=>'email|max:255']);
       $request->validate(['phone'=>'min:10|max:20']);
       //$request->validate(['sex'=>'required']);

       $participation = Participation::findOrFail($id);
       $participation->fullName = $request->input('fullName');
       $participation->email = $request->input('email');
       $participation->phone = $request->input('phone');
       $participation->sex = $request->input('sex');
       $participation->establishment_id = $request->input('establishment_id');
       $participation->ddn = $request->input('ddn');

       $participation->update();

       $request->session()->flash('status', 'Adding new participate is done');

       return redirect('participation');
   }

   public function destroy(Request $request,$id){
        
    $participation = Participation::findOrFail($id);
    $participation->delete();

    $request->session()->flash('status', 'Task Delete was successful!');

    return redirect('participation');
}
}

   
