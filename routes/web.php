<?php

use App\Http\Controllers\GigsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\MilestonesController;
use App\Http\Controllers\PaymentOptionsController;
use App\Http\Controllers\ProposalsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\FindController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/find', [FindController::class, 'index']);

Route::get('/test', function () {
    return view('test');
});
Route::get('/profile', function () {
    return view('profile/index');
});

Route::get('/create', function () {
    return view('createGigJob/index');
});

Route::get('/createProposal', function () {
    return view('createProposal/index');
});

Route::get('/wallet', function () {
    return view('addToWallet/index');
});

Route::get('/createMilestone', function () {
    return view('createMilestone/index');
});

Route::get('/1milestoneSubmission', function () {
    return view('1milestoneSubmission/index');
});

Route::get('/bank', function () {
    return view('addToBank/index');
});
// Gigs Routes
Route::get('/gigs', [GigsController::class, 'index']);
Route::get('/gigs/create', [GigsController::class, 'create']);
Route::post('/gigs', [GigsController::class, 'store']);
Route::get('/gigs/{id}', [GigsController::class, 'show']);
Route::get('/gigs/{id}/edit', [GigsController::class, 'edit']);
Route::put('/gigs/{id}', [GigsController::class, 'update']);
Route::delete('/gigs/{id}', [GigsController::class, 'destroy']);

// Projects Routes
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/create', [ProjectsController::class, 'create']);
Route::post('/projects', [ProjectsController::class, 'store']);
Route::get('/projects/{id}', [ProjectsController::class, 'show']);
Route::get('/projects/{id}/edit', [ProjectsController::class, 'edit']);
Route::put('/projects/{id}', [ProjectsController::class, 'update']);
Route::delete('/projects/{id}', [ProjectsController::class, 'destroy']);


// Feedbacks Routes
Route::get('/feedbacks', [FeedbacksController::class, 'index']);
Route::get('/feedbacks/create', [FeedbacksController::class, 'create']);
Route::post('/feedbacks', [FeedbacksController::class, 'store']);
Route::get('/feedbacks/{id}', [FeedbacksController::class, 'show']);
Route::get('/feedbacks/{id}/edit', [FeedbacksController::class, 'edit']);
Route::put('/feedbacks/{id}', [FeedbacksController::class, 'update']);
Route::delete('/feedbacks/{id}', [FeedbacksController::class, 'destroy']);

// JobsController Routes
Route::get('/jobs', [JobsController::class, 'index']);
Route::get('/jobs/create', [JobsController::class, 'create']);
Route::post('/jobs', [JobsController::class, 'store']);
Route::get('/jobs/{id}', [JobsController::class, 'show']);
Route::get('/jobs/{id}/edit', [JobsController::class, 'edit']);
Route::put('/jobs/{id}', [JobsController::class, 'update']);
Route::delete('/jobs/{id}', [JobsController::class, 'destroy']);

// MilestonesController Routes
Route::get('/milestones', [MilestonesController::class, 'index']);
Route::get('/milestones/create', [MilestonesController::class, 'create']);
Route::post('/milestones', [MilestonesController::class, 'store']);
Route::get('/milestones/{id}', [MilestonesController::class, 'show']);
Route::get('/milestones/{id}/edit', [MilestonesController::class, 'edit']);
Route::put('/milestones/{id}', [MilestonesController::class, 'update']);
Route::delete('/milestones/{id}', [MilestonesController::class, 'destroy']);

// PaymentOptionsController Routes
Route::get('/paymentoptions', [PaymentOptionsController::class, 'index']);
Route::get('/paymentoptions/create', [PaymentOptionsController::class, 'create']);
Route::post('/paymentoptions', [PaymentOptionsController::class, 'store']);
Route::get('/paymentoptions/{id}', [PaymentOptionsController::class, 'show']);
Route::get('/paymentoptions/{id}/edit', [PaymentOptionsController::class, 'edit']);
Route::put('/paymentoptions/{id}', [PaymentOptionsController::class, 'update']);
Route::delete('/paymentoptions/{id}', [PaymentOptionsController::class, 'destroy']);

// ProposalsController Routes
Route::get('/proposals', [ProposalsController::class, 'index']);
Route::post('/proposals/create', [ProposalsController::class, 'create']);
Route::post('/proposals', [ProposalsController::class, 'store']);
Route::get('/proposals/{id}', [ProposalsController::class, 'show']);
Route::get('/proposals/{id}/edit', [ProposalsController::class, 'edit']);
Route::put('/proposals/{id}', [ProposalsController::class, 'update']);
Route::delete('/proposals/{id}', [ProposalsController::class, 'destroy']);

// TransactionsController Routes   
Route::get('/transactions', [TransactionsController::class, 'index']);
Route::get('/transactions/create', [TransactionsController::class, 'create']);
Route::post('/transactions', [TransactionsController::class, 'store']);
Route::get('/transactions/{id}', [TransactionsController::class, 'show']);
Route::get('/transactions/{id}/edit', [TransactionsController::class, 'edit']);
Route::put('/transactions/{id}', [TransactionsController::class, 'update']);
Route::delete('/transactions/{id}', [TransactionsController::class, 'destroy']);

// UsersController Routes
Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/{id}', [UsersController::class, 'show']);
Route::get('/users/{id}/edit', [UsersController::class, 'edit']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);

// CategoriesController Routes
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/create', [CategoriesController::class, 'create']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::get('/categories/{id}', [CategoriesController::class, 'show']);
Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('/categories/{id}', [CategoriesController::class, 'update']);
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);



// MesaagesController Routes
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index'])->name('messages');
    // Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::get('create', [MessagesController::class, 'create'])->name('messages.create');
    Route::post('/', [MessagesController::class, 'store'])->name('messages.store');
    Route::get('{id}', [MessagesController::class, 'show'])->name('messages.show');
    Route::put('{id}', [MessagesController::class, 'update'])->name('messages.update');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
