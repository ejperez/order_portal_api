@extends('layout.public')

@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
	
		<h1 class="text-center">Order Portal SPA</h1>
		<h2 class="text-center">Log In</h2>
	
		<form method="POST" action="{{ url('/auth/login') }}">
			{!! csrf_field() !!}
					
			<div class="row">
				<div class="col-md-2">Email</div>
				<div class="col-md-10"><input class="form-control" type="email" name="email" value="{{ old('email') }}"></div>				
			</div>
			
			<br>
			
			<div class="row">
				<div class="col-md-2">Password</div>
				<div class="col-md-10"><input class="form-control" type="password" name="password" id="password"></div>
			</div>
			
			<br>
			
			<div class="row">
				<div class="col-md-6"><input type="checkbox" name="remember"> Remember Me</div>
				<div class="col-md-6 text-right"><button class="btn btn-primary" type="submit">Login</button></div>
			</div>
		</form>		
	</div>
</div>
@endsection