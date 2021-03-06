<?php
class PositionsController extends BaseController {
	/**
	*Controller used for various actions to create, update and deletd stock positions and to record
	* stock transactions.
	*/
	public function index()
	{
		$user = Auth::id();
		// Show a listing of stocks.
		$positions = Position::where('owner','=', Auth::user()->id)->get();
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
		$user = Auth::id();
		$position = new Position;
		$transaction = new Transaction;
		$position->symbol = Input::get('symbol');
		$position->shares = Input::get('shares');
		$position->price = Input::get('price');
		$position->target = $position->price * 1.1;
		$position->owner = $user;

		$rules = array(
			    'symbol' => 'required|alpha',
    			'shares' => 'required|min:1|numeric',
    			'price' => 'required|min:1|max:9999|numeric'   
			);          

			$validator = Validator::make(Input::all(), $rules);

			if($validator->fails()) {

    		return Redirect::to('/create')
        		->with('flash_message', 'Create Position failed; please fix the errors listed below.')
        		->withInput()
        		->withErrors($validator);
        	}

		$position->save();
		$transaction->symbol = Input::get('symbol');
		$transaction->shares = Input::get('shares');
		$transaction->price = Input::get('price');
		$transaction->type = "BUY";
		$transaction->owner = $user;
		$transaction->save();
		

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
		$user = Auth::id();
		$position = Position::findOrFail(Input::get('id'));

		$transaction = new Transaction;
		$position->symbol = Input::get('symbol');
		$position->shares = Input::get('shares');
		$position->price = Input::get('price');

		$rules = array(
			    'symbol' => 'required|alpha',
    			'shares' => 'required|min:1|numeric',
    			'price' => 'required|min:1|numeric'   
			);          

			$validator = Validator::make(Input::all(), $rules);

			if($validator->fails()) {

    		return Redirect::to('/')
        		->with('flash_message', 'Edit Position failed; please fix the errors listed below.')
        		->withInput()
        		->withErrors($validator);
        	}

		$transaction->symbol = Input::get('symbol');
		$transaction->shares = Input::get('shares');
		$transaction->price = Input::get('price');
		$transaction->type = "UPD";
		$transaction->owner = $user;
		
		$transaction->save();
		$position->save();

		return Redirect::action('PositionsController@index');

	}

	public function delete(Position $position)
	{
		// Show delete confirmation page.
		return View::make('delete', compact('position'));
		
	}

	public function handleDelete()
	{
		// Handle the delete confirmation.
		$user = Auth::id();
		$id = Input::get('position');
		$position = Position::findOrFail($id);
		
		$transaction = new Transaction;
		$transaction->symbol = $position->symbol ;
		$transaction->shares = $position->shares ;
		$transaction->price = $position->price ;
		$transaction->type = "SELL";
		$transaction->owner = $user;
		$transaction->save();
		$position->delete();

		return Redirect::action('PositionsController@index');

	}

	public function handleTransaction()
	{
		// Handle the recording of a transaction.
	}

}
