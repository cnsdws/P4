@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop
<br>
<br>
@section('Signup')

	<h2>Sign up</h2>

{{ Form::open(array('url' => '/signup')) }}

    Email<br>
    {{ Form::text('email') }}<br><br>

    Password:<br>
    {{ Form::password('password') }}<br><br>

    {{ Form::submit('Submit') }}

{{ Form::close() }}

@stop
                        


