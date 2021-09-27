<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController as Home;

use App\Http\Controllers\Backend\HomeController;

use App\Http\Controllers\Backend\CategoryController;

use App\Http\Controllers\Backend\QuestionController;

use App\Http\Controllers\Backend\DetailsController;

use App\Http\Controllers\Backend\CandidatesController;

use App\Http\Controllers\Backend\OrganizationController;

use App\Http\Controllers\Backend\LocationController;

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

Route::group(['prefix'=>'user','middleware'=>'auth'],function (){
    Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

});


Route::get('/job_offer',[UserController::class,'job_offer'])->name('user.job_offer');
Route::get('/apply',[UserController::class,'apply'])->name('user.apply');
Route::post('/apply/store',[UserController::class,'applyStore'])->name('user.apply.store');
Route::get('/login',[UserController::class,'login'])->name('user.login');
Route::post('/login/post',[UserController::class,'doLogin'])->name('user.do.login');

Route::get('/admin/login',[User::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[User::class,'loginPost'])->name('admin.login.post');



    Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'role'], function () {

        Route::get('/', [HomeController::class, 'home'])->name('dashboard');
        Route::get('/logout', [User::class, 'logout'])->name('logout');

        Route::get('/questions/_list', [QuestionController::class, '_list'])->name('question._list');
        Route::get('/questions/add_Ques', [QuestionController::class, 'add_Ques'])->name('question.add_Ques');
        Route::post('/questions/store', [QuestionController::class, 'store'])->name('question.store');
        Route::get('/questions/create', [QuestionController::class, 'create'])->name('question.create');



        Route::get('/details/org_registration', [DetailsController::class, 'org_registration'])->name('details.org_registration');
        Route::get('/details/reg_org', [DetailsController::class, 'reg_org'])->name('details.reg_org');
        Route::get('/details/reg_org/store', [DetailsController::class, 'req_orgPost'])->name('details.req_org.store');
        Route::get('/details/post_job', [DetailsController::class, 'post_job'])->name('details.post_job');
        Route::post('details/post_job/store',[DetailsController::class,'post_jobStore'])->name('details.post_job.store');




        Route::get('/categories', [CategoryController::class, 'list'])->name('category.list');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/{id}/post__jobs', [CategoryController::class, 'allJob'])->name('category.post__job');

    });





