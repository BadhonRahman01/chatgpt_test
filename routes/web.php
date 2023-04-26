<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ArticleGeneratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/write', function () {
    $title = '';
    $client = OpenAI::client(config('app.openai_api_key'));
    return view('writer', compact('title', 'client'));
});

Route::post('/write/generate', [ArticleGeneratorController::class, 'index']);