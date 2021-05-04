<link href="/css/title.css" rel="stylesheet">
@extends('layouts.app')

@section('content')
<div class="section-title">
			<p>Your Opinion Matter</p>
</div>
<table class="table table-bordered">
    <thead>
      <tr style="text-align: center;">
        <th scope="col" style="width: 5%;">#</th>
        <th scope="col" >qs1</th>
        <th scope="col" >qs2</th>
        <th scope="col" >qs3</th>
        <th scope="col" >qs4</th>
        <th scope="col" >Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($feedbacks as $feedback)
      <tr style="text-align: center;"> 
        <th scope="row" style="text-align: center;">{{$feedback->id}}</th>
        <td>{{$feedback->qs1}}</td>
        <td>{{$feedback->qs2}}</td>
        <td>{{$feedback->qs3}}</td>
        <td>{{$feedback->qs4}}%</td>
        <td>
        <a href="{{url('/feedbacks/'.$feedback->id)}}" style="text-decoration: none;">
          <button type="button" class="btn btn-warning bnt-group">Show</button>
        </a>
            <div class="btn-group" role="group" aria-label="Basic example">
                <form method="POST" action="{{url('/feedback/'.$feedback->id)}}">
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