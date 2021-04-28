@extends('layouts.app')

@section('content')
<div class="mt-3">
<h2 style="font-family: Roboto;font-size: 2rem; font-weight: 900;">List of Etablishments</h2>
<a href="{{url('/establishments/create')}}" type="button" class="mb-2 btn btn-info float-end">Add new etablishment</a>    
</div>

@if(session()->has('status'))
  <div class="alert alert-success" role="alert" style="width: 30%;">
    {{session()->get('status')}}
  </div>
@endif
<table class="table table-bordered">
    <thead>
      <tr style="text-align: center;">
        <th scope="col" style="width: 5%;">#</th>
        <th scope="col" >Short name</th>
        <th scope="col" >Full name</th>
        <th scope="col" style="width: 15%;">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($etablishments as $etablishment)
      <tr>
        <th scope="row" style="text-align: center;">{{$etablishment->id}}</th>
        <td>{{$etablishment->shortName}}</td>
        <td>{{$etablishment->fullName}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/establishments/'.$etablishment->id.'/edit')}}" type="button" class="btn btn-primary">Edit</a>
                <form method="POST" action="{{url('/establishments/'.$etablishment->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection