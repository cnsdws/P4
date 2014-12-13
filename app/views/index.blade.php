@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop

@section('Index')

<h1 class="media-heading">Project 4 - Stock Tracker</h1>
    <!-- Main page section for the Lorem text generator -->
        <h3>Stock Portfolio Management</h3>
            
            <p>
            <a href="{{ action('PositionsController@create') }}" class="btn btn-primary">Create Position</a>
            <p>
             

             @if ($positions->isEmpty())
				<p>There are no stock positions! </p>

			@else
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Symbol</th>
							<th>Shares</th>
							<th>Price</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach($positions as $position)
						<tr>
							<td>{{ $position->symbol }}</td>
							<td>{{ $position->shares }}</td>
							<td>{{ $position->price }}</td>
							<td>{{ $position->id }}</td>
							<td><a href="{{ action('PositionsController@edit', $position->id) }}" class="btn btn-default">Edit</a>
								<a href="{{ action('PositionsController@delete', $position->id) }}"  class="btn btn-danger">Delete</a> </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@endif
            </p>
        
            </p>
                        
@stop
