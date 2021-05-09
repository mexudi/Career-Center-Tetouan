@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 150px; margin-bottom:150px;">
    <form action="/admin/1" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-4 offset-2">

                <div class="row">
                    <h1>Edit Home Infos</h1>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label">Email</label>

                    <input id="email"
                           type="text"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email"
                           value="{{ old('email') }}"
                           autocomplete="email" autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label">Tel</label>

                    <input id="phone"
                           type="text"
                           class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                           name="phone"
                           value="{{ old('phone')  }}"
                           autocomplete="phone" autofocus>

                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <button class="btn btn-primary">Save</button>
                </div>
                
            </div>
        </div>
    </form>
</div>
@endsection