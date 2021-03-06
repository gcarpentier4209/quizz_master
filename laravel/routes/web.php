<?php
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/options', 'ViewController@showOptions')->name('options');




Route::get('/newgame', 'ViewController@showNewGame')->name('newgame');


//QUESTIONS

Route::get('/questions', 'QuestionController@showAll')->name('questions');

Route::get('/questions/new', 'QuestionController@showCreate')->name('create.question');
Route::post('/questions/new', 'QuestionController@create')->name('create.question.post');
Route::get('/questions/edit/{question}', 'QuestionController@showUpddate')->name('update.question');


Route::get('/oneplayer', 'ViewController@showOnePlayer')->name('oneplayer');


Route::get('/game', 'ViewController@showGame')->name('game');


Route::get('/result', 'ViewController@showResult')->name('result');



