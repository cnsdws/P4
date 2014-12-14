@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop
<br>
<br>
@section('Signup')
	<!-- Sign up page -->
	<h2>Sign up</h2>

	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

<p> Welcome to the Stock Portfolio Management System! <br>
	Please enter a valid email and password of at least 6 characters to sign up.<br>

{{ Form::open(array('url' => '/signup')) }}

    Email<br>
    {{ Form::text('email') }}<br><br>

    Password:<br>
    {{ Form::password('password') }}<br><br>

    {{ Form::submit('Submit') }}

{{ Form::close() }}

@stop
                        


