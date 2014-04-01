<?php

class ItemController extends BaseController {

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
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store() {
    $user = User::find(Auth::user()->id);
    $todo = $user->todos()->where('id', '=', Input::get('todo_id'))->first();

    $item = new Item;
    $item->description = Input::get('description');
    
    if ($item = $todo->items()->save($item) ) {
      return Response::json(array('id' => $item->id, 'description' => $item->description));
      // if (Request::isJson()) {
      //   return Response::json(array('item' => $item));
      // } else {
      //   return Redirect::route('todo.show', array('todo' => $todo->id));
      // }
    } else {
      return Response::json(array('item' => $item));
      // if (Request::isJson()) {
      //   return Response::json(array('error' => 'Could not create item.'));
      // } else {
      //   return Redirect::route('todo.show', array('todo' => $todo->id));
      // }
    }
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
    $item = Item::find($id);
    $todo = Todo::find($item->todo_id);
    if ($todo->user_id == Auth::user()->id) {
      $item->delete();
    }
  }

}