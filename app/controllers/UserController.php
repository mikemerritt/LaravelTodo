<?php

class UserController extends BaseController {

  // Before Filters
  public function __construct() {
    $this->beforeFilter('csrf', array('on' => 'post'));
    $this->beforeFilter(function() {
      if (Auth::check()) {
        return Redirect::to('todo');
      }
    }, array('only' => 'index'));
  }

  /**
   * Show the create account form
   *
   * @return Response
   */
  public function create() {
    $user = new User;
    return View::make('user.create')->with('user', $user);
  }

  /**
   * Create the account
   *
   * @return Response
   */
  public function store() {
    $user = new User;

    if ($user->save()) {
      return Redirect::to('todo');
    } else {
      return View::make('user.create')->with('user', $user)->with('messages', $user->errors()->all());
    }
  }

}