@extends('layout')
@section('content')
  <h1>{{ Auth::user()->name }}'s Todo Lists</h1>
  {{ link_to_route('todo.create', 'Create New List', null, array('class' => 'button')) }}
  <ul class="manage-lists">
    @foreach ($todos as $todo)
      <li>{{ link_to_route('todo.show', $todo->title, array('todo' => $todo->id)) }} 
      {{ link_to_route('todo.destroy', 'Delete List', array('todo' => $todo->id), array('class' => 'right remove', 
      'data-method' => 'delete', 'data-confirm' => 'Are you sure?')) }}</li>
    @endforeach
  </ul>
@stop