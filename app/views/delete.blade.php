@extends('_master')

@section('css')
<link href="../css/bootstrap.css" rel="stylesheet">
@stop

@section('Delete')

 <br>
 <br>
    <!-- Main page section for deleting a position -->
        <h3>Stock Portfolio Management</h3>

		<h4>Delete {{ $position->symbol }} <small>Are you sure?</small></h4>
				
		<form action="{{ action('PositionsController@handleDelete') }}" method="post" role="form">
			<input type="hidden" name="position" value="{{ $position->id }}" />
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<input type="submit" class="btn btn-danger" value="Yes" />
			<a href="{{ action('PositionsController@index') }}" class="btn btn-default">Cancel</a>
		</form>

@stop

