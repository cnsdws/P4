@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop

@section('AddStock')

	<h2>Add a new Stock Position</h2>

	{{ Form::open(array('url' => '/position/add')) }}


		{{ Form::input('text', 'symbol', null, ['size' => '5', 'maxlength'=>'6']) }}
		{{ Form::label('symbol','Stock Symbol') }}
		<br>
		<br>

		{{ Form::input('text', 'shares', null, ['size' => '5', 'maxlength'=>'6']) }}
		{{ Form::label('shares', 'Shares of Stock') }}
		<br>
		<br>

		{{ Form::input('text', 'price', null, ['size' => '6', 'maxlength'=>'7']) }}
		{{ Form::label('price','Purchase Price') }}
		<br>
		<br>

		{{ Form::submit('Add Stock Position'); }}

	{{ Form::close() }}

@stop
                        


