@extends('_master')

@section('css')
<link href="../css/bootstrap.css" rel="stylesheet">
@stop
<br>
<br>
@section('Login')

	<h1>Log in</h1>
	<a class="float-right" href="#">
             <img class="media-object" src="images/stocks2.jpeg" alt = "Login" width="480" height="312" style="float:right">
    </a>

	{{ Form::open(array('url' => '/login')) }}

    	Email<br>
    	{{ Form::text('email') }}<br><br>

    	Password:<br>
    	{{ Form::password('password') }}<br><br>

    	{{ Form::submit('Login') }}

	{{ Form::close() }}

	or
	<a href='/signup'>Sign up</a>

@stop
                        


