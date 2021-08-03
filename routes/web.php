<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Backend\DetailsController;
use App\Http\Controllers\Backend\CandidatesController;


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


Route::get('/',[HomeController::class,'home']);
Route::get('/user',[UserController::class, 'user']);
Route::get('/questions',[QuestionController::class,'apitude'])->name('question.apitude');
Route::get('/question/personality',[QuestionController::class,'personality'])->name('question.personality');
Route::get('/details',[DetailsController::class,'job'])->name('details.job');
Route::get('/details/organization',[DetailsController::class,'organization'])->name('details.organization');
Route::get('/details/requirement',[DetailsController::class,'requirement'])->name('details.requirement');
Route::get('/candidates',[CandidatesController::class,'personal'])->name('candidates.personal');
Route::get('/candidates/passed',[CandidatesController::class,'passed'])->name('candidates.passed');
Route::get('/candidates/failed',[CandidatesController::class,'failed'])->name('candidates.failed');
Route::get('/candidates/selected',[CandidatesController::class,'selected'])->name('candidates.selected');
Route::get('/candidates/resume',[CandidatesController::class,'resume'])->name('candidates.resume');


