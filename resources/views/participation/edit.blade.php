@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h2 style="font-family: Roboto;font-size: 2rem; font-weight: 900;">Edit the Participation</h2>
</div>

<div class="container  d-flex justify-content-center">
		<div class="mt-3 card  p-3 w-75" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);">
		    <div class="card-body">
		        <form method="POST" action="{{ url('/participation/'.$participation->id.'/update') }}">
				@csrf
                @method("PUT")
		            <div class="row mb-3">
					    <label for="fullname"  class="col-sm-2 col-form-label">{{__('Full Name')}}</label>
					    <div class="col-sm-10">
					      <input type="text"  value="{{old('fullName',$participation->fullName)}}" class="form-control" id="fullname" name="fullName" placeholder="EX: Soufiane Lamchoudi">
						  @error('fullName') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="email" class="col-sm-2 col-form-label">{{__('Email')}}</label>
					    <div class="col-sm-10">
					      <input type="email"  value="{{old('email',$participation->email)}}" class="form-control" id="email" name="email" placeholder="EX: mexudi@mexudi.com">
						  @error('email') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="phone" class="col-sm-2 col-form-label">{{__('Tel')}}</label>
					    <div class="col-sm-10">
					      <input type="text"  value="{{old('phone',$participation->phone)}}" class="form-control" id="phone" name="phone" placeholder="EX: +2126XXXXXXXX">
						  @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	<fieldset class="row mb-3">
					    <legend class="col-form-label col-sm-2 pt-0" value="{{old('sex',$participation->sex)}}">{{__('Gender')}}</legend>
					    <div class="col-sm-10">
					      <div class="form-check">
					        <input class="form-check-input"  type="radio" name="sex" id="female" value="female" checked @endif>
					        <label class="form-check-label" for="female">
					          {{__('Female')}}
					        </label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" type="radio" name="sex" id="male" value="male" checked>
					        <label class="form-check-label" for="male">
					          {{__('Male')}}
					        </label>
					      </div>
					    </div>
					</fieldset>
					<div class="row mb-3">
					    <label for="establishment" class="col-sm-2 col-form-label">Etablishment</label>
					    <div class="col-sm-10">
						<select class="form-control"  value="{{old('establishment',$participation->establishment->shortName)}}" name="establishment_id" id="establishment">
							@foreach($establishments as $establishment)
							<option value="{{$establishment->id}}">{{$establishment->shortName}}</option>
							@endforeach
						</select>
					    </div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="ddn" class="col-sm-2 col-form-label">Date of Birth</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="ddn" value="{{old('ddn',$participation->ddn)}}">
					    </div>
				  	</div>
				  	<button type="submit" class="btn btn-outline-dark">Confirm</button>
				  	
		        </form>
		    </div>
		</div>
	</div>

@endsection