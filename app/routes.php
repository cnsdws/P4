<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route parameters.
Route::model('position', 'Position');

// Show pages.
Route::get('/', 'PositionsController@index');
Route::get('/create', 'PositionsController@create');
Route::get('/edit/{position}', 'PositionsController@edit');
Route::get('/delete/{position}', 'PositionsController@delete');

// Handle form submissions.
Route::post('/create', 'PositionsController@handleCreate');
Route::post('/edit', 'PositionsController@handleEdit');
Route::post('/delete', 'PositionsController@handleDelete');


Route::get('/debug', function() {
		echo '<pre>';
		echo '<h1>environment.php</h1>';
		$path   = base_path().'/environment.php';
		try {
			$contents = 'Contents: '.File::getRequire($path);
			$exists = 'Yes';
		}
		catch (Exception $e) {
			$exists = 'No. Defaulting to `production`';
			$contents = '';
		}
		echo "Checking for: ".$path.'<br>';
		echo 'Exists: '.$exists.'<br>';
		echo $contents;
		echo '<br>';
		echo '<h1>Environment</h1>';
		echo App::environment().'</h1>';
		echo '<h1>Debugging?</h1>';
		if(Config::get('app.debug')) echo "Yes"; else echo "No";
		echo '<h1>Database Config</h1>';
		print_r(Config::get('database.connections.mysql'));
		echo '<h1>Test Database Connection</h1>';
		try {
			$results = DB::select('SHOW DATABASES;');
			echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
			echo "<br><br>Your Databases:<br><br>";
			print_r($results);
		}
		catch (Exception $e) {
			echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
		}
		echo '</pre>';

});

/*Route::get('/', function()
{
        //return View::make('main');

		$position = new Position;
		$position->symbol = 'IBM';
		$position->shares = '100';
		$position->owner = 'cnsdws';
		$position->save();

}); */

Route::get('/find', function()
{
        //return View::make('main');

		return Position::whereSymbol('IBM')
		->get(array('symbol', 'shares'));

});

Route::get('/add', function()
{
        return View::make('add');

});


