<?php

class TodoController extends BaseController {

  // Before Filters
  public function __construct() {
    $this->beforeFilter('csrf', array('on' => 'post'));
    $this->beforeFilter(function() {
      if (!Auth::check()) {
        return Redirect::to('/');
      }
    });
  }

  /**
   * Display todos for current user.
   *
   * @return Response
   */
  public function index() {
    $todos = Todo::where('user_id', '=', Auth::user()->id)->get();
    return View::make('todo.index')->with('todos', $todos);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    $todo = new Todo;
    return View::make('todo.create')->with('todo', $todo);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store() {
    $todo = new Todo();
    $todo->title = Input::get('title');
    $user = User::find(Auth::user()->id);

    if ($todo = $user->todos()->save($todo) ) {
      return Redirect::to('todo');
    } else {
      return View::make('todo.create')->with('todo', $todo)->with('messages', $todo->errors()->all());
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id) {
    //
  }

  /**
   * Delete a list
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id) {
    $todo = Todo::find($id);
    if ($todo->user_id == Auth::user()->id) {
      $todo->delete();
    }
  }

}