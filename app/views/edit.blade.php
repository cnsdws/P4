@extends('_master')



@section('Edit')

<h1 class="media-heading">Project 4 - Stock Tracker</h1>
    <!-- Main page section for the Lorem text generator -->
        <h3>Stock Portfolio Management</h3>
            
            <p>
            <a href="{{ action('PositionsController@create') }}" class="btn btn-primary">Create Position</a>
            <p>
                <form action="{{ action('PositionsController@handleEdit') }}" method="post" role="form">
				<input type="hidden" name="id" value="{{ $position->id }}" />
				
				<div class="form-group">
					<label for="symbol">Symbol</label>
					<input type="text" class="form-control" name="symbol" value="{{ $position->symbol }}" />
				</div>
				<div class="form-group">
					<label for="shares">Shares</label>
					<input type="text" class="form-control" name="shares" value="{{ $position->shares }}" />
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" name="price" value="{{ $position->price }}" />
				</div>
				<input type="submit" value="Save" class="btn btn-primary" />
				<a href="{{ action('PositionsController@index') }}" class="btn btn-link">Cancel</a>
				</form>
			</p>
                        
@stop

