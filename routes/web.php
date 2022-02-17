<?php

use Inertia\Inertia;
use App\Models\Space;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\CollectionController;

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
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);
    return inertia('Frontend/Home', [
        'spaces' => Space::all(),
    ]);
});

Route::get('spaces/{space}', [SpaceController::class, 'show'])->name('spaces.details');
Route::get('collections/{collection:slug}/links', [CollectionController::class, 'collectionWiseLinks'])->name('collections.links');




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::resource('collections', CollectionController::class);

    Route::resource('links', LinkController::class);
});

require __DIR__ . '/auth.php';
