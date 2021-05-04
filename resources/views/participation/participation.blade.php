<link href="/css/all.css" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div id="participation">
@if(session()->has('status'))
  <div class="alert alert-success" role="alert" style="width: 30%;">
    {{session()->get('status')}}
  </div>
@endif
<div class="section-title">
	<p>Nouvelle participation</p>
</div>

	<div class="container  d-flex justify-content-center">
		<div class="mt-3 card  p-3 w-75" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);">
		    <div class="card-body">
		        <form method="POST" action="{{ url('/participation/store') }}">
				@csrf
		            <div class="row mb-3">
					    <label for="fullname"  class="col-sm-2 col-form-label">{{__('Full Name')}}</label>
					    <div class="col-sm-10">
					      <input type="text" value="{{old('fullName',$participation->fullName ?? null)}}" class="form-control" id="fullname" name="fullName" placeholder="EX: Soufiane Lamchoudi">
						  @error('fullName') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="email" class="col-sm-2 col-form-label">{{__('Email')}}</label>
					    <div class="col-sm-10">
					      <input type="email" value="{{old('email',$participation->email ?? null)}}" class="form-control" id="email" name="email" placeholder="EX: mexudi@mexudi.com">
						  @error('email') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="phone" class="col-sm-2 col-form-label">{{__('Tel')}}</label>
					    <div class="col-sm-10">
					      <input type="text" value="{{old('phone',$participation->phone ?? null)}}" class="form-control" id="phone" name="phone" placeholder="EX: +2126XXXXXXXX">
						  @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	<fieldset class="row mb-3">
					    <legend class="col-form-label col-sm-2 pt-0">{{__('Gender')}}</legend>
					    <div class="col-sm-10">
					      <div class="form-check">
					        <input class="form-check-input"  type="radio" name="sex" id="female" value="female" checked>
					        <label class="form-check-label" for="female">
					          {{__('Female')}}
					        </label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input"  type="radio" name="sex" id="male" value="male">
					        <label class="form-check-label" for="male">
					          {{__('Male')}}
					        </label>
					      </div>
					    </div>
					</fieldset>
					<div class="row mb-3">
					    <label for="establishment" class="col-sm-2 col-form-label">Etablishment</label>
					    <div class="col-sm-10">
						<select class="form-control" name="establishment_id" id="establishment">
							@foreach($establishments as $establishment)
							<option value="{{$establishment->id}}">{{$establishment->shortName}}</option>
							@endforeach
						</select>
					    </div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="ddn" class="col-sm-2 col-form-label">Date of Birth</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" name="ddn" id="ddn" value="{{old('ddn',$participation->ddn ?? null)}}">
					    </div>
				  	</div>
				  	<div class="row mb-5 mt-3">
					    <div class="col-sm-10 offset-sm-2">
					      	<div class="form-check">
						        <input class="form-check-input" type="checkbox" name="privacy" id="privacy">
						        <label class="form-check-label" for="privacy">
						          I have read and agree to the <strong>Terms of Use</strong> and <strong>Privacy Policy</strong>
						        </label>
					      	</div>
					    </div>
				  	</div>
				  	<button type="submit" class="btn confirm">Confirm</button>
					<a href="{{ url('/participation/create')}}">
                		<button type="button" class="btn btn-outline-danger cancel">Cancel</button>
           			 </a>
				  	
		        </form>
		    </div>
		</div>
	</div>
</div>
@endsection
