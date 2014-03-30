<?php

class DashboardController extends BaseController {

  // Before Filters
  public function __construct() {
    $this->beforeFilter('csrf', array('on' => 'post'));
    $this->beforeFilter(function() {
      if (Auth::check()) {
        return Redirect::to('todo');
      }
    }, array('only' => 'index'));
  }

  // Homepage (GET /)
  public function index() {
    return View::make('dashboard.index');
  }

  // Login (GET /login)
  public function login() {
    return View::make('dashboard.login');
  }

  // Process Login (POST /login)
  public function processLogin() {
    if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
      return Redirect::intended('todo');
    } else {
      return View::make('dashboard.login');
    }
  }

  // Logout (GET /logout)
  public function logout() {
    Auth::logout();
    return Redirect::to('/');
  }

}