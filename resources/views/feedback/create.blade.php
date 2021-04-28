@extends('layouts.app')

@section('content')
<div class="mt-5 text-center">
	<h2 style="font-family: Roboto;font-size: 2rem; font-weight: 900;">
	Your opinion matters</h2>
	<h4 style="font-family: Roboto;">Help us improve our service? <strong>Give us your feedback.</strong></h4>
	<div class="container d-flex justify-content-center mb-3">
		<div class="row ">
		<div class="col" style="border-top:4px #EA4E3C solid;"></div>
		<div class="col" style="border-top:4px #742F8B solid;"></div>
		<div class="col" style="border-top:4px #25CBD3 solid;"></div>
		<div class="col" style="border-top:4px #F9D507 solid;"></div>
	</div>
	</div>
</div>
	<div class="container  d-flex justify-content-center" style="margin-bottom: 150px;" >
		<div class="mt-3 card  p-3 w-75">
		    <div class="card-body">
		        <form method="POST" action="{{ url('/feedback/store') }}">
                @csrf
		            <div class="row mb-3 d-flex">
					    <label for="q1" class="col-7 col-form-label">How did you find our service?</label>
					    <div class="row d-flex" id="qs1">
							<div class="form-check col-2">
								<input class="form-check-input" type="radio" name="qs1" id="vg" value="very good" checked>
							  	<label class="form-check-label" for="vg">
							  		Very good
							  	</label>
							</div>
							<div class="form-check col-2">
								<input class="form-check-input" type="radio" name="qs1" id="g" value="good" checked>
							  	<label class="form-check-label" for="g">
							  		Good
							  	</label>
							</div>
							<div class="form-check col-2">
								<input class="form-check-input" type="radio" name="qs1" id="m" value="mediocre" checked>
							  	<label class="form-check-label" for="m">
							  		Mediocre
							  	</label>
							</div>
							<div class="form-check col-2">
								<input class="form-check-input" type="radio" name="qs1" id="b" value="bad" checked>
							  	<label class="form-check-label" for="b">
							  		Bad
							  	</label>
							</div>
							<div class="form-check col-2">
								<input class="form-check-input" type="radio" name="qs1" id="vb" value="very bad" checked>
							  	<label class="form-check-label" for="vb">
							  		Very Bad
							  	</label>
							</div>
						</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="q2" class="col-7 col-form-label">What is you purpose from this visit?</label>
					    <div class="col-sm-10">
					      <select class="form-select" aria-label="Default select example" name="qs2" id="q2" style="width: 100px;">
								<option selected>----</option>
							  	<option value="Workshop">A Workshop</option>
								<option value="Meeting with the manager">Meeting with the manager</option>
							  	<option value="Meeting with the adviser">Meeting with the adviser</option>
							</select>
					    </div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="q3" class=" col-8 col-form-label">Do you think your purpose from this visit was acheived?</label>
					    <div class="form-check">
							<input class="form-check-input" type="radio" name="qs3" id="qs3_yes" value="yes" checked>
							<label class="form-check-label" for="qs3_yes">
							    Yes
							</label>
						</div>
						<div class="form-check">
						  	<input class="form-check-input" type="radio" name="qs3" id="qs3_no" value="no">
							<label class="form-check-label" for="qs3_no">
							    No
						    </label>
						</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="q2" class="col-7 col-form-label">Could you rate your satisfaction after this visit?</label>
							<div class="input-group">
							  <input type="number" class="form-control" name="qs4" placeholder="EX: 80" style="width: 100px;">
							  <span class="input-group-text">%</span>
							</div>
				  	</div>
				  	<div class="row mb-3">
					   <label for="qs4" class="mb-2">Is there anaything you didn't like about Career Center? please listed below</label>
					    <div class="form-group">
						    
						    <textarea class="form-control" id="qs4" rows="3" name="qs5"></textarea>
						</div>
				  	</div>
				  	<button type="submit" class="btn btn-dark">Confirm</button>
					<a href="{{ url('/feedback/create')}}">
                		<button type="button" class="btn btn-outline-danger">Cancel</button>
           			 </a>
				  	
		        </form>
		    </div>
		</div>
	</div>

@endsection