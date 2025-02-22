@extends('layouts.main')

@section('title', 'Verify Email')

@section('content')
	<div class="alert alert-info">
		Посмотри почту еблан.
	</div>
	ТЫ ЧО НЕ ПОЛУЧИЛ ССЫЛКУ?
	<form method='post' action='{{ route('verification.send') }}'>
		@csrf
		<button type='submit' class='btn btn-link ps-0'>Send Link</button>
	</form>

@endsection
