@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h2 style="font-family: Roboto;font-size: 2rem; font-weight: 900;">Edit an Etablishment</h2>
</div>

<div class="mt-3 card">
    <div class="card-body">
        <form method="POST" action="{{ url('/establishments/'.$etablishment->id.'/update') }}">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="shortName" class="form-label">Short Name Of Etablishment</label>
                <input value="{{old('shortName',$etablishment->shortName)}}" type="text" class="form-control" name="shortName" id="shortName">
                @error('shortName'){{$message}}@enderror
            </div>
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name Of Etablishment</label>
                <input value="{{old('fullName',$etablishment->fullName)}}" type="text" class="form-control" name="fullName" id="fullName">
                @error('fullName'){{$message}}@enderror
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{ url('/establishments')}}">
                <button type="button" class="btn btn-outline-danger">Cancel</button>
            </a>
        </form>
    </div>
</div>


@endsection