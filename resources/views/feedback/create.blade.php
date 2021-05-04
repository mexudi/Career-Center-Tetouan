<link href="/css/all.css" rel="stylesheet">
@extends('layouts.app')

@section('content')
	<div id="feedback">

		<div class="section-title">
			<p>Your Opinion Matter</p>
		</div>
			<div class="container  d-flex justify-content-center" style="margin-bottom: 150px;" >
				<div class="mt-3 card  p-3 w-75">
					<div class="card-body">
						<form method="POST" action="{{ url('/feedback/store') }}">
						@csrf
							<div class="row mb-3">
								<label for="q1" class="col-7 col-form-label">How did you find our service?</label>
								<div class="col-sm-10">
								<select class="form-select" aria-label="Default select example" name="qs1" id="q1" style="width: 150px;">
										<option selected value="very good">Very Good</option>
										<option value="good">Good</option>
										<option value="mediocre">Mediocre</option>
										<option value="bad">bad</option>
										<option value="very bad">Very Bad</option>
									</select>
								</div>
							</div>
							<div class="row mb-3">
								<label for="q2" class="col-7 col-form-label">What is you purpose from this visit?</label>
								<div class="col-sm-10">
								<select class="form-select" aria-label="Default select example" name="qs2" id="q2" style="width: 150px;">
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
							<button type="submit" class="btn confirm">Confirm</button>
							<a href="{{ url('/feedback/create')}}">
								<button type="button" class="btn btn-outline-danger">Cancel</button>
							</a>
							
						</form>
					</div>
				</div>
			</div>
	</div>

@endsection