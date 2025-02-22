@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="col-md-6 offset-md-3">
	<h1 class="h2">Login</h1>
	<form action="{{ route('login.auth') }}" method='post'>
		@csrf
		<div class="mb-3">
			<label for="email" class="form-label">Email address</label>
			<input name="email" type="email" class="form-control" id="email" placeholder='Email'>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input name="password" type="password" class="form-control" id="password" placeholder='Password'>
		</div>
		<div class="mb-3 form-check">
			<input name='remember' class="form-check-input" type="checkbox" id="remember">
			<label class="form-check-label" for="remember">
			  Запомнить меня
			</label>
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
	</form>
</div>

@endsection