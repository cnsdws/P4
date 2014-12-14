@extends('_master')

@section('css')
<link href="../css/bootstrap.css" rel="stylesheet">
@stop
<br>
<br>
@section('Login')

	<h1>Log in</h1>

{{ Form::open(array('url' => '/login')) }}

    Email<br>
    {{ Form::text('email') }}<br><br>

    Password:<br>
    {{ Form::password('password') }}<br><br>

    {{ Form::submit('Submit') }}

{{ Form::close() }}

or
<a href='/p4/public/signup'>Sign up</a>

@stop
                        


