@extends('layout')
@section('content')
  <h1>{{ Auth::user()->name }}'s Todo Lists</h1>
  {{ link_to_route('todo.create', 'Create New List', null, array('class' => 'button')) }}
  <ul>
    @foreach ($todos as $todo)
      <li>{{ $todo->title }}</li>
    @endforeach
  </ul>
@stop