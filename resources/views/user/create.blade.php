@extends('layouts.main')

@section('title', 'Registration')

@section('content')
	
	<form class="col-md-6 offset-md-3">
		<h1 class="h2">Register</h1>
		<form action="{{ route('user.store') }}" method='post'>
			@csrf
			<div class="mb-3">
				<label for="name" class="form-label">User Name</label>
				<input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder='Name' value='{{ old('name') }}'>
				@error('name')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
				
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email address</label>
				<input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder='Email' value='{{ old('email') }}'>
				@error('email')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder='Password'>
			</div>
			<div class="mb-3">
				<label for="password_confirmation" class="form-label">Confirm password</label>
				<input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder='Confirm password'>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
@endsection