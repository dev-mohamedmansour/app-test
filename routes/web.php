<?php
	  
	  use App\Http\Controllers\SocialiteController;
	  use Illuminate\Support\Facades\Route;
	  
	  Route::view('/', 'welcome');
	  
	  Route::view('dashboard', 'dashboard')
			->middleware(['auth', 'verified'])
			->name('dashboard');
	  
	  Route::view('profile', 'profile')
			->middleware(['auth'])
			->name('profile');
	  
	  require __DIR__ . '/auth.php';
	  
	  Route::prefix('github')->name('socialite.')->controller(
			SocialiteController::class
	  )->group(function () {
			 Route::get('/login', 'login')->name('login');
			 Route::get('/redirect', 'redirect')->name('redirect');
	  });