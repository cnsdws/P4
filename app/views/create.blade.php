@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop

@section('Create')

<h1 class="media-heading">Project 4 - Stock Tracker</h1>
    <!-- Main page section for create position -->
    <h2>Add a new Stock Position</h2>

    	<form action="{{ action('PositionsController@handleCreate') }}" method="post" role="form">

			<div class="form-group">
				{{ Form::input('text', 'symbol', null, ['size' => '5', 'maxlength'=>'6']) }}
				{{ Form::label('symbol','Stock Symbol') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shares', null, ['size' => '5', 'maxlength'=>'6']) }}
				{{ Form::label('shares', 'Shares of Stock') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'price', null, ['size' => '6', 'maxlength'=>'7']) }}
				{{ Form::label('price','Purchase Price') }}
			</div>
			{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
			<a href="{{ action('PositionsController@index') }}" class="btn btn-link">Cancel</a>
		</form>

	
                        
@stop

