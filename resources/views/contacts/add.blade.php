@extends('layouts.app')
@section('title', 'Add contact')

@section('content')
<div class="container">
	<div class="panel-body">
        <!-- Display Validation Errors  include('common.errors')-->
        

        <!-- New Task Form -->
        <form action="{{ url('contact') }}" method="POST" class="form-horizontal">
        	<legend>Add contact</legend>
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">First name</label>
	
				<div class="col-md-3">
					<input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
	
					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>
	
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">Last name</label>
	
				<div class="col-md-3">
					<input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
	
					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>
			
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">E-mail</label>
	
				<div class="col-md-3">
					<div class="input-group">
						<input id="email1" type="text" class="form-control" name="email1" value="{{ old('email1') }}">
						<span class="input-group-btn">
					    	<button class="btn btn-default" type="button">+</button>
					    </span>
				    </div>
					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>
			
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">Phone</label>
	
				<div class="col-md-3">
					<div class="input-group">
						<input id="phone1" type="text" class="form-control" name="phone1" value="{{ old('phone1') }}">
						<span class="input-group-btn">
					    	<button class="btn btn-default" type="button">+</button>
					    </span>
				    </div>
					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>
	
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-btn fa-save"></i> Save
					</button>
				</div>
			</div>
        </form>
    </div>
</div>
@endsection