<?php
class PositionsController extends BaseController {
	/**
	*Controller used for various actions to create, update and deletd stock positions and to record
	* stock transactions.
	*/
	public function index()
	{
		
		// Show a listing of games.
		$positions = Position::all();
		return View::make('index', compact('positions'));
		// Show a listing of stock positions.
		//return View::make('index');
	}

	public function create()
	{
		// Show the create stock position form.
		return View::make('create');
	}

	public function handleCreate()
	{
		// Handle create position form submission.
		$position = new Position;
		$position->symbol = Input::get('symbol');
		$position->shares = Input::get('shares');
		$position->price = Input::get('price');
		$position->save();

		return Redirect::action('PositionsController@index');
	}

	public function edit(Position $position)
	{
		// Show the edit position form.
		return View::make('edit', compact('position'));
	}

	public function handleEdit()
	{
		// Handle edit form submission.
		$position = Position::findOrFail(Input::get('id'));

		$position->symbol = Input::get('symbol');
		$position->shares = Input::get('shares');
		$position->price = Input::get('price');
		$position->save();

		return Redirect::action('PositionsController@index');

	}

	public function delete()
	{
		// Show delete confirmation page.
		
	}

	public function handleDelete()
	{
		// Handle the delete confirmation.
		
	}

	public function handleTransaction()
	{
		// Handle the recording of a transaction.
	}

}
