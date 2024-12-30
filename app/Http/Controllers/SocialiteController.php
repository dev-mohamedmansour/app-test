<?php
	  
	  namespace App\Http\Controllers;
	  
	  use Laravel\Socialite\Facades\Socialite;
	  
	  class SocialiteController extends Controller
	  {
			 public function login()
			 {
					return Socialite::driver('github')->redirect();
			 }
			 
			 public function redirect()
			 {
					$user = Socialite::driver('github')->user();
					
					dd($user);
			 }
	 
	 }