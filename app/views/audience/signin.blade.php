@extends('layout.main')

@section('content')
<br/>
<br/>
<br/>
<br/>


<form action="{{ URL::route('audience-sign-in-post')}}" method="post">

	<div class="field">
		Email: <input type="text" name="email">
		@if($errors->has('email'))
		{{$errors->first('email')}}
		@endif
	</div>
	<div class="field">
		Password: <input type="password" name="password">
		@if($errors->has('password'))
		{{$errors->first('password')}}
		@endif
	</div>
	<!--<div class="field">
		<input type="checkbox" name="remember" id="remember">
		<label for="remember">
			Remember me
		</label>
	</div>
-->
	<br/>
	<br/>

	<input type="submit" value="Sign-in">
	{{Form::token()}}
</form>

@stop