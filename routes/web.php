<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController as Home;

use App\Http\Controllers\Backend\HomeController;

use App\Http\Controllers\Backend\QuestionController;

use App\Http\Controllers\Backend\DetailsController;

use App\Http\Controllers\Backend\CandidatesController;

use App\Http\Controllers\Backend\OrganizationController;

use App\Http\Controllers\Backend\UserController as User;

use App\Http\Controllers\Frontend\UserController;

use App\Http\Controllers\Frontend\ReqOrgController;



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
Route::get('/',[Home::class,'home'])->name('home');

Route::get('/signup',[UserController::class,'signupForm'])->name('user.signup');

Route::post('/signup/store',[UserController::class,'signupFormPost'])->name('user.signup.store');

Route::get('/reg_org',[ReqOrgController::class,'req_org'])->name('reqorg.req_org');

Route::post('/reg_org/store',[ReqOrgController::class,'req_orgPost'])->name('reqorg.req_org.store');

Route::get('/admin/login',[User::class,'login'])->name('admin.login');


Route::group(['prefix'=>'admin'],function () {

    Route::get('/',[HomeController::class,'home']);

    Route::get('/questions/_list', [QuestionController::class, '_list'])->name('question._list');

    Route::get('/question/personality_list', [QuestionController::class, 'personality_list'])->name('question.personality_list');

    Route::get('/details', [DetailsController::class, 'job'])->name('details.job');

    Route::get('/details/organization', [DetailsController::class, 'organization'])->name('details.organization');

    Route::get('/details/requirement', [DetailsController::class, 'requirement'])->name('details.requirement');

    Route::get('/candidates', [CandidatesController::class, 'personal'])->name('candidates.personal');

    Route::get('/candidates/passed', [CandidatesController::class, 'passed'])->name('candidates.passed');

    Route::get('/candidates/failed', [CandidatesController::class, 'failed'])->name('candidates.failed');

    Route::get('/candidates/selected', [CandidatesController::class, 'selected'])->name('candidates.selected');

    Route::get('/candidates/resume', [CandidatesController::class, 'resume'])->name('candidates.resume');

    Route::get('/organization/view',[OrganizationController::class,'view'])->name('organization.view');

    Route::get('/organization/add_Ques',[OrganizationController::class,'add_Ques'])->name('organization.add_Ques');

    Route::post('/organization/store',[OrganizationController::class,'store'])->name('organization.store');

    Route::get('/organization/addpersonality',[OrganizationController::class,'addpersonality'])->name('organization.addpersonality');

    Route::get('/organization/addDetails',[OrganizationController::class,'addDetails'])->name('organization.addDetails');





});





