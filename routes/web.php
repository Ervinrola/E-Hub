<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentController;


// ------------------------------For single Routing--------------------------------------------
// Route::get('/', function () {
//     return view('home');
// });

//------------------------------Prefix Option 1--------------------------------------------
// Route::group([
//     'prefix' => 'dashboard'
// ], function() {
//     Route::get('/community', 'DashboardController@getcommunity');
//     Route::get('/help', 'DashboardController@gethelp');
// });

//------------------------------Prefix Option 2--------------------------------------------
// Route::prefix('master')->group(function () {
//     Route::get('/', [DashboardController::class, 'home']);
//     Route::get('/community', [DashboardController::class, 'community'])->name('layout.community');
//     Route::get('/help', [DashboardController::class, 'help'])->name('help');
// });

// Route::group(['prefix' => 'accounts/{account_id}'], function () {
//     Route::get('detail', function ($account_id)    {
//         // Matches The accounts/{account_id}/detail URL
//     });
// });

// Route::prefix('dashboard')->group(function () {
//     Route::get('/', [DashboardController::class, 'home'])->name('dashboard.home');
//     Route::get('/community', [DashboardController::class, 'community'])->name('dashboard.community');;
//     Route::get('/help', [DashboardController::class, 'help'])->name('dashboard.help');
// });

//------------------------------For single Routing Controller--------------------------------------------
// Route::get('/community', [DashboardController::class, 'community']);

//------------------------------Controller Function--------------------------------------------
Route::controller(DashboardController::class)->group(function() {
    Route::get('/home', [DashboardController::class, 'home']);
    Route::get('/community', [DashboardController::class, 'community']);
    Route::get('/help', [DashboardController::class, 'help']);
    Route::get('/button', [DashboardController::class, 'button']);
    Route::get('/about', [DashboardController::class, 'about']);
    Route::get('/page2', [DashboardController::class, 'page']);
    Route::get('/search', [DashboardController::class, 'search']);
    Route::get('/results1', [DashboardController::class, 'results1']);
    Route::get('/results2', [DashboardController::class, 'results2']);
    Route::get('/test', [DashboardController::class, 'test']);
    Route::get('/article', [DashboardController::class, 'article']);
    // Route::get('/contactPage', [DashboardController::class, 'contactPage']);
});

// Route::get('/search', [PostController::class, 'search']) ->name('search.search');

Route::get('/contact', function () {
    return view('contactPage');
});
Route::post('/contact', function () {
    $data = request(['name', 'email', 'subject', 'message']);

    \Illuminate\Support\Facades\Mail::to('janorascharles@gmail.com')
        ->send(new \App\Mail\ContactMe($data));

    return redirect('/contact')
        ->with('flash', 'Message Send Successfully');
});


Route::get('/AddContent', [ContentController::class, 'AddContent'] );
Route::post('dataInsert', [ContentController::class, 'DataInsert']);

