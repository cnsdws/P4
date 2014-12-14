@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop

@section('Transactions')

<h1 class="media-heading">Project 4 - Stock Tracker</h1>
    <!-- Main page section for the Lorem text generator -->
        <h3>Stock Portfolio Management</h3>
            
            @if ($transactions->isEmpty())
				<p>There are no stock transactions! </p>

			@else
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Symbol</th>
							<th>Shares</th>
							<th>Price</th>
							<th>Type</th>
							<th>Date Created</th>
							<th>Last Updated</th>
						</tr>
					</thead>

					<tbody>
						@foreach($transactions as $transaction)
						<tr>
							<td>{{ $transaction->symbol }}</td>
							<td>{{ $transaction->shares }}</td>
							<td>{{ $transaction->price }}</td>
							<td>{{ $transaction->type }}</td>
							<td>{{ $transaction->created_at }}</td>
							<td>{{ $transaction->updated_at }}</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
			@endif
                        
@stop

