@extends('_master')

@section('css')
<link href="../css/bootstrap.css" rel="stylesheet">
@stop

@section('Delete')

<h1 class="media-heading">Project 4 - Stock Tracker</h1>
    <!-- Main page section for the Lorem text generator -->
        <h3>Stock Portfolio Management</h3>

		<h4>Delete {{ $position->symbol }} <small>Are you sure?</small></h4>
				
		<form action="{{ action('PositionsController@handleDelete') }}" method="post" role="form">
			<input type="hidden" name="position" value="{{ $position->id }}" />
			<input type="submit" class="btn btn-danger" value="Yes" />
			<a href="{{ action('PositionsController@index') }}" class="btn btn-default">Cancel</a>
		</form>

@stop

