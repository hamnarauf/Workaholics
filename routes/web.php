<?php

use App\Http\Controllers\GigsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\MilestonesController;
use App\Http\Controllers\PaymentOptionsController;
use App\Http\Controllers\ProposalsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\MessagesController;

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


Route::get('/find', function () {
    return view('find/index');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/categories', function () {
    return view('categories/index');
});
Route::get('/jobDetail', function () {
    return view('jobDetail/index');
});



// Gigs Routes
Route::get('/gigs', [GigsController::class, 'index']);
Route::get('/gigs/create', [GigsController::class, 'create']);
Route::post('/gigs', [GigsController::class, 'store']);
Route::get('/gigs/{gig}', [GigsController::class, 'show']);
Route::get('/gigs/{gig}/edit', [GigsController::class, 'edit']);
Route::put('/gigs/{gig}', [GigsController::class, 'update']);
Route::delete('/gigs/{gig}', [GigsController::class, 'destroy']);

// Products Routes
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/create', [ProductsController::class, 'create']);
Route::post('/products', [ProductsController::class, 'store']);
Route::get('/products/{product}', [ProductsController::class, 'show']);
Route::get('/products/{product}/edit', [ProductsController::class, 'edit']);
Route::put('/products/{product}', [ProductsController::class, 'update']);
Route::delete('/products/{product}', [ProductsController::class, 'destroy']);

// Feedbacks Routes
Route::get('/feedbacks', [FeedbacksController::class, 'index']);
Route::get('/feedbacks/create', [FeedbacksController::class, 'create']);
Route::post('/feedbacks', [FeedbacksController::class, 'store']);
Route::get('/feedbacks/{feedback}', [FeedbacksController::class, 'show']);
Route::get('/feedbacks/{feedback}/edit', [FeedbacksController::class, 'edit']);
Route::put('/feedbacks/{feedback}', [FeedbacksController::class, 'update']);
Route::delete('/feedbacks/{feedback}', [FeedbacksController::class, 'destroy']);

// JobsController Routes
Route::get('/jobs', [JobsController::class, 'index']);
Route::get('/jobs/create', [JobsController::class, 'create']);
Route::post('/jobs', [JobsController::class, 'store']);
Route::get('/jobs/{job}', [JobsController::class, 'show']);
Route::get('/jobs/{job}/edit', [JobsController::class, 'edit']);
Route::put('/jobs/{job}', [JobsController::class, 'update']);
Route::delete('/jobs/{job}', [JobsController::class, 'destroy']);

// MilestonesController Routes
Route::get('/milestones', [MilestonesController::class, 'index']);
Route::get('/milestones/create', [MilestonesController::class, 'create']);
Route::post('/milestones', [MilestonesController::class, 'store']);
Route::get('/milestones/{milestone}', [MilestonesController::class, 'show']);
Route::get('/milestones/{milestone}/edit', [MilestonesController::class, 'edit']);
Route::put('/milestones/{milestone}', [MilestonesController::class, 'update']);
Route::delete('/milestones/{milestone}', [MilestonesController::class, 'destroy']);

// PaymentOptionsController Routes
Route::get('/paymentoptions', [PaymentOptionsController::class, 'index']);
Route::get('/paymentoptions/create', [PaymentOptionsController::class, 'create']);
Route::post('/paymentoptions', [PaymentOptionsController::class, 'store']);
Route::get('/paymentoptions/{paymentoption}', [PaymentOptionsController::class, 'show']);
Route::get('/paymentoptions/{paymentoption}/edit', [PaymentOptionsController::class, 'edit']);
Route::put('/paymentoptions/{paymentoption}', [PaymentOptionsController::class, 'update']);
Route::delete('/paymentoptions/{paymentoption}', [PaymentOptionsController::class, 'destroy']);

// ProposalsController Routes
Route::get('/proposals', [ProposalsController::class, 'index']);
Route::get('/proposals/create', [ProposalsController::class, 'create']);
Route::post('/proposals', [ProposalsController::class, 'store']);
Route::get('/proposals/{proposal}', [ProposalsController::class, 'show']);
Route::get('/proposals/{proposal}/edit', [ProposalsController::class, 'edit']);
Route::put('/proposals/{proposal}', [ProposalsController::class, 'update']);
Route::delete('/proposals/{proposal}', [ProposalsController::class, 'destroy']);

// TransactionsController Routes   
Route::get('/transactions', [TransactionsController::class, 'index']);
Route::get('/transactions/create', [TransactionsController::class, 'create']);
Route::post('/transactions', [TransactionsController::class, 'store']);
Route::get('/transactions/{transaction}', [TransactionsController::class, 'show']);
Route::get('/transactions/{transaction}/edit', [TransactionsController::class, 'edit']);
Route::put('/transactions/{transaction}', [TransactionsController::class, 'update']);
Route::delete('/transactions/{transaction}', [TransactionsController::class, 'destroy']);

// UsersController Routes
Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/{user}', [UsersController::class, 'show']);
Route::get('/users/{user}/edit', [UsersController::class, 'edit']);
Route::put('/users/{user}', [UsersController::class, 'update']);
Route::delete('/users/{user}', [UsersController::class, 'destroy']);


// MessageController Routes
Route::get('/messages', [MessagesController::class, 'index']);
Route::get('/messages/create', [MessagesController::class, 'create']);
Route::post('/messages', [MessagesController::class, 'store']);
Route::get('/messages/{message}', [MessagesController::class, 'show']);
Route::get('/messages/{message}/edit', [MessagesController::class, 'edit']);
Route::put('/messages/{message}', [MessagesController::class, 'update']);
Route::delete('/messages/{message}', [MessagesController::class, 'destriy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
