<?php

use App\Http\Controllers\AuthController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::get('/auth/signin', function () {
//     return view('pages.auth.signin');
// });


Route::get('/home/{name}', function ($name) {
    return view('home ', ['name' =>$name]);
});

//Named Route
Route::get('/people/profile', function () {
    return 'Profil Pengguna Sistem';
})->name('user.profile');

//Route Param
Route::get('/user/{name}', function ($name) {
    return 'user '.$name;
});

Route::get('/about', function () {
    return view('about');
})->name('about');




//alias of a route user.profile =/pengguna/profile

//Redirect route to named route
Route::get('/redirect-to-profile', function () {
    return redirect()->route('user.profile');
});

//Route Group
Route::prefix('food')->group(function () {

    Route::get('/details', function () {
        return 'Food details are following';
    });

    Route::get('/home', function () {
        return 'Food home page';
    });
    
});

//Route Group
Route::name('job')->prefix('job')->group(function () {

    Route::get('home', function () {
        return 'Job home page';
    })->name('.home');

    Route::get('details', function () {
        return 'Job details are following';
    })->name('.description');
    
});

require __DIR__.'/feed/web.php';

Route::middleware('guest')->group(function(){

Route::get('/auth/signup', [AuthController::class, 'signUp'])->name('auth.signup');
Route::get('/auth/signin', [AuthController::class, 'signIn'])->name('auth.signin');

Route::post('/auth/store', [AuthController::class, 'storeUser'])->name('auth.store');
Route::post('/auth/authenticate', [AuthController::class, 'authentication'])->name('auth.authenticate');
});
Route::get('/auth/logout', [AuthController::class, 'signOut'])->name('auth.logout');