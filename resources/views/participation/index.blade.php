<link href="/css/title.css" rel="stylesheet">
@extends('layouts.app')

@section('content')
<div class="mt-3">
<h2 style="font-family: Roboto;font-size: 2rem; font-weight: 900;">List of Participation</h2>
<a href="{{url('/participation/create')}}" type="button" class="mb-2 btn btn-info float-end">Add new visitor</a>

</div>
@if(session()->has('status'))
  <div class="alert alert-success" role="alert" style="width: 30%;">
    {{session()->get('status')}}
  </div>
@endif
<form class="form-inline mb-4" method="GET">
  <div class="form-group mb-2 mr-2">
    <input type="text" class="form-control" id="filter" name="filter" placeholder="User name..." value="{{$filter}}">
  </div>
  <button type="submit" class="btn btn-outline-dark mb-2">Filter</button>
</form>
<table class="table table-bordered">
    <thead>
      <tr style="text-align: center;">
        <th scope="col" style="width: 5%;">#</th>
        <th scope="col" >Full Name</th>
        <th scope="col" >Email</th>
        <th scope="col" >Phone</th>
        <th scope="col" >Gender</th>
        <th scope="col" >Establishment</th>
        <th scope="col" style="width: 15%;">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($participations as $participation)
      <tr>
        <th scope="row" style="text-align: center;">{{$participation->id}}</th>
        <td>{{$participation->fullName}}</td>
        <td>{{$participation->email}}</td>
        <td>{{$participation->phone}}</td>
        <td>{{$participation->sex}}</td>
        <td>{{$participation->shortName}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/participation/'.$participation->id.'/edit')}}" type="button" class="btn btn-primary">Edit</a>
                <form method="POST" action="{{url('/participation/'.$participation->id)}}">
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
  {{ $participations->onEachSide(5)->links() }}

@endsection