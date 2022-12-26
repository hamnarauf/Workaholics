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
use App\Http\Controllers\GigproposalsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\WTransactionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;

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


Route::get('/profile', function () {
    return view('profile/index');
});





Route::get('/1milestoneSubmission', function () {
    return view('1milestoneSubmission/index');
});

Route::get('/bank', function () {
    return view('addToBank/index');
});

Route::get('/review', function () {
    return view('1review/index');
});

Route::get('/editProfile', function () {
    return view('1editProfile/index');
});


// Route::get('/payment', function () {
//     return view('payments/index');
// });

Route::get('/viewSub', function () {
    return view('viewSubmission');
});

Route::get('/test', function () {
    return view('admin.index');
});

Route::get('/education', function () {
    return view('1education.index');
});

Route::get('/employment', function () {
    return view('1employment.index');
});
Route::get('/formchecking', function () {
    return view('1categories.index');
});





Route::get('/', [WelcomeController::class, 'index']);

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

// ProposalsController Routes
Route::get('/proposals/{id}', [ProposalsController::class, 'index']);
Route::post('/proposals/create', [ProposalsController::class, 'create']);
Route::post('/proposals', [ProposalsController::class, 'store']);
Route::get('/proposals/{proposal_id}/details', [ProposalsController::class, 'show']);
Route::get('/proposals/{id}/edit', [ProposalsController::class, 'edit']);
Route::put('/proposals', [ProposalsController::class, 'update']);
Route::delete('/proposals/{id}', [ProposalsController::class, 'destroy']);
Route::get('/download/{file}', [ProposalsController::class, 'download']);

// GigProposalsController Routes
Route::get('/gigproposals/{id}', [GigproposalsController::class, 'index']);
Route::post('/gigproposals/create', [GigproposalsController::class, 'create']);
Route::post('/gigproposals', [GigproposalsController::class, 'store']);
Route::get('/gigproposals/{proposal_id}/details', [GigproposalsController::class, 'show']);
Route::get('/gigproposals/{id}/edit', [GigproposalsController::class, 'edit']);
Route::put('/gigproposals', [GigproposalsController::class, 'update']);
Route::get('/download/{file}', [GigproposalsController::class, 'download']);

//findsController Routes

Route::get('/finds', [FindController::class, 'index']);
Route::get('/finds/my', [FindController::class, 'myshow']);
Route::post('/finds', [FindController::class, 'show']);

// JobsController Routes
Route::get('/jobs', [JobsController::class, 'index']);
Route::get('/jobs/create', [JobsController::class, 'create']);
Route::post('/jobs', [JobsController::class, 'store']);
Route::get('/jobs/{id}', [JobsController::class, 'show']);
Route::get('/jobs/{id}/edit', [JobsController::class, 'edit']);
Route::put('/jobs/{id}', [JobsController::class, 'update']);
Route::delete('/jobs/{id}', [JobsController::class, 'destroy']);
Route::get('/jobs/{id}/submissions', [JobsController::class, 'submissions']);

// MilestonesController Routes
Route::get('/milestones/{id}', [MilestonesController::class, 'index']);
Route::get('/milestones/create/{id}', [MilestonesController::class, 'create']);
Route::post('/milestones', [MilestonesController::class, 'store']);
Route::get('/milestones/{id}/details', [MilestonesController::class, 'show']);
Route::get('/milestones/{id}/edit', [MilestonesController::class, 'edit']);
Route::put('/milestones', [MilestonesController::class, 'update']);
Route::put('/milestones/submit', [MilestonesController::class, 'submit']);
Route::delete('/milestones/{id}', [MilestonesController::class, 'destroy']);


// CategoriesController Routes
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/create', [CategoriesController::class, 'create']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::get('/categories/{id}', [CategoriesController::class, 'show']);
Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('/categories/{id}', [CategoriesController::class, 'update']);
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);


// Feedbacks Routes
Route::get('/feedbacks', [FeedbacksController::class, 'index']);
Route::get('/feedbacks/create', [FeedbacksController::class, 'create']);
Route::post('/feedbacks', [FeedbacksController::class, 'store']);
Route::get('/feedbacks/{id}', [FeedbacksController::class, 'show']);
Route::get('/feedbacks/{id}/edit', [FeedbacksController::class, 'edit']);
Route::put('/feedbacks/{id}', [FeedbacksController::class, 'update']);
Route::delete('/feedbacks/{id}', [FeedbacksController::class, 'destroy']);

// Route::get('/wallet', function () {
//     return view('addToWallet/index');
// });

// WTransactionsController Routes
Route::get('/wallet', [WTransactionsController::class, 'index']);
Route::get('/wtransactions/create', [WTransactionsController::class, 'create']);
Route::post('/wtransactions', [WTransactionsController::class, 'store']);
Route::get('/wtransactions/{id}', [WTransactionsController::class, 'show']);
Route::get('/wtransactions/{id}/edit', [WTransactionsController::class, 'edit']);
Route::put('/wtransactions/{id}', [WTransactionsController::class, 'update']);
Route::delete('/wtransactions/{id}', [WTransactionsController::class, 'destroy']);

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
Route::get('/users/education', [UsersController::class, 'education']);
Route::get('/users/employment', [UsersController::class, 'employment']);
Route::get('/users/{id}', [UsersController::class, 'show']);
Route::get('/users/{id}/edit', [UsersController::class, 'edit']);
Route::post('/users/{id}/edit', [UsersController::class, 'update_education']);
Route::post('/users/edit', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);


// AdminController Routes
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/transactions', [AdminController::class, 'transactions']);
Route::get('/admin/projects', [AdminController::class, 'projects']);
Route::get('/admin/projects/delete/{id}', [AdminController::class, 'delete_project']);
Route::get('/admin/gigs', [AdminController::class, 'gigs']);
Route::get('/admin/gigs/delete/{id}', [AdminController::class, 'delete_gig']);
Route::get('/admin/jobs', [AdminController::class, 'jobs']);
Route::get('/admin/jobs/delete/{id}', [AdminController::class, 'delete_job']);
Route::get('/admin/categories', [AdminController::class, 'categories']);
Route::post('/admin/categories', [AdminController::class, 'store']);
Route::get('/admin/categories/delete/{id}', [AdminController::class, 'delete_category']);
Route::get('/admin/categories/create', [AdminController::class, 'create']);
Route::get('/admin/profiles', [AdminController::class, 'profiles']);
Route::get('/admin/categories/delete/{id}', [AdminController::class, 'delete_profile']);

// MesaagesController Routes
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index'])->name('messages');
    Route::get('create', [MessagesController::class, 'create'])->name('messages.create');
    Route::post('/', [MessagesController::class, 'store'])->name('messages.store');
    Route::get('{id}', [MessagesController::class, 'show'])->name('messages.show');
    Route::put('{id}', [MessagesController::class, 'update'])->name('messages.update');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');